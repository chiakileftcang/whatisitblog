<?php

Kirki::add_config( 'advance', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );


/* adding layout_front_page_setting field */

Kirki::add_field( 'advance', array(
    'type'        => 'custom',
    'settings'    => 'advance_to_pro',
    'section'     => 'upgrade_to_pro',
	'default'     => '<div class="upgrade_pro"><a href="'. esc_url('http://www.imonthemes.com/advance-pro/').'" target="_blank">' . esc_html__( 'Upgrade to pro', 'advance' ) . '</a></div>',
    'priority'    => 10,
) );
Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_body_preloder',
    'label'       => esc_attr__( 'Disable preloder', 'advance' ),
    'section'     => 'layout_front_page',
    'default'     => '1',
    'priority'    => 10,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_sticky_menu',
    'label'       => esc_attr__( 'Disable sticky menu', 'advance' ),
    'section'     => 'layout_front_page',
    'default'     => '0',
    'priority'    => 10,
) );




Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_body_layout',
    'label'       => esc_attr__( 'Make website box layout', 'advance' ),
    'section'     => 'layout_front_page',
    'default'     => '0',
    'priority'    => 10,
) );


Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_latest_post',
    'label'       => esc_attr__( 'Disable Latest post in front page', 'advance' ),
    'section'     => 'layout_front_page',
    'default'     => '1',
    'priority'    => 10,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_latest_nopic',
    'label'       => esc_attr__( 'Disable latest post no photo', 'advance' ),
    'section'     => 'layout_front_page',
    'default'     => '1',
    'priority'    => 10,
) );


/* Footer section */


Kirki::add_field( 'advance', array(
    'type'        => 'textarea',
    'settings'    => 'advance_footertext',
    'label'       => esc_attr__( 'Footer Text.', 'advance' ),
    'section'     => 'layout_front_page',
    'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '.copytext',
            'function' => 'html',
            'property' => '',
            
        ),
    ), 
	
    
) );


/* header & title */

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_header_checkbox',
    'label'       => esc_attr__( 'Disable Transparent Header ', 'advance' ),
    'section'     => 'advance_headtitle_settings',
    'default'     => '1',
    'priority'    => 10,
) );

		
		
/*  title typography */

Kirki::add_field( 'advance', array(
	'type'        => 'typography',
	'settings'    => 'title_typography',
	'label'       => esc_attr__( 'Site title Typography', 'advance' ),
	'section'     => 'advance_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '48px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#fff',
		'text-transform' => 'none',
		
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#site-title .site-title',
		),
	),
) );


Kirki::add_field( 'advance', array(
	'type'        => 'typography',
	'settings'    => 'sitedescription_typography',
	'label'       => esc_attr__( 'Site description Typography', 'advance' ),
	'section'     => 'advance_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '12px',
		'line-height'    => '0',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#fff',
		'text-transform' => 'none',
		
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#site-title .site-description',
		),
	),
) );


/*  menu typography */
Kirki::add_field( 'advance', array(
	'type'        => 'typography',
	'settings'    => 'menus_typography',
	'label'       => esc_attr__( 'Site menu Typography', 'advance' ),
	'section'     => 'advance_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#fff',
		'text-transform' => 'uppercase ',
		
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#navmenu li a,#navmenu ul li ul li a,.branding--clone #navmenu li a,.branding--clone #navmenu ul li ul li a,.branding-single #navmenu li a,.branding-single #navmenu ul li ul li a,.home #navmenu ul li.current-menu-item > a,.social-advance i',
		),
	),
) );


	


/*color and reorder */


Kirki::add_field( 'advance', array(
    'type'        => 'color',
    'settings'    => 'advance_flavour_color',
    'label'       => esc_attr__( 'Flavour color', 'advance' ),
    'section'     => 'advance_color_settings',
    'default'     => '#1cbac8',
    'priority'    => 10,
	
	'output' => array(
        array(
            'element'  => '.postitle_lay a,#footer .widgets .widgettitle, #midrow .widgets .widgettitle a,#sidebar .widgettitle, #sidebar .widgettitle a,#commentform a ,.feature-box i,#our-team-advance h1,.comments-title, .post_content a,.node h1 a,#navmenu ul li.current-menu-item > a,a',
			
            'property' => 'color',
            'units'    => '',
        ),
        array(
            'element'  => '.colored-line,#navmenu .search-form .search-submit,.search-form .search-submit,#navmenu .search-form .search-submit,.search-form .search-submit,.search-box-wrapper,#loading-center-absolute .object,#slider .hero_btn_full',
            'property' => 'background-color',
            'units'    => '',
        ),
		 array(
            'element'  => '.h-line,.nivo-caption .h-line,.btn-slider-advance,#slider .hero_btn_full,.advance_nav .current',
            'property' => 'border-color',
            'units'    => '',
        ),
		
		 array(
            'element'  => '.pagination .current,.overlay-search,.advance-search .search-form,.advance-search .search-form .search-submit',
            'property' => 'background',
            'units'    => '',
        ),
    )

) );



