<?php

/**
 * The homepage template file
 * Template Name: Homepage 2026 V2
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); ?>

<main class="quipli main">
  <style>
    .hero-title .highlight {
      color: #FCDA01;
      background: rgba(252, 218, 1, 0.12);
      padding: 0 4px;
    }
    @media screen and (min-width: 768px) {
      .qp.banner .container picture {
        top: 56% !important;
      }
    }
    @media screen and (min-width: 1000px) {
      .qp.banner .container picture {
        top: 54% !important;
      }
    }
    @media screen and (min-width: 1199px) {
      .qp.banner .container picture {
        top: 52% !important;
      }
    }
  </style>
  <?php
  get_template_part('template-parts/home/banner-acf', null, [
      'heading' => 'Equipment rental software <br/><span class="highlight">built for 2026, not 1980</span>',
      'desc'    => "Don't slow your team down with software that's older than you. Built specifically for construction equipment rental businesses, Quipli is the modern alternative to legacy providers.",
  ]);
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