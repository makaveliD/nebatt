<?php
/**
 * Wishlist UI.
 */

namespace XTS\WC_Wishlist;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

use XTS\Singleton;
use XTS\WC_Wishlist\Wishlist;

/**
 * Wishlist UI.
 *
 * @since 1.0.0
 */
class Ui extends Singleton {

	/**
	 * Wishlist object.
	 *
	 * @var null
	 */
	private $wishlist = null;

	/**
	 * Can user edit this wishlist or just view it.
	 *
	 * @var boolean
	 */
	private $editable = true;

	/**
	 * Initialize action.
	 *
	 * @since 1.0.0
	 *
	 * @return boolean
	 */
	public function init() {

		if ( ! basel_woocommerce_installed() ) {
			return false;
		}
		
		add_action( 'wp', array( $this, 'hooks' ), 100 );
		add_action( 'init', array( $this, 'button_hooks' ), 100 );
	}

	/**
	 * Register hooks and actions.
	 *
	 * @since 1.0.0
	 *
	 * @return boolean
	 */
	public function hooks() {
		if ( ! basel_get_opt( 'wishlist' ) ) {
			return false;
		}

		add_filter( 'woocommerce_account_menu_items', array( $this, 'account_navigation' ), 15 );
		add_filter( 'woocommerce_get_endpoint_url', array( $this, 'account_navigation_url' ), 15, 4 );
		add_filter( 'woocommerce_account_menu_item_classes', array( $this, 'account_navigation_classes' ), 15, 2 );

		add_shortcode( 'basel_wishlist', array( $this, 'wishlist_page' ) );

		$wishlist_id = get_query_var( 'wishlist_id' );

		// Display public wishlist or personal.
		if ( $wishlist_id && (int) $wishlist_id > 0 ) {
			$this->editable = false;
			$this->wishlist = new Wishlist( $wishlist_id, false, true );
		} else {
			$this->wishlist = new Wishlist();
		}
	}
	
	/**
	 * Add buttons.
	 *
	 * @since 1.0.0
	 */
	public function button_hooks() {
		if ( ! basel_get_opt( 'wishlist' ) ) {
			return false;
		}
		
		if ( ( basel_get_opt( 'wishlist_logged' ) && is_user_logged_in() ) || ! basel_get_opt( 'wishlist_logged' ) ) {
			add_action( 'woocommerce_single_product_summary', array( $this, 'add_to_wishlist_single_btn' ), 32 );
			add_action( 'basel_sticky_atc_actions', array( $this, 'add_to_wishlist_sticky_atc_btn' ), 10 );
		}
		
		if ( basel_get_opt( 'product_loop_wishlist' ) && ( ( basel_get_opt( 'wishlist_logged' ) && is_user_logged_in() ) || ! basel_get_opt( 'wishlist_logged' ) ) ) {
			add_action( 'basel_product_action_buttons', array( $this, 'add_to_wishlist_loop_btn' ), 30 );
		}
	}

	/**
	 * Wishlist page shortcode output.
	 *
	 * @since 1.0.0
	 */
	public function wishlist_page() {
		ob_start();
		?>
		<?php if ( basel_get_opt( 'wishlist_logged' ) && ! is_user_logged_in() ) : ?>
			<div class="woocommerce-notices-wrapper">
				<div class="woocommerce-info" role="alert">
					<?php esc_html_e( 'Wishlist is available only for logged in visitors.', 'basel' ); ?>
					<a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
						<?php esc_html_e( 'Sign in', 'basel' ); ?>
					</a>
				</div>
			</div>
			<?php return; ?>
		<?php endif; ?>

		<?php if ( is_user_logged_in() && $this->is_editable() && basel_get_opt( 'my_account_wishlist' ) ) : ?>
			<?php do_action( 'woocommerce_account_navigation' ); ?>
		<?php endif; ?>

		<div class="<?php echo ( is_user_logged_in() && $this->is_editable() && basel_get_opt( 'my_account_wishlist' ) ) ? 'woocommerce-MyAccount-content' : ''; ?>">
			<?php echo $this->wishlist_page_content(); //phpcs:ignore ?>
		</div>
		<?php

		return ob_get_clean();
	}

