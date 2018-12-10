<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'    => array(
		'type'  => 'text',
		'label'  => __( 'Title', 'fw' ),
		'desc' => __('Please enter Title', 'fw'),
	),
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
	'progress_1_title' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-1 title', 'fw' ),
		'desc'   => __( 'Enter Progress-1 title', 'fw' )
	),
	'progress_1_data' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-1 data', 'fw' ),
		'desc'   => __( 'Enter Progress-1 data', 'fw' )
	),

	'progress_2_title' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-2 title', 'fw' ),
		'desc'   => __( 'Enter Progress-2 title', 'fw' )
	),
	'progress_2_data' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-2 data', 'fw' ),
		'desc'   => __( 'Enter Progress-2 data', 'fw' )
	),

	'progress_3_title' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-3 title', 'fw' ),
		'desc'   => __( 'Enter Progress-3 title', 'fw' )
	),
	'progress_3_data' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-3 data', 'fw' ),
		'desc'   => __( 'Enter Progress-3 data', 'fw' )
	),

	'progress_4_title' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-4 title', 'fw' ),
		'desc'   => __( 'Enter Progress-4 title', 'fw' )
	),
	'progress_4_data' => array(
		'type'   => 'text',
		'label'  => __( 'Progress-4 data', 'fw' ),
		'desc'   => __( 'Enter Progress-4 data', 'fw' )
	),
);