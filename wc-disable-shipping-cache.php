<?php

/**
 * Plugin Name: WooCommerce Disable Shipping Cache
 * Description: Just disable the WooCommerce Shipping Cache.
 * Version: 1.0.0
 * Author: Oktagon
 * Author URI: https://www.oktagon.se/
 */

if (!defined('ABSPATH')) {
    exit;
}

function wc_disable_shipping_cache()
{
    \WC_Cache_Helper::get_transient_version(
        'shipping',
        true
    );
}
\add_action(
    'woocommerce_checkout_update_order_review',
    'wc_disable_shipping_cache'
);
