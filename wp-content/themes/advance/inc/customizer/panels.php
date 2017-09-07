<?php

/**
 * Add panels
 */


/* adding layout panel */


Kirki::add_panel( 'theme_options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'advance' ),
    'description' => esc_attr__( 'This panel will provide all the options of the Theme.', 'advance' ),
) );

?>