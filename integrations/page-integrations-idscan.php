<?php
/*
Template Name: Integrations - IDScan
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
										$hero_group['hero_heading'] = 'Verify Customer IDs Instantly with IDScan.net';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Prevent fraud, reduce risk, and speed up your rental process with built-in ID scanning and verification.'; ?></p>
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
					<h2>About The Partnership</h2>
				</div>
				<div class="qp-2col-info">
					<p>Quipli integrates with <a href="https://idscan.net/" target="_blank" rel="noopener noreferrer">IDScan.net</a> to help rental businesses verify renter identities quickly and securely.</p>
					<p>With professional-grade ID scanning built directly into your rental workflow, you can reduce fraud, eliminate manual entry, and protect your business - all while creating a smoother check-out experience for your customers.</p>
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
									'title' => 'Instant ID Verification',
									'desc' => "Scan driver's licenses or ID cards in seconds using your device's camera or a compatible scanner - no manual data entry required.",
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-scan.svg',
								),
								array(
									'title' => 'Fully Integrated Workflow',
									'desc' => 'Verified customer information is automatically added to rental records and agreements inside Quipli.',
									'image' => get_template_directory_uri() . '/assets/img/integrations/how-route.svg',
								),
								array(
									'title' => 'Secure Recordkeeping',
									'desc' => 'All verification records are securely stored to support compliance, auditing, and internal documentation.',
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
					<h2>About IDScan.net</h2>
				</div>
				<div class="qp-2col-info">
					<p>IDScan.net is a leading provider of identity verification technology, trusted by over 7,500 businesses globally. Their platform uses advanced scanning tools and AI-driven fraud detection to verify IDs in real time - helping companies improve security, streamline operations, and stay compliant.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started Today", 'description' => 'Start verifying renters instantly with built-in ID scanning from IDScan.net and Quipli.']); ?>

</main>
<?php
get_sidebar();
get_footer();
