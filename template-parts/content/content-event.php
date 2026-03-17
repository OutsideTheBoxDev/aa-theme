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

<article id="post-<?php the_ID(); ?>" <?php post_class('qp-blog-single-article blog-article event-article'); ?>>
	<div class="max-container">
		<section class="event-header">
			<div class="title-block">
				<?php 
				$terms = get_the_terms( get_the_ID(), 'event-type' );
           		$event_type = $terms ? $terms[0]->name : '';
				if ($event_type) {
					echo '<span class="event-type ' . esc_attr(strtolower($event_type)) . '">' . esc_html($event_type) . '</span>';
				} 
				the_title('<h1 class="entry-title q-title q-title--l">', '</h1>');
                if(has_excerpt()){
    				echo '<div class="q-desc">';
    				the_excerpt();
    				echo '</div>';
				};

				$speaker_info = get_field('speaker');
				$speaker_name = $speaker_info['name'] ?? '';
				?>
				<?php if($speaker_name): ?>
				<p class="author">with <b><?php echo esc_html($speaker_name); ?></b></p>
				<?php endif; ?>
			</div>
			<div class="meta-event-info">
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M8 2v4"></path>
						<path d="M16 2v4"></path>
						<rect width="18" height="18" x="3" y="4" rx="2"></rect>
						<path d="M3 10h18"></path>
					</svg>
					<div>
						<p>Date</p>
						<span><?php the_field('date');?></span>
					</div>
				</div>
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="12" cy="12" r="10"></circle>
						<polyline points="12 6 12 12 16 14"></polyline>
					</svg>
					<div>
						<p>Duration</p>
						<span><?php the_field('duration');?></span>
					</div>
				</div>
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<rect width="20" height="14" x="2" y="3" rx="2"></rect>
						<line x1="8" x2="16" y1="21" y2="21"></line>
						<line x1="12" x2="12" y1="17" y2="21"></line>
					</svg>
					<div>
						<p>Location</p>
						<span><?php the_field('location');?></span>
					</div>
				</div>
				<div class="meta-item">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<rect width="20" height="14" x="2" y="3" rx="2"></rect>
						<line x1="8" x2="16" y1="21" y2="21"></line>
						<line x1="12" x2="12" y1="17" y2="21"></line>
					</svg>
					<div>
						<p>Category</p>
						<span><?php the_category(' '); ?></span>
					</div>
				</div>
			</div>
			<div class="meta-event-cta">
				<?php if($event_type === 'Upcoming'): ?>
				<a href="#event-lity" data-lity>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="6 3 20 12 6 21 6 3"></polygon>
					</svg>
					<span>Register Now</span>
				</a>
				<?php endif; ?>
				<?php if($event_type !== 'Upcoming'): ?>
				<a href="#video">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="6 3 20 12 6 21 6 3"></polygon>
					</svg>
					<span>Watch Now</span>
				</a>
				<?php endif; ?>
				<!--<a href="#" class="outline">-->
				<!--	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">-->
				<!--		<circle cx="18" cy="5" r="3"></circle>-->
				<!--		<circle cx="6" cy="12" r="3"></circle>-->
				<!--		<circle cx="18" cy="19" r="3"></circle>-->
				<!--		<line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line>-->
				<!--		<line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line>-->
				<!--	</svg>-->
				<!--	<span>Share</span>-->
				<!--</a>-->
			</div>

			<?php if($event_type === 'Upcoming'): ?>
			<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
			<div id="event-lity" class="lity-hide event-info-form">
				<h3>Register for Webinar</h3>
				<p>Enter your details to secure your spot for this exclusive webinar.</p>

				<div class="event-title-info">
					<p><?php the_title(); ?></p>
					<span><?php the_field('date');?></span>
				</div>

				<script>
					hbspt.forms.create({
						portalId: "8737923",
						formId: "e997c951-7e36-46f1-8a56-a5ca618a1583",
						region: "na1"
					});
				</script>
			</div>
			<?php endif; ?>

		</section>
		<section class="qp-single-details col">
			<div class="qp-single-content max-details">

				<?php 
					$video_link = get_field('youtube_embed');
					if($event_type !== 'Upcoming'): 
						if($video_link):
							?>
							<div class="video-wrapper" id="video">
								<iframe src="<?php echo esc_url($video_link); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
							<?php
						else:
							quipli_post_thumbnail();
						endif;
					else:
						quipli_post_thumbnail();
					endif;

				?>

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
			<?php 
				$speaker = get_field('speaker');
				$speaker_name = $speaker['name'] ?? '';
				$speaker_title = $speaker['role'] ?? '';
				$speaker_bio = $speaker['about'] ?? '';
				$speaker_avatar = $speaker['profile_pic']['url'] ?? '';
				$speaker_website = $speaker['speaker_website'] ?? '';
				$speaker_linkedin = $speaker['linkedin_url'] ?? '';

			?>
			<?php if($speaker_name):?>
			<div class="qp-author-info">
				<h3>About the Speaker</h3>
				<div class="speaker-info">
					<div class="speaker-avatar">
						<img src="<?php echo esc_url($speaker_avatar); ?>" alt="<?php echo esc_attr($speaker_name); ?>">
					</div>
					<div class="speaker-content">
						<h4><?php echo esc_html($speaker_name); ?></h4>
						<span><?php echo esc_html($speaker_title); ?></span>
						<p><?php echo $speaker_bio; ?></p>
						<?php if($speaker_website || $speaker_linkedin):?>
						<div class="speaker-links">
						    <?php if($speaker_website):?>
							<a href="<?php echo esc_url($speaker_website); ?>" class="website" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<circle cx="12" cy="12" r="10"></circle>
									<path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
									<path d="M2 12h20"></path>
								</svg>
								<span>Speaker Website</span>
							</a>
							<?php endif ;?>
							<?php if($speaker_linkedin):?>
							<a href="<?php echo esc_url($speaker_linkedin); ?>" class="linkedin" target="_blank" rel="noopener">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
									<rect width="4" height="12" x="2" y="9"></rect>
									<circle cx="4" cy="4" r="2"></circle>
								</svg>
								<span>LinkedIn</span>
							</a>
							<?php endif ;?>
						</div>
						<?php endif ;?>
					</div>
				</div>
			</div>
			<?php endif ;?>
		</section>
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
		'post_type' => 'event',
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
							<h3>Related Events</h3>
							<span>More events to help grow your rental business</span>
						</div>
						<a href="<?php echo esc_url(home_url('/events')); ?>" class="view-all">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
								<path d="M5 12h14" />
								<path d="m12 5 7 7-7 7" />
							</svg>
							<span>View all events</span>
						</a>
					</div>
					<div class="qp-related-posts-blocks">
						<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
							<div class="related-posts-link">
								<?php if (has_post_thumbnail()) : ?>

									<?php
										$terms = get_the_terms( get_the_ID(), 'event-type' );
										$event_type = $terms ? $terms[0]->name : '';
										if ($event_type) {
											echo '<span class="event-type ' . esc_attr(strtolower($event_type)) . '">' . esc_html($event_type) . '</span>';
										}
									?>
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
									$speaker_info = get_field('speaker');
        							$speaker_name = $speaker_info['name'] ?? '';
									?>
									<h4 class="related-post-title">
										<?php the_title(); ?>
									</h4>
									<p>with <?php echo esc_html($speaker_name); ?></p>
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