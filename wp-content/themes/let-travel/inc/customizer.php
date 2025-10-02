<?php
/**
 * Customizer additions.
 *
 * @package Let_Travel
 */

/**
 * Register customizer settings for theme sections.
 */
function let_travel_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'let_travel_cta_section',
        array(
            'title'       => __( 'Call To Action', 'let-travel' ),
            'description' => __( 'Update the call to action content displayed near the footer.', 'let-travel' ),
            'priority'    => 160,
        )
    );

    $wp_customize->add_setting(
        'let_travel_cta_title',
        array(
            'default'           => __( 'Ready for your next adventure?', 'let-travel' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'let_travel_cta_title',
        array(
            'label'   => __( 'CTA Title', 'let-travel' ),
            'section' => 'let_travel_cta_section',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'let_travel_cta_description',
        array(
            'default'           => __( 'Join thousands of travelers exploring the world with Let Travel.', 'let-travel' ),
            'sanitize_callback' => 'wp_kses_post',
        )
    );

    $wp_customize->add_control(
        'let_travel_cta_description',
        array(
            'label'   => __( 'CTA Description', 'let-travel' ),
            'section' => 'let_travel_cta_section',
            'type'    => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'let_travel_cta_button_text',
        array(
            'default'           => __( 'Plan a Trip', 'let-travel' ),
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'let_travel_cta_button_text',
        array(
            'label'   => __( 'CTA Button Text', 'let-travel' ),
            'section' => 'let_travel_cta_section',
            'type'    => 'text',
        )
    );

    $wp_customize->add_setting(
        'let_travel_cta_button_url',
        array(
            'default'           => home_url( '/contact' ),
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'let_travel_cta_button_url',
        array(
            'label'   => __( 'CTA Button URL', 'let-travel' ),
            'section' => 'let_travel_cta_section',
            'type'    => 'url',
        )
    );
}
add_action( 'customize_register', 'let_travel_customize_register' );
