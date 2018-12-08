<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>


<div class="text-center animate-box">
	<span class="icon"><i class="<?php echo esc_attr($atts['icon']); ?>"></i></span>
	<span class="fh5co-counter js-counter" data-from="<?php echo $atts['counter_from'] ? $atts['counter_form'] : '0'; ?>" data-to="<?php echo $atts['counter_to'] ? $atts['counter_to'] : '0'; ?>" data-speed="5000" data-refresh-interval="50"></span>
	<span class="fh5co-counter-label"><?php echo $atts['title']; ?></span>
</div>