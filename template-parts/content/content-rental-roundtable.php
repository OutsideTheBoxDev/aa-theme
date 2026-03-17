<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quipli
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('qp-blog-single-article blog-article roundtable-article'); ?>>
	<div class="max-container">
		<header class="entry-header">
			<?php
			the_title('<h1 class="entry-title q-title">', '</h1>');
			?>
			<div class="qp-entry-meta entry-meta">
				<div class="qp-meta-info">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
					</svg>
					<span><?php the_field('rt_date'); ?></span>
				</div>
				<div class="qp-meta-info">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<span><?php the_field('rt_time'); ?></span>
				</div>
				<div class="qp-meta-info">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
					</svg>
					<span>
						<?php
						$loc = get_field('rt_location');
						if ($loc == "via Zoom") { ?>
							<em>via</em> <img width="auto" height="auto" style="width:auto;" class="zoom-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/zoom-logo.svg" alt="Zoom" />
						<?php } else {
							echo $loc;
						}
						?>
					</span>
				</div>
			</div>
		</header><!-- .entry-header -->


		<div class="entry-content max-lg">
			<div class="qp-roundtable-picture">
				<?php
				$embed = get_field('tr_youtube_embed');
				$reg_embed = get_field('rt_register_embed');
				if ($embed) { ?>
					<div class="qp-video-container">
						<?php echo $embed; ?>
					</div>
				<?php } else if ((has_post_thumbnail(get_the_ID())) || $reg_embed) { ?>
					<?php if ($reg_embed) { ?>
						<div class="qp-reg-from">
							<div class="qp-reg-content">
								<h3>Free Live Webinar</h3>
								<?php $desc = get_field('rt_description');
								if ($desc) { ?>
									<p>
										<?php echo $desc; ?>
									</p>
								<?php } ?>
								<div class="qp-attendees single-col">
									<?php
									$speaker = get_field('tr_speaker');
									if ($speaker['picture']) {
										$imgId = $speaker['picture'];
									?>
										<div class="qp-attendee">
											<figure>
												<?php echo wp_get_attachment_image($imgId); ?>
											</figure>
											<div class="info">
												<p><?php echo $speaker['name']; ?></p>
												<span><?php echo $speaker['designation']; ?></span>
											</div>
										</div>
									<?php } ?>

									<?php
									$host = get_field('tr_host');
									if ($host) {
										$imgId = 11772;
										if ($host['picture']['ID']) {
											$imgId = $host['picture']['ID'];
										}
									?>
										<div class="qp-attendee">
											<figure>
												<?php echo wp_get_attachment_image($imgId); ?>
											</figure>
											<div class="info">
												<p><?php echo $host['name']; ?></p>
												<span><?php echo $host['designation']; ?></span>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="qp-form">
								<?php echo $reg_embed; ?>
							</div>
						</div>
					<?php } else { ?>
						<div class="qp-featured-thumbnail">
							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>">
						</div>
					<?php } ?>
				<?php } ?>
				<span class="video-pattern"></span>
				<?php
				$url = get_field('rt_register_url');
				if ($url) { ?>
					<a class="register-link" href="<?php echo $url; ?>" target="_blank" title="Roundtable Registration">Register now</a>
				<?php }
				?>
			</div>
			<?php if (!$reg_embed) { ?>
				<div class="qp-webinar-info">
					<?php
					$desc = get_field('rt_description');
					if ($desc) { ?>
						<p class="webinar-info">
							<?php echo $desc; ?>
						</p>
					<?php } ?>
					<div class="qp-attendees">
						<?php
						$speaker = get_field('tr_speaker');
						if ($speaker['picture']) {
							$imgId = $speaker['picture'];
						?>
							<div class="qp-attendee">
								<figure>
									<?php echo wp_get_attachment_image($imgId); ?>
								</figure>
								<div class="info">
									<p><?php echo $speaker['name']; ?></p>
									<span><?php echo $speaker['designation']; ?></span>
								</div>
							</div>
						<?php } ?>

						<?php
						$host = get_field('tr_host');
						if ($host) {
							$imgId = 11772;
							if ($host['picture']['ID']) {
								$imgId = $host['picture']['ID'];
							}
						?>
							<div class="qp-attendee">
								<figure>
									<?php echo wp_get_attachment_image($imgId); ?>
								</figure>
								<div class="info">
									<p><?php echo $host['name']; ?></p>
									<span><?php echo $host['designation']; ?></span>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>

			<div class="qp-wp-content">
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
			</div>

			<?php
			$speaker = get_field('tr_speaker');
			if ($speaker['picture']) {
				$imgId = $speaker['picture'];
			?>
				<div class="qp-speakers-info">
					<h2>Our Speaker</h2>

					<div class="qp-speaker">
						<figure>
							<?php echo wp_get_attachment_image($imgId, 'full'); ?>
							<figcaption>
								<p><?php echo $speaker['name']; ?></p>
								<span><?php echo $speaker['designation']; ?></span>
							</figcaption>
						</figure>
						<div class="info">
							<?php
							$paragraphs = array_filter(preg_replace('/<p>(?:\s|&nbsp;)*?<\/p>/i', '', explode("\n", $speaker['bio'])));
							foreach ($paragraphs as $p) {
								if (strlen($p) > 1) {
									echo '<p>' . $p . '</p>';
								}
							}
							?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
</article>

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

<?php
$date = get_the_date('Y-m-d H:i:s');
$current_post_id = get_the_ID();
// Query related posts
$args = array(
	'post__not_in' => array($current_post_id),
	'posts_per_page' => 3, // Number of related posts to display
	'post_type' => "rental-roundtable",
	'date_query' => array(
        array(
            'before' => $date
        ),
    )
);

$related_query = new WP_Query($args);

// Check if there are any related posts
if ($related_query->have_posts()) {
?>

	<section>
		<div class="max-container">
			<div class="qp-related-posts">
				<h3>Previous Roundtables</h3>
				<div class="qp-related-posts-blocks">
					<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
						<div class="related-posts-link">
							<?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>" class="qp-featured-img roundtable-img">
									<?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?>
								</a>
							<?php endif; ?>
							<a rel="bookmark" href="<?php the_permalink(); ?>" class="qp-related-title">
								<h4 class="related-post-title">
									<?php the_title(); ?>
								</h4>
								<div class="rs-meta-entry">
									<div class="qp-meta-info">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
										</svg>
										<span><?php the_field('rt_date'); ?></span>
									</div>
									<div class="qp-meta-info">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
										</svg>
										<span><?php the_field('rt_time'); ?></span>
									</div>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php
	// Restore original post data
	wp_reset_postdata();
}
?>
<?php get_template_part('template-parts/rentals-cta'); ?>