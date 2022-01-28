<?php

function ju_widgets() {
    register_sidebar([
        'name' => __( 'My First Sidebar', 'udemy theme'),
        'id' => 'ju_sidebar',
        'description' => __( 'Sidebar for Udemy theme', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
    /*
    register a sidebar
    */
}

?>