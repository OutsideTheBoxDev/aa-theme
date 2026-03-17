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

			if ('post' === get_post_type()) :
			?>
				<div class="qp-entry-meta entry-meta">
					<div class="qp-meta-info qp-meta-author">
						<img alt="Blog Author" src="<?php echo get_template_directory_uri() ?>/assets/img/authors/kyle.jpg" height="32" width="32" loading="lazy" decoding="async" />
						<span>By <a href="https://www.linkedin.com/in/kyle-clements-klc/" target="_blank">Kyle Clements</a></span>
					</div>
					<?php
					quipli_posted_on();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="qp-single-details">
			<div class="qp-single-content">

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
			<div class="qp-single-sticky">
				<div class="is-sticky">
					<!--<div class="sticky-card">-->
					<!--	<p class="toc-title card-title">Table of contents</p>-->
					<!--	<div class="js-toc"></div>-->
					<!--</div>-->
					<div class="sticky-card letter-form">
						<p class="card-title">Advice delivered to your inbox
						</p>
						<!-- <form>
							<input type="email" placeholder="Enter email address">
							<button type="submit">Subscribe</button>
						</form> -->
						<script>
						hbspt.forms.create({
							portalId: "8737923",
							formId: "06e845c2-5a6e-4f04-b9fc-1f20c2c95092",
							region: "na1"
						});
						</script>
					</div>
					<div class="qp-demo-info">
						<a href="https://quipli.com/book-a-demo/" target="_blank" rel="noopener noreferrer">
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
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", () => {
		tocbot.init({
			tocSelector: '.js-toc',
			contentSelector: '.qp-single-content .entry-content',
			headingSelector: 'h2',
			hasInnerContainers: true,
			headingsOffset: 70,
			scrollSmoothOffset: -80,
			fixedSidebarOffset: 88,
		});
	})
</script>
<?php
if (is_single()) {
	get_template_part('template-parts/content/content-after-article', 'page');
}
?>