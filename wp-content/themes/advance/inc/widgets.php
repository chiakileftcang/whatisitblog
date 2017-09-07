<?php

//Load the widgets


require(get_template_directory() . '/inc/widgets/front-posts.php');
require(get_template_directory() . '/inc/widgets/advance_welcome.php');
require(get_template_directory() . '/inc/widgets/ourclient.php');

if ( is_admin() ) {
add_action('admin_enqueue_scripts', 'advance_widget_scripts');

function advance_widget_scripts($hook) {    
if( 'widgets.php' == $hook || 'post.php' == $hook ){
	
	if( function_exists( 'wp_enqueue_media' ) ) {
	 wp_enqueue_style( 'wp-color-picker' );      
     wp_enqueue_script( 'wp-color-picker' );
	}
	if( function_exists( 'wp_enqueue_media' ) ) {

		wp_enqueue_media();
	}
    wp_enqueue_script('advance_widget_scripts', get_template_directory_uri() . '/js/advance-widget.js', false, '1.0', true);
	 wp_enqueue_style('advance_widgets_custom_css', get_template_directory_uri() . '/css/advance_widgets_custom_css.css');
	wp_enqueue_style( 'advance_fontawesome_custom_css', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css' );
	
}
}
}


/*****************************************/
/******          WIDGETS     *************/
/*****************************************/

add_action('widgets_init', 'advancetheme_register_widgets');

function advancetheme_register_widgets() {    

		register_widget('advance_serviceblock');
		register_widget('advance_welcome_widgets');
		register_widget('advance_ourclient');
		
	
	$advance_sidebars = array ( 'sidebar-frontpage' => 'sidebar-frontpage');
	
	/* Register sidebars */
	foreach ( $advance_sidebars as $advance_sidebar ):
	
		
			
			if( $advance_sidebar == 'sidebar-frontpage' ):
		
			$advance_name = __('Frontpage widget area', 'advance');
			
            endif;
		endforeach;
	
}