Kirki::add_field( 'advance', array(
    'type'        => 'color',
    'settings'    => 'advance_hover_color',
    'label'       => esc_attr__( 'Hover color', 'advance' ),
    'section'     => 'advance_color_settings',
    'default'     => '#ff6699',
    'priority'    => 10,
	
	'output' => array(
        array(
            'element'  => '#navmenu li a:hover,.post_info a:hover,.comment-author vcard:hover',
			
            'property' => 'color',
            'units'    => '',
        ),
        array(
            'element'  => '#navmenu ul li ul li:hover,#navmenu ul > li ul li:hover,btn-slider-advance:hover,btn-border-light:hover,#submit:hover, #searchsubmit:hover,#navmenu ul > li::after,.branding-single--clone #navmenu ul li ul:hover,#slider .hero_btn:hover,.btn-lines .line-top,
.btn-lines .line-bottom,.btn-lines .line-left,.btn-lines .line-right,.actionbox-controls-two .hero_btn:hover,#slider  .hero_btn_full:hover,.read_more:hover',
            'property' => 'background-color',
            'units'    => '',
        ),
		
		  array(
            'element'  => '#slider .hero_btn:hover,#slider  .hero_btn_full:hover,.read_more:hover',
            'property' => 'border-color',
            'units'    => '',
        ),
    )



) );


/* Slider settings */



Kirki::add_field( 'advance', array(
    'type'        => 'switch',
    'settings'    => 'advance_slider_enabel',
    'label'       => esc_attr__( 'Enable/disabel Static image', 'advance' ),
    'section'     => 'slider_setup',
    'default'     => '1',
    'priority'    => 1,
    'choices'     => array(
        'off' => esc_attr__( 'off', 'advance' ),
		'on'  =>esc_attr__ ( 'on', 'advance' ),
    ),
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_Static_Sliderbutton',
    'label'       => esc_attr__( 'Remove Static 1st button', 'advance' ),
    'section'     => 'slider_setup',
    'default'     => '1',
    'priority'    => 1,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_Static_Sliderpara',
    'label'       => esc_attr__( 'Make Static image full screen', 'advance' ),
    'section'     => 'slider_setup',
    'default'     => '0',
    'priority'    => 1,
) );
 
Kirki::add_field('advance', array(
                'type' => 'select',
                'settings' => 'Staticimage_post',
                'label' => esc_attr__('Choose Post For Static image', 'advance'),
                'description' => esc_attr__('Choose for post Static image.', 'advance'),
                'help' => '',
                'section' => 'slider_setup',
                'default' => 'Hello world!',
                'priority' => 10,
                'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => -1, 'post_type' => 'post' ) ),
            ));
 

            
           


Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'advance_link_name1',
        'label'    => esc_attr__( 'Static image button 1st', 'advance' ),
        'section'  => 'slider_setup',
        'default'  => esc_attr__( 'Know More', 'advance' ),
        'priority' => 1,
		'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '#slider .hero_btn',
            'function' => 'html',
            'property' => '',
            
        ),
    ), 
	
    ));	

Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'advance_link_name2',
        'label'    => esc_attr__( 'Static image button 2nd', 'advance' ),
        'section'  => 'slider_setup',
        'default'  => esc_attr__( 'Try Now !', 'advance' ),
        'priority' => 1,
		'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '#slider .hero_btn_full',
            'function' => 'html',
            'property' => '',
            
        ),
    ), 
    ));	



Kirki::add_field( 'advance', array(
    'type'        => 'color',
    'settings'    => 'advance_slider_textcolor',
    'label'       => esc_attr__( 'Static image title text color', 'advance' ),
    'section'     => 'slider_setup',
    'default'     => '#ffffff',
    'priority'    => 1,
	
	'output' => array(
        array(
            'element'  => '#slider .masthead h1,.masthead .masthead-dsc p',
            'property' => 'color',
            'units'    => '',
        ),),
		'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '#slider .masthead h1,.masthead .masthead-dsc p',
            'function' => 'css',
            'property' => 'color',
            
        ),
    ), 
		
) );


