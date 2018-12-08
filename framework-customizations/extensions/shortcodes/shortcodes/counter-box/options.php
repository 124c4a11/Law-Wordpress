<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Choose an Icon', 'fw'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),
	'counter_from' => array(
		'type'  => 'text',
		'label' => __( 'Couter from', 'fw' ),
		'desc'  => __( 'Enter the initial value of the counter', 'fw' ),
	),
	'counter_to' => array(
		'type'  => 'text',
		'label' => __( 'Couter to', 'fw' ),
		'desc'  => __( 'Enter the end value of the counter', 'fw' ),
	),
);