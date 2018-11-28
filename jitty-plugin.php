<?
/*
Plugin Name: Prijslijst voor Jitty's
Plugin URI: https://odil.io
Description: Maakt de prijslijst via een shortcode volgens het ontwerp.
Author: Odilio Witteveen
Version: 0.0.9
Author URI: https://odil.io
*/

// This is very messy code. Sorry for that. One day i'll have time to make this pretty

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'jitty/prijslijst-tabs', $plugin_url . 'assets/prijslijsten.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

include "assets/posttype.php";
include "assets/shortcode.php";
