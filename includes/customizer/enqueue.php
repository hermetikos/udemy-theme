<?php

// this conditionally loads the JS that controls customizer refresh settings
// so that it only loads when in the customizer
function ju_customize_preview_init() {
    wp_enqueue_script(
        'ju_theme_customizer',
        get_theme_file_uri( '/assets/js/theme-customize.js'),
        [
            'jquery', 'customize-preview'
        ],
        false,
        true
        );
}

?>