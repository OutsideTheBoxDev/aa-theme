<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Quipli
 */

get_header();
?>

<main class="quipli main">

	<!-- Hero Section -->
	<section class="error-404-hero pattern-bg">
		<div class="max-container">
			<div class="error-404-hero__content">
				<span class="error-code">404</span>
				<h1><?php esc_html_e( 'Page Not Found', 'quipli' ); ?></h1>
				<p><?php esc_html_e( "The page you're looking for doesn't exist or has been moved.", 'quipli' ); ?></p>
				<a class="q-btn q-btn--xl" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'quipli' ); ?></a>
			</div>
		</div>
	</section>

	<!-- Resource Tiles Section -->
	<section class="error-404-resources">
		<div class="max-container">
			<h2><?php esc_html_e( 'Learn more about Quipli', 'quipli' ); ?></h2>
			<div class="blog-posts-grid error-404-grid">

				<a class="related-posts-link" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">
					<div class="qp-related-content">
						<span class="event-category"><?php esc_html_e( 'Explore', 'quipli' ); ?></span>
						<h4 class="related-post-title"><?php esc_html_e( 'Resources', 'quipli' ); ?></h4>
						<p><?php esc_html_e( 'Rental business guides, tools, and templates to help you grow.', 'quipli' ); ?></p>
						<span class="btn-plain btn-secondary"><?php esc_html_e( 'Learn More', 'quipli' ); ?></span>
					</div>
				</a>

				<a class="related-posts-link" href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>">
					<div class="qp-related-content">
						<span class="event-category"><?php esc_html_e( 'Explore', 'quipli' ); ?></span>
						<h4 class="related-post-title"><?php esc_html_e( 'Solutions', 'quipli' ); ?></h4>
						<p><?php esc_html_e( 'Discover equipment rental software features built for your business.', 'quipli' ); ?></p>
						<span class="btn-plain btn-secondary"><?php esc_html_e( 'Learn More', 'quipli' ); ?></span>
					</div>
				</a>

				<a class="related-posts-link" href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">
					<div class="qp-related-content">
						<span class="event-category"><?php esc_html_e( 'Explore', 'quipli' ); ?></span>
						<h4 class="related-post-title"><?php esc_html_e( 'Reviews', 'quipli' ); ?></h4>
						<p><?php esc_html_e( 'See what rental businesses are saying about Quipli.', 'quipli' ); ?></p>
						<span class="btn-plain btn-secondary"><?php esc_html_e( 'Learn More', 'quipli' ); ?></span>
					</div>
				</a>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
