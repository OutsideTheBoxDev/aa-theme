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

<article id="post-<?php the_ID(); ?>" <?php post_class('qp-blog-single-article blog-article event-article podcast-article'); ?>>
	<div class="max-container">
		<section class="event-header podcast">
			<div class="title-block">
				<img class="rr-logo" src="https://quipli.com/wp-content/uploads/2025/07/RR-Black-1.png" alt="Rental Roundtable" height="150">
				<?php
				the_title('<h1 class="entry-title q-title q-title--l">', '</h1>');
				echo '<p class="q-desc subtitle">';
				echo the_field('podcast_subtitle');
				echo '</p>';
				?>
			</div>
			<div class="meta-event-info">
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="12" cy="12" r="10"></circle>
						<polyline points="12 6 12 12 16 14"></polyline>
					</svg>
					<div>
						<span><?php the_field('duration'); ?></span>
					</div>
				</div>
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M8 2v4"></path>
						<path d="M16 2v4"></path>
						<rect width="18" height="18" x="3" y="4" rx="2"></rect>
						<path d="M3 10h18"></path>
					</svg>
					<div>
						<span><?php the_field('date'); ?></span>
					</div>
				</div>
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones-icon lucide-headphones">
						<path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3" />
					</svg>
					<div>
						<span><?php the_field('episode'); ?></span>
					</div>
				</div>
			</div>

			<?php quipli_post_thumbnail(); ?>

			<?php
			$spotify_embed = get_field('spotify_embed');
			if ($spotify_embed):?>
				<div class="podcast-embed spotify-embed">
					<iframe src="<?php echo esc_url($spotify_embed); ?>" width="100%" height="180" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
				</div>
			<?php endif; ?>

		</section>
		<section class="qp-single-details">
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
				<?php
				$transcript = get_field('transcripts');
				if ($transcript): ?>
				<div class="episode-transcript">
					<details>
						<summary>
							<span class="transcript-title">Episode transcript</span>
							<svg class="transcript-arrow" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="m6 9 6 6 6-6"/>
							</svg>
						</summary>
						<div class="transcript-content">
							<?php echo $transcript; ?>
						</div>
					</details>
				</div>
				<?php endif; ?>
			</div>
			<div class="qp-single-sticky" style="--max-w: 400px;">
				<div class="is-sticky">
					<div class="sticky-card letter-form download-form">
						<div>
							<p class="card-title">Never Miss an Episode</p>
							<span class="card-desc">Get the latest rental industry insights delivered to your inbox.</span>
						</div>
						<script>
						hbspt.forms.create({
							portalId: "8737923",
							formId: "06e845c2-5a6e-4f04-b9fc-1f20c2c95092",
							region: "na1"
						});
						</script>
						<div class="listen-platforms">
							<p class="platforms-title">Listen on your favorite platform:</p>
							<div class="platform-links">
								 <a href="https://open.spotify.com/show/2TQeYeL9FlTizh7B2Ga9GI" target="_blank" rel="noopener noreferrer" class="spotify">
									<img src="https://storage.googleapis.com/pr-newsroom-wp/1/2023/05/Spotify_Full_Logo_RGB_Green.png" alt="Listen on Spotify">
								</a>
								<a href="https://podcasts.apple.com/us/podcast/the-rental-roundtable/id1695158359" target="_blank" rel="noopener noreferrer" class="apple">
									<img src="https://quipli.com/wp-content/uploads/2025/07/US-UK_Apple_Podcasts_Listen_Badge_RGB_062023.svg" alt="Listen on Apple Podcasts">
								</a>
							</div>
						</div>
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
		</section>
		<?php
			// Repeater Field for multiple speakers
			$speakers = get_field('speakers');

			if ($speakers && is_array($speakers) && count($speakers) > 0): ?>
			<div class="qp-author-info">
				<h3>About the Speakers</h3>
				<?php
				foreach ($speakers as $speaker):
					$speaker_name = $speaker['name'] ?? '';
					$speaker_title = $speaker['designation'] ?? '';
					$speaker_bio = $speaker['about'] ?? '';
					$speaker_avatar = $speaker['profile_pic'] ?? '';
					$speaker_website = $speaker['speaker_website'] ?? '';
					$speaker_linkedin = $speaker['linkedin_url'] ?? '';
					?>
				<div class="speaker-info">
					<div class="speaker-avatar">
						<img src="<?php echo esc_url($speaker_avatar); ?>" alt="<?php echo esc_attr($speaker_name); ?>">
					</div>
					<div class="speaker-content">
						<h4><?php echo esc_html($speaker_name); ?></h4>
						<span><?php echo esc_html($speaker_title); ?></span>
						<p><?php echo esc_html($speaker_bio); ?></p>
				</div>
			</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<!-- <div class="qp-author-info">
			<h3>About the Speakers</h3>
			<div class="speaker-info">
				<div class="speaker-avatar">
					<img src="https://cdn.jsdelivr.net/gh/alohe/avatars/png/vibrent_3.png" alt="Avatar">
				</div>
				<div class="speaker-content">
					<h4>Kyle Clements</h4>
					<span>Industry Expert & Consultant</span>
					<p>An experienced professional with over 15 years in the equipment rental industry, specializing in operational efficiency and business growth strategies. Kyle Clements has helped hundreds of rental businesses optimize their operations, increase profitability, and scale their services.</p>
					<div class="speaker-links">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"></circle>
								<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
								<path d="M2 12h20"></path>
							</svg>
							<span>Speaker Website</span>
						</a>
						<a href="#" class="linkedin">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
								<rect width="4" height="12" x="2" y="9"></rect>
								<circle cx="4" cy="4" r="2"></circle>
							</svg>
							<span>LinkedIn</span>
						</a>
					</div>
				</div>
			</div>
			<div class="speaker-info">
				<div class="speaker-avatar">
					<img src="https://cdn.jsdelivr.net/gh/alohe/avatars/png/vibrent_3.png" alt="Avatar">
				</div>
				<div class="speaker-content">
					<h4>Kyle Clements</h4>
					<span>Industry Expert & Consultant</span>
					<p>An experienced professional with over 15 years in the equipment rental industry, specializing in operational efficiency and business growth strategies. Kyle Clements has helped hundreds of rental businesses optimize their operations, increase profitability, and scale their services.</p>
					<div class="speaker-links">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"></circle>
								<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
								<path d="M2 12h20"></path>
							</svg>
							<span>Speaker Website</span>
						</a>
						<a href="#" class="linkedin">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
								<rect width="4" height="12" x="2" y="9"></rect>
								<circle cx="4" cy="4" r="2"></circle>
							</svg>
							<span>LinkedIn</span>
						</a>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
