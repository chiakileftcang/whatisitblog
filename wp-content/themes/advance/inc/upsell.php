<?php
/**
 * Display upgrade notice on customizer page
 */
function advance_upsell_notice() {
 // Enqueue the script
 wp_enqueue_script(
 'advance-customizer-upsell',
 get_template_directory_uri() . '/js/upsell.js',
 array(), '1.0.0',
 true
 );
 // Localize the script
 wp_localize_script(
 'advance-customizer-upsell',
 'safreenL10n',
 array(
 'safreenURL'	=> esc_url( 'https://imonthemes.com/advance-pro/' ),
 'safreenLabel'	=> __( 'Upgrade to Pro', 'advance' ),
 
 )
 );
}
add_action( 'customize_controls_enqueue_scripts', 'advance_upsell_notice' );