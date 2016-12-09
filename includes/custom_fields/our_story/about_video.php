<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_578f21c91f07e',
  'title' => 'Right Video',
  'fields' => array (
    array (
      'key' => 'field_578f21f215ad3',
      'label' => 'Video Title Text',
      'name' => 'video_title_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Get to know more about EDI',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_578f230015ad4',
      'label' => 'YouTube ID',
      'name' => 'youtube_id',
      'type' => 'text',
      'instructions' => 'Grab the code after v= in the URL',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'z-HgqB9-tSw',
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
        'value' => 'page-story.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-facility.php',
      ),
    ),
  ),
  'menu_order' => 1,
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