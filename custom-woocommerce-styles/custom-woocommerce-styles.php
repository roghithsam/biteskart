<?php
/*
Plugin Name: Custom WooCommerce Styles
Plugin URI: https://profiles.wordpress.org/roghithsam/
Description: Customizes CSS for WooCommerce pages.
Version: 1.0
Author: Roghithsam
Author URI: https://roghithsam.zhark.in
*/

function custom_woocommerce_styles() {
    // if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        wp_add_inline_style('woocommerce-general', '

            /* Zhark WP DEV by Roghithsam */
            
            /* Single Product Page */

            span.bk_discount {
                margin-left: 10px;
            }
            .elementor-add-to-cart form.cart .box-quantity, .summary form.cart .box-quantity {
                margin-bottom: 20px;
            }
            form.cart {
                display: contents !important;
            }
            #bk_product_title .cart .box-quantity .quantity {
                width: 60%;
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                align-content: center;
                justify-content: space-between;
            }
            .woocommerce div.product form.cart .button {
                width: 40% !important;
                line-height: 3.2;    
            }

            /* Cart */
            section#tbay-breadscrumb, #tbay-breadscrumb {
                height: 10vh;
            }
            section#main-container .row {
                margin-right: 0px;
                margin-left: 0px;
            }
            .woocommerce-cart .woocommerce {
                align-items: center;
                flex-direction: column;
            }
            .woocommerce-cart .woocommerce:has(.woocommerce-cart-form__contents)::before {
                position: static;
            }
            .woocommerce-cart .woocommerce .cart-collaterals.widget, .woocommerce-cart .woocommerce .widget {
                width: 100% !important;
            }
            .woocommerce-cart .woocommerce .woosl-btn {
                margin-left: 0;
            }
            .woocommerce-cart .woocommerce .cart-collaterals.widget {
                margin-top: -17%;
            }

            /* Checkout */
            .thwmscf-wrapper.thwmscf_time_line_step .thwmscf-tab-panels {
                padding: 0px;
            }

            /* Shop Archive */
            .elementor-7599 .elementor-element.elementor-element-c7386ef > .elementor-container {
                min-height: 10vh;
            }
            .elementor-column.elementor-col-33.elementor-top-column.elementor-element.elementor-element-b144d74 {
                padding-left: 20px;
            }
            .widget_categories ul .children {
                list-style: square !important;
                padding-left: 20px;
                padding-right: 0;
            }
            aside#woocommerce_product_categories-2 ul.product-categories {
                padding-left: 20px;
            }
            ul li.cat-item {
                list-style: circle !important;
            }

            /* My Account Login */
            div .woocommerce #customer_login {
                padding: 0px 15px;
            }
        ');
   // }
}

add_action('wp_enqueue_scripts', 'custom_woocommerce_styles');
?>
