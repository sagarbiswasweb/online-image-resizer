<?php
/**
 * online image resizer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package online_image_resizer
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function online_image_resizer_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on online image resizer, use a find and replace
		* to change 'online-image-resizer' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'online-image-resizer', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'online-image-resizer' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'online-image-resizer' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'online_image_resizer_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'online_image_resizer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function online_image_resizer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'online_image_resizer_content_width', 640 );
}
add_action( 'after_setup_theme', 'online_image_resizer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function online_image_resizer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'online-image-resizer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'online-image-resizer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'online_image_resizer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function online_image_resizer_scripts() {
	wp_enqueue_style( 'online-image-resizer-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'online-image-resizer-style', 'rtl', 'replace' );

	wp_enqueue_script( 'online-image-resizer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'online_image_resizer_scripts' );

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








// my custom codes starats here 
function online_image_resizer_enqueue_styles() {
	// Google Fonts (Roboto)
    wp_enqueue_style(
		'google-font-roboto', 
		'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', 
		array(), 
		null
	);

    // Enqueue custom CSS
    wp_enqueue_style(
        'online-image-resizer-custom-style', // Handle name for the CSS
        get_template_directory_uri() . '/assets/css/custom.css', // Path to the CSS file
        array(), // Dependencies (leave empty if none)
        '1.0.0' // Version number (change as needed)
		
    );
	wp_enqueue_style(
        'bootstrap-css', // Handle name
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', // CDN link
        array(), // Dependencies (none)
        '5.3.3' // Version
    );

	// Enqueue Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js', // Handle name
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', // CDN link
        array('jquery'), // Dependencies (requires jQuery)
        '5.3.3', // Version
        true // Load in footer
    );
	// Enqueue Bootstrap JS
    wp_enqueue_style(
        'fontawesome-css', // Handle name
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', // CDN link
        array(), // Dependencies (requires jQuery)
        '6.7.2', // Version
    );
	// Enqueue Bootstrap JS
    wp_enqueue_script(
        'online-image-resizer-custom-navbar-script', // Handle name
        get_template_directory_uri() . '/assets/js/navbar.js',
        array(), // Dependencies (requires jQuery)
        '1.0.0', // Version
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'online_image_resizer_enqueue_styles');





// custom resize page 
add_action('init', function () {
    add_rewrite_rule('^resize/?$', 'index.php?resize=1', 'top');
});

add_filter('query_vars', function ($vars) {
    $vars[] = 'resize';
    return $vars;
});

add_action('template_redirect', function () {
    if (get_query_var('resize')) {
        include get_template_directory() . '/resize-handler.php';
        exit;
    }
});




// Add rewrite rule for crop-page
add_action('init', function () {
    add_rewrite_rule('^crop/?$', 'index.php?crop=1', 'top');
});

// Register the query variable for crop
add_filter('query_vars', function ($vars) {
    $vars[] = 'crop';
    return $vars;
});

// Handle the request when crop is detected
add_action('template_redirect', function () {
    if (get_query_var('crop')) {
        include get_template_directory() . '/crop-handler.php'; // This is the handler for the crop page
        exit;
    }
});




// Add rewrite rule for rotate-page
add_action('init', function () {
    add_rewrite_rule('^rotate/?$', 'index.php?rotate=1', 'top');
});

// Register the query variable for crop
add_filter('query_vars', function ($vars) {
    $vars[] = 'rotate';
    return $vars;
});

// Handle the request when crop is detected
add_action('template_redirect', function () {
    if (get_query_var('rotate')) {
        include get_template_directory() . '/rotate-handler.php'; // This is the handler for the crop page
        exit;
    }
});





// Add rewrite rule for converter-page
add_action('init', function () {
    add_rewrite_rule('^convert/?$', 'index.php?convert=1', 'top');
});

// Register the query variable for convert
add_filter('query_vars', function ($vars) {
    $vars[] = 'convert';
    return $vars;
});

// Handle the request when convert is detected
add_action('template_redirect', function () {
    if (get_query_var('convert')) {
        include get_template_directory() . '/convert-handler.php'; // This is the handler for the convert page
        exit;
    }
});










/////////////////////////////// CODE FOR REMOVE MENU DEFAULT CLASSES STARTS //////////////////////////////

// header menu custom walker
class Simple_Nav_Menu_Walker extends Walker_Nav_Menu {
        // Start the <ul> level
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul>';
    }

    // End the <ul> level
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    // Start each <li> element
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= '<li><a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a></li>';
    }

    // End each <li> element
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '';
    }
}

// footer menu custom walker 
class My_Footer_Menu_Walker extends Walker_Nav_Menu {
    // Add custom class to <li> elements
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $li_classes = 'my-footer-item mt-3'; // Custom class for <li>
        $link_classes = 'my-footer-link-style'; // Custom class for <a>

        $output .= '<li class="' . $li_classes . '">';
        $attributes  = ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : '';
        $output .= '<a class="' . $link_classes . '" ' . $attributes . '>';
        $output .= apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '</a></li>';
    }
}

///////////////////////////// CODE FOR REMOVE MENU DEFAULT CLASSES ENDS ////////////////////////////////
