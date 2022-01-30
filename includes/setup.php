<?php

function ju_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    /*
    enables featured images for your posts
    */
    register_nav_menu( 'primary', __( 'Primary Menu', 'udemy') );
}

?>