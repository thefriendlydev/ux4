<?php

class Career {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Careers',
      'singular_name' => 'Career',
      'add_new'       => 'Add New',
      'all_items'     => 'All Careers',
      'add_new_item'  => 'Add New Career',
      'edit_item'     => 'Edit Career',
      'new_item'      => 'New Career',
      'view_item'     => 'View Career',
      'search_items'  => 'Search Careers',
      'not_found'     => 'No Careers Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-welcome-learn-more',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'careers', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('career', $settings);
  }



}

new Career();
