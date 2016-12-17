<?php

class Testimonial {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Testimonials',
      'singular_name' => 'Testimonial',
      'add_new'       => 'Add New',
      'all_items'     => 'All Testimonials',
      'add_new_item'  => 'Add New Testimonial',
      'edit_item'     => 'Edit Testimonial',
      'new_item'      => 'New Testimonial',
      'view_item'     => 'View Testimonial',
      'search_items'  => 'Search Services',
      'not_found'     => 'No Services Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-thumbs-up',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'testimonials', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('testimonial', $settings);
  }



}

new Testimonial();
