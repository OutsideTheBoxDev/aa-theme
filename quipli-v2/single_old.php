<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Quipli
 */

get_header('home');
?>

<main id="primary" class="quipli main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content/content', get_post_type());

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	<?php get_template_part('template-parts/rentals-cta'); ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
