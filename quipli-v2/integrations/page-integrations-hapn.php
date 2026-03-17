<?php
/*
Template Name: Integrations - Hapn
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
										$hero_group['hero_heading'] = 'Track Your Equipment with HAPN';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Bring real-time equipment location and usage data from HAPN directly into your rental workflows, giving your team better visibility without switching systems.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -12rem; --img-mr: 8rem;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hapn-hero.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli's integration with <a href="https://gethapn.com/" target="_blank">HAPN</a> connects GPS tracking and telematics data with day-to-day rental operations. By embedding live tracking and hour meter data directly into Quipli, rental teams can manage equipment visibility, usage, and service workflows in one place. The partnership focuses on reducing manual work and improving operational clarity for rental businesses.</p>
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
									'title' => 'Connect Your HAPN Account',
									'desc' => 'Link your HAPN account to Quipli and assign trackers to individual equipment units to enable live tracking.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-pin.svg',
								),
								array(
									'title' => 'View Live Equipment Data',
									'desc' => 'Access real-time GPS location and supported telemetry directly within Quipli, including live map visibility and order-level tracking.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-grid.svg',
								),
								array(
									'title' => 'Automate Hour Tracking',
									'desc' => 'Automatically pull hour meter readings at key workflow steps like on-rent, return, inspections, and internal work orders, reducing manual entry and improving accuracy.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-sheild.svg',
								),
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
					<h2>About HAPN</h2>
				</div>
				<div class="qp-2col-info">
					<p>HAPN is a GPS tracking and fleet telemetry platform built for equipment rental and asset-intensive businesses. Using installed hardware and cloud-based software, HAPN provides real-time location tracking, usage data, and machine health insights. HAPN helps equipment owners improve visibility, utilization, and control across their fleets.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started To﻿day", 'description' => 'Bring real-time GPS tracking and telematics to your rental business with Quipli and HAPN.']); ?>

</main>
<?php
get_sidebar();
get_footer();
