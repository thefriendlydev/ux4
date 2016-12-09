<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5779da41afc6c',
  'title' => 'Right Points',
  'fields' => array (
    array (
      'key' => 'field_5779da763b068',
      'label' => 'Left Title Text',
      'name' => 'left_title_text',
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
      'key' => 'field_5779da8c3b069',
      'label' => 'Points',
      'name' => 'points',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'collapsed' => '',
      'min' => '',
      'max' => '',
      'layout' => 'table',
      'button_label' => 'Add Point',
      'sub_fields' => array (
        array (
          'key' => 'field_5779da993b06a',
          'label' => 'Point',
          'name' => 'point',
          'type' => 'text',
          'instructions' => '',
          'required' => 1,
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
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-recycling.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-itad.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-pm.php',
      ),
    ),
  ),
  'menu_order' => 2,
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