<?php

class Client {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Clients',
      'singular_name' => 'Client',
      'add_new'       => 'Add New',
      'all_items'     => 'All Clients',
      'add_new_item'  => 'Add New Client',
      'edit_item'     => 'Edit Client',
      'new_item'      => 'New Client',
      'view_item'     => 'View Client',
      'search_items'  => 'Search Clients',
      'not_found'     => 'No Clients Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-universal-access',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'clients', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('client', $settings);
  }



}

new Client();
