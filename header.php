<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Law
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?><span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container' => false,
							'walker' => new Law_Header_Menu,
						) ); ?>
					</div>
				</div>

			</div>
		</div>
		<?php if ( is_single() || ( is_page() && !is_front_page() ) ) : ?>
			<aside id="fh5co-hero" class="js-fullheight" style="height: 596px;">
				<div class="flexslider js-fullheight" style="height: 596px;">
					<ul class="slides">
						<?php $img_url = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://picsum.photos/1170/570';  ?>
						<li style="background-image: url(&quot;<?php echo $img_url; ?>&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 596px;" class="flex-active-slide">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text animated fadeInUp" style="height: 596px;">
									<div class="slider-text-inner desc">
										<h2 class="heading-section"><?php the_title(); ?></h2>
									</div>
								</div>
							</div>
						</li>
						</ul>
					<ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
			</aside>
		<?php endif; ?>
	</nav>