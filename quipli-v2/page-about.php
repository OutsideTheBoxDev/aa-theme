<?php
/*
Template Name: AboutUs
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main about-us-page">
	<section class="page-hero">
		<div class="max-container">
			<div class="page-heading left-aligned">
				<h1 class="qp-highlighted-text">We transform equipment rental into a <em>delightful, seamless experience.</em></h1>
			</div>
			<div class="qp-floaters">
				<div class="qp-img-floats">
					<div class="rellax" data-rellax-speed="3">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/about2.png" alt="Discussion" />
					</div>
					<div class="rellax" data-rellax-speed="3">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/about1.png" alt="In Office" />
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/about4.png" alt="Planning" class="rellax" data-rellax-speed="5" />
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/qp-primary-pattern.svg" alt="Pattern" class="pattern rellax" data-rellax-zindex="10" data-rellax-speed="4" />
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/about3.png" alt="Equipment" class="rellax" data-rellax-zindex="1" data-rellax-speed="4" />
					</div>
				</div>
				<div class="qp-info-floats">
					<div class="quoted rellax" data-rellax-speed="3">
						<div class="quote-block">
							<div class="quote-from">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/team/kyle.png" alt="Kyle C" width="360px" height="480px" />
							</div>
							<div class="quote-info">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/quote.svg" alt="Quote" width="40px" height="40px" />
								<p>Quipli aspires to be the technology layer that powers the rental industry behind the scenes.</p>
								<span>Kyle Clements, Founder</span>
							</div>
						</div>
					</div>
					<div class="info rellax" data-rellax-speed="6">
						<h3>Quipli was established in 2020 as a direct result of our founder's frustrating attempt to rent equipment through a large-scale rental company's online platform.</h3>
						<p>
							This sparked a mission to revolutionize heavy machinery
							rentals and offer customers the best possible rental
							experience, both online and offline. After hundreds of
							customer interviews, Quipli was created.
						</p>
						<p>
							Our platform empowers local rental companies with advanced
							technology at a fraction of the cost, allowing them to compete
							with industry giants.
						</p>
						<p>
							Our goal is to level the playing field and give every heavy
							equipment renter a chance to shine.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="narrow-spacing overflow-visible">
		<div class="max-container">
			<div class="qp-about-stats">
				<div class="qp-stat-card">
					<p>100+</p>
					<span>Customers are using Quipli around the US and Canada</span>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/discussion.png" alt="Discussion" />
				<div class="qp-stat-card primary">
					<p>500%</p>
					<span>That's how much we've grown in a year</span>
				</div>
			</div>

			<div class="qp-about-info">
				<h3>
					At Quipli, we have found that rental companies big and small are
					frustrated by the dated software solutions in the market. Legacy
					vendors aren't keeping pace with the industry's evolving needs,
					and are falling behind in an increasingly "digital first" world.
					We built Quipli to be the core software that helps you navigate
					this next generation, and better serve your customers with ease.
				</h3>

				<div class="qp-about-block">
					<div class="image">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/about/about-quipli.png" alt="About Quipli" />
					</div>
					<div class="content">
						<span>About quipli</span>
						<h4>Your full suite, from inventory management to e-commerce</h4>
						<p>
							Quipli's power lies in the balance between ease of use,
							robustness, and breadth of tools. It all seamlessly
							integrates.
						</p>
						<p>
							Get your arms around your inventory, manage your service and
							repair schedule, enjoy a calendar view of all your equipment
							in a single dashboard, tie directly into Quickbooks, and much
							more.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section--how">
		<div class="qp how">
			<div class="max-container">
				<div class="how__wrap horizontal secondary">
					<div class="qp-core-values">
						<h2>Built on strong foundations. Core values that drive Quipli.</h2>
						<div class=" core-values-grid">
							<div class="core-value-block white">
								<p>We are customer obsessed</p>
							</div>
							<div class="core-value-block">
								<p>We act like <br />owners</p>
							</div>
							<div class="core-value-block gray">
								<p>We do the <br />right thing</p>
							</div>
							<div class="core-value-block">
								<p>We execute with excellence</p>
							</div>
							<div class="core-value-block black">
								<p>We toast to our small wins</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php get_template_part('template-parts/about/team');
	get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();
