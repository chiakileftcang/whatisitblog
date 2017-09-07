/**
 * Handles the customizer live preview settings.
 */
jQuery( document ).ready( function() {

	/*
	 * Shows a live preview of changing the site title.
	 */
	wp.customize( 'blogname', function( value ) {

		value.bind( function( to ) {

			jQuery( '#site-title h1 a' ).html( to );

		} ); // value.bind

	} ); // wp.customize
	
	


	/*
	 * Shows a live preview of changing the site description.
	 */
	wp.customize( 'blogdescription', function( value ) {

		value.bind( function( to ) {

			jQuery( '#site-title .site-description' ).html( to );

		} ); // value.bind

	} ); // wp.customize
	

} ); // jQuery( document ).ready

