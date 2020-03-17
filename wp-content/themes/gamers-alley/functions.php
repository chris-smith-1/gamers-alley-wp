<?php

function load_styles() {

    //Global Style Sheets
    wp_enqueue_style('ga_normalize_styles', get_stylesheet_directory_uri() . '/styles/css/normalize.css');
    wp_enqueue_style('ga_main_styles', get_stylesheet_uri());

    //Scripts
    wp_enqueue_script('carousel', get_theme_file_uri('/scripts/carousel.js'), NULL, microtime() , true);
    wp_enqueue_script('login_modal', get_theme_file_uri('/scripts/signup.js'), NULL, microtime() , true);

    //If front page, load these styles
    if(is_front_page()){
        wp_enqueue_style('ga_index_styles', get_stylesheet_directory_uri() . '/styles/dist/css/index.min.css');
    }
}

add_action('wp_enqueue_scripts', "load_styles");