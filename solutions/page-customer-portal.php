<?php
/*
Template Name: Solutions Page Template
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main quickbooks-page">
	<style>
		.qp-feature-block.qp-reverse .qp-feature-content{
			padding-left: 0 !important;
		}
	</style>
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom-right">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc']; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="<?php echo $hero_group['css_variables'];?>">
						<img src="<?php echo $hero_group['hero_image'];?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="sec-heading" style="--max-w: 60rem">
				<h2>
					<?php 
						$feat_section = get_field('features_section');
						echo $feat_section['feat_section_title']; 
					?>
				</h2>
			</div>
			<div class="qp-features-blocks">

				<?php 
					$block = 0;  
					if( have_rows('features_section') ): 
				?>
					<?php while($block < 3 ):
						$block = $block + 1;
						$current_field_id = 'feature_' . $block;
						$field = $feat_section[$current_field_id];
						// Get sub field values.
						$icon = $field['feat_icon'];
						$title = $field['feat_title'];
						$description = $field['feat_description'];
						$image = $field['feat_image'];
						?>
						<div class="qp-feature-block <?php if($block % 2 == 0){ echo 'qp-reverse'; } ?>">
							<div class="qp-feature-content">
								<div class="qp-icon-holder">
									<svg width="24px" height="24px" viewBox="0 0 24 24">
										<use xlink:href="#<?php echo $icon; ?>" />
									</svg>
								</div>
								<h3><?php echo $title; ?></h3>
								<p><?php echo $description; ?></p>
							</div>
							<div class="qp-feature-image">
								<picture>
									<img src="<?php echo $image;?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
								</picture>
							</div>
						</div>
					<?php
						endwhile; 
					?>
				<?php endif; ?>
			</div>
		</div>
	</section>
    
    <?php get_template_part('template-parts/solutions/see-action'); ?>
    
	<section class="section section--faq">
		<div class="qp faq">
			<div class="container">
				<div class="faq__row">
					<div class="faq__header">
						<h2>
						<?php 
							$section_group = get_field('faq_section');
							echo $section_group['title']; 
						?>
						</h2>
					</div>
					<div class="faq__col-accordion">
						<div class="faq__accordion accordion">
							<div class="accordion__wrap no-more">
								<?php 
									$faq_lists = $section_group['faqs_list'];
									$faq_count = $faq_lists ? count($faq_lists) + 1 : 0;
									$current_faq = 1;

									if( $faq_count > 0 ):
										while($current_faq <= $faq_count):
											$faq_id = 'faq_group_' . $current_faq;
											$faq_title = $faq_lists[$faq_id]['title'];
											$faq_content = $faq_lists[$faq_id]['content'];
											if($faq_title && $faq_content):
								?>
									<div class="accordion__item">
										<div class="accordion__title">
											<button type="button" aria-expanded="<?php echo $current_faq == 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo $faq_id; ?>">
												<?php echo $faq_title; ?>
											</button>
										</div>
										<div class="accordion__content <?php echo $current_faq == 1 ? 'is__open' : ''; ?>" aria-hidden="false" id="<?php echo $faq_id; ?>">
											<p>
												<?php echo $faq_content; ?>
											</p>
										</div>
									</div>
								<?php
											endif;
											$current_faq = $current_faq + 1;
										endwhile;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/reviews'); ?>

	<?php 
	    $cta = get_field('cta');
	    get_template_part('template-parts/footer-cta', null, ['title' => $cta]); 
	 ?>

</main>

<?php
get_sidebar();
get_footer();
