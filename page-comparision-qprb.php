<?php
/*
Template Name: Comparision: Quipli vs Booqable vs Point of Rental
Template Post Type: page
 */

get_header('home');

$yes_icon = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 19C14.9705 19 19 14.9705 19 10C19 5.02944 14.9705 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9705 5.02944 19 10 19Z" fill="#469749"/><path d="M6 9.57143L9.27273 13L15 7" stroke="#F4F5F7" stroke-width="2" stroke-linejoin="round"/></svg>';
$no_icon = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 10H15" stroke="#D64E45" stroke-width="2" stroke-linejoin="round"/><path d="M18 10C18 14.4183 14.4183 18 10 18C5.58173 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58173 18 10Z" stroke="#D64E45" stroke-width="2" stroke-linejoin="round"/></svg>';
$headers = ["Booqable", "Quipli", "Point of Rental"];
$comparisionsDataSet = array(
	array(
		array(
			'heading' => array(
				'title' => 'Pricing, implementation, & customer support comparisons',
				'subtitle' => '',
				'description' => "Among these three rental business SaaS platforms, Point of Rental is the most expensive due to its custom pricing structure while Quipli and Booqable offer mid-tier price points.
				While Quipli and Point of Rental offer guided onboarding with dedicated personnel, Booqable is self-service only. Notably, Quipli offers the most responsive live support of the three, with 24/7 availability and five-minute response times."
			),
			'comparisons' => array(
				array(
					'label' => 'Year founded',
					'comp' => array(
						'a' => '2014',
						'b' => '2020',
						'c' => '1982'
					)
				),
				array(
					'label' => 'Pricing',
					'comp' => array(
						'a' => '$$',
						'b' => '$$',
						'c' => '$$$'
					)
				),
				array(
					'label' => 'Onboarding team',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Onboarding time',
					'comp' => array(
						'a' => '7 days',
						'b' => '7 days',
						'c' => '4 Weeks'
					)
				),
				array(
					'label' => 'Response time',
					'comp' => array(
						'a' => 'Overseas',
						'b' => '5-minute; 24/7',
						'c' => '3 business days'
					)
				),
				array(
					'label' => 'Phone support',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '$75/call'
					)
				),
				array(
					'label' => 'Email support',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Chat support',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Text support',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				)
			)
		),
		array(
			'heading' => array(
				'title' => 'Product features',
				'subtitle' => 'Core rental software features',
				'description' => "Quipli, Booqable and Point of Rental all three platforms are solid choices for the discerning rental business owner."
			),
			'comparisons' => array(
				array(
					'label' => 'E-commerce capbility',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Booking / scheduling software',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Inventory management',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Real-time inventory calendar',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Smooth online checkout process',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Service & repair / Parts management',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'QR code check in/out',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Basic drivers license capture',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Holiday pricing functionality',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				)
			)
		),
		array(
			'heading' => array(
				'title' => '',
				'subtitle' => 'Financial management: accounting, pricing & invoicing',
				'description' => "Quipli, Point of Rental, and Booqable all include features for managing the financial aspects of your business.
				Quipli and Booqable offer more robust accounting features than Point of Rental, including built-in customer invoicing."
			),
			'comparisons' => array(
				array(
					'label' => 'Accounting',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Payments',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Rate/pricing management',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Real-time inventory calendar',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Automated taxes',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Contract management',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Order extensions with updated invoices',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Invoicing on account customers',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Credit card terminal',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Quote/upsell management',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Quickbooks integration',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Revenue trends & insights',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Utilization reporting',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
			)
		),
		array(
			'heading' => array(
				'title' => '',
				'subtitle' => 'App / Device functionality',
				'description' => "Quipli is available on the web, for Android devices, and for iOS as a progress web app, making it simple to access everything you need to run your business on the go. Booqable is also available as an app, while Rental does not provide any app functionality."
			),
			'comparisons' => array(
				array(
					'label' => 'App Functionality – Admin Console',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'App Functionality – Website',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Multi-Device Functionality',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				)
			)
		),
		array(
			'heading' => array(
				'title' => '',
				'subtitle' => 'Marketing and integrations',
				'description' => "All three platforms feature robust website builders for creating slick, user-friendly ecommerce storefronts for your rental business.
				Quipli sets itself apart from most of its competitors by offering a comprehensive suite of marketing-as-a-service (MaaS) features. These include SEO assessments and enhancements, as well as driving ROI-focused online marketing campaigns."
			),
			'comparisons' => array(
				array(
					'label' => 'Marketing service providers',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Easy website integration',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Chat features / Embedded chat features',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Social sign in / Google / Facebook',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Customer profiles',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Order extensions with updated invoices',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Mulit-store location support',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Email marketing integration',
					'comp' => array(
						'a' => '_y',
						'b' => '_n',
						'c' => '_n'
					)
				)
			)
		),
		array(
			'heading' => array(
				'title' => 'Community Support & Growth',
				'subtitle' => '',
				'description' => "Point of Rental and Quipli both offer growth webinars, where you’ll learn new tips for growing your equipment rental business."
			),
			'comparisons' => array(
				array(
					'label' => 'Growth webinars',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Live help',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_n'
					)
				),
				array(
					'label' => 'Documentation (Help centers)',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				)
			)
		)
	),
	array(
		array(
			'heading' => array(
				'title' => 'Construction & equipment rental',
				'subtitle' => '',
				'description' => "Whether you’re a small startup operating out of your garage, or a large operation with more than one physical location, both Quipli and Point of Rental offer more robust solutions than Booqable."
			),
			'comparisons' => array(
				array(
					'label' => 'Online rental group (Home start ups)',
					'comp' => array(
						'a' => '_y',
						'b' => '_n',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Brick and mortar',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Large multi-location',
					'comp' => array(
						'a' => '_n',
						'b' => '_y',
						'c' => '_y'
					)
				)
			)
		),
		array(
			'heading' => array(
				'title' => 'Other rental niches',
				'subtitle' => '',
				'description' => "While Quipli is top of its class for heavy equipment, recreational equipment, and medical equipment rentals, you may want to consider either Booqable or Point of Rental instead for dumpster rental or party rentals."
			),
			'comparisons' => array(
				array(
					'label' => 'Recreational rentals (ATV, Boat)',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Golf cart rentals',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Dumpster rentals',
					'comp' => array(
						'a' => '_y',
						'b' => '_n',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Party & event rental',
					'comp' => array(
						'a' => '_y',
						'b' => '_n',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Medical equipment rentals',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				),
				array(
					'label' => 'Mobility rentals',
					'comp' => array(
						'a' => '_y',
						'b' => '_y',
						'c' => '_y'
					)
				)
			)
		)
	)
);
?>

<main class="quipli main blog-hub-page">
	<section class="section page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-x-both x-centered">
				<div class="page-heading">
					<h1>Point of Rental vs Booqable vs Quipli: which is the best?</h1>
					<p>Learn about the similarities and differences between top equipment rental software solutions</p>
				</div>
				<div class="qp-comparision-blocks">
					<div class="qp-c-block primary">
						<div class="qp-c-title">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Quipli-logo.svg" alt="Quipli" />
						</div>
						<div class="qp-c-rating">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/vs-quipli-rating.svg" alt="Quipli Rating" />
						</div>
					</div>
					<div class="qp-c-block">
						<div class="qp-c-title">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/booqable-logo.svg" alt="Booqable" />
						</div>
						<div class="qp-c-rating">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/vs-b-rating.svg" alt="Booqable Rating" />
						</div>
					</div>
					<div class="qp-c-block">
						<div class="qp-c-title">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/point-of-rentle.svg" alt="Point of Rental" />
						</div>
						<div class="qp-c-rating">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/vs-por-rating.svg" alt="Point of Rental Rating" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="sec-heading left-aligned">
				<h2>Key Takeaways</h2>
			</div>
			<div class="qp-comparisions-data qp-comparision-descriptions">
				<?php get_template_part('template-parts/comparisions/three-col-title', null, ['headers' => $headers]); ?>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>Pricing, implementation, & customer support comparisons</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>1</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-3">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>3</em>
						</span>
					</div>
				</div>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>Core rental software features</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-3">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>3</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-4">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>4</em>
						</span>
					</div>
				</div>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>Financial management: accounting, billing & invoicing</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-4">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>4</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-4">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>4</em>
						</span>
					</div>
				</div>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>Financial management: accounting, billing & invoicing</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
				</div>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>App / Device functionality</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-full">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
				</div>
				<div class="qp-c-row">
					<div class="qp-c-desc">
						<p>Marketing and integrations</p>
						<span>Quipli provides superior customer support compared to the
							other two companies, with a dedicated onboarding team,
							five-minute response times, and a seven-day onboarding process
							tailored to specific needs</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-3">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info primary">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating stars-4">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
					<div class="qp-c-info">
						<span class="stars-info">
							<div class="star-ratings">
								<div class="star-rating" style="width: 50%">
									<span>&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;</span>
								</div>
							</div>
						</span>
						<span class="mobile-star">
							<div class="star-ratings single">
								<div class="star-rating">
									<span>&#x2605;</span>
								</div>
							</div>
							<em>5</em>
						</span>
					</div>
				</div>
			</div>

			<?php
			foreach ($comparisionsDataSet[0] as $set) {
				$heading = $set['heading'];
				$comparisons = $set['comparisons'];
			?>
				<div class="qp-comparisions-data">
					<?php
					get_template_part('template-parts/comparisions/info-header', null, ['heading' => $heading]);
					get_template_part('template-parts/comparisions/three-col-title', null, ['headers' => $headers]);
					foreach ($comparisons as $c) {
						$data = array($c['comp']['a'], $c['comp']['b'], $c['comp']['c']);
						get_template_part('template-parts/comparisions/three-col-row', null, ['label' => $c['label'], 'data' => $data]);
					}
					?>

				</div>
			<?php } ?>
		</div>
	</section>

	<section>
		<div class="qp-image-content-block primary">
			<div class="qp-image-block">
				<figure>
					<picture>
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/eq-rental.webp" />
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/eq-rental.jpg" />
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/eq-rental.jpg" alt="Managing your rental inventory" loading="lazy" decoding="async" width="647" height="564">
					</picture>
				</figure>
			</div>
			<div class="qp-content-block qp-col-space-between">
				<div>
					<h3>Equipment rental industry</h3>
					<p>
						Your rental business’s size and degree of maturity can affect
						which software platform is the best fit for you. Are you a small
						startup operating out of your home, a single storefront
						brick-and-mortar outfit, or a large operation with multiple
						physical locations?
					</p>
					<p>
						Quipli is designed for
						the established operator with one or more locations, or
						digital-first companies that have strong existing businesses.
						Quipli is the only one of the three that can meet the more
						complex needs of large multi-location equipment rental
						companies.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<?php
			foreach ($comparisionsDataSet[1] as $set) {
				$heading = $set['heading'];
				$comparisons = $set['comparisons'];
			?>
				<div class="qp-comparisions-data">
					<?php
					get_template_part('template-parts/comparisions/info-header', null, ['heading' => $heading]);
					get_template_part('template-parts/comparisions/three-col-title', null, ['headers' => $headers]);
					foreach ($comparisons as $c) {
						$data = array($c['comp']['a'], $c['comp']['b'], $c['comp']['c']);
						get_template_part('template-parts/comparisions/three-col-row', null, ['label' => $c['label'], 'data' => $data]);
					}
					?>
				</div>
			<?php } ?>
		</div>
	</section>

	<?php get_template_part('template-parts/slider-dark'); ?>
	<?php get_template_part('template-parts/latest-blogs'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
