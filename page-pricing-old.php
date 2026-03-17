<?php
/*
Template Name: Pricing Page Old
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main use-case-page">
	<?php
	get_template_part('template-parts/pricing');
	get_template_part('template-parts/rental-partners');
	get_template_part('template-parts/reviews'); ?>

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
											What counts as a unit?
										</button>
									</div>
									<div class="accordion__content is__open" aria-hidden="false" id="faq-1">
										<p>
											Our pricing is unit-based, meaning that the pricing tier your business falls under depends on how many “units” you have in your fleet. We define a “unit” as any individual piece of inventory. Consumables (e.g. a pair of gloves you include with a rental) only count as one “unit” regardless of the quantity of each product.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-2">What if I have multiple locations?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-2">
										<p>
											All prices are listed per location. However, we offer special rates for rental companies that have multiple locations, depending on how many locations your business has, or plans to have. Please <a href="<?php echo home_url(); ?>/book-a-demo/">get in touch</a> to discuss your pricing. </p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-3">
											Can I run my entire rental business on your software?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-3">
										<p>
											Absolutely. Quipli was built to be your end to end solution for running your rental business, from reservations and payment processing to inventory management and online rentals, we have you covered.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-4">
											Can Quipli be added to my existing rental website?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-4">
										<p>
											Absolutely! Our team of onboarding specialists will work with you to find the right method of integration. We can help you launch Quipli as your main website or add Quipli onto your existing website.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-5">
											Do you have inventory management capabilities? How can I track assets?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-5">
										<p>
											Yes, Quipli allows for inventory management in a variety of ways. You can organize products by assigning individual unit numbers or tracking by bulk quantity. There is a calendar view to check available inventory based on certain days or weeks. You will see different status’ for your inventory, such as: available, on rent, past due, hard down, soft down, etc.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-6">
											Can I send quotes?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-6">
										<p>
											Yes - Quipli allows for quote creation/generation. You can create quotes that send directly to the customer so they can review, pay and sign for the quote if they decide to move forward with the transaction.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-7">
											Do you track service and maintenance?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-7">
										<p>
											Yes! This was our most requested new module, and we released it in February 2023. Track scheduled maintenance and repairs, costs, notes, pictures and future planned services. A game-changer for more established operators.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-8">
											What’s your support look like?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-8">
										<p>
											One of Quipli’s core values is that we are customer obsessed; you have unlimited access to reach us via phone, email or chat – all included in your annual subscription.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-9">
											Who's the majority of your customer base? Do you service a lot of customers like me?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-9">
										<p>
											Quipli works best for heavy construction equipment and general tool rental companies. We are not a good fit for golf cart, dumpster, trailer, audio/visual, boat/jet ski, ATV/UTV, and event rental companies at this time.
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

	<?php
	get_template_part('template-parts/rentals-cta');
	?>
</main>

<?php
get_sidebar();
get_footer();
