<?php
/**
 * Business Theme Customizer
 *
 * @package business
 */
 
function business_theme_customizer( $wp_customize ) {
	
	//allows donations
    class business_Info extends WP_Customize_Control { 
     
        public $label = '';
        public function render_content() {
        ?>

        <?php
        }
    }	
	
	// Donations
    $wp_customize->add_section(
        'business_theme_info',
        array(
            'title' => __('Like Business? Help Us Out.', 'business'),
            'priority' => 5, 
            'description' => __('We do all we can do to make all our themes free for you. While we enjoy it, and it makes us happy to help out, a little appreciation can help us to keep theming.</strong><br/><br/> Please help support our mission and continued development with a donation of $5, $10, $20, or if you are feeling really kind $100..<br/><br/> <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7LMGYAZW9C5GE" target="_blank" rel="nofollow"><img class="" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" alt="Make a donation to ModernThemes" /></a>', 'business' ), 
        ) 
    );  
	 
    //Donations section
    $wp_customize->add_setting('business_help', array(   
			'sanitize_callback' => 'business_no_sanitize', 
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_control( new business_Info( $wp_customize, 'business_help', array(
        'section' => 'business_theme_info', 
        'settings' => 'business_help', 
        'priority' => 10
        ) )
    ); 
	
	// Fonts  
    $wp_customize->add_section( 
        'business_typography',
        array(
            'title' => __('Google Fonts', 'business' ),   
            'priority' => 39,
        )
    );
	
    $font_choices = 
        array(
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
            'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Raleway:400,700' => 'Raleway',  
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Oswald:400,700' => 'Oswald',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'business_sanitize_fonts',
        )
    );
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
            'description' => __('Select your desired font for the headings. Open Sans is the default Heading font.', 'business'),
            'section' => 'business_typography',
            'choices' => $font_choices
        )
    );
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'business_sanitize_fonts',
        )
    );
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
            'description' => __( 'Select your desired font for the body. Open Sans is the default Body font.', 'business' ), 
            'section' => 'business_typography',  
            'choices' => $font_choices 
        ) 
    );

	// Colors
    $wp_customize->add_setting( 'business_link_color', array(
        'default'     => '',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_link_color', array(
        'label'	   => __( 'Link Color', 'business' ),
        'section'  => 'colors',
        'settings' => 'business_link_color',
		'priority' => 3 
    ) ) );
	
	$wp_customize->add_setting( 'business_hover_color', array(
        'default'     => '',   
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_hover_color', array(
        'label'	   => __( 'Hover Color', 'business' ),
        'section'  => 'colors',
        'settings' => 'business_hover_color',
		'priority' => 4  
    ) ) );
	
	$wp_customize->add_setting( 'business_custom_color', array( 
        'default'     => '', 
		'sanitize_callback' => 'sanitize_hex_color',
    ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_custom_color', array(
        'label'	   => __( 'Theme Color', 'business' ),
        'section'  => 'colors',
        'settings' => 'business_custom_color', 
		'priority' => 1
    ) ) );
	
	$wp_customize->add_setting( 'business_custom_color_hover', array( 
        'default'     => '', 
		'sanitize_callback' => 'sanitize_hex_color', 
    ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_custom_color_hover', array(
        'label'	   => __( 'Theme Hover Color', 'business' ),
        'section'  => 'colors',
        'settings' => 'business_custom_color_hover', 
		'priority' => 2
    ) ) ); 

    // Logo upload
    $wp_customize->add_section( 'business_logo_section' , array(  
	    'title'       => __( 'Logo and Icons', 'business' ),
	    'priority'    => 25,
	    'description' => __( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'business' ),
	) );

	$wp_customize->add_setting( 'business_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'business_logo', array(
		'label'    => __( 'Logo', 'business' ),
		'section'  => 'business_logo_section', 
		'settings' => 'business_logo', 
		'priority' => 1, 
	) ) );
	
	// Logo Width
	$wp_customize->add_setting( 'logo_size', array(
		'default' => '200',
		'sanitize_callback' => 'business_sanitize_text', 
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo_size', array( 
		'label'    => __( 'Change the width of the Logo in PX.', 'business' ),
		'description' => __( 'Only enter numeric value', 'business' ),
		'section'  => 'business_logo_section', 
		'settings' => 'logo_size',  
		'priority'   => 2 
	) ) );
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri() . '/img/favicon.png'),  
			'sanitize_callback' => 'esc_url_raw',
		)
	);
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => __( 'Upload your favicon (16x16 pixels)', 'business' ),
			   'type' 			=> 'image',
               'section'        => 'business_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
            )
        )
    );
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (144x144 pixels)', 'business' ),
               'type'           => 'image',
               'section'        => 'business_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
            )
        )
    );
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (114x114 pixels)', 'business' ),
               'type'           => 'image',
               'section'        => 'business_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
            )
        )
    );
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (72x72 pixels)', 'business' ),
               'type'           => 'image',
               'section'        => 'business_logo_section', 
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
            )
        )
    );
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => __( 'Upload your Apple Touch Icon (57x57 pixels)', 'business' ),
               'type'           => 'image',
               'section'        => 'business_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
            )
        )
    );
	
	
	// Home Page
	$wp_customize->add_section( 'business_home_section' , array(  
	    'title'       => __( 'Home Page Top Section', 'business' ),
	    'priority'    => 30,
	    'description' => __( 'Icons are a beautiful expression. Choose from any of <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">these icons</a>. Example: "fa-arrow-right"', 'business' ) 
	) );
	
	$wp_customize->add_setting('active_cta',
	array(
	        'sanitize_callback' => 'business_sanitize_checkbox',
	    ) 
	);
	
	$wp_customize->add_control( 
    'active_cta', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Call-to-Action', 'business' ), 
        'section' => 'business_home_section', 
		'priority'   => 1
    ));
	
	$wp_customize->add_setting('active_services',
	array(
	        'sanitize_callback' => 'business_sanitize_checkbox',
	    ) 
	);   
	
	$wp_customize->add_control( 
    'active_services', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Services Columns', 'business' ),  
        'section' => 'business_home_section', 
		'priority'   => 2
    ));
	
	// CTA Text
	$wp_customize->add_setting( 'cta_text', array(
		'sanitize_callback' => 'business_sanitize_text',		
	) ); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_text', array(
		'label'    => __( 'Call-to-action display text', 'business' ),
		'section'  => 'business_home_section',  
		'settings' => 'cta_text',
		'priority'   => 5
	) ) );
	
	// CTA Button Text
	$wp_customize->add_setting( 'cta_button_text', array( 
		'sanitize_callback' => 'business_sanitize_text', 
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_button_text', array( 
		'label'    => __( 'Call-to-action button text', 'business' ),
		'section'  => 'business_home_section',  
		'settings' => 'cta_button_text',
		'priority'   => 6
	) ) );
	
	// Page Drop Downs 
	$wp_customize->add_setting('business_ctalink_url', 
	array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'business_sanitize_int',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_cta_url', array( 
    'label' => __( 'Front Page Call-to-Action URL', 'business' ),
    'section' => 'business_home_section',
	'type' => 'dropdown-pages',
    'settings' => 'business_ctalink_url',
	'priority'   => 7
	) ) );
	
	// Icon 1
	$wp_customize->add_setting( 'home_icon_1' , 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_1', array( 
    'label' => __( 'First Icon', 'business' ),   
    'section' => 'business_home_section',
    'settings' => 'home_icon_1',
	'priority'   => 8
	) ) );
	
	// Title 1
	$wp_customize->add_setting( 'icon_title_1', 
	array( 
		'sanitize_callback' => 'business_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_1', array( 
    'label' => __( 'First Title', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_title_1',
	'priority'   => 9
	) ) );
	
	// Descripton 1
	$wp_customize->add_setting( 'icon_desc_1', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	  
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_1', array( 
    'label' => __( 'First Column Description', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_desc_1', 
	'priority'   => 10
	) ) ); 
	
	// Icon 2
	$wp_customize->add_setting( 'home_icon_2', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_2', array( 
    'label' => __( 'Second Icon', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'home_icon_2',
	'priority'   => 11
	) ) );
	
	// Title 2
	$wp_customize->add_setting( 'icon_title_2', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_2', array( 
    'label' => __( 'Second Title', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_title_2',
	'priority'   => 12
	) ) );
	
	// Descripton 2
	$wp_customize->add_setting( 'icon_desc_2', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_2', array( 
    'label' => __( 'Second Column Description', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_desc_2', 
	'priority'   => 13
	) ) ); 
	
	// Icon 3
	$wp_customize->add_setting( 'home_icon_3', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_3', array( 
    'label' => __( 'Third Icon', 'business' ),    
    'section' => 'business_home_section',
    'settings' => 'home_icon_3',
	'priority'   => 14
	) ) );
	
	// Title 3
	$wp_customize->add_setting( 'icon_title_3', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_3', array( 
    'label' => __( 'Third Title', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_title_3',
	'priority'   => 15
	) ) ); 
	
	// Descripton 3
	$wp_customize->add_setting( 'icon_desc_3', 
	array(
		'sanitize_callback' => 'business_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_3', array( 
    'label' => __( 'Third Column Description', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_desc_3',
	'priority'   => 16
	) ) ); 
	
	// Icon 4
	$wp_customize->add_setting( 'home_icon_4', 
	array( 
		'sanitize_callback' => 'business_sanitize_text',  
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_icon_4', array( 
    'label' => __( 'Fourth Icon', 'business' ),   
    'section' => 'business_home_section',
    'settings' => 'home_icon_4',  
	'priority'   => 17
	) ) ); 
	
	// Title 4
	$wp_customize->add_setting( 'icon_title_4', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	   
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_title_4', array( 
    'label' => __( 'Fourth Title', 'business' ),   
    'section' => 'business_home_section',
    'settings' => 'icon_title_4',  
	'priority'   => 18
	) ) );
	
	// Descripton 4
	$wp_customize->add_setting( 'icon_desc_4', 
	array( 
		'sanitize_callback' => 'business_sanitize_text',  
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'icon_desc_4', array( 
    'label' => __( 'Fourth Column Description', 'business' ),  
    'section' => 'business_home_section',
    'settings' => 'icon_desc_4', 
	'priority'   => 19 
	)));
	
	// Home Page Middle 
	$wp_customize->add_section( 'business_home_middle' , array(  
	    'title'       => __( 'Home Page Middle Section', 'business' ),
	    'priority'    => 31,
	    'description' => __( 'Customize the middle section of your home page.', 'business' )  
	));
	
	$wp_customize->add_setting('active_middle',
	    array(
	        'sanitize_callback' => 'business_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_middle', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Middle Widget Area', 'business' ),  
        'section' => 'business_home_middle', 
		'priority'   => 1
    ));
	
	$wp_customize->add_setting('active_blog',
	    array(
	        'sanitize_callback' => 'business_sanitize_checkbox',
	    ) 
	);
	
	$wp_customize->add_control( 
    'active_blog', 
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Home Blog Area', 'business' ),  
        'section' => 'business_home_middle', 
		'priority'   => 2
    )); 
	
	// Home Page Middle Main Title
	$wp_customize->add_setting( 'business_main_title', 
	array( 
		'sanitize_callback' => 'business_sanitize_text',
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_main_title', array( 
    'label' => __( 'Home Page Main Title. Edit the content as a widget in the widget area.', 'business' ),  
    'section' => 'business_home_middle', 
    'settings' => 'business_main_title',  
	'priority'   => 3
	) ) );
	
	// Home Page Middle Subtitle
	$wp_customize->add_setting( 'business_sub_title', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_sub_title', array( 
    'label' => __( 'Home Page Middle Subtitle', 'business' ),  
    'section' => 'business_home_middle', 
    'settings' => 'business_sub_title', 
	'priority'   => 4
	) ) );
	
	// Home Page Middle Blog Title
	$wp_customize->add_setting( 'business_home_blog_title', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_home_blog_title', array( 
    'label' => __( 'Home Page Blog Title', 'business' ),
    'section' => 'business_home_middle', 
    'settings' => 'business_home_blog_title', 
	'priority'   => 5 
	) ) );
	
	// Home Page Middle Blog Subtitle
	$wp_customize->add_setting( 'business_home_blog_subtitle', 
	array( 
		'sanitize_callback' => 'business_sanitize_text', 
	));
	  
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_home_blog_subtitle', array( 
    'label' => __( 'Home Page Blog Subtitle', 'business' ), 
    'section' => 'business_home_middle', 
    'settings' => 'business_home_blog_subtitle', 
	'priority'   => 6 
	) ) );
	
	// Bottom CTA
	$wp_customize->add_section( 'business_bottom_cta' , array(  
	    'title'       => __( 'Before Footer Call-to-action', 'business' ),
	    'priority'    => 32, 
	    'description' => __( 'Customize the call-to-action before your footer', 'business' ) 
	) );
	
	$wp_customize->add_setting('active_cta_bottom',
	    array(
	        'sanitize_callback' => 'business_sanitize_checkbox',
	    ) 
	);  
	
	$wp_customize->add_control( 
    'active_cta_bottom',
    array(
        'type' => 'checkbox',
        'label' => __( 'Hide Bottom Call-to-Action', 'business' ), 
        'section' => 'business_bottom_cta',  
		'priority'   => 1
    ));
	
	// CTA Text
	$wp_customize->add_setting( 'cta_text_bottom', array(
		'sanitize_callback' => 'business_sanitize_text', 
	) ); 

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_text_bottom', array(
		'label'    => __( 'Call-to-action display text', 'business' ),
		'section'  => 'business_bottom_cta',  
		'settings' => 'cta_text_bottom',
		'priority'   => 2
	) ) );
	
	// CTA Button Text
	$wp_customize->add_setting( 'cta_button_text_bottom', array( 
		'sanitize_callback' => 'business_sanitize_text', 
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_button_text_bottom', array( 
		'label'    => __( 'Call-to-action button text', 'business' ),
		'section'  => 'business_bottom_cta',  
		'settings' => 'cta_button_text_bottom',
		'priority'   => 3 
	) ) );
	
	// Page Drop Downs 
	 $wp_customize->add_setting('business_ctalink_url_bottom', 
	 array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'business_sanitize_int', 
	)); 
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_cta_url_bottom', array( 
    'label' => __( 'Before Footer Call-to-action URL', 'business' ), 
    'section' => 'business_bottom_cta', 
	'type' => 'dropdown-pages',
    'settings' => 'business_ctalink_url_bottom',
	'priority'   => 4  
	) ) );
	 
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => __( 'Footer', 'business' ),
    	'priority' => 33,
    	'description' => __( 'Customize your footer area', 'business' )
	) );

	// Footer Byline Text 
	$wp_customize->add_setting( 'business_footerid', array(
		'sanitize_callback' => 'business_sanitize_text', 
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_footerid', array(
    'label' => __( 'Footer Byline Text', 'business' ),
    'section' => 'footer-custom',
    'settings' => 'business_footerid',
	'priority'   => 6  
) ) ); 

    // Choose excerpt or full content on blog
    $wp_customize->add_section( 'business_layout_section' , array( 
	    'title'       => __( 'Layout', 'business' ),
	    'priority'    => 45, 
	    'description' => 'Change how business displays posts', 
	) );

	$wp_customize->add_setting( 'business_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'business_sanitize_index_content',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'business_post_content', array(
		'label'    => __( 'Post content', 'business' ),
		'section'  => 'business_layout_section',
		'settings' => 'business_post_content',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	) ) );
	
	//Excerpt 
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '30',
        )       
    );
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 12, 
        'section'     => 'business_layout_section',
        'label'       => __('Excerpt length', 'business'),
        'description' => __('Choose your excerpt length here. Default: 30 words', 'business'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5,
            'style' => 'padding: 15px;', 
        ), 
    ) );  

	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10; 

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'business_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
 

}
add_action('customize_register', 'business_theme_customizer');


