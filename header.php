<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quipli
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<?php echo generate_ogg(); ?>
	<meta name="format-detection" content="telephone=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
	<noscript>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	</noscript>
	<?php if (get_option('site_icon')) { ?>
		<link rel="icon" href="<?php echo wp_get_attachment_image_url(get_option('site_icon'), 'full') ?>">
	<?php } else { ?>
		<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon.png" ?>">
	<?php } ?>
	<?php wp_head(); ?>
	<script type="text/javascript">
// 		window.addEventListener('load', function () {
// 			document.querySelectorAll('a:not(.nav-demo-btnx)[href*="/book-a-demo"]').forEach(el => {
// 				el.addEventListener('click', (e) => {
// 					if(lity){
// 						e.preventDefault();
// 						lity('#typeform-lity')
// 					}
// 				})
// 			})
// 		})
	</script>
	<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
	<?php
	    $jsonld = get_field('json_schema_structure');
	    if($jsonld){
	        echo $jsonld;
	    }
	?>
</head>

<body <?php body_class('no-js theme--default'); ?> dir="ltr">
	<?php wp_body_open(); ?>

	<!-- Site-wide Announcement Banner -->
	<div id="quipli-announcement-banner" class="quipli-announcement-banner" style="display: none;">
		<div class="quipli-banner-content">
			<div class="quipli-banner-badge">NEW REPORT</div>
			<div class="quipli-banner-text">Quipli releases the 2026 State of Rental Report</div>
			<a href="<?php echo home_url(); ?>/resources/press-release/quipli-releases-2026-state-of-rental-report-highlighting-shift-from-growth-to-execution/" class="quipli-banner-cta">Read the Report</a>
		</div>
		<button class="quipli-banner-close" aria-label="Close banner">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</button>
	</div>

	<header class="qp-header cd-morph-dropdown header--sticked-always">
		<div class="qp-header-overlay"></div>
		<div class="max-container relative">
			<div class="qp-header-inner">
				<a class="qp-header-logo" href="<?php echo home_url(); ?>" title="Quipli"><img src="<?php echo get_template_directory_uri() ?>/assets/img/Quipli-logo.svg" alt="Quipli" width="114" height="32" /></a>


					<nav class="main-nav">
						<?php if($args['nav'] != 'hidden'):?>
							<ul>
								<li class="has-dropdown solutions" data-content="solutions">
									<a href="<?php echo home_url(); ?>/solutions/" title="Solutions">Solutions</a>
								</li>

								<li class="button">
									<a href="<?php echo home_url(); ?>/reviews/" title="Reviews">Success Stories</a>
								</li>

								<li class="button">
									<a href="<?php echo home_url(); ?>/pricing/" title="Pricing">Pricing</a>
								</li>

								<li class="has-dropdown use-cases" data-content="about-us">
									<a href="<?php echo home_url(); ?>/about/">About Us</a>
								</li>

								<li class="has-dropdown resources" data-content="resources">
									<a href="#0">Resources</a>
								</li>
							</ul>
						<?php else: ?>
						<ul style="color:transparent; pointer-events: none;">
								<li class="button">
									<a href="#" title="Solutions" style="color:transparent; pointer-events: none;">Solutions</a>
								</li>
						</ul>
						<?php endif; ?>
					</nav>


				<div class="qp-header-actions">
                    <a href="tel:8329792147" class="qp-phone">(832) 979-2147</a>
					<a class="q-btn btn__header nav-demo-btn" title="Book a Demo" href="<?php echo home_url(); ?>/book-a-demo">Book a Demo</a>
					<?php if($args['nav'] != 'hidden'):?>
						<a href="#0" class="nav-trigger">Open Nav<span aria-hidden="true"></span></a>
					<?php endif; ?>
				</div>

				<div id="typeform-lity" class="lity-hide">
				    <h3>Request a personalized demo</h3>
                    <script>
                      hbspt.forms.create({
                        portalId: "8737923",
                        formId: "4006a380-75e3-472c-bd6a-a1773a2bed26"
                      });
                    </script>
				</div>
				<style>
    				.lity-content{
    				    max-height: 90vh;
                        overflow: auto;
    				}
					#typeform-lity{
						background-color: var(--q-white);
                        border-radius: 10px;
                        width: min(90vw, 700px);
                        max-height: max(90%,85vh) !important;
                        overflow:auto;
                        min-height: calc(620px + 12px);

                        flex-direction: column;
                        align-items: stretch;
                        justify-content: center;
                        padding: 20px 40px;

                        &:not(.lity-hide){
                            display: flex;
                        }

                        h3{
                            font-size: 1.5rem;
                            text-align: center;
                            margin-bottom: 32px;
                            margin-top: 12px;
                        }
					}
				</style>


				<!-- morph-dropdown-wrapper -->
			</div>

			<div class="morph-dropdown-wrapper new-ui">
				<div class="dropdown-list">
					<ul>
						<li id="solutions" class="dropdown solutions resources has-submenu">
							<div class="qp-sub-menu-title">
								<p>Solutions</p>
							</div>
							<div class="qp-menu-info-wrap">
								<div class="qp-sub-menu-grid">
									<ul class="qp-sub-grid-items">
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 24 24">
														<use xlink:href="#rocket" />
													</svg>
												</div>
												<span>Grow your business</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-website-builder/"><span>Rental Website Builder</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/text-to-rent"><span>Text-to-Rent</span></a>
												</li>
											</ul>
										</li>
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#tools" />
													</svg>
												</div>
												<span>Manage your finances</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-invoicing-billings-payments-software/"><span>Invoicing & Payments</span></a>
												</li>
												<!-- <li><a href="<?php echo home_url(); ?>/#"><span>Accounting</span></a></li> -->
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-customer-portal/"><span>Customer Portal</span></a>
												</li>
												</li>
											</ul>
										</li>
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#inventory" />
													</svg>
												</div>
												<span>Simplify operations</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/equipment-inventory-management-software/"><span>Inventory Management</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-booking-and-scheduling-software/"><span>Booking & Scheduling</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/equipment-rental-maintenance-software/"><span>Service & Repair</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-equipment-checkout-software/"><span>POS & Checkout Software</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/dispatch-scheduling-software/"><span>Dispatch</span></a>
												</li>
											</ul>
										</li>
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 24 24">
														<use xlink:href="#shield" />
													</svg>
												</div>
												<span>Protect your assets</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/equipment-rental-damage-waiver/"><span>Rental Damage Waiver Insurance</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/equipment-gps-tracking-software/"><span>GPS Tracking</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/solutions/rental-id-verification/"><span>License Scanning & Verification</span></a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="qp-submenu-content learn-more-content">
									<div class="qp-learn-more-info-menu">
										<span class="featured-date">Learn more</span>
										<ul>
											 <li><a href="<?php echo home_url(); ?>/partners-integrations/"><span>Partners & Integrations</span></a></li>
										    <li><a href="<?php echo home_url(); ?>/customer-success/"><span>Customer Support & Onboarding</span></a></li>
											<li>
												<a href="<?php echo home_url(); ?>/construction-and-heavy-equipment-rental-software/"><span>Quipli for Construction & Heavy Equipment</span></a>
											</li>
											<li>
												<a href="<?php echo home_url(); ?>/general-tool-rental-software/"><span>Quipli for General Tool Rental</span></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a href="<?php echo home_url(); ?>/reviews/" class="qp-sub-menu-title">
								<p>Success Stories</p>
							</a>
						</li>
						<li class="dropdown">
							<a href="<?php echo home_url(); ?>/pricing/" class="qp-sub-menu-title">
								<p>Pricing</p>
							</a>
						</li>
						<li id="about-us" class="dropdown about-us has-submenu">
							<div class="qp-sub-menu-title">
								<p>About Us</p>
							</div>
							<div class="qp-menu-info-wrap">
								<div class="qp-sub-menu-grid">
									<ul class="qp-sub-grid-items">
										<li>
											<a href="<?php echo home_url(); ?>/about/" class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#who-we-are" />
													</svg>
												</div>
												<span>Who We Are</span>
											</a>
										</li>
										<li>
											<a href="<?php echo home_url(); ?>/careers/" class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#careers" />
													</svg>
												</div>
												<span>Careers</span>
											</a>
										</li>
										<!-- <li>
											<a href="#" class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#press" />
													</svg>
												</div>
												<span>Press</span>
											</a>
										</li> -->
									</ul>
								</div>
								<div class="qp-submenu-content">
									<div class="qp-about-stats">
										<div class="info-stat primary-stat">
											<h4>500%</h4>
											<p>That's how much we've grown in a year</p>
										</div>
										<div class="img-stat">
											<picture>
												<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about-us-laptop.webp" />
												<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/about-us-laptop.jpg" />
												<img src="<?php echo get_template_directory_uri() ?>/assets/img/about-us-laptop.jpg" alt="About Us" loading="lazy" decoding="async" width="480" height="400">
											</picture>
										</div>
										<div class="info-stat">
											<h4>100,000+</h4>
											<p>Orders processed and counting. Fast.</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li id="resources" class="dropdown resources has-submenu">
							<div class="qp-sub-menu-title">
								<p>Resources</p>
							</div>
							<div class="qp-menu-info-wrap">
								<div class="qp-sub-menu-grid">
									<ul class="qp-sub-grid-items">
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#tools" />
													</svg>
												</div>
												<span>Tools</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/resources/templates/"><span>Templates</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/resources/calculators/"><span>Calculators</span></a>
												</li>
											</ul>
										</li>
										<li>
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#learn" />
													</svg>
												</div>
												<span>Learn</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/resources/"><span>The Equipment Rental Toolbox</span></a>
												</li>
												<li>
													<a href="https://www.youtube.com/channel/UC0xNv8zZd3d3yadQqpymGvA" target="_blank"><span>YouTube</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/resources/podcast/" target="_blank"><span>The Rental Roundtable</span></a>
												</li>
											</ul>
										</li>
										<li class="full-grid">
											<div class="qp-sub-menu-info">
												<div class="sub-menu-icon">
													<svg width="20px" height="20px" viewBox="0 0 20 20">
														<use xlink:href="#guides" />
													</svg>
												</div>
												<span>Guides</span>
											</div>
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/resources/state-of-rental-report-2026/"><span>State of Rental Report 2026</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/resources/marketing-guides/"><span>Marketing & Growth Guides</span></a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/tool-rental-guides/"><span>General Equipment Guides</span></a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="qp-submenu-content">
									<div class="qp-shape-block qp-resources-block">
										<!-- <span class="featured-date">New Features • Nov 2, 2022</span> -->
										<span class="featured-date">Featured Resource</span>
										<div class="qp-resources-featured-content">
											<p>
												Check out our Free Equipment Value Calculator for easy rental inventory auditing and pricing.
											</p>
											<a href="<?php echo home_url(); ?>/resources/calculators/how-to-calculate-your-total-equipment-value/" class="btn-plain"> Learn More </a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
                <div class="qp-phone-wrapper">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.9974 14.5833H10.0057M6.83073 18.3333H13.1641C14.0975 18.3333 14.5642 18.3333 14.9207 18.1517C15.2343 17.9919 15.4893 17.7369 15.6491 17.4233C15.8307 17.0668 15.8307 16.6001 15.8307 15.6667V4.33333C15.8307 3.39991 15.8307 2.9332 15.6491 2.57668C15.4893 2.26308 15.2343 2.00811 14.9207 1.84832C14.5642 1.66666 14.0975 1.66666 13.1641 1.66666H6.83073C5.89731 1.66666 5.4306 1.66666 5.07408 1.84832C4.76047 2.00811 4.50551 2.26308 4.34572 2.57668C4.16406 2.9332 4.16406 3.39991 4.16406 4.33333V15.6667C4.16406 16.6001 4.16406 17.0668 4.34572 17.4233C4.50551 17.7369 4.76047 17.9919 5.07408 18.1517C5.4306 18.3333 5.89731 18.3333 6.83073 18.3333ZM10.4141 14.5833C10.4141 14.8134 10.2275 15 9.9974 15C9.76728 15 9.58073 14.8134 9.58073 14.5833C9.58073 14.3532 9.76728 14.1667 9.9974 14.1667C10.2275 14.1667 10.4141 14.3532 10.4141 14.5833Z" stroke="#1D252C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<a href="tel:(832)-979-2147" class="qp-phone">(832)-979-2147</a>
				</div>
				<!-- dropdown-list -->
			</div>
		</div>
		<!-- .site-branding -->

		<!-- #site-navigation -->
	</header>
