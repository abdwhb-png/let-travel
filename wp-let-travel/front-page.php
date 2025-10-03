<?php
/**
 * Front page template.
 *
 * @package Let_Travel
 */

get_header();

$home_content_path = get_template_directory() . '/template-parts/home-content.html';
if ( file_exists( $home_content_path ) ) {
    $home_markup = file_get_contents( $home_content_path );
    if ( $home_markup ) {
        $home_markup = preg_replace_callback( '#href="/(?!/)([^"]*)"#', function ( $matches ) {
            return 'href="' . esc_url( home_url( '/' . $matches[1] ) ) . '"';
        }, $home_markup );
        echo $home_markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Content already escaped via template.
    }
}

get_footer();
