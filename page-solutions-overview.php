<?php
/*
Template Name: Solutions - Overview
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom">
				<div class="page-heading">
					<h1>Imagine a seamlessly integrated rental experience for your staff & customers</h1>
					<p>
						Integrate every step of renting equipment into a single system.
						From inventory management to cycle billing, invoicing to
						payments, e-Commerce to service and repair, Quipli has you
						covered. Scale your business - without scaling your staff. And
						speaking of staff, your team will love using Quipli. Happy teams
						make happy customers.
					</p>
					<?php get_template_part('template-parts/cta-buttons'); ?>
				</div>
			</div>
			<div class="qp-sub-blocks four-split">
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/rental-website-builder/" title="Rental website builder" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#shopping-bag" />
							</svg>
						</div>
						<p>Rental website builder</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/equipment-inventory-management-software/" title="Inventory Management" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#inventory" />
							</svg>
						</div>
						<p>Inventory Management</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/rental-invoicing-billings-payments-software" title="Billing, Invoicing, and Payments" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#invoicing" />
							</svg>
						</div>
						<p>Billing, Invoicing, and Payments</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/rental-booking-and-scheduling-software/" title="Booking and Scheduling" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#booking" />
							</svg>
						</div>
						<p>Booking and Scheduling</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/rental-equipment-checkout-software/" title="POS & Checkout Software" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#point-of-sale" />
							</svg>
						</div>
						<p>POS & Checkout Software</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/equipment-rental-maintenance-software/" title="Service and Repair" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#service-and-repair" />
							</svg>
						</div>
						<p>Service and Repair</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/quickbooks-equipment-rental-software/" title="Quickbooks Online Integration" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="24" height="24" viewBox="0 0 24 24">
								<use xlink:href="#rental" />
							</svg>
						</div>
						<p>Quickbooks Online Integration</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
				<div class="qp-sq-mask-block">
					<a href="<?php echo home_url(); ?>/solutions/digital-marketing-for-rental-businesses/" title="SEO & Online Marketing" class="qp-sp-mask-inner">
						<div class="qp-sq-icon">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#seo" />
							</svg>
						</div>
						<p>SEO & Online Marketing</p>
						<div class="btn-plain btn-secondary">
							<span>Learn More</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="max-container">
			<div class="qp-features-blocks">
				<div class="qp-feature-block">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#shopping-bag" />
							</svg>
						</div>
						<h3>A modern rental website builder</h3>
						<p>
							Create your own e-commerce website backed by powerful tools
							that help you find customers, drive sales, and make renting
							online easier than ever.
						</p>
						<a href="/solutions/rental-website-builder/" title="A modern rental website builder" class="btn-plain btn-secondary">Learn More</a>
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

				<div class="qp-feature-block qp-reverse">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#inventory" />
							</svg>
						</div>
						<h3>Simple, fully-integrated inventory management software</h3>
						<p>
							Ensure your products are ready for customers on time, 100% of
							the time. Get visibility into your bookings and equipment
							status with Quipli’s comprehensive inventory management
							system.
						</p>
						<a href="/solutions/equipment-inventory-management-software/" title="Simple, fully-integrated inventory management software" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.png" alt="Inventory Management" loading="lazy" decoding="async" width="1453" height="1129">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="max-container">
			<div class="qp-features-horizontal">
				<div class="qp-feature-block-horizontal secondary">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#invoicing" />
							</svg>
						</div>
						<h3>Delightful rental checkout software</h3>
						<p>
							Reduce in-store time for your customers and staff. Support
							contactless payments with Quipli's simple QR code checkout
							experience.
						</p>
						<a href="/solutions/rental-equipment-checkout-software" title="Delightful rental checkout software" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/inventory-software.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/inventory-software.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/inventory-software-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/inventory-software-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/inventory-software.png" alt="Inventory Management" loading="lazy" decoding="async" width="1453" height="1129">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block-horizontal">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#booking" />
							</svg>
						</div>
						<h3>Smart booking and scheduling for full visibility</h3>
						<p>
							Manage your reservations without all the excess paperwork.
							Always know where your equipment is, when it will be back, and
							when it will be available for your next customer.
						</p>
						<a href="/solutions/rental-booking-and-scheduling-software/" title="Smart booking" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png" alt="Smart booking" loading="lazy" decoding="async" width="1453" height="1129">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block-horizontal qp-verticaled">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#point-of-sale" />
							</svg>
						</div>
						<h3>Fast and seamless point of sale</h3>
						<p>
							Quipli’s flexible suite of POS software and integrations can
							be tailored for your business needs. Make the sale every time
							— from online to the checkout line. Ensure that double-booking
							is never an issue, with an inventory system that syncs with
							all sales.
						</p>
						<a href="/solutions/rental-equipment-checkout-software" title="Fast and seamless point of sale" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.png" alt="Fast and seamless point of sale" loading="lazy" decoding="async" width="1453" height="1129">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block-horizontal">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="24px" height="24px" viewBox="0 0 24 24">
								<use xlink:href="#rental" />
							</svg>
						</div>
						<h3>Financial Reporting & Quickbooks Online Integration</h3>
						<p>
							Be in control of your finance and accounting with Quipli’s
							Quickbooks Online integration. No more manual updates in
							Quickbooks Online – let it all flow automatically with Quipli.
						</p>
						<a href="/solutions/quickbooks-equipment-rental-software/" title="Quickbooks Online Integration" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/qb-illust.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/qb-illust.png" />
							<source media="(maxwidth: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/qb-illust-mob.webp" />
							<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/qb-illust-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/qb-illust.png" alt="Marketing solutions" loading="lazy" decoding="async" width="1200" height="990">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block-horizontal">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#seo" />
							</svg>
						</div>
						<h3>Marketing solutions to drive online growth</h3>
						<p>
							Execute digital marketing campaigns and top-notch SEO to
							improve your presence online and acquire new customers. Our
							digital marketing experts specialize in equipment rental, and
							have a track record of driving high ROI campaigns for Quipli
							customers.
						</p>
						<a href="/solutions/digital-marketing-for-rental-businesses/" title="Marketing solutions" class="btn-plain btn-secondary">Learn More</a>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/seo-illust.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/seo-illust.png" />
							<source media="(maxwidth: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/seo-illust-mob.webp" />
							<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/seo-illust-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/seo-illust.png" alt="Marketing solutions" loading="lazy" decoding="async" width="1200" height="990">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="max-container">
			<div class="sec-heading">
				<h2>And much more...</h2>
			</div>
			<div class="qp-ratings-grid">
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="104" height="24" viewBox="0 0 104 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#capterra" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>4.9/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="84" height="24" viewBox="0 0 84 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#g2-star" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>5/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="79" height="24" viewBox="0 0 79 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#google" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>5/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/latest-blogs'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
