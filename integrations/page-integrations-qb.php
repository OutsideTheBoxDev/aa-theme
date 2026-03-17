<?php
/*
Template Name: Integrations - Quickbbooks
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
										$hero_group['hero_heading'] = 'Automate Your Accounting with QuickBooks Online';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Sync your rental transactions, invoices, and payments to QuickBooks Online - so your books stay accurate and up to date.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: -2rem; --img-mr:0;">
						<img src="<?php echo $hero_group['hero_image'] ?? get_template_directory_uri() . '/assets/img/integrations/quickbooks-hero.png';?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
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
					<p>Quipli integrates with <a href="#" target="_blank">QuickBooks Online</a> (QBO) to help rental businesses simplify their accounting and maintain accurate financial records - without double entry or manual uploads. This one-way connection sends your rental activity from Quipli to QBO, keeping your books clean and current while saving your team time.</p>
					<p>Unlike other rental software that batches invoice data or summarizes it into broad categories, Quipli syncs each invoice in full detail - including the customer name, address, and all individual line items - giving you clearer financial insights and more accurate reporting.</p>
					<p>The integration is included at no additional cost with your Quipli subscription and is compatible with QuickBooks Online only (not QuickBooks Desktop).</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--how">
		<div class="qp how">
			<div class="max-container">
				<div class="how__wrap" style="background-color: var(--q-gray);">
					<div class="qp-integration-works how__block">
						<h2>How It Works:</h2>
						<ul>
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/integrations/how-route.svg" alt="how-faq" width="258px" height="216px" />
								</figure>
								<div>
									<h3>Effortless Syncing</h3>
									<p>Invoices, payments, and rental transactions created in Quipli sync to QuickBooks Online instantly - no batching or delays.</p>
								</div>
							</li>
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/integrations/how-invoice.svg" alt="how-call-icon" width="258px" height="216px" />
								</figure>
								<div>
									<h3>Granular Invoice Detail</h3>
									<p>Each invoice includes the full customer profile and itemized line items, giving you visibility into every part of your business income.</p>
								</div>
							</li>
							<li>
								<figure>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/integrations/how-receipt.svg" alt="how-call-icon" width="258px" height="216px" />
								</figure>
								<div>
									<h3>Accounts Receivable Management</h3>
									<p>Manage customer balances, view past-due invoices, and handle collections directly in Quipli while maintaining accurate records in QBO.</p>
								</div>
							</li>
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
					<h2>About QuickBooks Online</h2>
				</div>
				<div class="qp-2col-info">
					<p>QuickBooks Online is one of the most widely used cloud-based accounting platforms, trusted by millions of small and mid-sized businesses worldwide. </p>
					<p>With tools for invoicing, bank reconciliation, reporting, and real-time financial tracking, QuickBooks helps businesses manage their finances efficiently and with confidence - anytime, from anywhere.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Get Started To﻿day", 'description' => 'Connect Quipli to QuickBooks Online and take the hassle out of your accounting.']); ?>

</main>
<?php
get_sidebar();
get_footer();