/* static slider settings */

	
	
	Kirki::add_field( 'advance', array(
        'type'     => 'image',
        'settings'  => 'advance_staticslider_image',
        'label'    => esc_attr__( 'Upload static image  ', 'advance' ),
        'section'  => 'slider_setup',
		'default'     => get_template_directory_uri() . '/images/slider.jpg',
        'priority' => 10,
    ));	
	


Kirki::add_field( 'advance', array(
	'type'        => 'slider',
	'settings'    => 'slider_title_font_size',
	'label'       => esc_attr__( 'Title Font size', 'advance' ),
	'section'     => 'slider_setup',
	'default'     => 80,
	'priority' => 10,
	'choices'     => array(
		'min'  => '12',
		'max'  => '200',
		'step' => '1',
	),
	'output'   => array(
        array(
            'element'  => '.masthead h1',
            'property' => 'font-size',
			'units'    => 'px',
        ),
    ),
	'transport' => 'auto',
	
) );


	
Kirki::add_field( 'advance', array(
	'type'        => 'slider',
	'settings'    => 'slider_tagline_font_size',
	'label'       => esc_attr__( 'Tagline Font size', 'advance' ),
	'section'     => 'slider_setup',
	'default'     => 18,
	'priority' => 10,
	'choices'     => array(
		'min'  => '12',
		'max'  => '200',
		'step' => '1',
	),
	'output'   => array(
        array(
            'element'  => '.masthead .masthead-dsc p',
            'property' => 'font-size',
			'units'    => 'px',
        ),
    ),
	'transport' => 'auto',
	
) );
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'advance_staticslider_uri1',
        'label'    => esc_attr__( 'static slider link 1', 'advance' ),
        'section'  => 'slider_setup',
        'priority' => 10,
		
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'advance_staticslider_uri2',
        'label'    => esc_attr__( 'static slider link 2', 'advance' ),
        'section'  => 'slider_setup',
        'priority' => 10,
		
    ));


	


/* social icon */
	
Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_social1_checkbox',
    'label'       => esc_attr__( 'Show social Icon in header', 'advance' ),
    'section'     => 'advance_social',
    'default'     => '1',
    'priority'    => 1,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_social2_checkbox',
    'label'       => esc_attr__( 'Show social Icon in footer', 'advance' ),
    'section'     => 'advance_social',
    'default'     => '0',
    'priority'    => 1,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_search_box',
    'label'       => esc_attr__( 'Show search Icon in header', 'advance' ),
    'section'     => 'advance_social',
    'default'     => '0',
    'priority'    => 1,
) );


	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'fbsoc_text_advance',
        'label'    => esc_attr__( 'Facebook', 'advance' ),
        'section'  => 'advance_social',
        
        'priority' => 1,
    ));

Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'ttsoc_text_advance',
        'label'    => esc_attr__( 'Twitter', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 2,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'gpsoc_text_advance',
        'label'    => esc_attr__( 'Google Plus', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 3,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'pinsoc_text_advance',
        'label'    => esc_attr__( 'Pinterest', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 4,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'ytbsoc_text_advance',
        'label'    => esc_attr__( 'YouTube', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 5,
    ));


Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'linsoc_text_advance',
        'label'    => __( 'Linkedin', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 6,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'instagram_text_advance',
        'label'    => __( 'Instagram', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 7,
    ));
	
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'flisoc_text_advance',
        'label'    => esc_attr__( 'Flickr', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 8,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'vimsoc_text_advance',
        'label'    => esc_attr__( 'Vimeo', 'advance' ),
        'section'  => '',
        'priority' => 9,
    ));
	
Kirki::add_field( 'advance', array(
        'type'     => 'text',
        'settings'  => 'rsssoc_text_advance',
        'label'    => esc_attr__( 'RSS', 'advance' ),
        'section'  => 'advance_social',
        'priority' => 10,
    ));


		
/* Typography settings */




/* mobile layout settings */

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_mobile_slider',
    'label'       => esc_attr__( 'Disable slider in mobile ', 'advance' ),
    'section'     => 'advance_mobile',
    'default'     => '1',
    'priority'    => 10,
) );

Kirki::add_field( 'advance', array(
    'type'        => 'toggle',
    'settings'    => 'advance_mobile_sidebar',
    'label'       => esc_attr__( 'Disable sidebar in mobile ', 'advance' ),
    'section'     => 'advance_mobile',
    'default'     => '1',
    'priority'    => 10,
) );