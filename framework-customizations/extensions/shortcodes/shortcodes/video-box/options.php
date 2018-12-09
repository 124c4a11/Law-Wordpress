<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'poster'    => array(
		'type'  => 'upload',
		'label' => __('Choose a Poster', 'fw'),
	),
	'url'   => array(
		'type' => 'text',
		'label' => __( 'Insert Video URL', 'fw' ),
		'desc'  => __( 'Insert Video URL to embed this video', 'fw' )
	),
);