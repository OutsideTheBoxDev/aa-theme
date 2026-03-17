<?php
/*
Template Name: Solutions - Quickbooks
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main quickbooks-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-br-inwards">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">
								<em>Integrate with Quickbooks Online</em> for seamless
								accounting
							</h1>
							<p style="--max-w: 400px">
								Automatically sync your orders, customers, invoices, and
								taxes for easy tracking and analysis.
							</p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="--img-max-w: 5rem; --img-mr: -6rem">
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.webp" />
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.png" />
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero-mob.webp" />
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero-mob.png" />
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.png" alt="Integrate with Quickbooks Online" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div style="--max-w: 64rem" class="sec-heading">
				<h2>
					Join countless rental businesses that have streamlined their
					finances with Quipli's QuickBooks Online integration
				</h2>
				<p style="--max-w: 36rem">
					With a few clicks, instantly connect your POS platform with
					QuickBooks Online to make bookkeeping a breeze.
				</p>
			</div>

			<div class="qp-connect-block">
				<div class="qp-connector-plugin">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-logo.svg" alt="Quickbook" />
				</div>
				<span class="qp-connector-icon">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M16 24C16 18.4772 20.4772 14 26 14H32.549C33.3504 14 34 14.6496 34 15.451V32.549C34 33.3504 33.3504 34 32.549 34H26C20.4772 34 16 29.5228 16 24Z" stroke="#1D252C" stroke-width="4" />
						<path d="M41 18H46" stroke="#1D252C" stroke-width="4" stroke-linecap="round" />
						<path d="M41 30H46" stroke="#1D252C" stroke-width="4" stroke-linecap="round" />
						<path d="M14 24L2 24" stroke="#1D252C" stroke-width="4" stroke-linecap="round" />
					</svg>
				</span>
				<div class="qp-connector-plugin">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quipli-logo-dark.svg" alt="Quipli" />
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="qp-system secondary">
				<div class="qp-system-content">
					<h2>Let your rental software and financial system work as one</h2>
					<p>
						By combining a simple integrated payment and accounting system
						with an effortless rental experience and Quickbooks Online
						integration, Quipli allows you to provide great customer service
						while allowing you to keep track of everything you need in order
						to grow your rental business.
					</p>

					<figure>
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/system.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/system.jpeg" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/system-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/system-mob.jpeg" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/system.jpeg" alt="Let your rental software and financial system work as one" loading="lazy" decoding="async" width="1328" height="960">
						</picture>
					</figure>
				</div>
				<div class="qp-system-list">
					<ul>
						<li>
							<p>
								Eliminate manual work with seamless e-commerce website
								integration
							</p>
						</li>
						<li>
							<p>
								Get back your time through automated reservation management
							</p>
						</li>
						<li>
							<p>
								Empower customers with self-service renter account access
							</p>
						</li>
						<li>
							<p>
								Accelerate transactions using an efficient Point of Sale
								(POS) system
							</p>
						</li>
						<li>
							<p>
								Drive growth with data-driven insights from reporting &
								utilization data
							</p>
						</li>
						<li>
							<p>
								Master inventory control across multiple locations with ease
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="sec-heading" style="--max-w: 60rem">
				<h2>
					Simplify your rental business finances with powerful QuickBooks
					Online integration features
				</h2>
			</div>
			<div class="qp-features-blocks">
				<div class="qp-feature-block">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="24px" height="24px" viewBox="0 0 24 24">
								<use xlink:href="#route" />
							</svg>
						</div>
						<h3>Eliminate Manual Order Tracking</h3>
						<p>
							With Quipli and Quickbooks Online, you can eliminate manual
							order tracking and processing. All of your transactions pass
							through to Quickbooks Online automatically.
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/order-tracking.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/order-tracking.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/order-tracking-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/order-tracking-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/order-tracking.png" alt="Order Tracking" loading="lazy" decoding="async" width="900" height="603">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block qp-reverse">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="24px" height="24px" viewBox="0 0 24 24">
								<use xlink:href="#trendpad" />
							</svg>
						</div>
						<h3>Integrated Financial Reporting</h3>
						<p>
							With Quickbooks Online financial reporting, you can keep on
							top of your business’s finances. Quikcbooks Online offers 20+
							built-in business reports.
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.png" />
							<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p-mob.webp" />
							<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.png" alt="Fast and seamless point of sale" loading="lazy" decoding="async" width="1453" height="1129">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="24px" height="24px" viewBox="0 0 24 24" fill="none">
								<use xlink:href="#circle-reconnect" />
							</svg>
						</div>
						<h3>Scalable Transaction Management</h3>
						<p>
							As your business grows, you need a financial solution that is
							simple for your staff to use that is prone to errors. Quipli’s
							Quickbook Online integration makes managing your transactions
							a breeze. 
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/modern-rental.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/modern-rental.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/modern-rental-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/modern-rental-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/modern-rental.png" alt="Modern Rental" loading="lazy" decoding="async" width="1396" height="900">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--faq">
		<div class="qp faq">
			<div class="container">
				<div class="faq__row">
					<div class="faq__header">
						<h2>Frequently asked questions</h2>
					</div>
					<div class="faq__col-accordion">
						<div class="faq__accordion accordion">
							<div class="accordion__wrap no-more">
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="true" aria-controls="faq-1">
											How does Quipli integrate with QuickBooks Online?
										</button>
									</div>
									<div class="accordion__content is__open" aria-hidden="false" id="faq-1">
										<p>
											Quipli integrates seamlessly with QuickBooks Online
											through a secure API connection, allowing for
											automatic data syncing between the two platforms.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-2">
											Will my existing QuickBooks Online data be affected by
											the integration?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-2">
										<p>
											No, Quipli's integration with QuickBooks Online is
											designed to work alongside your existing data without
											causing any disruptions.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-3">
											Can I customize the integration to fit my specific
											needs?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-3">
										<p>
											Yes, Quipli offers customizable settings to ensure the
											integration aligns with your unique business
											requirements.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-4">
											Does Quipli support both QuickBooks Online and
											QuickBooks Desktop?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-4">
										<p>
											Quipli supports QuickBooks Online. For QuickBooks
											Desktop, please contact our support team to discuss
											possible solutions.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-5">
											Is the QuickBooks Online integration secure?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-5">
										<p>
											Yes, Quipli uses industry-standard security measures
											to protect your data during the integration process.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/reviews'); ?>

	<?php get_template_part('template-parts/footer-cta', null, ['title' => "Streamline Your Rental Business Finances with Quipli's QuickBooks Online Integration"]); ?>

</main>

<?php
get_sidebar();
get_footer();
