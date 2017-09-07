<?php
/**
 * advance Theme Customizer
 *
 * @package advance
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advance_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	
	
}
add_action( 'customize_register', 'advance_customize_register' );


/**
 * advance Customizer functionality
 */

/**
 * Sets up the WordPress core custom header .
 *

 *
 * @see advance_header_style()
 */
function advance_custom_header() {
	


	

	/**
	 * Filter the arguments used when adding 'custom-header' support in advance.
	 *
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-text-color Default color of the header text.
	 *     @type int      $width            Width in pixels of the custom header image. Default 1200.
	 *     @type int      $height           Height in pixels of the custom header image. Default 280.
	 *     @type bool     $flex-height      Whether to allow flexible-height header images. Default true.
	 *     @type callable $wp-head-callback Callback function used to style the header image and text
	 *                                      displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'advance_custom_header_args', array(
		
		'width'                  => 1200,
		'height'                 => 280,
		'flex-height'            => true,
		'wp-head-callback'       => 'advance_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'advance_custom_header' );

if ( ! function_exists( 'advance_header_style' ) ) :
/**
 * Styles the header text displayed on the site.
 *
 * Create your own advance_header_style() function to override in a child theme.
 *
 *
 */
function advance_header_style() {
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
	<style type="text/css" id="advance-header-css">
		.site-branding {
			margin: 0 auto 0 0;
		}

		#site-title .site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	</style>
	<?php
}
endif; // advance_header_style



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function advance_customize_preview_js() {
	wp_enqueue_script( 'advance_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'advance_customize_preview_js' );

function advance_registers() {

	wp_enqueue_script( 'advance_customizer_script', get_template_directory_uri() . '/js/admin.js', array("jquery"), '20120206', true  );
	
	
}
add_action( 'customize_controls_enqueue_scripts', 'advance_registers' );


require get_template_directory() . '/inc/customizer/config.php';
require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/sections.php';
require get_template_directory() . '/inc/customizer/fields.php';


