<?php

/**
 * The blog page template file
 * Template Name: Blog
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); ?>

<main class="quipli main">
    <?php get_template_part('template-parts/blog/featured');
    get_template_part('template-parts/topics-hub', null, ["title", "The Equipment Rental Blog"]);
    get_template_part('template-parts/blog/bloglist');
    // get_template_part('template-parts/blog/pdfcollection');
    get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php get_footer(); ?>