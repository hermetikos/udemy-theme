<?php

function ju_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    /*
    enables featured images for your posts
    */
    add_theme_support( 'title-tag');
    // enable WP to generate your title tag for you
    // this and analogous functions will generate the form in the admin pages
    // to allow you to upload and use these features
    add_theme_support( 'custom-logo' );

    register_nav_menu( 'primary', __( 'Primary Menu', 'udemy') );
    register_nav_menu( 'secondary', __( 'Secondary Menu', 'udemy') );
}

?>