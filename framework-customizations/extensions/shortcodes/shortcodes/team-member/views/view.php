<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
?>

<div class="fh5co-staff text-center animate-box" data-animate-effect="fadeIn">
	<img src="<?php echo esc_attr( $image ); ?>" alt="Free HTML5 Templates by gettemplates.co">
	<h3><?php echo $atts['name']; ?></h3>
	<strong class="role"><?php $atts['job']; ?></strong>
	<p><?php echo $atts['desc']; ?></p>
	<ul class="fh5co-social-icons">
		<?php if ( !empty( $atts['fb'] ) ) : ?>
			<li><a href="<?php echo esc_attr( $atts['fb'] ); ?>"><i class="icon-facebook"></i></a></li>
		<?php endif; ?>

		<?php if ( !empty( $atts['tw'] ) ) : ?>
			<li><a href="<?php echo esc_attr( $atts['tw'] ); ?>"><i class="icon-twitter"></i></a></li>
		<?php endif; ?>

		<?php if ( !empty( $atts['dr'] ) ) : ?>
			<li><a href="<?php echo esc_attr( $atts['dr'] ); ?>"><i class="icon-dribbble"></i></a></li>
		<?php endif; ?>

		<?php if ( !empty( $atts['github'] ) ) : ?>
			<li><a href="<?php echo esc_attr( $atts['github'] ); ?>"><i class="icon-github"></i></a></li>
		<?php endif; ?>
	</ul>
</div>