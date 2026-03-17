<?php
/*
Template Name: Reviews
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main reviews-us-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-left-mid pattern-bottom-right">
				<div class="page-heading">
					<p>We've grown 5x in a year. Why?</p>
					<h1 class="qp-highlighted-text">
						We focus on <em>making our customers happy.</em>
					</h1>
					<a class="q-btn q-btn--xl" href="#reviews-sec" title="Read Reviews">Read Reviews</a>
				</div>
				<div class="hero-images-floats">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/1.png" alt="quipli-review" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/2.png" alt="quipli-review" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/3.png" alt="quipli-review" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/4.png" alt="quipli-review" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/5.png" alt="quipli-review" />
				</div>
				<?php get_template_part('template-parts/ratings-light'); ?>
			</div>
		</div>
	</section>
	<?php
	get_template_part('template-parts/rental-partners');
	get_template_part('template-parts/reviews');
	?>
	<section class="section section--sliderdemo">
		<div class="max-container">
			<div class="sec-heading left-aligned reviews-heading">
				<h2>Get inspiration from our customers’ success stories</h2>
			</div>
		</div>
		<div class="qp slider reviews-slider">
			<div class="slider__wrap">
				<div class="slider">
					<div class="slider__block">
						<div class="slider__article">
							<figure class="slider__blockquote">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/blockquote.png" alt="Blockquote image" />
							</figure>
							<div class="slider__content">
								<p>
									Quipli helped us overcome the kinks in our sales, outdated
									website, and overwhelming rental reservation system and
									present our products in the best light.
								</p>
								<div class="quote-owner">
									<figure>
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/bryce.png" alt="Bryce Miller" />
									</figure>
									<div class="owner-details">
										<h4>Bryce Miller</h4>
										<span>Cardinal Rentals & Sales</span>
									</div>
								</div>
							</div>
						</div>
						<div class="slider__video">
							<script src="https://fast.wistia.com/embed/medias/8tp9azcz8y.jsonp" async></script>
							<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
							<script src="https://fast.wistia.com/embed/medias/msdwc44gtt.jsonp" async></script>
							<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
							<!--<div class="wistia_embed wistia_async_msdwc44gtt" style="height:360px;position:relative;width:640px">-->
							<!--	<div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/msdwc44gtt/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>-->
							<!--</div>-->
							<iframe style="height:550px;width:100%" src="https://www.youtube.com/embed/wGb93nbkvB8?si=EtJeE1a12N5cH0uP" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/news'); ?>
	<?php get_template_part('template-parts/rentals-cta'); ?>
</main>

<?php
get_sidebar();
get_footer();