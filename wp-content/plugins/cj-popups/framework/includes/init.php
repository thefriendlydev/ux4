<?php
/**
 * @package CSSJockey WordPress Framework
 * @author Mohit Aneja (cssjockey.com)
 * @version FW-20150208
*/
$cjpopups_item_info = cjpopups_item_info();

add_action('admin_init', 'cjpopups_db_setup');
function cjpopups_db_setup(){
	require_once(sprintf('%s/db_setup.php', cjpopups_item_path('includes_dir')));
	$cjpopups_db_version = get_option('cjpopups_db_version');
	if(!isset($_GET['cjpopups_update_database']) && $cjpopups_db_version != cjpopups_version){
		$update_db_url = cjpopups_string(cjpopups_callback_url('core_welcome')).'cjpopups_update_database=1';
		wp_redirect( $update_db_url );
		die();
	}
}

require_once(sprintf('%s/functions/'.$cjpopups_item_info['item_type'].'_setup.php', cjpopups_item_path('modules_dir')));

function cjpopups_framework_init(){
	require_once(sprintf('%s/widget_options_form.php', cjpopups_item_path('includes_dir')));
	require_once(sprintf('%s/dashboard-widget.php', cjpopups_item_path('includes_dir')));
	require_once(sprintf('%s/bootstrap-walker.php', cjpopups_item_path('includes_dir')));
	require_once(sprintf('%s/admin_ajax.php', cjpopups_item_path('includes_dir')));
	require_once(sprintf('%s/push_notifications.php', cjpopups_item_path('includes_dir')));
}

add_action('cjpopups_functions', 'cjpopups_install_plugins');
add_action('cjpopups_functions', 'cjpopups_load_modules');
add_action('cjpopups_functions', 'cjpopups_shortcode_generator');

add_action( 'init', 'cjpopups_framework_init' );
add_action( 'init', 'cjpopups_register_post_types' );
add_action( 'init', 'cjpopups_register_taxonomies');
add_action( 'init', 'cjpopups_meta_boxes', 9999 );

require_once(sprintf('%s/hooks.php', cjpopups_item_path('includes_dir')));

add_filter('widget_text', 'do_shortcode');