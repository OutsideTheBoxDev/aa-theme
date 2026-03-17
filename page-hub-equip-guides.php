<?php
/*
Template Name: Blog Hub - Equipement Guides
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
							<h1 class="qp-highlighted-text">General Equipment <em>Guides</em></h1>
							<p style="--max-w: 80%">
								Learn everything you need to know about running an equipment
								rental business. From managing your inventory, improving
								your profitability, how to communicate with customers.
							</p>
						</div>
					</div>
					<div class="page-hero-image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-hub-guides-hero.png" alt="Website Builder" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/blog-lists', null, ['category' => 'tool-rental-guides']); ?>
	<?php get_template_part('template-parts/topics-hub'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
