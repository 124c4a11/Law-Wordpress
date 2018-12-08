<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-counter-box',
	$shortcodes_extension->get_declared_URI('/shortcodes/counter-box/static/css/styles.css'),
	array('font-awesome')
);

