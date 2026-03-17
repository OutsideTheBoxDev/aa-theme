<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quipli
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("qp-page-container"); ?>>
	<?php
	$comp_articles_ids = array(9717, 1010, 10123, 10116, 10118, 10121, 10127, 10129);
	if (in_array(get_the_ID(), $comp_articles_ids)) {
	?>

		<section class="section page-hero dark-bg">
			<div class="max-container">
				<div class="pattern-bg pattern-x-both x-centered">
					<div class="page-heading">
						<h1><?php the_title(); ?>: which is the best?</h1>
						<p>
							Learn about the similarities and differences between top
							equipment rental software solutions
						</p>
					</div>
					<?php get_template_part('template-parts/ratings-light'); ?>
				</div>
			</div>
		</section>
	<?php } else if (strpos(basename(get_permalink()), "rental-roundtable") !== false) { ?>

		<section class="section page-hero">
			<div class="max-container">
				<div class="page-heading">
					<h1><?php the_title(); ?></h1>

					<?php if (has_excerpt()) { ?>
						<p>
							<?php the_excerpt(); ?>
						</p>
					<?php  } ?>
					</p>
				</div>
			</div>
		</section>

	<?php } else { ?>

		<section class="section page-hero dark-bg">
			<div class="max-container">
				<div class="pattern-bg pattern-b-inwards">
					<div class="page-heading">
						<h1><?php the_title(); ?></h1>
						<?php if (has_excerpt()) { ?>
							<p>
								<?php the_excerpt(); ?>
							</p>
						<?php  } ?>
						<!-- <a class="q-btn q-btn--xl" href="<?php echo home_url(); ?>/book-a-demo" title="Book a Demo">Book a Demo</a> -->
					</div>
					<?php get_template_part('template-parts/ratings-light'); ?>
				</div>
			</div>
		</section>

	<?php } ?>

	<section class="no-spacing">
		<div class="max-container">

			<div class="qp-page-article">

				<div class="entry-content max-lg">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'quipli'),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->
			</div>

			<?php if (get_edit_post_link()) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Edit <span class="screen-reader-text">%s</span>', 'quipli'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
	</section>

</article><!-- #post-<?php the_ID(); ?> -->