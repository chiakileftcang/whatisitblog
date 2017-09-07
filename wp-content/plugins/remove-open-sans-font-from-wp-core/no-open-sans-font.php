<?php
/*
Plugin Name: Remove  Open Sans font from WP core
Plugin URI: http://suoling.net/remove-open-sans-font-from-wp-core/
Description: Remove  Open Sans font from WP core.
Version: 1.2.1
Author: suifengtec
Author URI: http://suoling.net
License: GPL v2 or later
*/
defined('ABSPATH') or exit;
function coolwp_remove_open_sans_from_wp_core() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_style('open-sans','');
}
add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );

/*
thanks Milan Dinić.
 */
add_filter( 'gettext_with_context', 'coolwp_disable_open_sans', 888, 4 );
function coolwp_disable_open_sans( $translations, $text, $context, $domain ) {
    if (

    	( 'Open Sans font: on or off' == $context && 'on' == $text)
            /*for twentyfourteen*/
         ||( 'Lato font: on or off' == $context && 'on' == $text)
            /*for twentyfifteen*/
         ||( 'Noto Sans font: on or off' == $context && 'on' == $text)
    	 ||( 'Noto Serif font: on or off' == $context && 'on' == $text)
    	 ||( 'Inconsolata font: on or off' == $context && 'on' == $text)
    	) {
        $translations = 'off';
    }
    return $translations;
}

?>