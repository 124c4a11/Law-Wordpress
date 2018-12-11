<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'id' => array(
		'label' => __('Column Id', 'clean'),
		'desc'  => __('Please enter ID of Column', 'clean'),
		'type'  => 'text',
	),
	'class' => array(
		'label' => __('Column Class', 'clean'),
		'desc'  => __('Please enter Class of Column', 'clean'),
		'type'  => 'text',
	),
);
