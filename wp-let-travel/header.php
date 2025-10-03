<?php
/**
 * Theme header.
 *
 * @package Let_Travel
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/media/67235b344c96c8cf5edb4ff8_Logo%20White.svg' ); ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
