<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_584a6335248e7',
  'title' => 'Case Study',
  'fields' => array (
    array (
      'key' => 'field_584a63540ce55',
      'label' => 'Intro Text',
      'name' => 'intro_text',
      'type' => 'textarea',
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
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_584a6623f00ea',
      'label' => 'Project Type',
      'name' => 'project_type',
      'type' => 'taxonomy',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'taxonomy' => 'category',
      'field_type' => 'checkbox',
      'allow_null' => 0,
      'add_term' => 0,
      'save_terms' => 0,
      'load_terms' => 0,
      'return_format' => 'id',
      'multiple' => 0,
    ),
    array (
      'key' => 'field_584a6660f00eb',
      'label' => 'Services',
      'name' => 'services',
      'type' => 'relationship',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'service',
      ),
      'taxonomy' => array (
      ),
      'filters' => '',
      'elements' => '',
      'min' => '',
      'max' => '',
      'return_format' => 'object',
    ),
    array (
      'key' => 'field_584a66aff00ec',
      'label' => 'Objectives',
      'name' => 'objectives',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 1,
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
      'button_label' => 'Add Objective',
      'sub_fields' => array (
        array (
          'key' => 'field_584a66c6f00ed',
          'label' => 'Objective Text',
          'name' => 'objective_text',
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
    ),
    array (
      'key' => 'field_584a66d9f00ee',
      'label' => 'Challenges',
      'name' => 'challenges',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 1,
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
      'button_label' => 'Add Challenge',
      'sub_fields' => array (
        array (
          'key' => 'field_584a66fff00ef',
          'label' => 'Challenge Text',
          'name' => 'challenge_text',
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
          'key' => 'field_584a6741f00f0',
          'label' => 'Challenge Image',
          'name' => 'challenge_image',
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
    array (
      'key' => 'field_584a6775f00f1',
      'label' => 'Solutions',
      'name' => 'solutions',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 1,
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
      'button_label' => 'Add Row',
      'sub_fields' => array (
        array (
          'key' => 'field_584a6795f00f2',
          'label' => 'Solution Text',
          'name' => 'solution_text',
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
          'key' => 'field_584a67a2f00f3',
          'label' => 'Solution Image',
          'name' => 'solution_image',
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
    array (
      'key' => 'field_584a67d1f00f5',
      'label' => 'NDA Text',
      'name' => 'nda_text',
      'type' => 'text',
      'instructions' => '',
      'required' => '',
      'conditional_logic' => '',
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
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'case-study',
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