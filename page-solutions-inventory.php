<?php
/*
Template Name: Solutions - Inventory Management
Template Post Type: page
 */

get_header('home');
?>
<style>
	.qp-icon-title {
		display: flex;
		align-items: center;
		gap: 4px;

		span {
			font-size: 0.9em;
			line-height: 1.21;
			text-transform: uppercase;
			font-weight: 600;
			letter-spacing: .075rem;
			opacity: .6;
		}

		&.secondary {
			.qp-icon-holder {
				background-image: url("<?php echo get_template_directory_uri() ?>/assets/img/feature-vector.svg");
				color: var(--q-secondary);
			}
		}

		&.gray {
			span {
				color: var(--q-gray);
			}
		}
	}

	/* Purchase Orders section mobile styles */
	@media (max-width: 767px) {
		.purchase-orders-section .qp-feature-image {
			display: flex;
			justify-content: center;
			padding-bottom: 24px;
		}

		.purchase-orders-section .qp-feature-image img {
			max-width: 100%;
			height: auto;
		}
	}
</style>

<main class="quipli main inventory-mgmt">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-b-inwards">
				<div class="page-heading">
					<h1 class="qp-highlighted-text">
						Save countless hours and stacks of paperwork with Quipli’s <em>inventory management system</em>
					</h1>
					<p class="max-w-sm">
						See what’s on rent, off rent, and have the peace of mind of knowing you’re one step ahead with your inventory.
					</p>
					<?php get_template_part('template-parts/cta-buttons'); ?>
				</div>
				<?php
				get_template_part('template-parts/solutions/ratings-light');
				?>
			</div>
		</div>
	</section>

	<section>
		<div class="qp-image-content-block primary">
			<div class="qp-image-block">
				<figure>
					<picture>
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/manage-rental.webp" />
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/manage-rental.jpg" />
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/manage-rental.jpg" alt="Managing your rental inventory" loading="lazy" decoding="async" width="647" height="564">
					</picture>
				</figure>
			</div>
			<div class="qp-content-block qp-col-space-between">
				<div>
					<h3>Managing your rental inventory shouldn't feel so overwhelming</h3>
					<p>
						You need efficient inventory management if you want your
						equipment ready for your customers on time. Your inventory
						system needs to inform what your customers can book, when they
						can book it, and when your equipment will be returned, so that
						your next customer can reserve. 
					</p>
					<p>
						Quipli provides a one-stop shop software solution for tracking
						and managing your entire rental business from equipment
						reservation to pickup to return.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<div class="sec-heading">
				<h2>Every feature you need, all in a single system.</h2>
			</div>
			<div class="qp-features-blocks">
				<div class="qp-feature-block">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#shopping-bag" />
							</svg>
						</div>
						<h3>
							Get an rental website builder that lets customers check out
							rentals within minutes
						</h3>
						<p>
							Quipli’s fully-synced inventory system feeds directly into
							your customer-facing website. Customers can only book the
							equipment you have in stock, and check future availability if
							already rented.
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/website-rental-software.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/website-rental-software-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/website-rental-software-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/website-rental-software.png" alt="Website templates" loading="lazy" decoding="async" width="1464" height="916">
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
						<h3>
							Maintain complete oversight on your inventory status in
							real-time, with our dynamic calendar view
						</h3>
						<p>
							See which products are available and when they will be
							returned. Have complete oversight into the movement of your
							assets from inventory to customer and back again.
						</p>
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

				<div class="qp-feature-block">
					<div class="qp-feature-content">
						<div class="qp-icon-holder">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
								<use xlink:href="#shopping-bag" />
							</svg>
						</div>
						<h3>
							Add and customize equipment listings as you scale your
							business
						</h3>
						<p>
							Adjust pricing dynamically, manage stock counts, and refine
							product categories and options with Quipli. Manage inventory
							at a category, product, and unit level to visualize it your
							way.
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

	<!--<section>-->
	<!--	<div class="max-container">-->
	<!--		<div class="sec-heading">-->
	<!--			<h2>And much more...</h2>-->
	<!--		</div>-->
	<!--		<div class="qp-features-horizontal">-->
	<!--			<div class="qp-feature-block-horizontal qp-verticaled secondary inverse">-->
	<!--				<div class="qp-feature-content">-->
	<!--					<div class="qp-icon-holder">-->
	<!--						<svg width="20px" height="20px" viewBox="0 0 20 20">-->
	<!--							<use xlink:href="#point-of-sale" />-->
	<!--						</svg>-->
	<!--					</div>-->
	<!--					<h3>-->
	<!--						Experience fast and seamless in-store rental transactions that-->
	<!--						tie to Quipli’s backend-->
	<!--					</h3>-->
	<!--					<p>-->
	<!--						Fast checkouts make happy customers – both in-store and-->
	<!--						online. Ensure that double-booking is never an issue, with an-->
	<!--						inventory system that syncs both online and offline sales. And-->
	<!--						if you’d like to make it even tighter, we have fully-->
	<!--						integrated POS devices we can provide.-->
	<!--					</p>-->
	<!--				</div>-->
	<!--				<div class="qp-feature-image">-->
	<!--					<picture>-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.webp" />-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.png" />-->
	<!--						<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p-mob.webp" />-->
	<!--						<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p-mob.png" />-->
	<!--						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart-p.png" alt="Fast and seamless point of sale" loading="lazy" decoding="async" width="1453" height="1129">-->
	<!--					</picture>-->
	<!--				</div>-->
	<!--			</div>-->

	<!--			<div class="qp-feature-block-horizontal">-->
	<!--				<div class="qp-feature-content">-->
	<!--					<div class="qp-icon-holder">-->
	<!--						<svg width="24px" height="24px" viewBox="0 0 24 24">-->
	<!--							<use xlink:href="#rental" />-->
	<!--						</svg>-->
	<!--					</div>-->
	<!--					<h3>-->
	<!--						Track revenue, utilization, costs, depreciation, and missed-->
	<!--						rentals at an asset-level-->
	<!--					</h3>-->
	<!--					<p>-->
	<!--						Improve your profitability with Quipli’s inventory reporting.-->
	<!--						See which products are your best rentals, and stock up on-->
	<!--						products in highest demand. Know the true cost of each rental-->
	<!--						with accurate unit-level financial reporting.-->
	<!--					</p>-->
	<!--				</div>-->
	<!--				<div class="qp-feature-image">-->
	<!--					<picture>-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports.webp" />-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/sreports.png" />-->
	<!--						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports-mob.webp" />-->
	<!--						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports-mob.png" />-->
	<!--						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports.png" alt="Reporting" loading="lazy" decoding="async" width="900" height="650">-->
	<!--					</picture>-->
	<!--				</div>-->
	<!--			</div>-->

	<!--			<div class="qp-feature-block-horizontal">-->
	<!--				<div class="qp-feature-content">-->
	<!--					<div class="qp-icon-holder">-->
	<!--						<svg width="20px" height="20px" viewBox="0 0 20 20">-->
	<!--							<use xlink:href="#seo" />-->
	<!--						</svg>-->
	<!--					</div>-->
	<!--					<h3>-->
	<!--						Eliminate the guesswork, paperwork, and scrambling with a-->
	<!--						unified view across all store locations-->
	<!--					</h3>-->
	<!--					<p>-->
	<!--						Manage and customize inventory availability for each one of-->
	<!--						your locations. Control user access for different locations.-->
	<!--						Seamlessly transfer inventory from one location to another, to-->
	<!--						ensure a fully up-to-date inventory status.-->
	<!--					</p>-->
	<!--				</div>-->
	<!--				<div class="qp-feature-image">-->
	<!--					<picture>-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.webp" />-->
	<!--						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png" />-->
	<!--						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.webp" />-->
	<!--						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.png" />-->
	<!--						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png" alt="Smart booking" loading="lazy" decoding="async" width="1453" height="1129">-->
	<!--					</picture>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	
	<section>
		<div class="max-container">
			<div class="sec-heading">
				<h2>And much more...</h2>
			</div>
			<div class="qp-features-horizontal">
				<div class="qp-feature-block-horizontal qp-verticaled secondary inverse">
					<div class="qp-feature-content">
						<div class="qp-icon-title gray">
							<div class="qp-icon-holder">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
									<use xlink:href="#point-of-sale" />
								</svg>
							</div>
							<span>POS</span>
						</div>
						<h3>
							Experience fast and seamless in-store rental transactions that
							tie to Quipli’s backend
						</h3>
						<p>
							Fast checkouts make happy customers – both in-store and
							online. Ensure that double-booking is never an issue, with an
							inventory system that syncs both online and offline sales. And
							if you’d like to make it even tighter, we have fully
							integrated POS devices we can provide.
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

				<div class="qp-feature-block-horizontal">
					<div class="qp-feature-content">
						<div class="qp-icon-title">
							<div class="qp-icon-holder">
								<svg width="24px" height="24px" viewBox="0 0 24 24">
									<use xlink:href="#rental" />
								</svg>
							</div>
							<span>Reporting & utilization data</span>
						</div>
						<h3>
							Track revenue, utilization, costs, depreciation, and missed
							rentals at an asset-level
						</h3>
						<p>
							Improve your profitability with Quipli’s inventory reporting.
							See which products are your best rentals, and stock up on
							products in highest demand. Know the true cost of each rental
							with accurate unit-level financial reporting.
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports.webp" />
							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/sreports.png" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports-mob.webp" />
							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports-mob.png" />
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/reports.png" alt="Reporting" loading="lazy" decoding="async" width="900" height="650">
						</picture>
					</div>
				</div>

				<div class="qp-feature-block-horizontal">
					<div class="qp-feature-content">
						<div class="qp-icon-title">
							<div class="qp-icon-holder">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
									<use xlink:href="#seo" />
								</svg>
							</div>
							<span>Multi-location management</span>
						</div>
						<h3>
							Eliminate the guesswork, paperwork, and scrambling with a
							unified view across all store locations
						</h3>
						<p>
							Manage and customize inventory availability for each one of
							your locations. Control user access for different locations.
							Seamlessly transfer inventory from one location to another, to
							ensure a fully up-to-date inventory status.
						</p>
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

				<!--<div class="qp-feature-block-horizontal qp-verticaled inverse" style="--q-primary: var(--q-gray);">-->
				<!--	<div class="qp-feature-content">-->
				<!--		<div class="qp-icon-title secondary">-->
				<!--			<div class="qp-icon-holder">-->
				<!--				<svg width="20px" height="20px" viewBox="0 0 20 20">-->
				<!--					<use xlink:href="#point-of-sale" />-->
				<!--				</svg>-->
				<!--			</div>-->
				<!--			<span>Purchase Order</span>-->
				<!--		</div>-->
				<!--		<h3>-->
				<!--			Track incoming stock and vendor orders with Purchase Orders built into your inventory system-->
				<!--		</h3>-->
				<!--		<p>-->
				<!--			Quipli’s built-in Purchase Orders lets you track what’s been ordered from vendors, receive items directly into inventory when they arrive, and log related expenses automatically.-->
				<!--		</p>-->
				<!--		<p>-->
				<!--			Whether you're restocking parts or adding new equipment, your inventory updates as soon as a PO is received, keeping availability accurate across locations and in sync with your website. </p>-->
				<!--	</div>-->
				<!--	<div class="qp-feature-image">-->
				<!--		<picture>-->
				<!--			<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/purchase-order.svg" alt="Purchase Order" loading="lazy" decoding="async" width="1453" height="1129">-->
				<!--		</picture>-->
				<!--	</div>-->
				<!--</div>-->
			</div>
		</div>
		<div class="max-container" style="padding-top: 40px;">
			<div class="qp-features-horizontal">
				<div class="qp-feature-block-horizontal qp-verticaled inverse purchase-orders-section" style="--q-primary: var(--q-gray);">
					<div class="qp-feature-content">
						<div class="qp-icon-title secondary">
							<div class="qp-icon-holder">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
									<use xlink:href="#point-of-sale" />
								</svg>
							</div>
							<span>Purchase Orders</span>
						</div>
						<h3>
							Track incoming stock and vendor orders with Purchase Orders built into your inventory system
						</h3>
						<p>
							Quipli's built-in Purchase Orders lets you track what's been ordered from vendors, receive items directly into inventory when they arrive, and log related expenses automatically.
						</p>
						<p>
							Whether you're restocking parts or adding new equipment, your inventory updates as soon as a PO is received, keeping availability accurate across locations and in sync with your website.
						</p>
					</div>
					<div class="qp-feature-image">
						<picture>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/inventory/purchase-orders.png" alt="Purchase Order Management" loading="lazy" decoding="async" width="538" height="376">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php get_template_part('template-parts/reviews'); ?>

	<section class="section section--about">
		<div class="qp about">
			<div class="container container--xl">
				<div class="about__wrap">
					<article>
						<h2 class="q-title q-title--xl">
							What makes Quipli’s inventory management software so good?
						</h2>
						<p>
							Whether you are moving off of spreadsheets, or saying goodbye
							to dated systems that were built in the 1990s, Quipli’s
							cloud-based inventory management system provides a major step
							forward toward operational excellence. 
						</p>
						<p>
							Whether you have one location, or one hundred, Quipli has you
							covered.
						</p>
					</article>
					<ul>
						<li>
							<figure>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/cat-primary.svg" alt="Software Icon" />
							</figure>
							<p>Manage all your SKUs and categories</p>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/cal-primary.svg" alt="Support Icon" />
							</figure>
							<p>Maintain visibility with a dynamic calendar</p>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/money-primary.svg" alt="Security Icon" />
							</figure>
							<p>Adjust pricing on the fly</p>
						</li>
						<li>
							<figure>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tag-primary.svg" alt="Cloud Icon" />
							</figure>
							<p>Integrate directly into your POS </p>
						</li>
					</ul>
					<a class="q-btn q-btn--xl" href="#typeform-lity" title="Book a Demo" data-lity>Book a Demo</a>
				</div>
			</div>
		</div>
	</section>

	<?php
	get_template_part('template-parts/home/who');
	get_template_part('template-parts/solutions/features');
	?>
	
	<?php get_template_part('template-parts/solutions/see-action'); ?>

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
											What is rental inventory management?
										</button>
									</div>
									<div class="accordion__content is__open" aria-hidden="false" id="faq-1">
										<p>
											We offer multiple pricing tiers based on your number
											of locations, pieces of inventory, and business needs.
											Each tier comes with unlimited users, unlimited
											training, and unlimited support. With our fair
											pricing, you’ll never get nickeled and dimed for
											customer support.
										</p>
										<p>
											We also offer “Marketing as a Service” if you’d like
											to leverage our digital marketing team to help you
											land new customers through SEO and paid online
											marketing campaigns.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-2">How does Quipli's Inventory Management track equipment usage?</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-2">
										<p>
											Yes. We built Quipli to provide online renting
											experiences to independent rental companies and
											streamline the process between rental stores and their
											customers. We offer modern rental software to run your
											entire business. Reservation requests, completing a
											transaction in-store or online, inventory management,
											utilization rates, sales of equipment, and more – we
											have you covered.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-3">What types of companies can use Quipli's Inventory Software?</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-3">
										<p>Quipli works best with heavy equipment, light equipment, and general tool rentals. We have several other categories we serve, such as medical equipment, but construction-related tends to be the best fit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	get_template_part('template-parts/latest-blogs');
	get_template_part('template-parts/footer-cta');
	?>

</main>

<?php
get_sidebar();
get_footer();