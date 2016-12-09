<?php

class Service {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Services',
      'singular_name' => 'Service',
      'add_new'       => 'Add New',
      'all_items'     => 'All Services',
      'add_new_item'  => 'Add New Service',
      'edit_item'     => 'Edit Service',
      'new_item'      => 'New Service',
      'view_item'     => 'View Service',
      'search_items'  => 'Search Services',
      'not_found'     => 'No Services Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-tag',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'services', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('service', $settings);
  }



}

new Service();
