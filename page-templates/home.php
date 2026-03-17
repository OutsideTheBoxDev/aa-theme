<?php

/**
 * The homepage template file
 * Template Name: Home
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); ?>

<main class="quipli main">
  <?php
  get_template_part('template-parts/home/banner');
  get_template_part('template-parts/home/rentals');
  get_template_part('template-parts/home/slider');
  get_template_part('template-parts/home/situation');
  get_template_part('template-parts/home/about');
  get_template_part('template-parts/home/who');
  get_template_part('template-parts/home/feature');
  get_template_part('template-parts/home/tab');
  get_template_part('template-parts/home/why');
  get_template_part('template-parts/home/position');
  get_template_part('template-parts/home/faq');
  get_template_part('template-parts/latest-blogs');
  get_template_part('template-parts/rentals-cta', ['title' => "Give your customers an effortless, 5-star renting experience", "cta" => "Talk to Quipli!"]); ?>

</main>

<?php get_footer(); ?>