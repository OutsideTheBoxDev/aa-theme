<?php
/*
Template Name: Integrations - Stripe
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
										$hero_group['hero_heading'] = 'Fast, Secure Payments with Stripe';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Quipli integrates with Stripe to power secure online and in-person payments - helping your rental business move faster and get paid with confidence.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:0;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/stripe-hero.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli integrates with <a href="https://stripe.com/" target="_blank">Stripe</a>, a leading payment platform, to deliver fast, secure, and flexible payment processing for your rental business. Accept credit card payments, track transactions, and manage both online and in-person checkouts - right from your Quipli dashboard.</p>
					<p>One powerful advantage of this integration is Quipli’s ability to <b>support true, indefinite security deposits</b> - a feature not available in most other rental software platforms. Whether a rental is three days or three weeks, your deposit stays securely held without needing to reauthorize or incur additional fees.</p>
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
									'title' => 'Easy Setup',
									'desc' => 'Create and connect your Stripe account directly in Quipli to start processing payments.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-pointer.svg',
								),
								array(
									'title' => 'In-Person & Online Payments',
									'desc' => 'Accept payments through Stripe Terminal or online, with PCI-compliant infrastructure and built-in fraud protection.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-cc.svg',
								),
								array(
									'title' => 'True Security Deposits',
									'desc' => 'Hold deposits for the full duration of a rental - no reauthorizations, expiration limits, or unnecessary fees.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-currency.svg',
								),
								array(
									'title' => 'Automated Transactions & Reporting',
									'desc' => 'Automatically charge customers at the right time in the rental flow, and track payments, cash flow, and transaction history with Stripe’s reporting tools.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-square-knot.svg',
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
					<h2>About Stripe</h2>
				</div>
				<div class="qp-2col-info">
					<p>Stripe is a globally trusted payment platform used by millions of businesses to process secure, scalable transactions. Whether you’re running a local rental shop or scaling nationwide, Stripe makes it easy to accept payments and manage your financial operations with confidence.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started To﻿day", 'description' => 'Bring fast, secure payment processing to your rental business with Quipli and Stripe.']); ?>

</main>
<?php
get_sidebar();
get_footer();
