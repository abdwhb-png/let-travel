<?php
/**
 * Header template
 *
 * @package Let_Travel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-wrapper">
    <header class="site-header">
        <div class="container site-header__inner">
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                <?php endif; ?>
            </div>
            <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'let-travel' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'menu-items',
                        'container'      => false,
                        'fallback_cb'    => '__return_false',
                    )
                );
                ?>
            </nav>
            <div class="site-header__cta">
                <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                    <?php esc_html_e( 'Book Now', 'let-travel' ); ?>
                </a>
            </div>
        </div>
    </header>
    <main id="primary" class="site-main">
