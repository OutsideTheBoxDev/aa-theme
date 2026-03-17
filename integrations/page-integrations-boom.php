<?php
/*
Template Name: Integrations - Boom & Bucket
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
										$hero_group['hero_heading'] = 'Expand Your Sales Opportunities with Boom & Bucket';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Get real-time valuations on your fleet and list equipment for sale with a trusted online marketplace built for heavy equipment.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:0;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hero-boom.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli has partnered with <a href="https://www.boomandbucket.com/" target="_blank" rel="noopener noreferrer">Boom & Bucket</a> to provide rental businesses with a trusted online marketplace for heavy equipment. This integration empowers you to list equipment for sale with a real-time valuation, giving your customers the confidence to make informed decisions about their rentals.</p>
					<p>Whether you're ready to sell assets or just need accurate equipment valuations, Boom & Bucket gives you the insights and tools to do it confidently - right from your Quipli dashboard.</p>
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
									'title' => 'Real-Time Asset Valuation',
									'desc' => "Instantly see what your equipment is worth based on live market data, helping you make informed decisions about selling, holding, or rotating assets.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-presentation.svg',
								),
								array(
									'title' => 'List Equipment with Ease',
									'desc' => "When you're ready to sell, add your equipment to Boom & Bucket directly from Quipli in just a few clicks.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-pointer.svg',
								),
								array(
									'title' => 'Reach Qualified Buyers',
									'desc' => 'Gain access to a trusted network of buyers actively searching for heavy equipment.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-bag.svg',
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
					<h2>About Boom & Bucket</h2>
				</div>
				<div class="qp-2col-info">
					<p>Boom & Bucket is a leading online marketplace for buying and selling heavy equipment.</p>
					<p>Designed to connect equipment owners with verified buyers, Boom & Bucket offers a trusted platform that simplifies the sales process, helping businesses turn underutilized assets into profit.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Ready to sell your equipment faster and easier? Contact our team to enable the Boom & Bucket integration in your Quipli account.']); ?>

</main>
<?php
get_sidebar();
get_footer();
