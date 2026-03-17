<?php
/*
Template Name: Integrations - Main
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
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									if($hero_group['hero_heading'] == ''){
										$hero_group['hero_heading'] = 'Partners and Integrations';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Unlock new growth opportunities with trusted partners and integrations that keep your rental business running smoothly.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: 0rem; --img-mr: -2rem; max-width: 500px">
						<img src="<?php echo $hero_group['hero_image'];?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="sec-heading" style="--max-w: 60rem">
				<h2>Integrations That Simplify Your Workflow</h2>
				<p>Connect the tools you rely on to improve accuracy, reduce manual work, and stay organized.</p>
			</div>
			<?php 
				$integrations_group = get_field('integrations_list');
				$integrations = array(
					array(
						'title' => 'QuickBooks',
						'desc' => '<b>QuickBooks Online</b> automates accounting and financial reporting.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/intuit.svg',
						'link_key' => 'quickbooks',
						'link' => $integrations_group['quickbooks_page']
					),
					array(
						'title' => 'Stripe',
						'desc' => '<b>Stripe</b> is a payment processing platform that allows you to accept payments online.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/stripe.svg',
						'link_key' => 'stripe',
						'link' => $integrations_group['stripe_page']
					),
				// 	array(
				// 		'title' => 'Hapn',
				// 		'desc' => 'Use <b>hapn</b> to track your equipment with real-time GPS insights.',
				// 		'image' => get_template_directory_uri() . '/assets/img/integrations/hapn.svg',
				// 		'link_key' => 'hapn',
				// 		'link' => $integrations_group['hapn_page']
				// 	),
					array(
						'title' => 'TaxJar',
						'desc' => '<b>TaxJar</b> simplifies sales tax calculations and compliance.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/taxjar.svg',
						'link_key' => 'taxjar',
						'link' => $integrations_group['taxjar_page']
					),
					array(
						'title' => 'Google Maps',
						'desc' => 'Improve delivery routing and track equipment locations with <b>Google Maps</b>.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/gmaps.svg',
						'link_key' => 'googlemaps',
						'link' => $integrations_group['googlemaps_page']
					),
				// 	array(
				// 		'title' => 'IDScan.net',
				// 		'desc' => '<b>IDScan.net</b> verifies customer IDs to improve security and compliance.',
				// 		'image' => get_template_directory_uri() . '/assets/img/integrations/idscan.svg',
				// 		'link_key' => 'idscan',
				// 		'link' => $integrations_group['idscan_page']
				// 	),
				)
			?>
			<div class="qp-integrations-grid">
				<?php foreach($integrations as $integration): ?>
					<div class="qp-ig-block">
						<div class="qp-ig-content">
							<div class="qp-ig-icon">
								<img src="<?php echo $integration['image']; ?>" alt="<?php echo $integration['title']; ?>">
							</div>
							<p><?php echo $integration['desc']; ?></p>
						</div>
						<a href="<?php echo $integration['link']; ?>">Learn more</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section style="margin-bottom: 4rem;">
		<div class="max-container">
			<div class="sec-heading" style="--max-w: 65rem">
				<h2>Trusted Partne﻿rs to Help You Grow</h2>
				<p>Our trusted partners provide expert services to protect your assets, manage your finances, and expand your reach.</p>
			</div>
			<?php 
				$partners_group = get_field('integrations_partners');
				$partners = array(
					array(
						'title' => 'SEIS',
						'desc' => 'Protect your equipment with rental damage waiver coverage.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/sp.png',
						'link_key' => 'seis',
						'link' => $partners_group['seis_page']
					),
					array(
						'title' => 'Boom and Bucket',
						'desc' => 'Expand your sales opportunities with a trusted marketplace.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/boom.png',
						'link_key' => 'boom_and_bucket',
						'link' => $partners_group['boom_and_bucket_page']
					),
				// 	array(
				// 		'title' => 'Rouse',
				// 		'desc' => 'Get industry insights to improve pricing and equipment utilization.',
				// 		'image' => get_template_directory_uri() . '/assets/img/integrations/rouse.png',
				// 		'link_key' => 'rouse',
				// 		'link' => $partners_group['rouse_page']
				// 	),
					array(
						'title' => 'TydeCo',
						'desc' => 'Accounting services built for rental businesses like yours.',
						'image' => get_template_directory_uri() . '/assets/img/integrations/type.png',
						'link_key' => 'tydeco',
						'link' => $partners_group['tydeco_page']
					)
				)
			?>
			<div class="qp-integrations-grid">
				<?php foreach($partners as $partner): ?>
					<div class="qp-ig-block">
						<div class="qp-ig-content">
							<div class="qp-ig-icon">
								<img src="<?php echo $partner['image']; ?>" alt="<?php echo $partner['title']; ?>">
							</div>
							<p><?php echo $partner['desc']; ?></p>
						</div>
						<a href="<?php echo $partner['link']; ?>">Learn more</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

</main>

<?php
get_sidebar();
get_footer();