	/**
	 * Content of the wishlist page with products.
	 *
	 * @since 1.0.0
	 *
	 * @param string $wishlist Wishlist object.
	 */
	public function wishlist_page_content( $wishlist = false ) {
		if ( ! $wishlist ) {
			$wishlist = $this->wishlist;
		}

		$wishlist_empty_text = basel_get_opt( 'wishlist_empty_text' );
		$products            = $wishlist->get_all();
		$wrapper_classes     = '';
		$url                 = basel_get_whishlist_page_url();
		$id                  = get_query_var( 'wishlist_id' );

		$ids = array();

		$ids = array_map(
			function( $item ) {
				return $item['product_id'];
			},
			$products
		);
		
		if ( $id && $id > 0 ) {
			$url .= $id . '/';
		}
		
		$columns = basel_get_opt( 'products_columns' );
		
		if ( basel_get_opt( 'products_columns' ) > 3 && is_user_logged_in() ) {
			$columns = basel_get_opt( 'products_columns' ) - 1;
		}
		
		$args = array(
			'include'        => implode( ',', $ids ),
			'post_type'      => 'ids',
			'items_per_page' => basel_get_opt( 'shop_per_page' ),
			'columns'        => $columns,
			'pagination'     => 'links',
			'force_not_ajax' => 'yes',
		);

		if ( ! $this->is_editable() ) {
			$wrapper_classes .= ' basel-wishlist-preview';
		}
		
		ob_start();

		?>
			<div class="basel-wishlist-content<?php echo esc_attr( $wrapper_classes ); ?>">
				<?php if ( count( $products ) > 0 ) : ?>
					<div class="basel-wishlist-heading-wrapper">
						<h4 class="basel-wishlist-title">
							<?php esc_html_e( 'Your products wishlist', 'basel' ); ?>
						</h4>

						<?php if ( is_user_logged_in() && $this->is_editable() && basel_is_social_link_enable( 'share' ) ) : ?>
							<div class="basel-wishlist-share">
								<span>
									<?php esc_attr_e( 'Share', 'basel' ); ?>
								</span>
								<?php echo do_shortcode( '[social_buttons size="small" page_link="' . $url . $wishlist->get_id() . '/' . '"]' ); ?>
							</div>
						<?php endif; ?>
					</div>

					<?php if ( $this->is_editable() ) : ?>
						<?php add_action( 'woocommerce_before_shop_loop_item', array( $this, 'remove_btn' ), 10 ); ?>
					<?php endif; ?>

					<?php echo basel_shortcode_products( $args ); ?>

					<?php remove_action( 'woocommerce_before_shop_loop_item', array( $this, 'remove_btn' ), 10 ); ?>

				<?php else : ?>
					<p class="basel-empty-wishlist">
						<?php esc_html_e( 'Wishlist is empty.', 'basel' ); ?>
					</p>

					<?php if ( $wishlist_empty_text ) : ?>
						<div class="basel-empty-page-text">
							<?php echo wp_kses( $wishlist_empty_text, basel_get_allowed_html() ); ?>
						</div>
					<?php endif; ?>

					<p class="return-to-shop">
                        <a class="button" href="<?php echo esc_url( apply_filters( 'basel_wishlist_return_to_shop_url', wc_get_page_permalink( 'shop' ) ) ); ?>">
							<?php esc_html_e( 'Return to shop', 'basel' ); ?>
						</a>
					</p>
				<?php endif; ?>
			</div>
		<?php

		return ob_get_clean();
	}

	/**
	 * Remove button HTML.
	 *
	 * @since 1.0.0
	 */
	public function remove_btn() {
		?>
			<div class="basel-remove-button-wrap">
				<a href="#" class="basel-remove-button" data-key="<?php echo esc_attr( wp_create_nonce( 'basel-wishlist-remove' ) ); ?>" data-product-id="<?php echo esc_attr( get_the_ID() ); ?>">
					<?php esc_html_e( 'Remove', 'basel' ); ?>
					<span class="remove-loader"></span>
				</a>
			</div>
		<?php
	}

