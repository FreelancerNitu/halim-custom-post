<?php

/*
 Plugin Name: Halim Custom Post Type
 Description: Common Custom Post For Halim Theme
 Plugin URI: https://www.nitu121.com/halim-cpt
 Author: Nitu Barmon
 Author URI:  https://www.nitu121.com/halim-cpt
 Text Domain: halim
*/

function halim_custom_post(){ 
  // Slider Custom Post
register_post_type('sliders', array( 
  'labels'=> array(
    'name' => __('Sliders', 'halim'),
    'singular_name' => __('Slider', 'halim'),
    'add_new' => __('Add New Slider', 'halim'),
    'add_new_item' => __('Add New Slider', 'halim'),
    'view_item' => __('View Slider', 'halim'),
    'edit_item' => __('Edit Slider', 'halim'),
    'featured_image' =>__('Slider Image', 'halim'),
    'set_featured_image' =>__('Set Slider Image', 'halim'),
    'search_items' => __('Search Slider', 'halim'),
),
  'menu_icon' => 'dashicons-open-folder',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
 ));
 
// Services Custom Post
register_post_type('services', array( 
  'labels'=> array(
    'name' => __('Services', 'halim'),
    'singular_name' => __('Service', 'halim'),
    'add_new' => __('Add New Service', 'halim'),
    'add_new_item' => __('Add New Service', 'halim'),
    'view_item' => __('View Service', 'halim'),
    'edit_item' => __('Edit Service', 'halim'),
    'featured_image' =>__('Service Image', 'halim'),
    'set_featured_image' =>__('Set Service Image', 'halim'),
    'search_items' => __('Search Service', 'halim'),
),
  'menu_icon' => 'dashicons-megaphone',
  'public' => true,
  'supports' => array('title', 'editor', 'custom-fields'),
 ));
 
// Team Custom Post
register_post_type('teams', array( 
  'labels'=> array(
    'name' => __('Teams', 'halim'),
    'singular_name' => __('Team', 'halim'),
    'add_new' => __('Add New Team', 'halim'),
    'add_new_item' => __('Add New Team', 'halim'),
    'view_item' => __('View Team', 'halim'),
    'edit_item' => __('Edit Team', 'halim'),
    'featured_image' =>__('Team Image', 'halim'),
    'set_featured_image' =>__('Set Team Image', 'halim'),
    'search_items' => __('Search Team', 'halim'),
),
  'menu_icon' => 'dashicons-buddicons-buddypress-logo',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
 ));
 
// Testimonials Post
register_post_type('testimonials', array( 
  'labels'=> array(
    'name' => __('Testimonials', 'halim'),
    'singular_name' => __('Testimonial', 'halim'),
    'add_new' => __('Add New Testimonial', 'halim'),
    'add_new_item' => __('Add New Testimonial', 'halim'),
    'view_item' => __('View Testimonial', 'halim'),
    'edit_item' => __('Edit Testimonial', 'halim'),
    'featured_image' =>__('Testimonial Image', 'halim'),
    'set_featured_image' =>__('Set Testimonial Image', 'halim'),
    'search_items' => __('Search Testimonial', 'halim'),
),
  'menu_icon' => 'dashicons-testimonial',
  'public' => true,
  'supports' => array('thumbnail', 'custom-fields', 'page-attributes'),
 ));
 
// Gallery Post
register_post_type('gallery', array( 
  'labels'=> array(
    'name' => __('Gallerys', 'halim'),
    'singular_name' => __('Gallery', 'halim'),
    'add_new' => __('Add New Gallery', 'halim'),
    'add_new_item' => __('Add New Gallery', 'halim'),
    'view_item' => __('View Gallery', 'halim'),
    'edit_item' => __('Edit Gallery', 'halim'),
    'featured_image' =>__('Gallery Image', 'halim'),
    'set_featured_image' =>__('Set Gallery Image', 'halim'),
    'search_items' => __('Search Gallery', 'halim'),
),
  'menu_icon'   => 'dashicons-format-gallery',
  'public' => true,
  'supports' => array('title', 'custom-fields', 'page-attributes'),
 ));
 
// Portfolio Post
register_post_type('portfolio', array( 
  'labels'=> array(
    'name' => __('Portfolios', 'halim'),
    'singular_name' => __('Portfolio', 'halim'),
    'add_new' => __('Add New Portfolio', 'halim'),
    'add_new_item' => __('Add New Portfolio', 'halim'),
    'view_item' => __('View Portfolio', 'halim'),
    'edit_item' => __('Edit Portfolio', 'halim'),
    'featured_image' =>__('Portfolio Image', 'halim'),
    'set_featured_image' =>__('Set Portfolio Image', 'halim'),
    'search_items' => __('Search Portfolio', 'halim'),
),
  'menu_icon' => 'dashicons-portfolio',
  'public' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
 ));
 
//  Portfolio taxonomy
register_taxonomy('portfolio-cat', 'portfolio', array(
  'labels' => array(
    'name' => __('Categories', 'halim'),
    'singular_name' => __('Category', 'halim'),
    'add_new' => __('Add New Category', 'halim'),
    'add_new_item' => __('Add New Category', 'halim'),
    'view_item' => __('View Category', 'halim'),
    'edit_item' => __('Edit Category', 'halim'),
    'search_items' => __('Search Category', 'halim'),
  ),
  'hierarchical' => true,
  'show_admin_column' => true,
  
));

}
add_action('init', 'halim_custom_post');