<?php
/**
 * Front page template that recreates the Let Travel Webflow layout.
 *
 * @package Let_Travel
 */

global $post;

get_header();
?>
<section class="section hero-section">
    <div class="container hero">
        <div class="hero__content">
            <span class="hero__tag"><?php esc_html_e( 'Discover More', 'let-travel' ); ?></span>
            <h1 class="hero__heading"><?php esc_html_e( 'Open up your world with unforgettable journeys', 'let-travel' ); ?></h1>
            <p class="hero__copy"><?php esc_html_e( 'Let Travel connects you with curated destinations, expert guides, and immersive experiences designed to make every trip extraordinary.', 'let-travel' ); ?></p>
            <div class="hero__actions">
                <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/destinations' ) ); ?>"><?php esc_html_e( 'Explore Destinations', 'let-travel' ); ?></a>
                <a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Talk to an Expert', 'let-travel' ); ?></a>
            </div>
            <div class="hero__meta">
                <div class="hero__stat">
                    <span>250+</span>
                    <small><?php esc_html_e( 'Curated trips designed by our travel experts.', 'let-travel' ); ?></small>
                </div>
                <div class="hero__stat">
                    <span>98%</span>
                    <small><?php esc_html_e( 'Customer satisfaction rate across the last 24 months.', 'let-travel' ); ?></small>
                </div>
            </div>
        </div>
        <div class="hero__visual">
            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80" alt="Mountains" />
            <div class="hero__card" role="note">
                <h4><?php esc_html_e( 'Trending escapes', 'let-travel' ); ?></h4>
                <ul>
                    <li><span><?php esc_html_e( 'Bali retreat', 'let-travel' ); ?></span> <span>★ 4.9</span></li>
                    <li><span><?php esc_html_e( 'Iceland expedition', 'let-travel' ); ?></span> <span>★ 4.8</span></li>
                    <li><span><?php esc_html_e( 'Peru discovery', 'let-travel' ); ?></span> <span>★ 4.7</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section--light">
    <div class="container">
        <p class="section__subtitle"><?php esc_html_e( 'Destinations', 'let-travel' ); ?></p>
        <h2 class="section__title"><?php esc_html_e( 'Handpicked adventures across the globe', 'let-travel' ); ?></h2>
        <p class="section__text"><?php esc_html_e( 'Choose from our most loved destinations and enjoy tailored itineraries that blend local culture, iconic sights, and hidden gems.', 'let-travel' ); ?></p>
        <div class="destinations">
            <?php
            $destination_images = array(
                'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1000&q=80' => __( 'Swiss Alps', 'let-travel' ),
                'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1000&q=80' => __( 'Bali, Indonesia', 'let-travel' ),
                'https://images.unsplash.com/photo-1526772662000-3f88f10405ff?auto=format&fit=crop&w=1000&q=80' => __( 'Kyoto, Japan', 'let-travel' ),
                'https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=1000&q=80' => __( 'Amalfi Coast, Italy', 'let-travel' ),
            );

            foreach ( $destination_images as $image_url => $destination_name ) :
                ?>
                <article class="destination-card">
                    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $destination_name ); ?>" />
                    <div class="destination-card__label">
                        <span><?php esc_html_e( 'From', 'let-travel' ); ?> $899</span>
                        <strong><?php echo esc_html( $destination_name ); ?></strong>
                    </div>
                </article>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <p class="section__subtitle"><?php esc_html_e( 'Why Let Travel', 'let-travel' ); ?></p>
        <h2 class="section__title"><?php esc_html_e( 'Designing journeys that feel effortless', 'let-travel' ); ?></h2>
        <div class="features">
            <article class="feature">
                <span class="feature__icon">✈️</span>
                <h3 class="feature__title"><?php esc_html_e( 'Expert travel planners', 'let-travel' ); ?></h3>
                <p class="feature__text"><?php esc_html_e( 'Our team of specialists craft itineraries around your interests so you can explore confidently.', 'let-travel' ); ?></p>
            </article>
            <article class="feature">
                <span class="feature__icon">🏨</span>
                <h3 class="feature__title"><?php esc_html_e( 'Curated stays & guides', 'let-travel' ); ?></h3>
                <p class="feature__text"><?php esc_html_e( 'Stay in boutique hotels and connect with knowledgeable local guides for authentic encounters.', 'let-travel' ); ?></p>
            </article>
            <article class="feature">
                <span class="feature__icon">🧭</span>
                <h3 class="feature__title"><?php esc_html_e( 'Support at every step', 'let-travel' ); ?></h3>
                <p class="feature__text"><?php esc_html_e( 'Enjoy 24/7 support, flexible itineraries, and on-the-ground assistance wherever you roam.', 'let-travel' ); ?></p>
            </article>
        </div>
    </div>