	/**
	 * Add to wishlist button on loop product.
	 *
	 * @since 1.0.0
	 */
	public function add_to_wishlist_loop_btn() {
		$this->add_to_wishlist_btn( 'basel-wishlist-btn', 'button basel-tooltip' );
	}

	/**
	 * Add to wishlist button on single product.
	 *
	 * @since 1.0.0
	 */
	public function add_to_wishlist_single_btn() {
		$this->add_to_wishlist_btn( 'wishlist-btn-wrapper', 'basel-wishlist-btn button' );
	}

	/**
	 * Add to wishlist button on sticky add to cart.
	 *s
	 * @since 1.0.0
	 */
	public function add_to_wishlist_sticky_atc_btn() {
		$this->add_to_wishlist_btn( 'basel-sticky-btn-wishlist' , 'basel-tooltip');
	}

	/**
	 * Add to wishlist button.
	 *
	 * @since 1.0.0
     *
     * @param string $classes Extra classes.
	 * @param string $link_classes
	 */
	public function add_to_wishlist_btn( $classes = '', $link_classes = '' ) {
		?>
			<div class="<?php echo esc_attr( $classes ); ?>">
				<a class="<?php echo esc_attr( $link_classes ); ?>" href="<?php echo esc_url( basel_get_whishlist_page_url() ); ?>" data-key="<?php echo esc_attr( wp_create_nonce( 'basel-wishlist-add' ) ); ?>" data-product-id="<?php echo esc_attr( get_the_ID() ); ?>" data-added-text="<?php esc_html_e( 'Browse Wishlist', 'basel' ); ?>"><?php esc_html_e( 'Add to wishlist', 'basel' ); ?></a>
			</div>
		<?php
	}

	/**
	 * Add wishlist title to account menu.
	 *
	 * @since 1.0.0
	 *
	 * @param array $items Menu items.
	 *
	 * @return array
	 */
	public function account_navigation( $items ) {
		unset( $items['customer-logout'] );

        if ( basel_get_opt( 'wishlist' ) && basel_get_opt( 'wishlist_page' ) && basel_get_opt( 'my_account_wishlist' ) ) {
            $items['wishlist'] = esc_html__( 'Wishlist', 'basel' );
        }

		$items['customer-logout'] = esc_html__( 'Logout', 'basel' );

		return $items;
	}

	/**
	 * Add URL to wishlist item in the menu.
	 *
	 * @since 1.0.0
	 *
	 * @param string $url Item url.
	 * @param string $endpoint Endpoint name.
	 * @param string $value Value.
	 * @param string $permalink Item permalink.
	 *
	 * @return string
	 */
	public function account_navigation_url( $url, $endpoint, $value, $permalink ) {
		if ( 'wishlist' === $endpoint ) {
			$url = basel_get_whishlist_page_url();
		}

		return $url;
	}

	/**
	 * Add active class to wishlist item in the menu.
	 *
	 * @since 1.0.0
	 *
	 * @param array  $classes Item classes.
	 * @param string $endpoint Endpoint name.
	 *
	 * @return array
	 */
	public function account_navigation_classes( $classes, $endpoint ) {
		global $wp;

		if ( 'wishlist' === $endpoint && get_the_ID() == basel_get_opt( 'wishlist_page' ) ) {
			$classes[] = 'is-active';
		} elseif ( get_the_ID() == basel_get_opt( 'wishlist_page' ) ) {
			$key = array_search( 'is-active', $classes );
			if ( false !== $key ) {
				unset( $classes[ $key ] );
			}
		}

		return $classes;
	}

	/**
	 * Can user edit this wishlist or just view it.
	 *
	 * @since 1.0.0
	 *
	 * @return boolean
	 */
	public function is_editable() {
		return $this->editable;
	}
}