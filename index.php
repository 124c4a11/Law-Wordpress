<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Law
 */

get_header();
?>


<?php if ( have_posts() ) : ?>
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<?php while( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-posts-list', 'search' );
				endwhile; ?>
			</div>
			<?php the_posts_pagination( array(
				'type' => 'list',
			) ); ?>
		</div>
	</div>
<?php endif; ?>


<?php get_footer(); ?>
