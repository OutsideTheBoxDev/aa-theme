<?php
/*
Template Name: Onboarding Page
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
					<picture class="page-hero-image align-top" style="--img-max-w: 5rem; --img-mr: -6rem">
						<img src="<?php echo $hero_group['hero_image'];?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="qp-gird-square-cards">
				<div class="sub-sec-heading dark">
					<h2>Reliable Support,<br/>
					Whenever You Need It</h2>
				</div>

				<div class="core-values-grid">
					<div class="core-value-block primary">
						<p>Accessible Support</p>
						<span>Get help when you need it via email, phone, or chat - our team is always within reach, with no extra fees.</span>
					</div>
					<div class="core-value-block">
						<p>US-Based Team</p>
						<span>Our knowledgeable, US-based support team understands the rental industry and is ready to assist.</span>
					</div>
					<div class="core-value-block secondary">
						<p>Fast Response Times</p>
						<span>We prioritize your requests to ensure quick, effective solutions that keep your business running smoothly.</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--how section--about section-timeline">
		<div class="qp how about">
			<div class="container container--xl">
				<div class="how__wrap horizontal secondary">
					<div class="qp-core-values">
						<h2>Onboarding Made Simple</h2>
						<ul class="steps-sm-list">
							<li>
								<div class="info">
									<p>Survey and<br/>
									Kick-off Call</p>
									<span>Share your inventory and goals during 
									a quick kick-off session.</span>

								</div>
							</li>
							<li>
								<div class="info">
									<p>We Handle<br/>
									Full Setup</p>
									<span>Our team uploads your inventory, photos, and descriptions.</span>
								</div>
							</li>
							<li>
								<div class="info">
									<p>Review and <br/>Launch</p>
									<span>Approve the setup, and your system goes live.</span>
								</div>
							</li>
							<li>
								<div class="info">
									<p>Training and <br/>Support</p>
									<span>Get team training and ongoing support starting in the first week.</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/customer-cta'); ?>

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
								
								<ul class="qp-sub-feature-blocks">
								    <?php 
    								$sub_features = $field['sub_features'];
    						         $sb_block = 0;
    						        while($sb_block < 4 ):
    						            $sb_block = $sb_block + 1;
                						$current_sb_field_id = 'sub_feature_' . $sb_block;
                						$sb_field = $sub_features[$current_sb_field_id];
                						
                						$sb_icon = $sb_field['feat_icon'];
                						$sb_title = $sb_field['feat_title'];
                						$sb_description = $sb_field['feat_desc'];
                						
                						if($sb_title):
								    ?>
								    
								    <li>
								        <svg width="24px" height="24px" viewBox="0 0 24 24">
    										<use xlink:href="#<?php echo $sb_icon; ?>" />
    									</svg>
    									<div>
    									    <p><?php echo $sb_title; ?></p>
    									    <span><?php echo $sb_description; ?></span>
    									</div>
								    </li>
								    
								    <?php endif; endwhile;  ?>
								</ul>
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


	<?php get_template_part('template-parts/reviews'); ?>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "We’re here for you.", 'description' => "When you succeed, we succeed. Our team is committed to delivering exceptional service, responding promptly to your needs, and evolving our platform based on your feedback."]); ?>

</main>

<?php
get_sidebar();
get_footer();
