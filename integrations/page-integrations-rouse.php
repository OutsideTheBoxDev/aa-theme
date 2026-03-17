<?php
/*
Template Name: Integrations - Rouse Analytics
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
										$hero_group['hero_heading'] = 'Unlock Data-Driven Insights with Rouse Analytics';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Optimize pricing, improve equipment utilization, and stay competitive with industry-leading rental market data.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<!-- <picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:0;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/stripe-hero.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture> -->
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
					<p>Quipli has partnered with <a href="https://www.rouseservices.com/" target="_blank" rel="noopener noreferrer">Rouse Analytics</a> to give rental businesses access to the industry’s most trusted benchmarking data. With Rouse, you can compare your rates, utilization, and fleet performance against real-world data from hundreds of rental companies - helping you make more informed, confident business decisions.</p>
					<p>This partnership empowers you to analyze your business through a broader market lens—enabling smarter pricing, better fleet management, and stronger profitability.</p>
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
									'title' => 'Benchmark Against Real Market Data',
									'desc' => "Compare your performance to over 400 rental companies, representing $49 billion in rental revenue and $115 billion in fleet value.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-presentation.svg',
								),
								array(
									'title' => 'Make Data-Backed Decisions',
									'desc' => 'Use trusted analytics to adjust pricing, optimize utilization, and guide strategic decisions.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-bars.svg',
								),
								array(
									'title' => 'Get Connected Through Quipli',
									'desc' => "We'll introduce you to the Rouse team to explore subscription options and choose the level of insights that best fit your business needs.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-square-knot.svg',
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
					<h2>About Rouse Analytics</h2>
				</div>
				<div class="qp-2col-info">
					<p>Rouse Analytics is the rental industry’s exclusive source for benchmark rate and utilization data. With a network of over 400 participating companies across North America, Rouse delivers insights based on actual rental invoices and fleet data - giving you an accurate view of how your business stacks up against the market.</p>
					<p>Their secure, proprietary platform helps rental businesses make smarter decisions backed by real numbers.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Want to see how your business compares to the market? Let us connect you with Rouse Analytics and help you get started.']); ?>

</main>
<?php
get_sidebar();
get_footer();
