<?php
/*
Template Name: Integrations - Maps
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
										$hero_group['hero_heading'] = 'Smarter Delivery Pricing with Google Maps';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Automatically calculate delivery and pickup fees using real-time distance or drive time data from Google Maps.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -5rem; --img-mr:0;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hero-maps.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli integrates with <a href="http://google.com/maps" target="_blank" rel="noopener noreferrer">Google Maps</a> to help rental businesses price deliveries and pickups more accurately. By pulling in real-time route data, you can calculate fees based on either mileage or drive time - giving you more control and consistency in how you charge for logistics.</p>
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
									'title' => 'Live Route Data',
									'desc' => 'Google Maps provides real-time distance or drive time between your store and the delivery or pickup location.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-track.svg',
								),
								array(
									'title' => 'Custom Pricing Logic',
									'desc' => 'Choose whether to charge by time or distance, and Quipli automatically applies your rate and flat fees to each order.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-candles.svg',
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
					<h2>About Google Maps</h2>
				</div>
				<div class="qp-2col-info">
					<p>Google Maps is the world’s leading location services platform, delivering accurate routing, distance, and travel time data for millions of businesses worldwide. Its powerful mapping API helps companies optimize logistics and improve pricing accuracy.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Google Maps is already built into your Quipli platform - just set your rates and start pricing deliveries with confidence.']); ?>

</main>
<?php
get_sidebar();
get_footer();
