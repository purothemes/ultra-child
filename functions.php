<?php

/**
 * Enqueue the parent theme stylesheet.
 */
function ultra_child_enqueue_parent_style() {
    wp_enqueue_style( 'ultra-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ultra_child_enqueue_parent_style', 8 );