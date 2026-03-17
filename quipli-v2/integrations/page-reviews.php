<?php
/*
Template Name: Reviews v2
Template Post Type: page
 */

get_header('home');
get_template_part('integrations/reviews-styles');

?>

<main class="quipli main reviews-main-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom-right">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'];?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<?php if($hero_group['hero_image']): ?>
					<picture class="page-hero-image align-top" style="<?php echo $hero_group['inline_image_styles'] ? $hero_group['inline_image_styles'] : '--img-max-w: 0rem; --img-mr: -8rem; max-width: 440px;';?>">
						<img src="<?php echo $hero_group['hero_image'];?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/home/rentals-titled'); ?>

    <section>
		<div class="max-container">
			<div class="awards-ratings">
				<p>Award-winning software with top ratings for value, support, and ease of use</p>
				<?php $awards = array('getapp.png','capterra.png','spring.png'); ?>
				<div class="awards-imgs">
					<?php foreach($awards as $img): ?>
						<div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/awards/<?php echo $img?>" alt="Award"></div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<div class="max-container">
			<?php 
				$communities_group = get_field('communities');
				$title = $communities_group['title'];
				$desc = $communities_group['description'];
				$list = $communities_group['communities'];
			?>
			<div class="sec-heading" style="--max-w: 60rem">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $desc;?></p>
			</div>
			<div class="qp-integrations-grid" >
				<?php foreach($list as $community): ?>
					<div class="qp-ig-block">
						<div class="qp-ig-content">
							<div class="qp-ig-icon">
								<img src="<?php echo $community['logo']; ?>" alt="Community">
							</div>
							<p><?php echo $community['content']; ?></p>
						</div>
						<?php
							$link = $community['link'];
							if($link) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							Read full story
						</a>
						<?php endif; ?>
						</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/reviews-v2'); ?>

	<section>
		<div class="max-container">
			<?php 
				$videos_group = get_field('videos');
				$title = $videos_group['title'];
				$desc = $videos_group['description'];
				$list = $videos_group['videos'];
			?>
			<div class="sec-heading" style="--max-w: 60rem">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $desc;?></p>
			</div>
			<div class="qp-videos-grid">
				<?php foreach($list as $video): ?>
					<div class="qp-video-block">
						<?php if($video['video_embed']): ?>
							<div class="qp-video-embed">
								<?php echo $video['video_embed']; ?>
							</div>
						<?php endif; ?>
						<p><?php echo $video['content']; ?></p>
						<div class="user">
							<p><?php echo $video['name']; ?></p>
							<span><?php echo $video['company']; ?></span>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="google-reviews-sec">
		<div class="max-container">
			<div class="sec-heading" style="--max-w: 54rem">
				<?php 
					$google_reviews = get_field("google_reviews");
					$heading = $google_reviews['heading'];
				?>
				<h2><?php echo $heading ?? 'Google Reviews'; ?></h2>
			</div>
			<div class="qp-reviews-cards-wrapper google-reviews-cards">
				<div class="qp-reviews-cards">
					<?php if ( $google_reviews && !empty($google_reviews['reviews']) ) : ?>
						<?php foreach ( $google_reviews['reviews'] as $review ) : 
							$review_text  = $review['review'];
							$user_name    = $review['name']; 
						?>
						<div class="qp-review-card-wrap">
							<div class="qp-review-card <?php echo $color; ?>">
								<div class="review__content">
									<div class="review__blockquote">
										<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
										</svg>
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="Google" />
									</div>
									<p><?php echo $review_text; ?></p>
								</div>
								<div class="review__footer">
									<div class="quote-owner">
										<span class="owner-letters">
											<?php 
												$owner_name = explode(" ", $user_name);
												echo strtoupper(substr($owner_name[0], 0, 1) . substr($owner_name[1], 0, 1));
											?>
										</span>
										<div class="owner-details">
											<h4><?php echo $user_name;?></h4>
										</div>
									</div>
									<svg width="124" height="25" viewBox="0 0 124 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.0792 2.69677C11.3827 1.82378 12.6173 1.82378 12.9208 2.69677L14.5987 7.52384C14.7325 7.90896 15.0919 8.17008 15.4996 8.17839L20.6089 8.28251C21.5329 8.30134 21.9144 9.47554 21.1779 10.0339L17.1056 13.1213C16.7807 13.3676 16.6434 13.7901 16.7615 14.1804L18.2413 19.0718C18.509 19.9565 17.5101 20.6821 16.7515 20.1542L12.5568 17.2353C12.2221 17.0024 11.7779 17.0024 11.4432 17.2353L7.24849 20.1542C6.48986 20.6821 5.49102 19.9565 5.75866 19.0718L7.2385 14.1804C7.35657 13.7901 7.21929 13.3676 6.89439 13.1213L2.82206 10.0339C2.08557 9.47554 2.46709 8.30134 3.39113 8.28251L8.50044 8.17839C8.90808 8.17008 9.26748 7.90896 9.40135 7.52385L11.0792 2.69677Z" fill="#FCDA01"/>
										<path d="M36.0792 2.69677C36.3827 1.82378 37.6173 1.82378 37.9208 2.69677L39.5987 7.52384C39.7325 7.90896 40.0919 8.17008 40.4996 8.17839L45.6089 8.28251C46.5329 8.30134 46.9144 9.47554 46.1779 10.0339L42.1056 13.1213C41.7807 13.3676 41.6434 13.7901 41.7615 14.1804L43.2413 19.0718C43.509 19.9565 42.5101 20.6821 41.7515 20.1542L37.5568 17.2353C37.2221 17.0024 36.7779 17.0024 36.4432 17.2353L32.2485 20.1542C31.4899 20.6821 30.491 19.9565 30.7587 19.0718L32.2385 14.1804C32.3566 13.7901 32.2193 13.3676 31.8944 13.1213L27.8221 10.0339C27.0856 9.47554 27.4671 8.30134 28.3911 8.28251L33.5004 8.17839C33.9081 8.17008 34.2675 7.90896 34.4013 7.52385L36.0792 2.69677Z" fill="#FCDA01"/>
										<path d="M61.0792 2.69677C61.3827 1.82378 62.6173 1.82378 62.9208 2.69677L64.5987 7.52384C64.7325 7.90896 65.0919 8.17008 65.4996 8.17839L70.6089 8.28251C71.5329 8.30134 71.9144 9.47554 71.1779 10.0339L67.1056 13.1213C66.7807 13.3676 66.6434 13.7901 66.7615 14.1804L68.2413 19.0718C68.509 19.9565 67.5101 20.6821 66.7515 20.1542L62.5568 17.2353C62.2221 17.0024 61.7779 17.0024 61.4432 17.2353L57.2485 20.1542C56.4899 20.6821 55.491 19.9565 55.7587 19.0718L57.2385 14.1804C57.3566 13.7901 57.2193 13.3676 56.8944 13.1213L52.8221 10.0339C52.0856 9.47554 52.4671 8.30134 53.3911 8.28251L58.5004 8.17839C58.9081 8.17008 59.2675 7.90896 59.4013 7.52385L61.0792 2.69677Z" fill="#FCDA01"/>
										<path d="M86.0792 2.69677C86.3827 1.82378 87.6173 1.82378 87.9208 2.69677L89.5987 7.52384C89.7325 7.90896 90.0919 8.17008 90.4996 8.17839L95.6089 8.28251C96.5329 8.30134 96.9144 9.47554 96.1779 10.0339L92.1056 13.1213C91.7807 13.3676 91.6434 13.7901 91.7615 14.1804L93.2413 19.0718C93.509 19.9565 92.5101 20.6821 91.7515 20.1542L87.5568 17.2353C87.2221 17.0024 86.7779 17.0024 86.4432 17.2353L82.2485 20.1542C81.4899 20.6821 80.491 19.9565 80.7587 19.0718L82.2385 14.1804C82.3566 13.7901 82.2193 13.3676 81.8944 13.1213L77.8221 10.0339C77.0856 9.47554 77.4671 8.30134 78.3911 8.28251L83.5004 8.17839C83.9081 8.17008 84.2675 7.90896 84.4013 7.52385L86.0792 2.69677Z" fill="#FCDA01"/>
										<path d="M111.079 2.69677C111.383 1.82378 112.617 1.82378 112.921 2.69677L114.599 7.52384C114.733 7.90896 115.092 8.17008 115.5 8.17839L120.609 8.28251C121.533 8.30134 121.914 9.47554 121.178 10.0339L117.106 13.1213C116.781 13.3676 116.643 13.7901 116.761 14.1804L118.241 19.0718C118.509 19.9565 117.51 20.6821 116.752 20.1542L112.557 17.2353C112.222 17.0024 111.778 17.0024 111.443 17.2353L107.248 20.1542C106.49 20.6821 105.491 19.9565 105.759 19.0718L107.239 14.1804C107.357 13.7901 107.219 13.3676 106.894 13.1213L102.822 10.0339C102.086 9.47554 102.467 8.30134 103.391 8.28251L108.5 8.17839C108.908 8.17008 109.267 7.90896 109.401 7.52385L111.079 2.69677Z" fill="#FCDA01"/>
									</svg>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<div class="qp-google-reviews-arrows">
					<button class="google-review-prev">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.76672 12.0011L17.3828 2.38496L15.615 0.617188L4.23112 12.0011L15.615 23.385L17.3828 21.6172L7.76672 12.0011Z" fill="currentColor" />
						</svg>
					</button>
					<button class="google-review-next">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2333 12.0011L6.61719 2.38496L8.38496 0.617188L19.7689 12.0011L8.38496 23.385L6.61719 21.6172L16.2333 12.0011Z" fill="currentColor" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/rentals-cta'); ?>

</main>
<?php
get_sidebar();
get_footer();
