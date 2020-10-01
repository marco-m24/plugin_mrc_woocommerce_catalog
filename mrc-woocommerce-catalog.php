<?php
/**
 * Plugin Name:       Mrc Woocoommerce Catalog
 * Plugin URI:        https://www.mar.co.it/
 * Description:       Questo plugin trasforma Woocommcerce in un catalogo.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Marco M
 * Author URI:        https://www.mar.co.it/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mrc-woo-catalog
 * Domain Path:       /languages
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



add_action('init', 'mrc_remove_button_add_to_cart');

function mrc_remove_button_add_to_cart(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}





function mrc_adding_style_remove_cart() {
	wp_enqueue_style('mrc-remove-cart-styles', plugin_dir_url( __FILE__ ) . 'css/mrc-remove-cart.css', array(), '1.0.0', false);

}
add_action( 'wp_enqueue_scripts', 'mrc_adding_style_remove_cart' ); 
