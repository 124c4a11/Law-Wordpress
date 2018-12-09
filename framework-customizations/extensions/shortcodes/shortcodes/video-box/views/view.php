<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>


<div class="video fh5co-video" style="background-image: url(<?php echo esc_attr( $atts['poster']['url'] ); ?>)">
	<a href="<?php echo esc_url( trim( $atts['url'] ) ); ?>" class="popup-vimeo"><i class="icon-video2"></i></a>
	<div class="overlay"></div>
</div>