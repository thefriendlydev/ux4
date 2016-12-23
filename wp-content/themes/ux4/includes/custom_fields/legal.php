<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_585bd15af2f02',
  'title' => 'Legal',
  'fields' => array (
    array (
      'key' => 'field_585bd17bd8b9e',
      'label' => 'Legal Title',
      'name' => 'legal_title',
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
      'key' => 'field_585bd16e06933',
      'label' => 'Legal Text',
      'name' => 'legal_text',
      'type' => 'textarea',
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
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-legal.php',
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
