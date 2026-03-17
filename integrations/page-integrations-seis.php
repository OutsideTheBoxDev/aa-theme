<?php
/*
Template Name: Integrations - SEIS
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
										$hero_group['hero_heading'] = 'Protect Your Equipment, Protect Your Profits';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Offer rental damage waivers directly through Quipli with SEIS - giving your customers peace of mind while protecting your bottom line.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:-2.5rem;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/hero-seis.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli has partnered with <a href="https://specialtyequipmentinsurance.com/" target="_blank" rel="noopener noreferrer">Specialty Equipment Insurance Services</a> (SEIS) to provide rental businesses with a seamless way to offer rental damage waivers within the Quipli platform. </p>
					<p>This integration empowers you to give your customers an easy, one-click option to add damage waiver protection during checkout - helping reduce liability concerns and create a new revenue stream for your business.</p>
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
									'title' => 'Enable Coverage in Your Workflow',
									'desc' => "SEIS is built directly into Quipli, making it easy to activate and manage within your system.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-circles.svg',
								),
								array(
									'title' => 'Automatic Premium Calculation',
									'desc' => 'Customers can choose to add a rental damage waiver to their order with a single click at checkout.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-calc.svg',
								),
								array(
									'title' => 'Backed by Insurance',
									'desc' => 'Your business offers the damage waiver to customers, while SEIS provides insurance coverage to protect your company against covered damage claims.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-sheild.svg',
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
					<h2>About Specialty Equipment Insurance Services</h2>
				</div>
				<div class="qp-2col-info">
					<p>SEIS specializes in tailored insurance solutions for the equipment rental industry. With expertise in rental asset protection, SEIS offers comprehensive coverage designed to reduce risk and protect rental businesses from costly incidents.</p>
					<p>By partnering with Quipli, SEIS brings a trusted insurance solution directly into your rental workflow.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Offer rental damage waivers directly through Quipli in partnership with SEIS - giving your customers peace of mind while protecting your equipment.']); ?>

</main>
<?php
get_sidebar();
get_footer();
