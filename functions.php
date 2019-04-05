<?php
/**
 * lorainccc functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lorainccc
 */

if ( ! function_exists( 'lorainccc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lorainccc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lorainccc, use a find and replace
	 * to change 'lorainccc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lorainccc', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'lorainccc' ),
		'athletics-primary' => esc_html__( 'Athletics Primary', 'lorainccc' ),
		'mobile-primary' => esc_html__( 'Mobile Primary Menu', 'lorainccc' ),
		'footer-quicklinks-nav' => esc_html__( 'Footer Quicklinks', 'lorainccc' ),
		'footer-campus-location-nav' => esc_html__( 'Footer Campus Locations', 'lorainccc' ),
		'header-shortcuts' => esc_html__( 'Header Shortcuts Menu', 'lorainccc' ),
		'mobile-header-shortcuts' => esc_html__( 'Mobile Header Shortcuts Menu', 'lorainccc' ),
 	'left-nav' => esc_html__( 'Left Nav', 'lorainccc' ),
		'lccc-club-sports-left-nav' => esc_html__( 'Club Sports Left Nav', 'lorainccc' ),
		'inside-athletics-left-nav' => esc_html__( 'Inside Athletics Left Nav', 'lorainccc' ),
		'varsity-sports-left-nav' => esc_html__( 'Varsity Sports Left Nav', 'lorainccc' ),
		'athletics-footer-quicklink-nav' => esc_html__( 'Athletics Footer Quicklink Nav', 'lorainccc' ),
		'athletics-left-nav' => esc_html__( 'Athletics Left Nav', 'lorainccc' ),
		'athletics-header-shortcuts' => esc_html__( 'Athletics Header Shortcuts', 'lorainccc' ),
  'athletics-mobile-primary' => esc_html__( 'Athletics Mobile Primary Menu', 'lorainccc' ),
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
	add_theme_support( 'custom-background', apply_filters( 'lorainccc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'lorainccc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lorainccc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lorainccc_content_width', 640 );
}
add_action( 'after_setup_theme', 'lorainccc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lorainccc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lorainccc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'Badges Sidebar', 'lorainccc' ),
		'id'            => 'badges-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sponsor Sidebar', 'lorainccc' ),
		'id'            => 'sponsor-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Events Sidebar', 'lorainccc' ),
		'id'            => 'lccc-events-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'Sub Page Events Sidebar', 'lorainccc' ),
		'id'            => 'sub-events-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Athletics Slider Sidebar', 'lorainccc' ),
		'id'            => 'athletics-slider-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
				register_sidebar( array(
		'name'          => esc_html__( 'LCCC Announcements Sidebar', 'lorainccc' ),
		'id'            => 'lccc-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
					register_sidebar( array(
		'name'          => esc_html__( 'Subpage Announcements Sidebar', 'lorainccc' ),
		'id'            => 'lccc-sub-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'lorainccc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lorainccc_foundation_scripts() {

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
	wp_enqueue_style( 'foundation-app',  get_template_directory_uri() . '/foundation/css/app.css' );
	wp_enqueue_style( 'foundation-normalize', get_template_directory_uri() . '/foundation/css/normalize.css' );
	wp_enqueue_style( 'foundation',  get_template_directory_uri() . '/foundation/css/foundation.css' );

	wp_enqueue_script( 'lc-mobile-nav-js', get_stylesheet_directory_uri() . '/js/mobile-nav.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/vendor/foundation.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-whatinput', get_template_directory_uri() . '/foundation/js/vendor/what-input.js', array( 'jquery' ), '1', true);

	wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'lorainccc-function-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_enqueue_script( 'lc_menu-cleanup-script', get_stylesheet_directory_uri() . '/js/menu-cleanup.js', array( 'jquery' ), '20190329', true );
		//Adds Google Analytics, Google Tag, Hotjar and Eloqua to header
	wp_enqueue_script( 'lc-eloqua-scripts', get_stylesheet_directory_uri() . '/js/lc-eloqua.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-google-analytics-scripts', get_stylesheet_directory_uri() . '/js/lc-google-analytics.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-google-tag-scripts', get_stylesheet_directory_uri() . '/js/lc-google-tag.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-hotjar-scripts', get_stylesheet_directory_uri() . '/js/lc-hotjar.js', array(), '20180828', false);
	wp_enqueue_script( 'lc-siteimprove-scripts', get_stylesheet_directory_uri() . '/js/lc-siteimprove.js', array(), '20180828', false);
	
	wp_localize_script( 'lorainccc-function-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );

}
add_action( 'wp_enqueue_scripts', 'lorainccc_foundation_scripts' );

function lorainccc_scripts() {
		wp_enqueue_style( 'lccc-athletics-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic|Raleway:400,400italic,700,700italic', false );

	wp_enqueue_style( 'lorainccc-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorainccc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_stylesheet_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/* Menu Functions */

class lc_top_bar_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class and submenu data attribute to sub menus
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
}

//Optional fallback
function lc_topbar_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

	echo '<ul class="dropdown menu" data-dropdown-menu">'.$fallback.'</ul>';
}

class lc_drill_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

function lc_drill_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("children", "children vertical menu", $fallback);
	echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
}

/* End Menu Functions */
// CHANGE EXCERPT LENGTH FOR DIFFERENT POST TYPES

function custom_excerpt_length($length) {
    global $post;
    if ($post->post_type == 'lccc_event')
    return 30;
    else if ($post->post_type == 'lccc_announcement')
    return 30;
    else
    return 40;
}
add_filter('excerpt_length', 'custom_excerpt_length');

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_athletic_category_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_athletic_category_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Athletic Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Athletic Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Athletic Categories' ),
    'all_items' => __( 'All Athletic Categories' ),
    'parent_item' => __( 'Parent Athletic Category' ),
    'parent_item_colon' => __( 'Parent Athletic Category:' ),
    'edit_item' => __( 'Edit Athletic Category' ),
    'update_item' => __( 'Update Athletic Category' ),
    'add_new_item' => __( 'Add New Athletic Category' ),
    'new_item_name' => __( 'New Athletic Category Name' ),
    'menu_name' => __( 'Athletic Categories' ),
  );

// Now register the taxonomy

  register_taxonomy('athletic_category',array('lccc_announcement'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'athletic-category' ),
  ));

}

/*
 *
 * Add filtering support to Admin list for the LCCC Event Custom Post Type.
 *
 */

function lccc_athletic_cpt_add_taxonomy_filters() {
	global $typenow;

	// an array of all the taxonomyies you want to display. Use the taxonomy name or slug
	$taxonomies = array('athletic_category');

	// must set this to the post type you want the filter(s) displayed on
	if( $typenow == 'lccc_announcement' ){

		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Show All $tax_name</option>";
				foreach ($terms as $term) {
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
				}
				echo "</select>";
			}
		}
	}
}
add_action( 'restrict_manage_posts', 'lccc_athletic_cpt_add_taxonomy_filters' );

function sb_add_tax_to_api() {
    $mytax = get_taxonomy( 'athletic-category' );
    $mytax->show_in_rest = true;
}
add_action( 'init', 'sb_add_tax_to_api', 30 );


$new_athletics_setting = new new_athletics_setting();

class new_athletics_setting {
    function new_athletics_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'athletics_announcement_feed_count', 'esc_attr' );
							 add_settings_section( 'lccc-athletics-settings', 'LCCC Athletic Announcements Feed Settings', '__return_false', 'general' );
        add_settings_field('lccc_athletics_home_feed_count', '<label for="athletics_announcement_feed_count">'.__('Number of Posts for Athletics home Announcement Feed?' , 'athletics_announcement_feed_count' ).'</label>' , array(&$this, 'fields_html') , 'general', 'lccc-athletics-settings' );
    }
    function fields_html() {
        $value = get_option( 'athletics_announcement_feed_count', '' );
        echo '<input type="text" id="athletics_announcement_feed_count" name="athletics_announcement_feed_count" value="' . $value . '" />';
								echo '<p class="description" id="tagline-description">Enter the <strong>number of announcements</strong> you wish to represent in the LCCC Athletics home page feed.</p>';
    }
}

?>