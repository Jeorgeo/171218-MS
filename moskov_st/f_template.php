<?php
/**
 * ragnelia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ragnelia
 */

if ( ! function_exists( 'ragnelia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ragnelia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ragnelia, use a find and replace
		 * to change 'ragnelia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ragnelia', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ragnelia' ),
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
		add_theme_support( 'custom-background', apply_filters( 'ragnelia_custom_background_args', array(
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
add_action( 'after_setup_theme', 'ragnelia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ragnelia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ragnelia_content_width', 640 );
}
add_action( 'after_setup_theme', 'ragnelia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ragnelia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ragnelia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ragnelia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты - телефон(мобильная версия)', 'ragnelia' ),
		'id'            => 'phone-mobile',
		'description'   => esc_html__( 'Add widgets here.', 'ragnelia' ),
		'before_widget' => '<div class="phone-link">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты - телефон', 'ragnelia' ),
		'id'            => 'phone',
		'description'   => esc_html__( 'Add widgets here.', 'ragnelia' ),
		'before_widget' => '<div class="phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты - почта', 'ragnelia' ),
		'id'            => 'mail',
		'description'   => esc_html__( 'Add widgets here.', 'ragnelia' ),
		'before_widget' => '<div class="email">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контакты - почта для форм', 'ragnelia' ),
		'id'            => 'admin_mail',
		'description'   => esc_html__( 'Add widgets here.', 'ragnelia' ),
		'before_widget' => '<div class="email">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ragnelia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ragnelia_scripts() {
	wp_enqueue_style( 'ragnelia-style', get_stylesheet_uri() );

	wp_enqueue_style( 'ragnelia-style-slick', get_template_directory_uri() . '/slick/slick.css' );

	wp_enqueue_style( 'ragnelia-style-slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );

	wp_enqueue_script( 'ragnelia-jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-image', get_template_directory_uri() . '/js/jqueryImage.min.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-menu', get_template_directory_uri() . '/js/menu.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-calc', get_template_directory_uri() . '/js/calc.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-libs', get_template_directory_uri() . '/js/libs.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-common', get_template_directory_uri() . '/js/common.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-colorpicker', get_template_directory_uri() . '/js/jqColorPicker.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-all-scripts', get_template_directory_uri() . '/js/allScript.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-slick', get_template_directory_uri() . '/slick/slick.min.js', array(), '20151215', true );

	wp_enqueue_script( 'ragnelia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ragnelia_scripts' );

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
 * Require TGM.
 */
require get_template_directory() . '/tgm/tgm-files.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Require portfolio.
 */
require get_template_directory() . '/inc/portfolio.php';

/**
 * Require reviews.
 */
require get_template_directory() . '/inc/reviews.php';

/**
 * Require services.
 */
require get_template_directory() . '/inc/services.php';

/**
 * Require breadcrumbs.
 */
require get_template_directory() . '/inc/breadcrumbs.php';
