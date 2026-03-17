<?php

/**
 * The blog page template file
 * Template Name: Overview - Calculators
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); ?>

<main class="quipli main">
    <?php
		echo '<div class="breadcrumbs">';
		echo '<div class="max-container">';
		echo '<a href="' . home_url() . '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-4 h-4 mr-1"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg> Home</a><span class="separator">›</span>';
		echo '<a href="' . home_url() . '/resources/">Rental Resources</a><span class="separator">›</span>';
		echo '<span class="title">Calculators</span></div></div>';
	?>
    <?php 
        get_template_part('page-templates/modules/overview-header', null, array(
            'post_type' => 'calculators',
            'taxonomy' => 'category'
        ));

        get_template_part('page-templates/modules/overview-posts', null, array(
            'post_type' => 'calculators'
        ));
    ?>
</main>

<?php get_footer(); ?>