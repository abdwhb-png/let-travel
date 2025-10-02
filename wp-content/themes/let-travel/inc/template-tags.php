<?php
/**
 * Template tags for Let Travel theme.
 *
 * @package Let_Travel
 */

if ( ! function_exists( 'let_travel_posted_on' ) ) {
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function let_travel_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() )
        );

        $posted_on = sprintf(
            /* translators: %s: post date */
            __( 'Posted on %s', 'let-travel' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

if ( ! function_exists( 'let_travel_posted_by' ) ) {
    /**
     * Prints HTML with meta information about theme author.
     */
    function let_travel_posted_by() {
        $byline = sprintf(
            /* translators: %s: post author */
            __( 'by %s', 'let-travel' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}
