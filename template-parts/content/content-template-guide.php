<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quipli
 */

?>

<style>

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class('qp-blog-single-article blog-article'); ?>>
	<div class="max-container">
		<header class="entry-header">
			<?php
			if (is_singular()) :
				echo '<div class="meta-info">';
				the_category(' ');
				echo '</div>';
				the_title('<h1 class="entry-title q-title q-title--l">', '</h1>');
			else :
				the_title('<h2 class="entry-title q-title q-title--l"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;
			if ('template' === get_post_type()) :
			?>
				<div class="qp-entry-meta entry-meta">
					<div class="qp-meta-info">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-2">
							<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
							<path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
							<path d="M10 9H8"></path>
							<path d="M16 13H8"></path>
							<path d="M16 17H8"></path>
						</svg> <span>Legal Documents</span>
					</div>
					<div class="qp-meta-info">Quipli Legal Team
					</div>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="qp-single-details">
			<div class="qp-single-content max-details">

				<?php quipli_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'quipli'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						)
					);
					?>
				</div><!-- .entry-content -->
			</div>
			<div class="qp-single-sticky" style="--max-w: 400px;">
				<div class="is-sticky">
					<!--<div class="sticky-card letter-form download-form">-->
					<!--	<p class="card-title">Download Our Template-->

					<!--	</p>-->
					<!--	<form>-->
					<!--		<div class="col-2">-->
					<!--			<div class="field">-->
					<!--				<label for="fname">First Name*</label>-->
					<!--				<input>-->
					<!--			</div>-->
					<!--			<div class="field">-->
					<!--				<label for="lname">Last Name*</label>-->
					<!--				<input>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--		<div class="field">-->
					<!--			<label for="cname">Company*</label>-->
					<!--			<input>-->
					<!--		</div>-->
					<!--		<div class="field">-->
					<!--			<label for="bemail">Business Email*</label>-->
					<!--			<input type="bemail">-->
					<!--		</div>-->
					<!--		<button type="submit">Download Now</button>-->
					<!--		<p class="terms">By submitting this form, I confirm that I have read and agree to the <a href="#">Privacy Statement</a>.</p>-->
					<!--	</form>-->
					<!--</div>-->
					<div class="sticky-card letter-form">
						<p class="card-title">Advice delivered to your inbox</p>
						<script>
						hbspt.forms.create({
							portalId: "8737923",
							formId: "06e845c2-5a6e-4f04-b9fc-1f20c2c95092",
							region: "na1"
						});
						</script>
					</div>
					<div class="qp-demo-info">
						<a href="https://quipli.com/book-a-demo" target="_blank" rel="noopener noreferrer">
							<img src="https://quipli.com/wp-content/uploads/2025/08/Q-1.png" alt="Quipli">
							<span>Get a Quipli demo</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 12h14"></path>
								<path d="m12 5 7 7-7 7"></path>
							</svg>
						</a>
						<div class="ratings">
							<div class="stars">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
								</svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
								</svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
								</svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
								</svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
								</svg>
							</div>
							<span>Trusted by hundreds of top rental companies</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<section>
	<div class="max-container">
		<div class="qp-blog-cta">
			<div class="qp-cta-contents">
				<div class="qp-cta-icon">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/qp-logo-bg-primary.svg" alt="" />
				</div>
				<div class="qp-cta-info">
					<div>
						<h3>Learn about Quipli’s rental software</h3>
						<a href="<?php echo home_url(); ?>/solutions" class="btn-plain">Learn More</a>
					</div>
					<?php
					get_template_part('template-parts/solutions/ratings-light');
					?>
				</div>
			</div>
			<div class="qp-cta-img">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/qp-cta-img.png" alt="" />
			</div>
		</div>
	</div>
</section>