</section>

<section class="section section--overlay">
    <div class="container">
        <div class="section__subtitle"><?php esc_html_e( 'Impact', 'let-travel' ); ?></div>
        <h2 class="section__title"><?php esc_html_e( 'Travel that gives back', 'let-travel' ); ?></h2>
        <p class="section__text"><?php esc_html_e( 'We partner with local communities and sustainability initiatives to leave every place better than we found it.', 'let-travel' ); ?></p>
        <div class="stats-grid">
            <div class="stat-card">
                <strong>65%</strong>
                <span><?php esc_html_e( 'Trips featuring eco-certified experiences.', 'let-travel' ); ?></span>
            </div>
            <div class="stat-card">
                <strong>120+</strong>
                <span><?php esc_html_e( 'Local partners supporting responsible tourism.', 'let-travel' ); ?></span>
            </div>
            <div class="stat-card">
                <strong>35k</strong>
                <span><?php esc_html_e( 'Trees planted through traveler contributions.', 'let-travel' ); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <p class="section__subtitle"><?php esc_html_e( 'Stories', 'let-travel' ); ?></p>
        <h2 class="section__title"><?php esc_html_e( 'Travelers who found their perfect escape', 'let-travel' ); ?></h2>
        <div class="testimonials">
            <?php
            $testimonials = array(
                array(
                    'name'  => __( 'Maya Chen', 'let-travel' ),
                    'role'  => __( 'Solo adventurer', 'let-travel' ),
                    'quote' => __( 'Let Travel created an itinerary through Peru that felt deeply personal. I never once felt like a tourist.', 'let-travel' ),
                    'image' => 'https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=crop&w=300&q=80',
                ),
                array(
                    'name'  => __( 'Aaron Patel', 'let-travel' ),
                    'role'  => __( 'Honeymoon traveler', 'let-travel' ),
                    'quote' => __( 'From boutique hotels to private guides, every detail was beyond what we imagined. Truly unforgettable.', 'let-travel' ),
                    'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80',
                ),
                array(
                    'name'  => __( 'Carmen & Diego', 'let-travel' ),
                    'role'  => __( 'Family explorers', 'let-travel' ),
                    'quote' => __( 'Traveling with kids can be daunting, but Let Travel made it seamless. The experiences were magical.', 'let-travel' ),
                    'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=300&q=80',
                ),
            );

            foreach ( $testimonials as $testimonial ) :
                ?>
                <article class="testimonial">
                    <p class="testimonial__quote">&ldquo;<?php echo esc_html( $testimonial['quote'] ); ?>&rdquo;</p>
                    <div class="testimonial__meta">
                        <img src="<?php echo esc_url( $testimonial['image'] ); ?>" alt="<?php echo esc_attr( $testimonial['name'] ); ?>" />
                        <div>
                            <div class="testimonial__name"><?php echo esc_html( $testimonial['name'] ); ?></div>
                            <small><?php echo esc_html( $testimonial['role'] ); ?></small>
                        </div>
                    </div>
                </article>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<section class="section section--light">
    <div class="container">
        <p class="section__subtitle"><?php esc_html_e( 'Latest Articles', 'let-travel' ); ?></p>
        <h2 class="section__title"><?php esc_html_e( 'Insights from our travel journal', 'let-travel' ); ?></h2>
        <div class="blog-grid">
            <?php
            $blog_query = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                )
            );

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) :
                    $blog_query->the_post();
                    ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card__image"><?php the_post_thumbnail( 'large' ); ?></a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card__image">
                                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=900&q=80" alt="<?php the_title_attribute(); ?>" />
                            </a>
                        <?php endif; ?>
                        <div class="blog-card__body">
                            <div class="blog-card__meta">
                                <?php let_travel_posted_on(); ?>
                            </div>
                            <h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 18, '…' ); ?></p>
                            <a class="btn btn--primary" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'let-travel' ); ?></a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php esc_html_e( 'No posts yet. Start sharing your travel stories!', 'let-travel' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="cta">
            <h2 class="cta__title"><?php echo esc_html( get_theme_mod( 'let_travel_cta_title', __( 'Ready for your next adventure?', 'let-travel' ) ) ); ?></h2>
            <p><?php echo wp_kses_post( get_theme_mod( 'let_travel_cta_description', __( 'Join thousands of travelers exploring the world with Let Travel.', 'let-travel' ) ) ); ?></p>
            <?php if ( $cta_button_url = get_theme_mod( 'let_travel_cta_button_url', home_url( '/contact' ) ) ) : ?>
                <a class="btn btn--primary" href="<?php echo esc_url( $cta_button_url ); ?>"><?php echo esc_html( get_theme_mod( 'let_travel_cta_button_text', __( 'Plan a Trip', 'let-travel' ) ) ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
