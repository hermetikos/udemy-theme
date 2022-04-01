<?php
function ju_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'udemy', [
        'title' => __( 'Udemy', 'udemy' ),
        'description' => '<p>Udemy Theme Settings</p>',
        'priority' => 160        
    ]);

    ju_social_customizer_section($wp_customize);
    ju_misc_customizer_section($wp_customize);
}

?>

<!-- 
    WP Customizer basics
        Setting up a customizer field requires setting up three values
        setting
            a value saved in the DB
        section
            a way to group input fields together
            as in the groups you see in the customizer when you open it
            ex heading, site identity, etc.
        controller
            input field that is placed inside a section
            and modifies a single setting
            it is used to manage changing the setting
 -->