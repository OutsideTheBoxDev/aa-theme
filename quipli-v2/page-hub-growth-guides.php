<?php
/*
Template Name: Blog Hub - Growth Guides
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
							<h1 class="qp-highlighted-text">Equipment Rental <em>Marketing & Growth Guides</em></h1>
							<p style="--max-w: 80%">
								Upgrade your marketing strategies with these guides tailored
								to equipment rental. Find information on digital marketing,
								marketing tactics, and more.
							</p>
						</div>
					</div>
					<div class="page-hero-image mb-8">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/blog-hub-growth-hero.svg" alt="Website Builder" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/blog-lists', null, ['category' => 'equipment-rental-marketing-guides']); ?>
	<?php get_template_part('template-parts/topics-hub'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
