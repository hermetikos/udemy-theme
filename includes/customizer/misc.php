<?php

function ju_misc_customizer_section($wp_customize) {
    $wp_customize->add_setting( 'ju_header_show_search', [
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);

    $wp_customize->add_setting( 'ju_header_show_cart', [
        'default' => 'yes',
        'transport' => 'postMessage'
    ]);
    // note the transport key
    // the default is refresh, which refreshes the page when the value changes
    // postMessage allows you to use JS to change the setting
    // without a jarring refresh
    
    $wp_customize->add_setting( 'ju_footer_copyright_text', [
        'default' => 'Copyright &copy; 2019 All Rights Reserved'
    ]);

    $wp_customize->add_setting( 'ju_footer_tos_page', [
        'default' => 0
    ]);

    $wp_customize->add_setting( 'ju_footer_privacy_page', [
        'default' => 0
    ]);

    $wp_customize->add_section( 'ju_misc_section', [
        'title' => __( 'Udemy Misc Settings', 'udemy'),
        'priority' => 30,
        'panel' => 'udemy'
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_header_show_search_input',
            array(
                'label' => __('Show Search Button in Header', 'udemy'),
                'section' => 'ju_misc_section',
                'settings' => 'ju_header_show_search',
                'type' => 'checkbox',
                'choices' => [
                    'yes' => 'Yes'
                ]
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_header_show_cart_input',
            array(
                'label' => __('Show Cart in Header', 'udemy'),
                'section' => 'ju_misc_section',
                'settings' => 'ju_header_show_cart',
                'type' => 'checkbox',
                'choices' => [
                    'yes' => 'Yes'
                ]
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_copyright_text_input',
            array(
                'label' => __('Copyright Info', 'udemy'),
                'section' => 'ju_misc_section',
                'settings' => 'ju_footer_copyright_text',
                'type' => 'text'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_tos_page_input',
            array(
                'label' => __('Copyright Info', 'udemy'),
                'section' => 'ju_misc_section',
                'settings' => 'ju_footer_tos_page',
                'type' => 'dropdown-pages'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footer_privacy_page_input',
            array(
                'label' => __('Copyright Info', 'udemy'),
                'section' => 'ju_misc_section',
                'settings' => 'ju_footer_privacy_page',
                'type' => 'dropdown-pages'
            )
        )
    );
}

?>

<!-- 
    'type' => 'dropdown-pages'
        this type of input creates a dropdown that allows you to select
        a specific page
        it also helps prevent accidentally setting the value to something
        invalid
        use 0 as a placeholder if you don't have a vaule in mind yet
    'panel'
        set a section's parent panel
 -->