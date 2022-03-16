<?php
function ju_social_customizer_section( $wp_customize ) {
    // add facebook social
    // this is a custom function we use to simplify setting up WP customizer
    $wp_customize->add_setting( 'ju_facebook_handle',
        [
            'default' => ''
        ]
    );

    $wp_customize->add_section( 'ju_social_section',
        [
            'title' => __('Udemy Social Settings', 'udemy'),
            'priority' => 30
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_facebook_input',
            array(
                'label' => __('Facebook Handle', 'udemy'),
                'section' => 'ju_social_section',
                'settings' => 'ju_facebook_handle',
                'type' => 'text'
            )
        )
    );

    // add facebook social
    $wp_customize->add_setting( 'ju_twitter_handle',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_twitter_input',
            array(
                'label' => __('Twitter Handle', 'udemy'),
                'section' => 'ju_social_section',
                'settings' => 'ju_twitter_handle',
                'type' => 'text'
            )
        )
    );

    // add Instagram
    $wp_customize->add_setting( 'ju_instagram_handle',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_instagram_input',
            array(
                'label' => __('Instagram Handle', 'udemy'),
                'section' => 'ju_social_section',
                'settings' => 'ju_instagram_handle',
                'type' => 'text'
            )
        )
    );

    // add phone
    $wp_customize->add_setting( 'ju_phone_handle',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_phone_input',
            array(
                'label' => __('Phone Number', 'udemy'),
                'section' => 'ju_social_section',
                'settings' => 'ju_phone_handle',
                'type' => 'text'
            )
        )
    );

    // add email
    $wp_customize->add_setting( 'ju_email_handle',
        [
            'default' => ''
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_email_input',
            array(
                'label' => __('Email', 'udemy'),
                'section' => 'ju_social_section',
                'settings' => 'ju_email_handle',
                'type' => 'text'
            )
        )
    );
}
?>