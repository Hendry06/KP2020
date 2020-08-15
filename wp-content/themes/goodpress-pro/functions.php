<?php
/**
 * newsnow_pro functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goodpress
 */

if ( ! function_exists( 'goodpress_setup' ) ) :

function goodpress_setup() {

	load_theme_textdomain( 'goodpress-pro', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'goodpress-pro' ),
		'secondary' => esc_html__( 'Secondary Menu', 'goodpress-pro' ),		
		'footer' => esc_html__( 'Footer Menu', 'goodpress-pro' ),		
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
	add_theme_support( 'custom-background', apply_filters( 'goodpress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

    add_editor_style();    
}
endif;
add_action( 'after_setup_theme', 'goodpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function goodpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'goodpress_content_width', 760 );
}
add_action( 'after_setup_theme', 'goodpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goodpress_sidebar_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'goodpress-pro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here. Display on every pages.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Content', 'goodpress-pro' ),
		'id'            => 'homepage',
		'description'   => esc_html__( 'Only put the "Home One/Two/Three Columns" and "Advertisement" widgets here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Bottom', 'goodpress-pro' ),
		'id'            => 'homepage-bottom',
		'description'   => esc_html__( 'Only put the "Home Carousel" widget here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Sidebar', 'goodpress-pro' ),
		'id'            => 'homepage-sidebar',
		'description'   => esc_html__( 'If empty, homepage sidebar will display the "Sidebar" widgets above.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'goodpress-pro' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'goodpress-pro' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'goodpress-pro' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement', 'goodpress-pro' ),
		'id'            => 'header-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="header-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Content Advertisement', 'goodpress-pro' ),
		'id'            => 'content-ad',
		'description'   => esc_html__( 'Drag the "Advertisement" widget here. Will display on archives page.', 'goodpress-pro' ),
		'before_widget' => '<div id="%1$s" class="content-ad %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );		

}
add_action( 'widgets_init', 'goodpress_sidebar_init' );

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

require get_template_directory() . '/admin/customizer-library.php';

require get_template_directory() . '/admin/customizer-options.php';

require get_template_directory() . '/admin/styles.php';

require get_template_directory() . '/admin/mods.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Woocommerce compatibility
 */
require get_template_directory() . '/inc/woocommerce.php';

/* Demo Content*/
require_once dirname( __FILE__ ) . '/demo-content/setup.php';

/**
 * Load plugins.
 */
require get_template_directory() . '/inc/plugins.php';

/**
 * Enqueues scripts and styles.
 */
function goodpress_scripts() {

    // load jquery if it isn't

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '', true );

	//  Enqueues Javascripts
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), '', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js',array(), '', true ); 
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/js/html5.js', array(), '', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '', true ); 
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), '', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20170628', true );

    // Enqueues CSS styles
    wp_enqueue_style( 'goodpress-style', get_stylesheet_uri(), array(), '20180523' );     
    wp_enqueue_style( 'genericons-style',   get_template_directory_uri() . '/genericons/genericons.css' );
    
    if ( class_exists('WooCommerce') ) {
    	wp_enqueue_style( 'woocommerce-style',  get_template_directory_uri() . '/woocommerce.css' );
	}

    if ( get_theme_mod( 'site-layout', 'choice-1' ) == 'choice-1' ) {
    	wp_enqueue_style( 'responsive-style',   get_template_directory_uri() . '/responsive.css', array(), '20161209' ); 
	}
	
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }    
}
add_action( 'wp_enqueue_scripts', 'goodpress_scripts' );

/**
 * Post Thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'featured_large_thumb', 660, 440, true );
    add_image_size( 'featured_small_thumb', 266, 218, true );
    add_image_size( 'block_large_thumb', 389, 260, true );
    add_image_size( 'block_medium_thumb', 246, 164, true );    
    add_image_size( 'block_small_thumb', 120, 80, true );
    add_image_size( 'post_thumb', 300, 200, true );
    add_image_size( 'single_thumb', 818, 490, true ); 
    add_image_size( 'widget_thumb', 80, 80, true );                           
}

/**
 * Registers custom widgets.
 */
function goodpress_widgets_init() {

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-popular.php';
	register_widget( 'goodpress_Popular_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-recent.php';
	register_widget( 'goodpress_Recent_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-random.php';
	register_widget( 'goodpress_Random_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-views.php';
	register_widget( 'goodpress_Views_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-social.php';
	register_widget( 'goodpress_Social_Widget' );

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-ad.php';
	register_widget( 'goodpress_Ad_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-newsletter.php';
	register_widget( 'goodpress_Newsletter_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-one-b.php';
	register_widget( 'goodpress_Block_One_B_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-one.php';
	register_widget( 'goodpress_Block_One_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-two.php';
	register_widget( 'goodpress_Block_Two_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-block-three.php';
	register_widget( 'goodpress_Block_Three_Widget' );																
	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-home-carousel.php';
	register_widget( 'goodpress_Carousel_Widget' );											
}
add_action( 'widgets_init', 'goodpress_widgets_init' );

/* Fix PHP warning */
function _get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}