// Get the current post ID
$current_post_id = get_the_ID();

// Get the categories of the current post
$categories = get_the_category($current_post_id);

// Check if there are any categories assigned to the current post
if ($categories) {
	$category_ids = array();
	foreach ($categories as $category) {
		$category_ids[] = $category->term_id;
	}

	// Query related posts
	$args = array(
		'post__not_in' => array($current_post_id),
		'posts_per_page' => 3, // Number of related posts to display
		// 'category__in' => $category_ids,
		'orderby' => 'rand', // Randomize the order of related posts
	);

	$related_query = new WP_Query($args);

	// Check if there are any related posts
	if ($related_query->have_posts()) {
?>

		<section class="related-events">
			<div class="max-container">
				<div class="qp-related-posts">
					<div class="related-title">
						<div class="title">
							<h3>More Episodes</h3>
						</div>
						<a href="/resources/podcasts/">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
								<path d="M5 12h14" />
								<path d="m12 5 7 7-7 7" />
							</svg>
							<span>View all podcasts</span>
						</a>
					</div>
					<div class="qp-related-posts-blocks">
						<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
							<div class="related-posts-link">
								<?php if (has_post_thumbnail()) : ?>
									<span class="event-type">Upcoming</span>
									<a href="<?php the_permalink(); ?>" class="qp-featured-img">
										<?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?>
									</a>
								<?php endif; ?>

								<div class="qp-related-content">
									<?php
									$categories = get_the_category();
									if (! empty($categories)) {
										foreach ($categories as $cat) {
											if ($cat->slug !== 'uncategorized') { // skip Uncategorized
												echo '<a class="event-category" href="' . esc_url(get_category_link($cat->term_id)) . '">'
													. esc_html($cat->name) . '</a>';
												break; // stop after first valid category
											}
										}
									}
									?>
									<h4 class="related-post-title">
										<?php the_title(); ?>
									</h4>
									<p>with Sarah Mitchell</p>
									<a rel="bookmark" class="watch-btn" href="<?php the_permalink(); ?>">Watch Now</a>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
<?php
	}

	// Restore original post data
	wp_reset_postdata();
}
?>
<?php get_template_part('template-parts/rentals-cta'); ?>