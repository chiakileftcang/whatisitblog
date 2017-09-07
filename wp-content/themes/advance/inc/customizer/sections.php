<?php
/**
 * Add sections
 */
 
/* adding layout_front_page section*/


Kirki::add_section( 'layout_front_page', array(
    'title'          =>esc_attr__( 'General setting', 'advance' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,
    
    
) );


Kirki::add_section( 'advance_headtitle_settings', array(
    'title'          =>esc_attr__( 'Header and Title settings', 'advance' ),
     'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,
    
    
) );

Kirki::add_section( 'advance_color_settings', array(
    'title'          =>esc_attr__( 'Color and Reorder settings', 'advance' ),
     'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,
    
    
) );





Kirki::add_section( 'slider_setup', array(
    'title'          => esc_attr__( 'Static image setup', 'advance' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 2,
    
    
) );



Kirki::add_section( 'advance_servicesetup', array(
    'title'          =>esc_attr__( 'Service block setup  ' , 'advance'),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 4,
   
    
) );

Kirki::add_section( 'advance_aboutus_setting', array(
    'title'          =>esc_attr__( 'About us setup  ' , 'advance'),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 6,
   
    
) );

Kirki::add_section( 'advance_ourteam_setting', array(
    'title'          =>esc_attr__( 'Our Team setup  ' , 'advance'),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 8,
   
    
) );


Kirki::add_section( 'advance_callout',array(
    'title'          => esc_attr__( 'Welcome Section', 'advance' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 11,
    
    
) );




Kirki::add_section( 'advance_social', array(
    'title'          => esc_attr__( 'social', 'advance' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 13,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_section( 'advance_mobile', array(
    'title'          => esc_attr__( 'Mobile Layout', 'advance' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 14,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );