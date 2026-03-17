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
				if(has_excerpt()){
    				echo '<div class="q-desc">';
    				the_excerpt();
    				echo '</div>';
				};
			else :
				the_title('<h2 class="entry-title q-title q-title--l"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;
			?>
		</header><!-- .entry-header -->
		<div class="qp-single-details">
			<div class="qp-single-content max-details">

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