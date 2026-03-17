<?php
/*
Template Name: Integrations - Single Template
Template Post Type: page
 */

get_header('home');
get_template_part('integrations/styles');
?>

<main class="quipli main integrations-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom-right">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<span>INTEGRATIONS</span>
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'];?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="<?php echo $hero_group['inline_image_styles'] ? $hero_group['inline_image_styles'] : '--img-max-w: 0rem; --img-mr: -2rem; max-width: 500px;';?>">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hero-typeco.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="qp-2col-block">
				<div class="sec-heading">
					<h2>About The Partnership</h2>
				</div>
				<div class="qp-2col-info">
					<?php 
						$about_partners = get_field('about_partnership');
						echo $about_partners;
					?>
				</div>
			</div>
		</div>
	</section>

	<?php if( have_rows('how_it_works') ): ?>
	<section class="section section--how">
		<div class="qp how">
			<div class="max-container">
				<div class="how__wrap" style="background-color: var(--q-gray);">
					<div class="qp-integration-works how__block">
						<?php 

							$lists = array();

							// Check rows exists.
								while( have_rows('how_it_works') ) : the_row();
									$lists[] = array(
										'title' => get_sub_field('title'),
										'desc' => get_sub_field('description'),
										'image' => get_sub_field('image'),
									);
								endwhile;
						?>
						<h2>How It Works:</h2>
						<ul>
							<?php foreach($lists as $list): ?>
							<li>
								<figure>
									<img src="<?php echo $list['image']; ?>" alt="how-faq" width="258px" height="216px" />
								</figure>
								<div>
									<h3><?php echo $list['title']; ?></h3>
									<p><?php echo $list['desc']; ?></p>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<section>
		<div class="max-container">
			<div class="qp-2col-block">
			    <?php  $about_integration = get_field('about_integration'); ?>
				<div class="sec-heading">
					<h2>About <?php echo $about_integration['name']; ?></h2>
				</div>
				<div class="qp-2col-info">
				    <?php echo $about_integration['about']; ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Take control of your accounting with TydeCo - built for rental businesses like yours.']); ?>

</main>
<?php
get_sidebar();
get_footer();
