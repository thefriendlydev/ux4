<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5857afe3b9bce',
  'title' => 'Careers Page',
  'fields' => array (
    array (
      'key' => 'field_zzaarr5856c1ffc5ddf',
      'label' => 'Icon Section With Bullets',
      'name' => 'icon_section_with_bullets',
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
      'button_label' => 'Add Section',
      'sub_fields' => array (
        array (
          'key' => 'field_zzaarr5856c255c5de0',
          'label' => 'Icon Name',
          'name' => 'icon_name',
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
          'key' => 'field_zzaarr5856c25bc5de1',
          'label' => 'Section Title',
          'name' => 'section_title',
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
          'key' => 'field_zzaarr5856c2abc5de2',
          'label' => 'Bullets',
          'name' => 'bullets',
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
          'layout' => 'block',
          'button_label' => 'Add Bullet',
          'sub_fields' => array (
            array (
              'key' => 'field_zzaarr5856c2d9c5de3',
              'label' => 'Bullet Text',
              'name' => 'bullet_text',
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
            array (
              'key' => 'field_zzaarr5856c2efc5de4',
              'label' => 'Bullet Image',
              'name' => 'bullet_image',
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
          ),
        ),
      ),
    ),
    array (
      'key' => 'field_zzaa5857b0b624f16',
      'label' => 'Careers',
      'name' => 'careers',
      'type' => 'post_object',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'career',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-ux4-careers.php',
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