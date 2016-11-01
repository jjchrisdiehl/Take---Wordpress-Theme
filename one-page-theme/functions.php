<?php
/**
 * PSD2WP functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PSD2WP
 */
add_action('wp_head', 'mbe_wp_head');
if ( ! function_exists( 'psd2wp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function psd2wp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on PSD2WP, use a find and replace
	 * to change 'psd2wp' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'psd2wp', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'psd2wp' ),
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
	add_theme_support( 'custom-background', apply_filters( 'psd2wp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'psd2wp_setup' );


/**
 * Register Menus.
 */
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' =>__( 'Header Menu' )
			)
		);
}
add_action( 'init', 'register_theme_menus' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function psd2wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'psd2wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'psd2wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function psd2wp_widgets_init( $name, $id, $description) {
	register_sidebar( array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => __( $description ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

psd2wp_widgets_init( 'Home Contact One', 'home-contact-one', 'First column of homepage contact');
psd2wp_widgets_init( 'Home Contact Two', 'home-contact-two', 'Second column of homepage contact');
psd2wp_widgets_init( 'Home Contact Three', 'home-contact-three', 'Third column of homepage contact');
psd2wp_widgets_init( 'Stay In Touch', 'stay-in-touch', 'Widgetized contact form');
psd2wp_widgets_init( 'Web Based', 'web-based', 'Widgetized contact form');
psd2wp_widgets_init( 'Team Login', 'team-login', 'Widgetized contact form');
psd2wp_widgets_init( 'Great Support', 'great-support', 'Widgetized contact form');
psd2wp_widgets_init( 'Team Plan Option', 'team-plan', 'Widgetized contact form');

psd2wp_widgets_init( 'Option One', 'option-one', 'Widgetized contact form');
psd2wp_widgets_init( 'Option Two', 'option-two', 'Widgetized contact form');
psd2wp_widgets_init( 'Option Three', 'option-three', 'Widgetized contact form');
psd2wp_widgets_init( 'Option Four', 'option-four', 'Widgetized contact form');

/**
 * Enqueue scripts and styles.
 */
function psd2wp_scripts() {
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );
	//wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3');

	wp_enqueue_style( 'psd2wp-style', get_stylesheet_uri() );

	wp_enqueue_style( 'jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css' , '1.11.4');

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/scrolling-nav/js/jquery.easing.min.js', array(), true );
	wp_enqueue_script( 'psd2wp-navigation', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array(), true );

	wp_enqueue_script( 'psd2wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '/scrolling-nav/js/scrolling-nav.js', array(), true );
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', array(), true );





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'psd2wp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


//Adjust admin bar spacing.
function mbe_wp_head(){
    //echo '<style>'.PHP_EOL;
    //echo 'body{ padding-top: 0px !important; }'.PHP_EOL;
    // Using custom CSS class name.
    //echo 'body.body-logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    // Using WordPress default CSS class name.
    //echo 'body.logged-in .navbar-fixed-top{ top: 28px !important; }'.PHP_EOL;
    //echo '</style>'.PHP_EOL;
}

/**
*Google Fonts
*/
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


/**
*Add categories and tags to pages
*/
function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );
 if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'category_and_tag_archives' );
 
 }
function category_and_tag_archives( $wp_query ) {
$my_post_array = array('post','page');
 
 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
 $wp_query->set( 'post_type', $my_post_array );
 
 if ( $wp_query->get( 'tag' ) )
 $wp_query->set( 'post_type', $my_post_array );
}
?>