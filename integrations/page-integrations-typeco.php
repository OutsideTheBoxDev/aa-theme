<?php
/*
Template Name: Integrations - TydeCo
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
							<span>PARTNERS</span>
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									if($hero_group['hero_heading'] == ''){
										$hero_group['hero_heading'] = 'Take Control of Your Rental Business Finances';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Quipli has partnered with TydeCo to offer expert financial solutions built for rental businesses - plus exclusive discounts for Quipli users.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: 0rem; --img-mr: -2rem; max-width: 500px">
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
					<h2>About the Partnership</h2>
				</div>
				<div class="qp-2col-info">
					<p>Quipli has partnered with <a href="https://tydeco.com/" target="_blank" rel="noopener noreferrer">TydeCo</a> to help equipment rental businesses tackle the complexities of accounting and financial management.</p>
					<p>With decades of industry-specific experience, TydeCo delivers custom solutions that streamline operations, improve visibility, and support long-term growth. As a Quipli user, you’ll receive exclusive discounts on TydeCo’s services to strengthen your financial foundation.</p>
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
									'title' => 'Tailored Financial Systems',
									'desc' => "TydeCo designs and implements accounting solutions that fit your rental business - no unnecessary tools, no wasted spend.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-calc.svg',
								),
								array(
									'title' => 'Real-Time Financial Insights',
									'desc' => 'Gain better visibility into your operations and make smarter decisions with clear, up-to-date financial data.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-presentation.svg',
								),
								array(
									'title' => 'Discounted Services for Quipli Users',
									'desc' => "Access expert accounting and bookkeeping support at a reduced rate to improve accuracy and boost performance.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-user.svg',
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
					<h2>About TydeCo</h2>
				</div>
				<div class="qp-2col-info">
					<p>TydeCo is a financial services firm that specializes in accounting, bookkeeping, and system implementation for equipment rental businesses. </p>
					<p>Their deep industry expertise allows them to craft scalable, efficient solutions that eliminate bottlenecks and improve operational performance. From software setup to day-to-day accounting, TydeCo helps rental operators take control of their finances.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Take control of your accounting with TydeCo - built for rental businesses like yours.']); ?>

</main>
<?php
get_sidebar();
get_footer();
