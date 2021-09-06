<?php if ( ! defined('BASEL_THEME_DIR')) exit('No direct script access allowed');

/**
 * ------------------------------------------------------------------------------------------------
 * Prepare CSS selectors for theme settions (colors, borders, typography etc.)
 * ------------------------------------------------------------------------------------------------
 */

return apply_filters( 'basel_get_selectors', array(

	'primary-color' => array(
		'color' => basel_text2line('
.color-primary,
.mobile-nav ul li.current-menu-item > a,
.main-nav .menu > li.current-menu-item > a,
.main-nav .menu > li.onepage-link.current-menu-item > a,
.main-nav .menu > li > a:hover,
.basel-navigation .menu>li.menu-item-design-default ul li:hover>a,
.basel-navigation .menu > li.menu-item-design-full-width .sub-menu li a:hover, 
.basel-navigation .menu > li.menu-item-design-sized .sub-menu li a:hover,

.basel-product-categories.responsive-cateogires li.current-cat > a, 
.basel-product-categories.responsive-cateogires li.current-cat-parent > a,
.basel-product-categories.responsive-cateogires li.current-cat-ancestor > a,

.basel-my-account-links a:hover:before,

.mega-menu-list > li > a:hover,
.mega-menu-list .sub-sub-menu li a:hover,

a[href^="tel"],

.topbar-menu ul > li > .sub-menu-dropdown li > a:hover,

.btn.btn-color-primary.btn-style-bordered,
.button.btn-color-primary.btn-style-bordered,
button.btn-color-primary.btn-style-bordered,
.added_to_cart.btn-color-primary.btn-style-bordered,
input[type="submit"].btn-color-primary.btn-style-bordered,

a.login-to-prices-msg,
a.login-to-prices-msg:hover,

.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before, 
.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,

.basel-dark .read-more-section .btn-read-more,

.basel-dark .basel-load-more,
.basel-dark .color-primary,

.basel-hover-link .swap-elements .btn-add a,
.basel-hover-link .swap-elements .btn-add a:hover,

.blog-post-loop .entry-title a:hover,
.blog-post-loop.sticky .entry-title:before,
.post-slide .entry-title a:hover,
.comments-area .reply a,
.single-post-navigation a:hover,
blockquote footer:before,
blockquote cite,
.format-quote .entry-content blockquote cite, 
.format-quote .entry-content blockquote cite a,

.basel-entry-meta .meta-author a,

.search-no-results.woocommerce .site-content:before,
.search-no-results .not-found .entry-header:before,

.login-form-footer .lost_password:hover,

.error404 .page-title,

.menu-label-new:after,

.widget_shopping_cart .product_list_widget li .quantity .amount,
.product_list_widget li ins .amount,
.price ins > .amount,
.price ins,
.single-product .price,
.single-product .price .amount,
.popup-quick-view .price,
.popup-quick-view .price .amount,
.basel-products-nav .product-short .price,
.basel-products-nav .product-short .price .amount,
.star-rating span:before,
.comment-respond .stars a:hover:after,
.comment-respond .stars a.active:after,
.single-product-content .comment-form .stars span a:hover,
.single-product-content .comment-form .stars span a.active,
.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title:hover,
.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title.active,
.single-product-content .woocommerce-product-details__short-description ul > li:before, 
.single-product-content #tab-description ul > li:before, 
.blog-post-loop .entry-content ul > li:before, 
.comments-area .comment-list li ul > li:before,
.brands-list .brand-item a:hover,
.footer-container .footer-widget-collapse.footer-widget-opened .widget-title:after,

.sidebar-widget li a:hover, 
.filter-widget li a:hover,
.sidebar-widget li > ul li a:hover, 
.filter-widget li > ul li a:hover,
.basel-price-filter ul li a:hover .amount,

.basel-hover-effect-4 .swap-elements > a,
.basel-hover-effect-4 .swap-elements > a:hover,

.product-grid-item .basel-product-cats a:hover, 
.product-grid-item .basel-product-brands-links a:hover,

.wishlist_table tr td.product-price ins .amount,

.basel-buttons .product-compare-button > a.added:before,
.basel-buttons .basel-wishlist-btn > a.added:before,

.single-product-content .entry-summary .yith-wcwl-add-to-wishlist a:hover,
.single-product-content .container .entry-summary .yith-wcwl-add-to-wishlist a:hover:before,
.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before, 
.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,
.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button.feid-in > a:before,
.basel-sticky-btn .basel-sticky-btn-wishlist a.added, 
.basel-sticky-btn .basel-sticky-btn-wishlist a:hover,
.single-product-content .entry-summary .wishlist-btn-wrapper a:hover,
.single-product-content .entry-summary .wishlist-btn-wrapper a:hover:before,
.single-product-content .entry-summary .wishlist-btn-wrapper a.added:before,

.vendors-list ul li a:hover,

.product-list-item .product-list-buttons .basel-wishlist-btn a:hover,
.product-list-item .product-list-buttons .product-compare-button a:hover,

.product-list-item .product-list-buttons .basel-wishlist-btn > a.added:before,
.product-list-item .product-list-buttons .product-compare-button > a.added:before,

.basel-sticky-btn .basel-sticky-btn-compare a.added, 
.basel-sticky-btn .basel-sticky-btn-compare a:hover,
.single-product-content .entry-summary .compare-btn-wrapper a:hover,
.single-product-content .entry-summary .compare-btn-wrapper a:hover:before,
.single-product-content .entry-summary .compare-btn-wrapper a.added:before,

.single-product-content .entry-summary .basel-sizeguide-btn:hover,
.single-product-content .entry-summary .basel-sizeguide-btn:hover:before,

.blog-post-loop .entry-content ul li:before,

.basel-menu-price .menu-price-price,
.basel-menu-price.cursor-pointer:hover .menu-price-title,

.comments-area #cancel-comment-reply-link:hover,
.comments-area .comment-body .comment-edit-link:hover,

.popup-quick-view .entry-summary .entry-title a:hover,

.wpb_text_column ul:not(.social-icons) > li:before,

.widget_product_categories .basel-cats-toggle:hover,
.widget_product_categories .toggle-active,
.widget_product_categories li.current-cat-parent > a, 
.widget_product_categories li.current-cat > a,

.woocommerce-checkout-review-order-table tfoot .order-total td .amount,

.widget_shopping_cart .product_list_widget li .remove:hover,

.basel-active-filters .widget_layered_nav_filters ul li a .amount,

.title-wrapper.basel-title-color-primary .title-subtitle,
.widget_shopping_cart .widget_shopping_cart_content > .total .amount,
.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active > a,
.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active > a
		'),
		'background-color' => basel_text2line('
.wishlist-info-widget .icon-count,
.compare-info-widget .icon-count,
.basel-toolbar-compare .compare-count,
.basel-cart-design-2 > a .basel-cart-number,
.basel-cart-design-3 > a .basel-cart-number,

.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,
.btn.btn-color-primary,
.button.btn-color-primary,
button.btn-color-primary,
.added_to_cart.btn-color-primary,
input[type="submit"].btn-color-primary,
.btn.btn-color-primary:hover,
.button.btn-color-primary:hover,
button.btn-color-primary:hover,
.added_to_cart.btn-color-primary:hover,
input[type="submit"].btn-color-primary:hover,
.btn.btn-color-primary.btn-style-bordered:hover,
.button.btn-color-primary.btn-style-bordered:hover,
button.btn-color-primary.btn-style-bordered:hover,
.added_to_cart.btn-color-primary.btn-style-bordered:hover,
input[type="submit"].btn-color-primary.btn-style-bordered:hover,
.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,
.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,
.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,
.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,
.no-results .searchform #searchsubmit,
.no-results .searchform #searchsubmit:hover,
.comments-area .comment-respond input[type="submit"],
.comments-area .comment-respond input[type="submit"]:hover,
.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout > a.button,
.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout > a.button:hover,
.woocommerce .checkout_coupon .button,
.woocommerce .checkout_coupon .button:hover,
.woocommerce .place-order button,
.woocommerce .place-order button:hover,
.woocommerce-order-pay #order_review .button,
.woocommerce-order-pay #order_review .button:hover,

.woocommerce-account button[name="track"],
.woocommerce-account button[name="track"]:hover,
.woocommerce-account button[name="save_account_details"],
.woocommerce-account button[name="save_account_details"]:hover,
.woocommerce-account button[name="save_address"],
.woocommerce-account button[name="save_address"]:hover,

.search-no-results .not-found .entry-content .searchform #searchsubmit,
.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,
.error404 .page-content > .searchform #searchsubmit,
.error404 .page-content > .searchform #searchsubmit:hover,
.return-to-shop .button,
.return-to-shop .button:hover,
.basel-hover-excerpt .btn-add a,
.basel-hover-excerpt .btn-add a:hover,
.basel-hover-standard .btn-add > a,
.basel-hover-standard .btn-add > a:hover,
.basel-price-table .basel-plan-footer > a,
.basel-price-table .basel-plan-footer > a:hover,
.basel-pf-btn button,
.basel-pf-btn button:hover,
.basel-info-box.box-style-border .info-btn-wrapper a,
.basel-info-box.box-style-border .info-btn-wrapper a:hover,
.basel-info-box2.box-style-border .info-btn-wrapper a,
.basel-info-box2.box-style-border .info-btn-wrapper a:hover,
.basel-hover-quick .woocommerce-variation-add-to-cart .button,
.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,
.product-list-item .product-list-buttons > a,
.product-list-item .product-list-buttons > a:hover,
.wpb_video_wrapper .button-play,

.pswp__share--download:hover,

.basel-navigation .menu > li.callto-btn > a,
.basel-navigation .menu > li.callto-btn > a:hover,

.basel-dark .basel-load-more:hover,
.basel-dark .basel-load-more.load-on-click + .basel-load-more-loader,

.basel-dark .feedback-form .wpcf7-submit,
.basel-dark .mc4wp-form input[type="submit"],
.basel-dark .single_add_to_cart_button,
.basel-dark .basel-compare-col .add_to_cart_button,
.basel-dark .basel-compare-col .added_to_cart,
.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,
.basel-dark .single-product-content .comment-form .form-submit input[type="submit"],
.basel-dark .basel-registration-page .basel-switch-to-register,
.basel-dark .register .button, .basel-dark .login .button,
.basel-dark .lost_reset_password .button,
.basel-dark .wishlist_table tr td.product-add-to-cart > .add_to_cart.button, 
.basel-dark .woocommerce .cart-actions .coupon .button,

.basel-dark .feedback-form .wpcf7-submit:hover,
.basel-dark .mc4wp-form input[type="submit"]:hover,
.basel-dark .single_add_to_cart_button:hover,
.basel-dark .basel-compare-col .add_to_cart_button:hover,
.basel-dark .basel-compare-col .added_to_cart:hover,
.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,
.basel-dark .single-product-content .comment-form .form-submit input[type="submit"]:hover,
.basel-dark .basel-registration-page .basel-switch-to-register:hover, 
.basel-dark .register .button:hover, .basel-dark .login .button:hover, 
.basel-dark .lost_reset_password .button:hover, 
.basel-dark .wishlist_table tr td.product-add-to-cart > .add_to_cart.button:hover,
.basel-dark .woocommerce .cart-actions .coupon .button:hover,

.basel-stock-progress-bar .progress-bar,
.widget_price_filter .ui-slider .ui-slider-handle:after,
.widget_price_filter .ui-slider .ui-slider-range,
.widget_tag_cloud .tagcloud a:hover,
.widget_product_tag_cloud .tagcloud a:hover,
div.bbp-submit-wrapper button,
div.bbp-submit-wrapper button:hover,
#bbpress-forums .bbp-search-form #bbp_search_submit,
#bbpress-forums .bbp-search-form #bbp_search_submit:hover,

body .select2-container--default .select2-results__option--highlighted[aria-selected], 

.basel-add-img-msg:before,

.product-video-button a:hover:before, 
.product-360-button a:hover:before,

.mobile-nav ul li .up-icon,

.scrollToTop:hover,
.basel-sticky-filter-btn:hover,

.categories-opened li a:active,

.basel-price-table .basel-plan-price,

.header-categories .secondary-header .mega-navigation,
.widget_nav_mega_menu,

.meta-post-categories,

.slider-title:before,
.title-wrapper.basel-title-style-simple .title:after,

.menu-label-new,
.product-label.onsale,

.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active > a span:after,
.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active > a span:after,

.portfolio-with-bg-alt .portfolio-entry:hover .entry-header > .portfolio-info

		'),
		'border-color' => basel_text2line('
.btn.btn-color-primary,
.button.btn-color-primary,
button.btn-color-primary,
.added_to_cart.btn-color-primary,
input[type="submit"].btn-color-primary,
.btn.btn-color-primary:hover,
.button.btn-color-primary:hover,
button.btn-color-primary:hover,
.added_to_cart.btn-color-primary:hover,
input[type="submit"].btn-color-primary:hover,
.btn.btn-color-primary.btn-style-bordered:hover,
.button.btn-color-primary.btn-style-bordered:hover,
button.btn-color-primary.btn-style-bordered:hover,
.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,
.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,
.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,
.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,
.comments-area .comment-respond input[type="submit"],
.comments-area .comment-respond input[type="submit"]:hover,
.sidebar-container .mc4wp-form input[type="submit"],
.sidebar-container .mc4wp-form input[type="submit"]:hover,
.footer-container .mc4wp-form input[type="submit"],
.footer-container .mc4wp-form input[type="submit"]:hover,
.filters-area .mc4wp-form input[type="submit"],
.filters-area .mc4wp-form input[type="submit"]:hover,
.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout > a.button,
.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout > a.button:hover,
.woocommerce .checkout_coupon .button,
.woocommerce .checkout_coupon .button:hover,
.woocommerce .place-order button,
.woocommerce .place-order button:hover,
.woocommerce-order-pay #order_review .button,
.woocommerce-order-pay #order_review .button:hover,

.woocommerce-account button[name="track"],
.woocommerce-account button[name="track"]:hover,
.woocommerce-account button[name="save_account_details"],
.woocommerce-account button[name="save_account_details"]:hover,
.woocommerce-account button[name="save_address"],
.woocommerce-account button[name="save_address"]:hover,

.woocommerce-page button[name="save_address"]:hover,
.search-no-results .not-found .entry-content .searchform #searchsubmit,
.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,
.error404 .page-content > .searchform #searchsubmit,
.error404 .page-content > .searchform #searchsubmit:hover,
.no-results .searchform #searchsubmit,
.no-results .searchform #searchsubmit:hover,
.return-to-shop .button,
.return-to-shop .button:hover,
.basel-hover-excerpt .btn-add a,
.basel-hover-excerpt .btn-add a:hover,
.basel-hover-standard .btn-add > a,
.basel-hover-standard .btn-add > a:hover,
.basel-price-table .basel-plan-footer > a,
.basel-price-table .basel-plan-footer > a:hover,
.basel-pf-btn button,
.basel-pf-btn button:hover,
body .basel-info-box.box-style-border .info-btn-wrapper a,
body .basel-info-box.box-style-border .info-btn-wrapper a:hover,
body .basel-info-box2.box-style-border .info-btn-wrapper a,
body .basel-info-box2.box-style-border .info-btn-wrapper a:hover,
.basel-hover-quick .woocommerce-variation-add-to-cart .button,
.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,
.product-list-item .product-list-buttons > a,
.product-list-item .product-list-buttons > a:hover,
body .wpb_video_wrapper .button-play,
.woocommerce-store-notice__dismiss-link:hover,
.basel-compare-table .compare-loader:after,

.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,

.basel-dark .read-more-section .btn-read-more,
.basel-dark .basel-load-more,
.basel-dark .basel-load-more:hover,
.basel-dark .feedback-form .wpcf7-submit,
.basel-dark .mc4wp-form input[type="submit"],
.basel-dark .single_add_to_cart_button,
.basel-dark .basel-compare-col .add_to_cart_button,
.basel-dark .basel-compare-col .added_to_cart,
.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,
.basel-dark .single-product-content .comment-form .form-submit input[type="submit"],
.basel-dark .basel-registration-page .basel-switch-to-register,
.basel-dark .register .button, .basel-dark .login .button,
.basel-dark .lost_reset_password .button,
.basel-dark .wishlist_table tr td.product-add-to-cart > .add_to_cart.button, 
.basel-dark .woocommerce .cart-actions .coupon .button,

.basel-dark .feedback-form .wpcf7-submit:hover,
.basel-dark .mc4wp-form input[type="submit"]:hover,
.basel-dark .single_add_to_cart_button:hover,
.basel-dark .basel-compare-col .add_to_cart_button:hover,
.basel-dark .basel-compare-col .added_to_cart:hover,
.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,
.basel-dark .single-product-content .comment-form .form-submit input[type="submit"]:hover,
.basel-dark .basel-registration-page .basel-switch-to-register:hover,
.basel-dark .register .button:hover, .basel-dark .login .button:hover,
.basel-dark .lost_reset_password .button:hover,
.basel-dark .wishlist_table tr td.product-add-to-cart > .add_to_cart.button:hover,
.basel-dark .woocommerce .cart-actions .coupon .button:hover,

.cookies-buttons .cookies-accept-btn:hover,

.blockOverlay:after,
.widget_shopping_cart li.basel-loading:after,
.basel-price-table:hover,
.title-shop .nav-shop ul li a:after,
.widget_tag_cloud .tagcloud a:hover,
.widget_product_tag_cloud .tagcloud a:hover,
div.bbp-submit-wrapper button,
div.bbp-submit-wrapper button:hover,
#bbpress-forums .bbp-search-form #bbp_search_submit,
#bbpress-forums .bbp-search-form #bbp_search_submit:hover,
.basel-hover-link .swap-elements .btn-add a,
.basel-hover-link .swap-elements .btn-add a:hover,
.basel-hover-link .swap-elements .btn-add a.loading:after,
.scrollToTop:hover, 
.basel-sticky-filter-btn:hover,

blockquote
	'),
	'stroke' => basel_text2line('
.with-animation .info-box-icon svg path,
.single-product-content .entry-summary .basel-sizeguide-btn:hover svg' ) ,
	),
	'secondary-color'     => array(
		'color' => basel_text2line('
.btn.btn-color-alt.btn-style-bordered, 
.button.btn-color-alt.btn-style-bordered, 
button.btn-color-alt.btn-style-bordered, 
.added_to_cart.btn-color-alt.btn-style-bordered, 
input[type="submit"].btn-color-alt.btn-style-bordered,

.title-wrapper.basel-title-color-alt .title-subtitle
		'),
		'background-color' => basel_text2line('
.btn.btn-color-alt, 
.button.btn-color-alt, 
button.btn-color-alt, 
.added_to_cart.btn-color-alt, 
input[type="submit"].btn-color-alt,

.btn.btn-color-alt:hover,
.button.btn-color-alt:hover,
button.btn-color-alt:hover,
.added_to_cart.btn-color-alt:hover,
input[type="submit"].btn-color-alt:hover,
.btn.btn-color-alt.btn-style-bordered:hover,
.button.btn-color-alt.btn-style-bordered:hover,
button.btn-color-alt.btn-style-bordered:hover,
.added_to_cart.btn-color-alt.btn-style-bordered:hover,
input[type="submit"].btn-color-alt.btn-style-bordered:hover,

.widget_nav_mega_menu .menu > li:hover, 
.mega-navigation .menu > li:hover
		'),
		'border-color' => basel_text2line('
.btn.btn-color-alt,
.button.btn-color-alt,
button.btn-color-alt,
.added_to_cart.btn-color-alt,
input[type="submit"].btn-color-alt,
.btn.btn-color-alt:hover,
.button.btn-color-alt:hover,
button.btn-color-alt:hover,
.added_to_cart.btn-color-alt:hover,
input[type="submit"].btn-color-alt:hover,
.btn.btn-color-alt.btn-style-bordered:hover,
.button.btn-color-alt.btn-style-bordered:hover,
button.btn-color-alt.btn-style-bordered:hover,
.added_to_cart.btn-color-alt.btn-style-bordered:hover,
input[type="submit"].btn-color-alt.btn-style-bordered:hover
			'),
		),
		
		'text-font' => array('body, p, .widget_nav_mega_menu .menu > li > a, 
.mega-navigation .menu > li > a,
.basel-navigation .menu > li.menu-item-design-full-width .sub-sub-menu li a, 
.basel-navigation .menu > li.menu-item-design-sized .sub-sub-menu li a,
.basel-navigation .menu > li.menu-item-design-default .sub-menu li a,
.font-default
		'),
		'primary-font' => array('h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, h1, h2, h3, h4, h5, h6, .title, table th,
.wc-tabs li a,
.masonry-filter li a,
.woocommerce .cart-empty,
.basel-navigation .menu > li.menu-item-design-full-width .sub-menu > li > a, 
.basel-navigation .menu > li.menu-item-design-sized .sub-menu > li > a,
.mega-menu-list > li > a,
fieldset legend,
table th,
.basel-empty-compare,
.compare-field,
.compare-value:before,
.color-scheme-dark .info-box-inner h1,
.color-scheme-dark .info-box-inner h2,
.color-scheme-dark .info-box-inner h3,
.color-scheme-dark .info-box-inner h4,
.color-scheme-dark .info-box-inner h5,
.color-scheme-dark .info-box-inner h6

		'),
	'secondary-font' => array('.title-alt, .subtitle, .font-alt, .basel-entry-meta'),
	'titles-font' => array('

.product-title a,
.post-slide .entry-title a,
.category-grid-item .hover-mask h3,
.basel-search-full-screen .basel-search-inner input[type="text"],
.blog-post-loop .entry-title,
.post-title-large-image .entry-title,
.single-product-content .entry-title
		',
		'.font-title'),
	'widget-titles-font' => array('.widgettitle, .widget-title'),
	'navigation-font' => array('.main-nav .menu > li > a'),
		'regular-buttons-bg-color' => array('.button, 
button, 
input[type=submit],
html .yith-woocompare-widget a.button.compare,
html .basel-dark .basel-registration-page .basel-switch-to-register,
html .basel-dark .login .button,
html .basel-dark .register .button,
html .basel-dark .widget_shopping_cart .buttons a,
html .basel-dark .yith-woocompare-widget a.button.compare,
html .basel-dark .widget_price_filter .price_slider_amount .button,
html .basel-dark .woocommerce-widget-layered-nav-dropdown__submit,
html .basel-dark .basel-widget-layered-nav-dropdown__submit,
html .basel-dark .woocommerce .cart-actions input[name="update_cart"]'),
	'shop-buttons-bg-color' => array('html .single_add_to_cart_button,
html .basel-sticky-btn .basel-sticky-add-to-cart,
html .woocommerce .cart-actions .coupon .button,
html .added_to_cart.btn-color-black, 
html input[type=submit].btn-color-black,
html .wishlist_table tr td.product-add-to-cart>.add_to_cart.button,
html .basel-hover-quick .quick-shop-btn > a,
html table.compare-list tr.add-to-cart td a,
html .basel-compare-col .add_to_cart_button, 
html .basel-compare-col .added_to_cart'),
	'accent-buttons-bg-color' => array('html .added_to_cart.btn-color-primary, 
html .btn.btn-color-primary,
html .button.btn-color-primary, 
html button.btn-color-primary, 
html input[type=submit].btn-color-primary,
html .widget_shopping_cart .buttons .checkout,
html .widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,
html .woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout > a.button,
html .woocommerce-checkout .place-order button,
html .woocommerce-checkout .checkout_coupon .button,
html .woocommerce input[name=save_account_details], 
html .woocommerce input[name=save_address], 
html .woocommerce input[name=track], 
html .woocommerce-page input[name=save_account_details], 
html .woocommerce-page input[name=save_address], 
html .woocommerce-page input[name=track],
html .return-to-shop .button,
html .basel-navigation .menu > li.callto-btn > a,
html .basel-hover-standard .btn-add > a,
html .basel-hover-excerpt .btn-add a,
html .basel-hover-quick .woocommerce-variation-add-to-cart .button,
html .basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,
html .error404 .page-content>.searchform #searchsubmit,
html .basel-info-box.box-style-border .info-btn-wrapper a,
html .basel-info-box2.box-style-border .info-btn-wrapper a,
html .basel-price-table .basel-plan-footer > a,
html .basel-pf-btn button,
html .basel-dark .single_add_to_cart_button,
html .basel-dark .basel-compare-col .add_to_cart_button, 
html .basel-dark .basel-compare-col .added_to_cart,
html .basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,
html .basel-dark .single-product-content .comment-form .form-submit input[type=submit],
html .basel-dark .woocommerce .cart-actions .coupon .button'),
	'shop-button-color' => array('html .basel-hover-alt .btn-add>a'),
	'gradient-color' => array('html .page-title'),

) );

