<?php

/*
function wpdocs_dequeue_script() {
        wp_dequeue_script( 'jquery' ); 
} 
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );
*/

add_theme_support( 'post-thumbnails' );

function create_hwch_posttype() {

    register_post_type( 'hwch',
    array(
        'labels' => array(
            'name'          =>  'How We Can Help Posts',
            'singular_name' =>  'Post',
            'menu_name'     =>  'HWCH Posts',
            'all_items'     =>  'All Posts',
            'add_new'       =>  'Add Post',
            'add_new_item'  =>  'Add Post'
            ),
        'public'    => true,
        'show_in_admin_bar' =>  true,
        'supports' => array( 'title', 'editor','thumbnail')
        )
    );
}

add_action( 'init', 'create_hwch_posttype' );

function create_case_study_posttype() {

    register_post_type( 'case_study',
    array(
        'labels' => array(
            'name'          =>  'Case Studies',
            'singular_name' =>  'Case Study',
            'menu_name'     =>  'Case Studies',
            'all_items'     =>  'All Case Studies',
            'add_new'       =>  'Add Case Study',
            'add_new_item'  =>  'Add Case Study'
            ),
        'public'    => true,
        'show_in_admin_bar' =>  true,
        'supports' => array( 'title', 'editor','thumbnail')
        )
    );
}

add_action( 'init', 'create_case_study_posttype' );


?>