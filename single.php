<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Law
 */

get_header();
?>


<?php if ( have_posts() ) : ?>
	<article class="post">
		<div class="container">
			<?php while( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</article>
<?php endif; ?>


<?php

get_footer();
