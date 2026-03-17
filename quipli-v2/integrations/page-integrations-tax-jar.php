<?php
/*
Template Name: Integrations - Tax Jar
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
									if($hero_group['hero_heading'] == ''){
										$hero_group['hero_heading'] = 'Take the Guesswork Out of Sales Tax';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Access accurate, jurisdiction-based tax rates with <b>TaxJar</b> - built into Quipli and available at no extra cost.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					 <picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:2rem;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hero-taxjar.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture> 
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="qp-2col-block">
				<div class="sec-heading">
					<h2>About the Integration</h2>
				</div>
				<div class="qp-2col-info">
					<p>Quipli integrates with <a href="https://www.taxjar.com/" target="_blank">TaxJar</a>, a leading tax code management platform, to deliver accurate, jurisdiction-based tax rates. Access TaxJar’s database of U.S. tax jurisdictions to pull in the right rates - reducing errors and manual work.</p>
					<p>Whether you're charging tax on tools, equipment, or accessories, Quipli uses TaxJar’s database of U.S. tax jurisdictions to pull in the right rates - reducing errors and manual work.</p>
					<p>This service is included free for Quipli users who opt into the tax codes system.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--how">
		<div class="qp how">
			<div class="max-container">
				<div class="how__wrap" style="background-color: var(--q-gray);">
					<div class="qp-integration-works how__block">
						<?php 
							$lists = array(
								array(
									'title' => 'Real-Time Tax Rate Lookup',
									'desc' => 'TaxJar provides up-to-date sales tax rates based on your customer’s location and applicable jurisdictions.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-perc.svg',
								),
								array(
									'title' => 'Support for Exempt & Taxed Items',
									'desc' => 'Assign tax categories to products that are taxed differently across jurisdictions to ensure accurate rate application.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-help.svg',
								),
								array(
									'title' => 'Included with Quipli',
									'desc' => 'No extra software or accounts required - just opt in to start applying smart tax rules to your rentals.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-wink.svg',
								)
							);
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

	<section>
		<div class="max-container">
			<div class="qp-2col-block">
				<div class="sec-heading">
					<h2>About TaxJar</h2>
				</div>
				<div class="qp-2col-info">
					<p>TaxJar is a leading provider of sales tax automation solutions for businesses of all sizes. With accurate, real-time tax rate data and powerful compliance tools, TaxJar helps businesses reduce the risk of errors and stay compliant with changing tax regulations across thousands of jurisdictions in the U.S.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started To﻿day", 'description' => 'Automate your sales tax calculations with TaxJar - free for all Quipli users.']); ?>

</main>
<?php
get_sidebar();
get_footer();
