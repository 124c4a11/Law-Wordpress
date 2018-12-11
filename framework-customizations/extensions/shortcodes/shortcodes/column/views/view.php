<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
?>
<div <?php if ( !empty( $atts['id'] ) ) echo 'id=' . esc_attr( $atts['id'] ) ; ?> class="<?php echo esc_attr($class); ?> <?php if ( !empty( $atts['class'] ) ) echo esc_attr( $atts['class'] ); ?>">
	<?php echo do_shortcode($content); ?>
</div>
