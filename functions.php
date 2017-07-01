<?php
add_theme_support( 'post-thumbnails' );


function load_css_js() {
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'load_css_js' );


?>