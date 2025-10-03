<?php
/**
 * Default template fallback.
 *
 * @package Let_Travel
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    } else {
        echo '<p>' . esc_html__( 'No content found.', 'let-travel' ) . '</p>';
    }
    ?>
</main>
<?php
get_footer();
