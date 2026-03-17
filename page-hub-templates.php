<?php
/*
Template Name: Blog Hub - Templates
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main blog-hub-page">
	<section class="section page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-x-both pattern-bottom-image">
				<div class="page-heading">
					<h1 class="qp-highlighted-text">Equipment Rental <em>Business Templates</em></h1>
					<p>
						From liability waivers, Google Ad campaigns to equipment
						checkout form templates and more - we've developed these
						templates to use for your equipment rental business.
					</p>
					<?php get_template_part('template-parts/cta-buttons'); ?>
				</div>
				<picture class="page-hero-display-image">
					<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/blog-templates-hero.png" />
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-templates-hero-mob.png" />
				</picture>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/blog-lists', null, ['category' => 'equipment-rental-templates']); ?>
	<?php get_template_part('template-parts/topics-hub'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
