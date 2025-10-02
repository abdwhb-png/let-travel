<?php
/**
 * Let Travel theme functions and definitions
 *
 * @package Let_Travel
 */

if ( ! defined( 'LET_TRAVEL_VERSION' ) ) {
    define( 'LET_TRAVEL_VERSION', '1.0.0' );
}

if ( ! function_exists( 'let_travel_setup' ) ) {
    /**
     * Set up theme defaults and register support for various WordPress features.
     */
    function let_travel_setup() {
        load_theme_textdomain( 'let-travel', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'wp-block-styles' );

        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'let-travel' ),
                'footer'  => __( 'Footer Menu', 'let-travel' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 80,
                'width'       => 240,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
}
add_action( 'after_setup_theme', 'let_travel_setup' );

/**
 * Enqueue scripts and styles.
 */
function let_travel_scripts() {
    $theme_version = LET_TRAVEL_VERSION;

    wp_enqueue_style( 'let-travel-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_style( 'let-travel-main', get_template_directory_uri() . '/assets/css/main.css', array( 'let-travel-style' ), $theme_version );

    wp_enqueue_script( 'let-travel-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'let_travel_scripts' );

/**
 * Register widget area.
 */
function let_travel_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Footer Newsletter', 'let-travel' ),
            'id'            => 'footer-newsletter',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget__title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'let_travel_widgets_init' );

/**
 * Include template tags and helpers.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
