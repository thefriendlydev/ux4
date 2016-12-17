<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_58511387ef1bb',
  'title' => 'Bottom Callout CTA',
  'fields' => array (
    array (
      'key' => 'field_585113916ec5f',
      'label' => 'Bottom Callout Text',
      'name' => 'bottom_callout_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Let’s talk about your UX needs. We can prepare a UX project plan based on what we learn on our call.',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_585113c46ec60',
      'label' => 'Bottom Button Text',
      'name' => 'bottom_button_text',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Get your project plan',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_585113dd6ec61',
      'label' => 'Bottom Button Link',
      'name' => 'bottom_button_link',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '/contact',
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
        'value' => 'page-about.php',
      ),
    ),
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-solutions.php',
      ),
    ),
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'client',
      ),
    ),
  ),
  'menu_order' => 5,
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
