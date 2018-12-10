<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>


<div class="choose animate-box">
	<div class="fh5co-heading">
		<?php if ( !empty( $atts['title'] ) ) : ?>
			<h2><?php echo esc_html( $atts['title'] ); ?></h2>
		<?php endif; ?>

		<?php echo $atts['text']; ?>
	</div>

	<?php if ( !empty($atts['progress_1_title']) ) : ?>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo esc_html( $atts['progress_1_data'] ); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo esc_html( $atts['progress_1_data'] ); ?>%">
			<?php echo esc_html( $atts['progress_1_title'] . ' ' . $atts['progress_1_data'] . '%' ); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( !empty($atts['progress_2_title']) ) : ?>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo esc_html( $atts['progress_2_data'] ); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo esc_html( $atts['progress_2_data'] ); ?>%">
			<?php echo esc_html( $atts['progress_2_title'] . ' ' . $atts['progress_2_data'] . '%' ); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( !empty($atts['progress_3_title']) ) : ?>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo esc_html( $atts['progress_3_data'] ); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo esc_html( $atts['progress_3_data'] ); ?>%">
			<?php echo esc_html( $atts['progress_3_title'] . ' ' . $atts['progress_3_data'] . '%' ); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( !empty($atts['progress_4_title']) ) : ?>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo esc_html( $atts['progress_4_data'] ); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo esc_html( $atts['progress_1_data'] ); ?>%">
			<?php echo esc_html( $atts['progress_4_title'] . ' ' . $atts['progress_4_data'] . '%' ); ?>
			</div>
		</div>
	<?php endif; ?>

</div>