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
require_once 'includes/post_types/valuable_finds.php';

//-- Custom Fields Definitions --------------------------------------------
require_once 'includes/custom_fields/home/video_cta.php';
require_once 'includes/custom_fields/home/service_links.php';
require_once 'includes/custom_fields/home/person_left_green.php';
require_once 'includes/custom_fields/home/person_right_grey.php';
require_once 'includes/custom_fields/home/certifications.php';
require_once 'includes/custom_fields/certifications_facility/certification_logos.php';
require_once 'includes/custom_fields/certifications_facility/opp.php';
require_once 'includes/custom_fields/services/services_page.php';
require_once 'includes/custom_fields/recycling/certifications.php';
require_once 'includes/custom_fields/itad/security.php';
require_once 'includes/custom_fields/our_story/circle_points.php';
require_once 'includes/custom_fields/our_story/about_video.php';
require_once 'includes/custom_fields/precious_metals/walkins.php';
require_once 'includes/custom_fields/precious_metals/valuable_finds.php';
require_once 'includes/custom_fields/precious_metals/precious_thoughts.php';
require_once 'includes/custom_fields/shared/right_cta.php';
require_once 'includes/custom_fields/shared/right_points.php';
require_once 'includes/custom_fields/options/footer_cta.php';
require_once 'includes/custom_fields/post_types/valuable_finds.php';
require_once 'includes/custom_fields/post_types/blog.php';
require_once 'includes/custom_fields/contact/contact_us.php';

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

