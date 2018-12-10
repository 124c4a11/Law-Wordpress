<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>

<div class="services text-center animate-box">
	<span class="icon">
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	</span>
	<div class="desc">
		<h3><a href="<?php echo esc_attr($atts['link'] ? $atts['link'] : '#'); ?>"><?php echo $atts['title']; ?></a></h3>
		<?php echo $atts['content']; ?>
	</div>
</div>