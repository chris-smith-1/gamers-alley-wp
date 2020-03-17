<?php

function ga_post_types(){
    register_post_type('event', array(
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'supports' => array('title','editor'),
        'menu_icon' => 'dashicons-excerpt-view',
        'labels' => array(
            'name' => 'Products',
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product'
        )
        ));
}

add_action('init', 'ga_post_types');