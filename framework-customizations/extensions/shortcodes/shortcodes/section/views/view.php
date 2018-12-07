<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$bg_video_data_attr    = '';
$section_extra_classes = '';
if ( ! empty( $atts['video'] ) ) {
	$filetype           = wp_check_filetype( $atts['video'] );
	$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
	$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
	$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
	$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $atts['video'] ) ) ) ) . '"';
	$section_extra_classes .= ' background-video';
}

$section_style   = ( $bg_color || $bg_image ) ? 'style="' . esc_attr($bg_color . $bg_image) . '"' : '';
$container_id = ( isset( $atts['container_id'] ) && $atts['container_id'] ) ? $atts['container_id'] : '';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';

$section_extra_classes .= ( isset( $atts['container_class'] ) && $atts['container_class'] ) ? $atts['container_class'] : '';
?>
<section id="<?php echo esc_attr($container_id); ?>" class="fw-main-row <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?> <?php echo $bg_video_data_attr; ?>>
	<div class="<?php echo esc_attr($container_class); ?>">
		<?php if ( isset( $atts['container_title'] ) && $atts['container_title'] ) : ?>
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2><?php echo esc_attr( $atts['container_title'] ); ?></h2>
				<?php if ( isset( $atts['container_subtitle'] ) && $atts['container_subtitle'] ) : ?>
					<p><?php echo esc_attr( $atts['container_subtitle'] ); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php echo do_shortcode( $content ); ?>
	</div>
</section>
