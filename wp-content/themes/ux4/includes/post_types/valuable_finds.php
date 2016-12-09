<?php

class Submission {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Valuable Finds',
      'singular_name' => 'Valuable Find',
      'add_new'       => 'Add New',
      'all_items'     => 'All Valuable Finds',
      'add_new_item'  => 'Add New Valuable Find',
      'edit_item'     => 'Edit Valuable Find',
      'new_item'      => 'New Valuable Find',
      'view_item'     => 'View Valuable Find',
      'search_items'  => 'Search Valuable Finds',
      'not_found'     => 'No Valuable Finds Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-cart',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'valuable-finds', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('valuable-find', $settings);
  }



}

new Submission();
