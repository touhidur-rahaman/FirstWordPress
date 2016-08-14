<?php
/**
 * Nordic functions and definitions
 *
 * @package Nordic
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}

if ( ! function_exists( 'nordic_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nordic_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Nordic, use a find and replace
	 * to change 'nordic' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nordic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
        add_image_size('nordic-large-thumb', 950, 450, true);
        add_image_size('nordic-index-thumb-split', 475, 285, true);
        add_image_size('nordic-index-thumb-full', 950, 285, true);
        
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nordic' ),
                'social' => __( 'Social Menu', 'nordic' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array( 'aside' ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nordic_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nordic_setup
add_action( 'after_setup_theme', 'nordic_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nordic_widgets_init() {
        
        register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'nordic' ),
		'id'            => 'sidebar-footer',
		'description'   => __('Footer widgets area appears in the footer' , 'nordic'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'nordic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nordic_scripts() {
	wp_enqueue_style( 'nordic-style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'nordic-layout-style' , get_template_directory_uri() . '/layouts/hover.css');
        
         //**Fonts:**//
        //**SIL Open Font License: 1.1 Amatic: https://www.google.com/fonts/specimen/Amatic+SC, **//
        //**SIL Open Font License: 1.1 Lato: https://www.google.com/fonts/specimen/Lato, **//
        //**SIL Open Font License: 1.1 PT Serif: https://www.google.com/fonts/specimen/PT+Serif**//
        //**SIL Open Font License: 1.1 Oswald: https://www.google.com/fonts/specimen/Oswald**//
        wp_enqueue_style('nordic-google-fonts', '//fonts.googleapis.com/css?family=Amatic+SC:400,700|Lato:400,100,400italic,700,900,900italic|PT+Serif:400,400italic,700,700italic|Oswald:400,300,700');
        
        //**FontAwesome: License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)**/
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css');
		
		//**Masonry, MIT License: http://desandro.mit-license.org/**//
        wp_enqueue_script( 'nordic-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20150402', true );
                
        wp_enqueue_script( 'nordic-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20150402', true );                                
        
		wp_enqueue_script( 'nordic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
             
		wp_enqueue_script( 'nordic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
		

        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nordic_scripts' );

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
