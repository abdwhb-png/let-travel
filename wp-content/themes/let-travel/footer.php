<?php
/**
 * Footer template
 *
 * @package Let_Travel
 */
?>
    </main><!-- #primary -->
    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__top">
                <div class="site-footer__brand">
                    <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">Let Travel</a>
                    <p><?php esc_html_e( 'Crafting immersive travel experiences to reconnect you with the world.', 'let-travel' ); ?></p>
                    <div class="site-footer__socials">
                        <a href="https://www.facebook.com" aria-label="<?php esc_attr_e( 'Facebook', 'let-travel' ); ?>"></a>
                        <a href="https://www.instagram.com" aria-label="<?php esc_attr_e( 'Instagram', 'let-travel' ); ?>"></a>
                        <a href="https://www.twitter.com" aria-label="<?php esc_attr_e( 'Twitter', 'let-travel' ); ?>"></a>
                    </div>
                </div>
                <div class="site-footer__menus">
                    <div>
                        <h4><?php esc_html_e( 'Company', 'let-travel' ); ?></h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_class'     => 'footer-menu',
                                'container'      => false,
                                'fallback_cb'    => false,
                            )
                        );
                        ?>
                    </div>
                    <div>
                        <h4><?php esc_html_e( 'Get in touch', 'let-travel' ); ?></h4>
                        <ul>
                            <li><a href="mailto:hello@example.com">hello@example.com</a></li>
                            <li><a href="tel:+123456789">+1 (234) 567-89</a></li>
                            <li><?php esc_html_e( '21 Adventure Way, San Francisco, CA', 'let-travel' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <h4><?php esc_html_e( 'Newsletter', 'let-travel' ); ?></h4>
                        <?php if ( is_active_sidebar( 'footer-newsletter' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-newsletter' ); ?>
                        <?php else : ?>
                            <form class="newsletter" action="#" method="post">
                                <label for="newsletter-email" class="screen-reader-text"><?php esc_html_e( 'Email address', 'let-travel' ); ?></label>
                                <input type="email" id="newsletter-email" name="newsletter-email" placeholder="<?php esc_attr_e( 'Enter your email', 'let-travel' ); ?>" required />
                                <button class="btn btn--primary" type="submit"><?php esc_html_e( 'Subscribe', 'let-travel' ); ?></button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Let Travel. All rights reserved.', 'let-travel' ); ?></p>
                <p><?php esc_html_e( 'Designed for WordPress using the Let Travel theme.', 'let-travel' ); ?></p>
            </div>
        </div>
    </footer>
</div><!-- .site-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