/**
 * Sanitizes a hex color. Identical to core's sanitize_hex_color(), which is not available on the wp_head hook.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or null.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 1.7
 */
function business_sanitize_hex_color( $color ) {
	if ( '#FF0000' === $color ) 
		return '';

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;

	return null;
}

/**
 * Sanitizes our post content value (either excerpts or full post content).
 *
 * @since 1.7
 */
function business_sanitize_index_content( $content ) { 
	if ( 'option2' == $content ) {
		return 'option2';
	} else {
		return 'option1';
	}
}

//Checkboxes
function business_sanitize_checkbox( $input ) { 
	if ( $input == 1 ) {  
		return 1;
	} else {
		return '';
	}
}

//Integers
function business_sanitize_int( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
//Text
function business_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

//Sanitizes Fonts 
function business_sanitize_fonts( $input ) {  
    $valid = array(
            'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
            'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Raleway:400,700' => 'Raleway',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',     
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Oswald:400,700' => 'Oswald',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

//No sanitize - empty function for options that do not require sanitization -> to bypass the Theme Check plugin
function business_no_sanitize( $input ) {
}

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function business_add_customizer_css() {
	$color = business_sanitize_hex_color( get_theme_mod( 'business_link_color' ) );
	?>
	<!-- business customizer CSS -->
	<style>
		body {
			border-color: <?php echo $color; ?>;
		}
		a {
			color: <?php echo $color; ?>;
		}
		
		a:hover {
			color: <?php echo get_theme_mod( 'business_hover_color' ) ?>;  
		}
		
		#sequence .slide-arrow { background: <?php echo get_theme_mod( 'business_custom_color' ) ?>; } 
		.main-navigation .current_page_item a, .main-navigation .current-menu-item a, .main-navigation li:hover > a, a:focus, a:active { color: <?php echo get_theme_mod( 'business_custom_color' ) ?> !important; }
		.services .fa, .social-media-icons .fa  { color: <?php echo get_theme_mod( 'business_custom_color' ) ?>; }  
		.entry-header { background: <?php echo get_theme_mod( 'business_custom_color' ) ?>; }
		.home-entry-title:after, .member-entry-title:after, .works-entry-title:after, .client-entry-title:after { border-color: <?php echo get_theme_mod( 'business_custom_color' ) ?>; } 
		.main-navigation ul ul li, blockquote { border-color: <?php echo get_theme_mod( 'business_custom_color' ) ?>; }
		button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo get_theme_mod( 'business_custom_color' ) ?>; border-color: <?php echo get_theme_mod( 'business_custom_color' ) ?>; }  
		
		.home-blog .entry-footer:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo get_theme_mod( 'business_custom_color_hover') ?>; background: <?php echo get_theme_mod( 'business_custom_color_hover') ?>; }  
		  
	</style>
<?php }
add_action( 'wp_head', 'business_add_customizer_css' );  
