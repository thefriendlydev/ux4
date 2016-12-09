<?php

//-- Plugins --------------------------------------------------------------
// include_once 'plugins/advanced-custom-fields-pro/acf.php';
// include_once 'plugins/contact-form-7/wp-contact-form-7.php';
// include_once 'plugins/rest-api/plugin.php';

//-- Vendor ---------------------------------------------------------------

//-- WordPress Functuons --------------------------------------------------
require_once 'includes/wordpress_functions/image_overrides.php';
require_once 'includes/wordpress_functions/menus.php';
require_once 'includes/wordpress_functions/featured_image.php';
require_once 'includes/wordpress_functions/sidebars.php';
require_once 'includes/wordpress_functions/hide_editor.php';

//-- Custom Post Type --------------------------------------------
require_once 'includes/post_types/case_studies.php';
require_once 'includes/post_types/services.php';

//-- Custom Fields Definitions --------------------------------------------
require_once 'includes/custom_fields/case_study.php';
require_once 'includes/custom_fields/service.php';

//-- Utils ----------------------------------------------------------------
include_once 'includes/utils/asset_link.php';

//-- Core App -------------------------------------------------------------


//-- Other -------------------------------------------------------------

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}

function truncate($text, $chars = 25) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

