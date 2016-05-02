<?php
/**
 * secretlyShameless functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package secretlyShameless
 */

if ( ! function_exists( 'secretlyshameless_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function secretlyshameless_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on secretlyShameless, use a find and replace
	 * to change 'secretlyshameless' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'secretlyshameless', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	set_post_thumbnail_size ( 828, 360, true);
	add_image_size ( 'secretlyShameless-smallThumb', 300, 150, true);
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for custom logo
	*/
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'secretlyshameless' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'secretlyshameless_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/**
	 * Add editor styles
	 */
	add_editor_style( array( 'inc/editor-style.css', 'fonts/custom-fonts.css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' ) );
}
endif;
add_action( 'after_setup_theme', 'secretlyshameless_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function secretlyshameless_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'secretlyshameless_content_width', 640 );
}
add_action( 'after_setup_theme', 'secretlyshameless_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function secretlyshameless_widgets_init() {

	$sidebars = array(
		'sidebar-1' => 'Main Sidebar',
		'sidebar-11' => 'Secondary Sidebar'
	);
	foreach ( $sidebars as $id => $sidebar ){
		register_sidebar(
			 array(
				'name'          => esc_html__($sidebar, 'secretlyshameless' ),
				'id'            => $id,
				'description'   => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title %1$s">',
				'after_title'   => '</h2>',
			) );
	}
}
add_action( 'widgets_init', 'secretlyshameless_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function secretlyshameless_scripts() {
	wp_enqueue_style( 'secretlyshameless-style', get_stylesheet_uri() );
	//Add webfonts
	wp_enqueue_style( 'secretlyshameless-localFonts', get_template_directory_uri() . '/fonts/customFonts.css');
	//Add font awesome(https://fortawesome.github.io)
	wp_enqueue_style( 'secretlyshameless-fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");

	wp_enqueue_script( 'secretlyshameless-navigation', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20151215', true );
	wp_localize_script( 'secretlyshameless-navigation', 'screenReaderText', array(
	'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'secretlyshameless' ) . '</span>',
	'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'secretlyshameless' ) . '</span>',
) );

	wp_enqueue_script( 'secretlyshameless-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'secretlyshameless_scripts' );

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
