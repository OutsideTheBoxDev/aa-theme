<?php
/*
Template Name: Use Cases - General Tool
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main use-case-page">
	<?php
	get_template_part('template-parts/usecases/hero', null, [
		"title" => "General tool rental software to accelerate your growth.",
		"description" => "Optimize operations, maximize inventory, and boost rental profits effortlessly.",
		"imgname" => "usecase2-hero"
	]);
	?>
	<section>
		<div class="qp-image-content-block">
			<div class="qp-image-block">
				<figure>
					<picture>
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/vehicle.webp" />
						<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/vehicle.jpeg" />
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/vehicle.jpeg" alt="Don't let an inefficient POS system stand in the way" loading="lazy" decoding="async" width="800" height="688">
					</picture>
				</figure>
			</div>
			<div class="qp-content-block">
				<div class="qp-content-icon">
					<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M35.0026 29.9993H18.3359V21.666H31.6693C33.5026 21.666 35.0026 23.166 35.0026 24.9993V29.9993Z" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M15.8307 38.3333C18.1319 38.3333 19.9974 36.4678 19.9974 34.1667C19.9974 31.8655 18.1319 30 15.8307 30C13.5295 30 11.6641 31.8655 11.6641 34.1667C11.6641 36.4678 13.5295 38.3333 15.8307 38.3333Z" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M34.1667 38.3333C36.4678 38.3333 38.3333 36.4678 38.3333 34.1667C38.3333 31.8655 36.4678 30 34.1667 30C31.8655 30 30 31.8655 30 34.1667C30 36.4678 31.8655 38.3333 34.1667 38.3333Z" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M16.6641 30H33.3307" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M16.6641 38.334H33.3307" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M28.3359 13.334H18.3359V21.6673H28.3359V13.334Z" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M6.66406 26.666C9.42548 26.666 11.6641 24.4275 11.6641 21.666C11.6641 18.9045 9.42548 16.666 6.66406 16.666C3.90265 16.666 1.66406 18.9045 1.66406 21.666C1.66406 24.4275 3.90265 26.666 6.66406 26.666Z" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
						<path d="M6.66406 16.666V1.66602L18.3307 14.9993" stroke="#FCDA01" stroke-width="2.77778" stroke-miterlimit="10" stroke-linejoin="round" />
					</svg>
				</div>
				<h3>
					Managing your general tool rental business doesn’t have to be
					overwhelming.
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
	get_template_part('template-parts/reviews');
	get_template_part('template-parts/latest-blogs');
	get_template_part('template-parts/rentals-cta');
	?>
</main>

<?php
get_sidebar();
get_footer();
