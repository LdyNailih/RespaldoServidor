<?php 

/**
 * business functions and definitions
 *
 * @package business
*/ 

/**
 * register the theme update
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'business', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=business' //Metadata URL.
); 

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'business_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function business_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on business, use a find and replace
	 * to change 'business' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'business', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'home-blog', 500, 375, array( 'center', 'center' ) );
	add_image_size( 'archive-blog', 800, 300, array( 'center', 'top' ) );
	add_image_size( 'member', 600, 400, array( 'center', 'top' ) );
	add_image_size( 'client', 400, 300, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'business' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );


	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'business_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // business_setup
add_action( 'after_setup_theme', 'business_setup' );

/**
 * Load Google Fonts.
 */
function load_fonts() {
            wp_register_style('googleFonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600');  
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');
	
/**
* Register and load font awesome CSS files using a CDN.
*
* @link http://www.bootstrapcdn.com/#fontawesome
* @author FAT Media 
*/
	
add_action( 'wp_enqueue_scripts', 'business_enqueue_awesome' );

function business_enqueue_awesome() {
wp_enqueue_style( 'business-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0' );  
}

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function business_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'business' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Page Middle Section (Left)', 'business' ),
		'id'            => 'homepage-middle-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Page Middle Section (Right)', 'business' ),
		'id'            => 'homepage-middle-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">', 
		'after_title'   => '</h3>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'First Footer Column', 'business' ),
		'id'            => 'footer_column_1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">', 
		'after_title'   => '</h5>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Second Footer Column', 'business' ),
		'id'            => 'footer_column_2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">', 
		'after_title'   => '</h5>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Third Footer Column', 'business' ),
		'id'            => 'footer_column_3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">', 
		'after_title'   => '</h5>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Fourth Footer Column', 'business' ),
		'id'            => 'footer_column_4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',  
		'after_title'   => '</h5>',  
	) );
	
	//Register the sidebar widgets   
	register_widget( 'business_Video_Widget' );
	register_widget( 'business_Contact_Info' );
	
}
add_action( 'widgets_init', 'business_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function business_scripts() {
	wp_enqueue_style( 'business-style', get_stylesheet_uri() );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts')); 
	
	if( $headings_font ) {
		wp_enqueue_style( 'business-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		wp_enqueue_style( 'business-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600');  
	}	
	if( $body_font ) {
		wp_enqueue_style( 'business-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );	
	} else {
		wp_enqueue_style( 'business-open', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600');
	} 
	
	if ( file_exists( get_stylesheet_directory_uri() . '/inc/my_style.css' ) ) {
	wp_enqueue_style( 'business-mystyle', get_stylesheet_directory_uri() . '/inc/my_style.css', array(), false, false ); 
	}
	
	wp_enqueue_style( 'business-sidr-component', get_template_directory_uri() . '/css/component.css' );
	
	if ( is_admin() ) {
    wp_enqueue_style( 'business-codemirror', get_stylesheet_directory_uri() . '/css/codemirror.css', array(), '1.0' ); 
	}

	wp_enqueue_script( 'business-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), false, false );
	wp_enqueue_script( 'business-classie', get_template_directory_uri() . '/js/classie.js', array(), false, true ); 
	wp_enqueue_script( 'business-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'business-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'business-slider', get_template_directory_uri() . '/js/jquery.sequence-min.js', array('jquery'), false, false );
	wp_enqueue_script( 'business-codemirrorJS', get_template_directory_uri() . '/js/codemirror.js', array(), false, true);
	wp_enqueue_script( 'business-cssJS', get_template_directory_uri() . '/js/css.js', array(), false, true);
	wp_enqueue_script( 'business-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array('jquery'), false, true);
 	wp_enqueue_script( 'business-placeholdertext', get_template_directory_uri() . '/js/placeholdertext.js', array('jquery'), false, true);
	
	if ( is_page_template( 'page-contact.php' ) ) { 
	wp_enqueue_script( 'business-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), false, true);
	wp_enqueue_script( 'business-verify', get_template_directory_uri() . '/js/verify.js', array('jquery'), false, true);  
	} 
	
	wp_enqueue_script( 'business-scripts', get_template_directory_uri() . '/js/business.scripts.js', array(), false, true );
  
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_front_page() ) {
		wp_enqueue_script( 'business-sequence', get_template_directory_uri() . '/js/sequence.scripts.js', array(), false, true );
	} 
}
add_action( 'wp_enqueue_scripts', 'business_scripts' );

/**
 * Load html5shiv
 */
function business_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'business_html5shiv' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/theme-admin_page.php'; 

/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php';   

/**
 * Include additional custom features.
 */
require get_template_directory() . '/inc/my-custom-css.php';
require get_template_directory() . '/inc/socialicons.php';

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php";
require get_template_directory() . "/widgets/video-widget.php"; 

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Change the excerpt length
 */
function business_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_length', '30'); 
	return $excerpt; 

}

add_filter( 'excerpt_length', 'business_excerpt_length', 999 );

/**
 * Slider Post Type.
 */
function slider_post_type() {

	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Slides', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Slides', 'text_domain' ),
		'view_item'           => __( 'View Slides', 'text_domain' ),
		'add_new_item'        => __( 'Add New Slide', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Slide', 'text_domain' ),
		'update_item'         => __( 'Update Slide', 'text_domain' ),
		'search_items'        => __( 'Search Slides', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'slides', 'text_domain' ),
		'description'         => __( 'Add a slide to your schedule.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_post_type', 0 );		
								
function slider_metaboxes( $meta_boxes ) {
    $prefix = '_sr_'; // Prefix for all fields
    $meta_boxes['slider_metabox'] = array(
        'id' => 'slider_metabox',
        'title' => 'Slide Settings',
        'pages' => array('slider'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
				
			array(
    			'name' => 'Description',
    			'desc' => 'The line under the title.',
    			'id' => $prefix . 'slider_description',
    			'type' => 'text'
				),
				
			array(
    			'name' => 'Button Text',
    			'id' => $prefix . 'slider_button',
    			'type' => 'text'
				),
				
			array(
   				'name' => __( 'Button URL', 'cmb' ),
    			'desc' => 'Enter the URL you would like to link to.',
    			'id'   => $prefix . 'slider_url',
    			'type' => 'text_url',
    			'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
				), 
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'slider_metaboxes' );			


/**
 * Team Post Type.
 */
function team_post_type() {

	$labels = array(
		'name'                => _x( 'Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Team Members', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Members', 'text_domain' ),
		'view_item'           => __( 'View Members', 'text_domain' ),
		'add_new_item'        => __( 'Add New Member', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Member', 'text_domain' ),
		'update_item'         => __( 'Update Member', 'text_domain' ),
		'search_items'        => __( 'Search Members', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'members', 'text_domain' ),
		'description'         => __( 'Add a member to your team.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'team', $args );

}

// Hook into the 'init' action
add_action( 'init', 'team_post_type', 0 );	

function team_metaboxes( $meta_boxes ) {
    $prefix = '_tm_'; // Prefix for all fields
    $meta_boxes['team_metabox'] = array(
        'id' => 'team_metabox',
        'title' => 'Member Information',
        'pages' => array('team'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
				
			array(
    			'name' => 'Name',
    			'id' => $prefix . 'member_name',
    			'type' => 'text'
				),	
				
			array(
    			'name' => 'Title',
    			'id' => $prefix . 'member_title',
    			'type' => 'text'
				),	
				
			array(
    			'name' => 'Brief Description',
    			'id' => $prefix . 'member_description',
    			'type' => 'text'
				),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'team_metaboxes' );	

/**
 * Client Post Type.
 */
function client_post_type() {

	$labels = array(
		'name'                => _x( 'Client', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Clients', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Clients', 'text_domain' ),
		'view_item'           => __( 'View Clients', 'text_domain' ),
		'add_new_item'        => __( 'Add New Client', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Client', 'text_domain' ),
		'update_item'         => __( 'Update Client', 'text_domain' ),
		'search_items'        => __( 'Search Clients', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'clients', 'text_domain' ),
		'description'         => __( 'Add a client to your resume.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'client', $args );

}

// Hook into the 'init' action
add_action( 'init', 'client_post_type', 0 );	

function client_metaboxes( $meta_boxes ) {
    $prefix = '_cl_'; // Prefix for all fields
    $meta_boxes['client_metabox'] = array(
        'id' => 'client_metabox',
        'title' => 'Client Information',
        'pages' => array('client'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
				
			array(
    			'name' => 'Company or Name',
    			'id' => $prefix . 'client_name',
    			'type' => 'text'
				),	
				
			array(
    			'name' => 'Description of Work',
    			'id' => $prefix . 'client_description',
    			'type' => 'text'
				),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'client_metaboxes' );	

/**
 * Work Post Type.
 */
function work_post_type() {

	$labels = array(
		'name'                => _x( 'Work', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Work Portfolio', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Works', 'text_domain' ),
		'view_item'           => __( 'View Works', 'text_domain' ),
		'add_new_item'        => __( 'Add New Work', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Work', 'text_domain' ),
		'update_item'         => __( 'Update Work', 'text_domain' ),
		'search_items'        => __( 'Search Works', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'works', 'text_domain' ),
		'description'         => __( 'Add a work to your portfolio.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'work', $args );

}

// Hook into the 'init' action
add_action( 'init', 'work_post_type', 0 );	
				

// Initialize custom post types 
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
} 