<?php
/**
 * VD Base Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VD_base_Theme
 */

include "inc/helper.php";
include "inc/enqueue.php";
include "setup/acf-options-page.php";
include "setup/customize-block-editor.php";
include "setup/image-sizes.php";

if ( ! function_exists( 'vd_base_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vd_base_setup() {
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
				'menu-1' => esc_html__( 'Primary', 'vd_base' ),
				'menu-footer' => esc_html__( 'Footer', 'vd_base' ),
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
endif;
add_action( 'after_setup_theme', 'vd_base_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vd_base_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vd_base' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vd_base' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vd_base_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vd_base_scripts() {
	wp_enqueue_style( 'vd_base-style', get_stylesheet_uri(), array() );

    // font awesome
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", NULL);

    // OpenSans font from google
	  wp_enqueue_style("google-open-sans", "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap", NULL);

    // LODASH
    wp_register_script('lodash', 'https://cdn.jsdelivr.net/npm/lodash@4.17.19/lodash.min.js', NULL);

    // AOS animation library
    wp_enqueue_style("aos-style", "https://unpkg.com/aos@2.3.1/dist/aos.css", NULL);
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', NULL);

	
    // test js files (compiled from typescript)
    vd_base_enqueue_script_with_filetime( 'vd-base-helper-class', "/assets/ts/util/helperClass.js", array() );
    vd_base_enqueue_script_with_filetime( 'vd-base-sample-class-1', "/assets/ts/dir1/sample-class.js", array());
    vd_base_enqueue_script_with_filetime( 'vd-base-sample-class-2', "/assets/ts/dir2/sample-class.js", array());

    // MAIN JS
    vd_base_enqueue_script_with_filetime('st-main-script', '/assets/ts/main.js', array('jquery'), NULL, true);
    wp_localize_script('st-main-script', 'stInfos', array(
        'baseUrl' => get_home_url()
    ));
}
add_action( 'wp_enqueue_scripts', 'vd_base_scripts' );


/* ADMIN STYLES */
add_action( 'admin_enqueue_scripts', function () {
    vd_base_enqueue_style_with_filetime('vd_base-admin-styles', '/assets/css/vd-base-admin-styles.css', NULL);
});

/* GUTENBERG EDITOR CUSTOM STYLES */
add_action( 'enqueue_block_assets', function () {
  vd_base_enqueue_style_with_filetime('vd_base-admin-styles', '/assets/css/vd-base-block-editor-styles.css', NULL);
});


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

