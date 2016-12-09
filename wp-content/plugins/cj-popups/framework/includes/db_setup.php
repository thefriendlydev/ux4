<?php
/**
 * @package CSSJockey WordPress Framework
 * @author Mohit Aneja (cssjockey.com)
 * @version FW-20150208
*/
global $cjpopups_item_vars, $cjpopups_file_opts, $wpdb;

$cjpopups_options_table = cjpopups_item_info('options_table');

if(isset($_GET['cjpopups_update_database']) && $_GET['cjpopups_update_database'] == 1){
	foreach ($cjpopups_item_vars['db_tables'] as $key => $sql) {
		$query = $wpdb->query($sql);
		if(!$query){
			wp_die( $wpdb->print_error(), __('Database Error!', 'cjpopups') );
		}
		if(is_wp_error( $query )){
			wp_die($query->get_error_message(), __('Database Error!', 'cjpopups'));
		}
	}
	update_option('cjpopups_db_version', cjpopups_version);
	$welcome_page_url = cjpopups_callback_url('core_welcome');
	wp_redirect( $welcome_page_url );
	die();
}

$cjpopups_options_sync = $wpdb->get_results("SELECT * FROM $cjpopups_options_table ORDER BY option_id");
foreach ($cjpopups_options_sync as $key => $result) {
	$cjpopups_table_opts[] = $result->option_name;
}

$cjpopups_item_options = cjpopups_item_options();
foreach ($cjpopups_item_options as $key => $value) {
	foreach ($value as $okey => $ovalue) {
		$check = (in_array($ovalue['id'], $cjpopups_table_opts)) ? true : false;
		if(!$check){
			if(is_array($ovalue['default'])){
				$save_value = serialize($ovalue['default']);
			}else{
				$save_value = $ovalue['default'];
			}
			$wpdb->query("INSERT INTO $cjpopups_options_table (option_name, option_value) VALUES ('{$ovalue['id']}', '{$save_value}')");
		}
		$cjpopups_file_opts[] = $ovalue['id'];
	}
}

$cjpopups_opts_diff = array_diff($cjpopups_table_opts, $cjpopups_file_opts);
if(!empty($cjpopups_opts_diff)){
	foreach ($cjpopups_opts_diff as $key => $diff_opt) {
		$wpdb->query("DELETE FROM $cjpopups_options_table WHERE option_name = '{$diff_opt}'");
	}
}

function cjpopups_duplicate_options(){
	global $cjpopups_file_opts;
	$duplicates = implode('<br />', array_unique( array_diff_assoc( $cjpopups_file_opts, array_unique( $cjpopups_file_opts ) ) ));
	if(!empty($duplicates)){
		$display[] = '<div class="error">';
		$display[] = sprintf(__('<p><strong>ERROR</strong>: Duplicate options found!  <br /><b>%s <br />(%s)</b></p>', 'cjpopups'), cjpopups_item_info('item_name'), cjpopups_item_path('item_dir'));
		$display[] = '<p>'.$duplicates.'</p>';
		$display[] = '</div>';
		echo implode('', $display);
	}
}
add_action('admin_notices', 'cjpopups_duplicate_options');
do_action('cjpopups_db_setup_hook');
