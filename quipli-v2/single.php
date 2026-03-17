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
	if (is_single()) {
		echo '<div class="breadcrumbs">';
		echo '<div class="max-container">';
		echo '<a href="' . home_url() . '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-4 h-4 mr-1"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg> Home</a><span class="separator">›</span>';
		echo '<a href="' . home_url() . '/resources/">Rental Resources</a><span class="separator">›</span>';
		echo '<a href="' . home_url() . '/resources/blog/">Blogs</a><span class="separator">›</span>';
		echo '<span class="title">';
		the_title();
		echo '</div></span></div>';
	}
	?>
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

	<?php
	// get_template_part('template-parts/rentals-cta'); 
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
