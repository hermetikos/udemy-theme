<?php

class JU_Custom_Nav_Walker extends Walker_Nav_Menu {
    // define the list's starting tag and properties
    public function start_lvl( &$output, $depth = 0, $args = []) {
        $output .= '<ul class="special-class">';        
    }

    // define the start of the list element
    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0) {
        $output .= '<li class="special-class-item">';
        $output .= $args->before;
        $output .= '<a href="' . $item->url . '">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    // define the end of the list element
    public function end_el( &$output, $item, $depth = 0, $args = [], $id = 0) {
        $output .= '</li>';
    }

    // close the list tag
    public function end_lvl( &$output, $depth = 0, $args = []) {
        $output .= '</ul>';        
    }
}