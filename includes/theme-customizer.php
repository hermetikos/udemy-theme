<?php
function ju_customize_register( $wp_customize ) {

    // this is a quick and dirty way to view information about customizer setup
    // like sections, controllers, panels
    // echo '<pre>';
    // var_dump( $wp_customize );
    // echo '</pre>';

    $wp_customize->get_section( 'title_tagline' )->title = 'General';
    // this method grabs a section and all it's setting
    // here we change this section title to General
    // this is a way to override section properties
    // there are similar methods for controllers, panels, settings
    
    // This adds a parent panel to the root of the customizer
    // this way we can group together custom Customizer settings
    // in this case, grouping all this theme's settings together
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
        panels
            panels are a way to group sections
            for example, you can create a customizer section for a theme
            here you'd put all customizer sections added by that theme            
        controller
            input field that is placed inside a section
            and modifies a single setting
            it is used to manage changing the setting
 -->