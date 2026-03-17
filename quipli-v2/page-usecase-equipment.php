<?php
/*
Template Name: Use Cases - Heavy equipment
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main use-case-page">
	<?php
	get_template_part('template-parts/usecases/hero');
	?>
	<section>
		<div class="qp-image-content-block">
			<div class="qp-image-block">
				<figure>
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/vehicle.jpeg" alt="Why Image" />
				</figure>
			</div>
			<div class="qp-content-block">
				<div class="qp-content-icon">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
						<use xlink:href="#equipment" />
					</svg>
				</div>
				<h3>
					Say goodbye to overwhelming and chaotic equipment rental
					management.
				</h3>
				<p class="highlight">
					Conquer your biggest challenges with Quipli's powerful rental
					management software.
				</p>
				<p>
					Managing your equipment rental business shouldn't be overwhelming.
					We know that keeping track of orders, staying on top of your
					billing, managing your inventory, and navigating daily operations
					can be a real challenge.
				</p>
				<p>
					With Quipli, you'll transform your operations, leaving the chaos
					behind and focusing on what truly matters: growing a profitable
					business.
				</p>
			</div>
		</div>
	</section>
	<?php
	get_template_part('template-parts/usecases/platform-grid');
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
											Does Quipli's construction equipment rental software support multi-location businesses?
										</button>
									</div>
									<div class="accordion__content is__open" aria-hidden="false" id="faq-1">
										<p>
											Yes! Quipli allows you to categorize your equipment by location, so that customers can select which location they can pick up their rentals – as well as learn if the rental they want is available at a certain location.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-2">Is Quipli good for SEO?</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-2">
										<p>
											Quipli’s website platform has been designed to help you grow your business’s SEO. You are able to edit page titles, headlines, and add additional copy to any page you want. If you need help or have questions, let us know and our SEO team will be happy to help further.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-3">
											Do I need to switch completely to Quipli or can I still use my existing website?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-3">
										<p>
											While many customers do move their entire website over to Quipli, most website configurations can accommodate a Quipli integration so that you can use Quipli for transaction purposes.
										</p>
									</div>
								</div>
								<div class="accordion__item">
									<div class="accordion__title">
										<button type="button" aria-expanded="false" aria-controls="faq-4">
											Does Quipli have a customer success team?
										</button>
									</div>
									<div class="accordion__content" aria-hidden="true" id="faq-4">
										<p>
											Yes, Quipli has a team available to help you onboard your website and answer any questions. Quipli’s team specializes in construction equipment rental, and works with dozens of other equipment rental businesses.
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
	get_template_part('template-parts/latest-blogs');
	get_template_part('template-parts/rentals-cta');
	?>
</main>

<?php
get_sidebar();
get_footer();
