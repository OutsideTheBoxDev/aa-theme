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

<main class="quipli main single-roundtable">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content/content', get_post_type());


	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
