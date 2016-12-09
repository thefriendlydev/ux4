<?php
function cjpopups_arrays($return){
	$arrays['yes_no'] = array(
		'yes' => __('Yes', 'cjpopups'),
		'no' => __('No', 'cjpopups'),
	);
	$arrays['enable_disable'] = array(
		'enable' => __('Enable', 'cjpopups'),
		'disable' => __('Disable', 'cjpopups'),
	);
	$arrays['on_off'] = array(
		'on' => __('On', 'cjpopups'),
		'off' => __('Off', 'cjpopups'),
	);

	$categories = get_categories(array(
		'taxonomy' => 'category'
	));

	if(!is_wp_error($categories)){
		foreach ($categories as $key => $cat) {
			$arrays['categories'][$cat->term_id] = $cat->name;
		}
	}else{
		$arrays['categories']['none'] = __('No categories found', 'cjpopups');
	}


	return $arrays[$return];
}