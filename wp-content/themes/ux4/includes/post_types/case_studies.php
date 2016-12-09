<?php

class CaseStudy {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Case Studies',
      'singular_name' => 'Case Study',
      'add_new'       => 'Add New',
      'all_items'     => 'All Case Studies',
      'add_new_item'  => 'Add New Case Study',
      'edit_item'     => 'Edit Case Study',
      'new_item'      => 'New Case Study',
      'view_item'     => 'View Case Study',
      'search_items'  => 'Search Case Studies',
      'not_found'     => 'No Case Studies Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-book-alt',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'case-studies', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('case-study', $settings);
  }



}

new CaseStudy();
