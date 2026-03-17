<?php

/**
 * The homepage template file
 * Template Name: Homepage 2025
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); ?>

<main class="quipli main">
  <?php
  get_template_part('template-parts/home/banner-acf');
  get_template_part('template-parts/home/rentals-acf');
   get_template_part('template-parts/home/gridlock-acf');
  get_template_part('template-parts/home/time-acf');
  get_template_part('template-parts/home/platform-acf');
  get_template_part('template-parts/home/who');
  get_template_part('template-parts/home/tab-acf');
  get_template_part('template-parts/home/feature-acf');
    get_template_part('template-parts/home/check-acf');
  get_template_part('template-parts/reviews-v2');
  get_template_part('template-parts/home/faq-acf');
  get_template_part('template-parts/latest-blogs');
  get_template_part('template-parts/footer-cta', null, ["title" => "Ready to break free from Rental Gridlock?", "description" => "Join hundreds of rental businesses using Quipli to run faster, smarter, and more profitably."]);
  ?>

</main>

<?php get_footer(); ?>