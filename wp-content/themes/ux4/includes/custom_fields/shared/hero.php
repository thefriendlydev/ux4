<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_585112c69ecdb',
  'title' => 'Hero',
  'fields' => array (
    array (
      'key' => 'field_585112f93f03d',
      'label' => 'Hero Background Image',
      'name' => 'hero_background_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_585112d53f03b',
      'label' => 'Page Orientation Text',
      'name' => 'page_orientation_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_585112e43f03c',
      'label' => 'Hero Headline',
      'name' => 'hero_headline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-home.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-work.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-contact.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-about.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-careers.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-solutions.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

endif;
