<?php
/*
Template Name: Blog Hub - Calculators
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main blog-hub-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bl-inwards">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">Equipment Rental <em>Calculators</em></h1>
							<p style="--max-w: 80%">
								Need help with a calculation? We've created these
								calculators to help with some of the most common
								calculations an equipment rental business needs to make. Get
								help with pricing your equipment, understanding your
								equipment loans and more.
							</p>
						</div>
					</div>
					<div class="page-hero-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-hub-calc-hero.png" alt="Website Builder" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/blog-lists', null, ['category' => 'equipment-rental-calculators']); ?>
	<?php get_template_part('template-parts/topics-hub'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
