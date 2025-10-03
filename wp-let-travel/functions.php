<?php
/**
 * Theme setup and asset loading.
 *
 * @package Let_Travel
 */

define( 'LET_TRAVEL_VERSION', '1.0.0' );

if ( ! function_exists( 'let_travel_setup' ) ) {
    /**
     * Configure theme defaults.
     */
    function let_travel_setup() {
        load_theme_textdomain( 'let-travel', get_template_directory() . '/languages' );

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'let-travel' ),
                'footer'  => __( 'Footer Menu', 'let-travel' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'let_travel_setup' );

if ( ! function_exists( 'let_travel_enqueue_assets' ) ) {
    /**
     * Enqueue theme styles and scripts.
     */
    function let_travel_enqueue_assets() {
        $theme      = wp_get_theme();
        $theme_ver  = $theme->get( 'Version' );
        $asset_uri  = get_template_directory_uri() . '/assets';

        wp_enqueue_style( 'let-travel-fonts', $asset_uri . '/css/fonts.css', array(), $theme_ver );
        wp_enqueue_style( 'let-travel-webflow', $asset_uri . '/css/let-travel-128.webflow.css', array( 'let-travel-fonts' ), $theme_ver );
        wp_enqueue_style( 'let-travel-style', get_stylesheet_uri(), array( 'let-travel-webflow' ), $theme_ver );

        wp_enqueue_script( 'let-travel-webfont', $asset_uri . '/js/webfont.js', array(), $theme_ver, true );
        wp_enqueue_script( 'let-travel-webflow', $asset_uri . '/js/webflow.js', array( 'jquery', 'let-travel-webfont' ), $theme_ver, true );

        $webfont_inline = 'WebFont.load({google:{families:["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Libre Baskerville:regular,italic,700","Raleway:100,200,300,regular,500,600,700,800,900","Syne:regular,italic,700","Manrope:200,300,regular,500,600,700,800"]}});';
        wp_add_inline_script( 'let-travel-webfont', $webfont_inline, 'before' );

        $mod_inline = '!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);';
        wp_add_inline_script( 'let-travel-webflow', $mod_inline, 'before' );

        $currency_settings = 'window.__WEBFLOW_CURRENCY_SETTINGS = {"currencyCode":"USD","symbol":"$","decimal":".","fractionDigits":2,"group":"","template":"{{wf {"path":"symbol","type":"PlainText"} }}{{wf {"path":"amount","type":"PlainText"} }}","hideDecimalForWholeNumbers":false};';
        wp_add_inline_script( 'let-travel-webflow', $currency_settings );
    }
}
add_action( 'wp_enqueue_scripts', 'let_travel_enqueue_assets' );

if ( ! function_exists( 'let_travel_body_classes' ) ) {
    /**
     * Add custom classes to the body element.
     *
     * @param array $classes Default body classes.
     * @return array
     */
    function let_travel_body_classes( $classes ) {
        $classes[] = 'let-travel-theme';
        return $classes;
    }
}
add_filter( 'body_class', 'let_travel_body_classes' );
