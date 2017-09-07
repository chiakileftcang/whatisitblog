<?php

/**
 * The configuration options for Kirki.
 * Change the assets URL for kirki so the customizer styles & scripts are properly loaded.
 */
function advance_customizer_config( $args ) {

	$args['url_path'] = get_template_directory_uri() . '/inc/kirki/';
	
	return $args;
	
	 	
	
	

}


					
	
add_filter( 'kirki/config', 'advance_customizer_config' );

function advance_kirki_i10n( $config ) {

    $config['Kirki_l10n'] = array(
        'background-color'      => __( 'Background Color', 'advance' ),
        'background-image'      => __( 'Background Image', 'advance' ),
        'no-repeat'             => __( 'No Repeat', 'advance' ),
        'repeat-all'            => __( 'Repeat All', 'advance' ),
        'repeat-x'              => __( 'Repeat Horizontally', 'advance' ),
        'repeat-y'              => __( 'Repeat Vertically', 'advance' ),
        'inherit'               => __( 'Inherit', 'advance' ),
        'background-repeat'     => __( 'Background Repeat', 'advance' ),
        'cover'                 => __( 'Cover', 'advance' ),
        'contain'               => __( 'Contain', 'advance' ),
        'background-size'       => __( 'Background Size', 'advance' ),
        'fixed'                 => __( 'Fixed', 'advance' ),
        'scroll'                => __( 'Scroll', 'advance' ),
        'background-attachment' => __( 'Background Attachment', 'advance' ),
        'left-top'              => __( 'Left Top', 'advance' ),
        'left-center'           => __( 'Left Center', 'advance' ),
        'left-bottom'           => __( 'Left Bottom', 'advance' ),
        'right-top'             => __( 'Right Top', 'advance' ),
        'right-center'          => __( 'Right Center', 'advance' ),
        'right-bottom'          => __( 'Right Bottom', 'advance' ),
        'center-top'            => __( 'Center Top', 'advance' ),
        'center-center'         => __( 'Center Center', 'advance' ),
        'center-bottom'         => __( 'Center Bottom', 'advance' ),
        'background-position'   => __( 'Background Position', 'advance' ),
        'background-opacity'    => __( 'Background Opacity', 'advance' ),
        'ON'                    => __( 'ON', 'advance' ),
        'OFF'                   => __( 'OFF', 'advance' ),
        'all'                   => __( 'All', 'advance' ),
        'cyrillic'              => __( 'Cyrillic', 'advance' ),
        'cyrillic-ext'          => __( 'Cyrillic Extended', 'advance' ),
        'devanagari'            => __( 'Devanagari', 'advance' ),
        'greek'                 => __( 'Greek', 'advance' ),
        'greek-ext'             => __( 'Greek Extended', 'advance' ),
        'khmer'                 => __( 'Khmer', 'advance' ),
        'latin'                 => __( 'Latin', 'advance' ),
        'latin-ext'             => __( 'Latin Extended', 'advance' ),
        'vietnamese'            => __( 'Vietnamese', 'advance' ),
        'serif'                 => _x( 'Serif', 'font style', 'advance' ),
        'sans-serif'            => _x( 'Sans Serif', 'font style', 'advance' ),
        'monospace'             => _x( 'Monospace', 'font style', 'advance' ),
		
		
    );

    return $config;

}
add_filter( 'kirki/config', 'advance_kirki_i10n' );

