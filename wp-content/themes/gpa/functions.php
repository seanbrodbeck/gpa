<?php
/**
 * gpa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gpa
 */

if ( ! function_exists( 'gpa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gpa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gpa, use a find and replace
		 * to change 'gpa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gpa', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'home-news', 450, 320, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gpa' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gpa_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gpa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gpa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gpa_content_width', 640 );
}
add_action( 'after_setup_theme', 'gpa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gpa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gpa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gpa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gpa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gpa_scripts() {
	wp_enqueue_style( 'gpa-style', get_stylesheet_uri() );

	wp_enqueue_style( 'gpa-bootstrap-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css', array(), null , 'all' );

	wp_enqueue_style( 'gpa-font-awesome', get_template_directory_uri() . '/dist/css/font-awesome.min.css', array(), null , 'all' );

	wp_enqueue_style( 'gpa-flexslider', get_template_directory_uri() . '/dist/css/flexslider.css', array(), null , 'all' );

	wp_enqueue_style( 'gpa-owl-carousel', get_template_directory_uri() . '/dist/css/owl.carousel.css', array(), null , 'all' );

	wp_enqueue_style( 'gpa-styles', get_template_directory_uri() . '/dist/css/styles.css', array(), null , 'all' );

	wp_enqueue_script( 'gpa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gpa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'gpa-bootstrap', get_template_directory_uri() . '/dist/js/jquery-1.11.3.min.js', array(), null , true );

	wp_enqueue_script( 'gpa-bootstrap-popper', get_template_directory_uri() . '/dist/js/popper.min.js', array(), null , true );

	wp_enqueue_script( 'gpa-bootstrap-script', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array(), null , true );

	wp_enqueue_script( 'gpa-flexslider-js', get_template_directory_uri() . '/dist/js/jquery.flexslider-min.js', array(), null , true );

	wp_enqueue_script( 'gpa-owl-js', get_template_directory_uri() . '/dist/js/owl.carousel.min.js', array(), null , true );

	wp_enqueue_script( 'gpa-scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), null , true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gpa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
