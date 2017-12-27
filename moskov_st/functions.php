<?php
/**
 * moskov_st functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moskov_st
 */

if ( ! function_exists( 'moskov_st_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function moskov_st_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on moskov_st, use a find and replace
		 * to change 'moskov_st' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'moskov_st', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'moskov_st' ),
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
		add_theme_support( 'custom-background', apply_filters( 'moskov_st_custom_background_args', array(
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
add_action( 'after_setup_theme', 'moskov_st_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moskov_st_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moskov_st_content_width', 640 );
}
add_action( 'after_setup_theme', 'moskov_st_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moskov_st_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'moskov_st' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'moskov_st' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'admin_mail', 'moskov_st' ),
		'id'            => 'admin_mail',
		'description'   => esc_html__( 'Add widgets here.', 'moskov_st' ),
		'before_widget' => '<div">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'moskov_st_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moskov_st_scripts() {
	wp_enqueue_style( 'moskov_st-style', get_stylesheet_uri() );

	wp_enqueue_style( 'moskov_st-style-slick', get_template_directory_uri() . '/slick/slick.css' );

	wp_enqueue_style( 'moskov_st-style-slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );

	wp_enqueue_script( 'moskov_st-jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '20151215', true );

	wp_enqueue_style( 'moskov_st-normalize', get_stylesheet_uri(). '/css/normalize.css');

	wp_enqueue_script( 'moskov_st-slick', get_template_directory_uri() . '/slick/slick.min.js', array(), '20151215', true );

	wp_enqueue_script( 'moskov_st-maskinput', get_template_directory_uri() . '/js/maskedinput.js', array(), '20151215', true );

	wp_enqueue_script( 'moskov_st-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'moskov_st_scripts' );

/**
 * Add new wrapper for woocommerce pages.
 *
 * @since Stained Glass 1.0.0
 */

 add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'stainedglass_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'stainedglass_wrapper_end', 10);

function stainedglass_wrapper_start() {
  echo '<main id="main>';
}

function stainedglass_wrapper_end() {
  echo '</main>';
}

/**
 * Change related products number
 *
 * @since Stained Glass 1.0.0
 */
add_filter( 'woocommerce_output_related_products_args', 'stainedglass_related_products_args' );
function stainedglass_related_products_args( $args ) {

	$args['posts_per_page'] = 3;
	$args['columns'] = 3;
	return $args;
}

/**
 * Custom woocommerce
 * Добавление краткого описания в карточку каталога
*/
/*
add_action( 'woocommerce_after_shop_loop_item_title', 'my_add_short_description', 9 );
function my_add_short_description() {
echo '<span class="title-description">' . the_excerpt() . '</span><br />';
}
*/
// Добавляем Рубли в WooCommerce

add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Российские рубли', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = 'руб.'; break;
     }
     return $currency_symbol;
}

// Удаляем ненужные вкладки

function woo_remove_product_tab($tabs) {

    unset( $tabs['description'] );              // Remove the description tab
    unset( $tabs['reviews'] );                     // Remove the reviews tab
    unset( $tabs['additional_information'] );      // Remove the additional information tab

     return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tab', 98);

add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +

function woo_custom_product_add_to_cart_text() {

    return __( 'Заказать', 'woocommerce' );

}

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

/**
 * Require TGM.
 */
require get_template_directory() . '/tgm/tgm-files.php';

/**
 * Require example-slide.
 */
require get_template_directory() . '/inc/example-slide.php';
