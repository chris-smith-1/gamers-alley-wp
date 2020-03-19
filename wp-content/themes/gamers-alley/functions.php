<?php

function load_styles() {

    //Global Style Sheets
    wp_enqueue_style('ga_normalize_styles', get_stylesheet_directory_uri() . '/styles/css/normalize.css');
    wp_enqueue_style('ga_main_styles', get_stylesheet_uri());
    wp_enqueue_style('ga_font_railway', 'https://fonts.googleapis.com/css?family=Raleway&display=swap');

    //Scripts
    wp_enqueue_script('carousel', get_theme_file_uri('/scripts/carousel.js'), NULL, microtime() , true);
    wp_enqueue_script('login_modal', get_theme_file_uri('/scripts/signup.js'), NULL, microtime() , true);
    wp_enqueue_script('font-awesome-cdn', 'https://kit.fontawesome.com/01b172b534.js', NULL, microtime() , true);

    //If front page, load these styles
    if(is_front_page()){
        wp_enqueue_style('ga_index_styles', get_stylesheet_directory_uri() . '/styles/dist/css/index.min.css');
    }else if(is_page()){
        // index is only here to get styles for login/signup, need to move those styles from index to main
        wp_enqueue_style('ga_index_styles', get_stylesheet_directory_uri() . '/styles/dist/css/index.min.css');
        wp_enqueue_style('ga_products_styles', get_stylesheet_directory_uri() . '/styles/dist/css/products.min.css');
    }else{
        ?> <h1>styles function broken</h1> <?php
    }
}

add_action('wp_enqueue_scripts', "load_styles");

function ga_features(){
    add_theme_support('title-tag');
}

add_action('after_theme_setup', 'ga_features');