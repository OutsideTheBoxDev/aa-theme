<?php
/*
Template Name: Pricing Page
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main use-case-page">
	
	<section class="page-hero">
		<div class="max-container">
			<div class="page-heading">
				<h1><?php echo wp_kses_post(get_field('pricing_headline_active')); ?></h1>
                <p><?php echo wp_kses_post(get_field('pricing_subheadline_active')); ?></p>
			</div>
			
			<div class="qp-pricing-block">
						<div class="pricing-info">
							<div class="pricing-data">
								<p>6,000<small>USD</small></p>
								<span>Per year, per location *</span>
							</div>
							<ul class="pricing-usp">
								<li>
									<span>Unlimited users</span>
								</li>
								<li>
									<span>Unlimited inventory</span>
								</li>
								<li>
									<span>Fast customer support</span>
								</li>
							</ul>
							<a href="/book-a-demo" class="q-btn q-btn--xl q-btn--wte" title="Get started">Get started</a>
							<div class="qp-pricing-features-block">
								<ul class="pricing-features">
								<li>
									<span>Inventory Management</span>
								</li>
								<li>
									<span>Rental Website</span>
								</li>
								<li>
									<span>Customer Portal</span>
								</li>
								<li>
									<span>Payments &amp; Invoicing</span>
								</li>
							</ul>
							<ul class="pricing-features">
								<li>
									<span>Service &amp; Repair</span>
								</li>
								<li>
									<span>Dispatch</span>
								</li>
								<li>
									<span>Financial &amp; accounting reporting</span>
								</li>
								<li>
									<span>All integrations</span>
								</li>
							</ul>
							</div>
						</div>
						<div class="pricing-footer">
							<p>* Discounts available for multi-location rental operations</p>
						</div>
			</div>
			
								

			<div class="qp-ratings-grid">
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="104" height="24" viewBox="0 0 104 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#capterra" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>4.9/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="84" height="24" viewBox="0 0 84 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#g2-star" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>5/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
				<div class="qp-rating-block">
					<div class="qp-rating-icon">
						<svg width="79" height="24" viewBox="0 0 79 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="#google" />
						</svg>
					</div>
					<div class="qp-rating-info">
						<span>5/5</span>
						<div class="qp-rating-stars">
							<svg width="100" height="15" viewBox="0 0 100 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.92579 1.09041C7.27982 0.0719128 8.72021 0.0719159 9.07424 1.09041L10.0913 4.01643C10.2475 4.46573 10.6668 4.77037 11.1424 4.78006L14.2395 4.84318C15.3175 4.86515 15.7626 6.23504 14.9034 6.88648L12.4349 8.75796C12.0558 9.04534 11.8957 9.53826 12.0334 9.99355L12.9304 12.9586C13.2427 13.9906 12.0774 14.8373 11.1923 14.2214L8.6496 12.452C8.25916 12.1803 7.74087 12.1803 7.35043 12.452L4.80772 14.2214C3.92264 14.8373 2.75734 13.9906 3.06958 12.9586L3.96662 9.99355C4.10436 9.53826 3.9442 9.04534 3.56515 8.75796L1.09664 6.88648C0.237393 6.23504 0.6825 4.86515 1.76055 4.84318L4.85765 4.78006C5.33323 4.77037 5.75253 4.46573 5.90871 4.01643L6.92579 1.09041Z" fill="currentColor" />
								<path d="M27.9258 1.09041C28.2798 0.0719128 29.7202 0.0719159 30.0742 1.09041L31.0913 4.01643C31.2475 4.46573 31.6668 4.77037 32.1424 4.78006L35.2395 4.84318C36.3175 4.86515 36.7626 6.23504 35.9034 6.88648L33.4349 8.75796C33.0558 9.04534 32.8957 9.53826 33.0334 9.99355L33.9304 12.9586C34.2427 13.9906 33.0774 14.8373 32.1923 14.2214L29.6496 12.452C29.2592 12.1803 28.7409 12.1803 28.3504 12.452L25.8077 14.2214C24.9226 14.8373 23.7573 13.9906 24.0696 12.9586L24.9666 9.99355C25.1044 9.53826 24.9442 9.04534 24.5651 8.75796L22.0966 6.88648C21.2374 6.23504 21.6825 4.86515 22.7605 4.84318L25.8577 4.78006C26.3332 4.77037 26.7525 4.46573 26.9087 4.01643L27.9258 1.09041Z" fill="currentColor" />
								<path d="M69.9258 1.09041C70.2798 0.0719128 71.7202 0.0719159 72.0742 1.09041L73.0913 4.01643C73.2475 4.46573 73.6668 4.77037 74.1424 4.78006L77.2395 4.84318C78.3175 4.86515 78.7626 6.23504 77.9034 6.88648L75.4349 8.75796C75.0558 9.04534 74.8957 9.53826 75.0334 9.99355L75.9305 12.9586C76.2427 13.9906 75.0774 14.8373 74.1923 14.2214L71.6496 12.452C71.2592 12.1803 70.7409 12.1803 70.3504 12.452L67.8077 14.2214C66.9226 14.8373 65.7573 13.9906 66.0696 12.9586L66.9666 9.99355C67.1044 9.53826 66.9442 9.04534 66.5651 8.75796L64.0966 6.88648C63.2374 6.23504 63.6825 4.86515 64.7606 4.84318L67.8577 4.78006C68.3332 4.77037 68.7525 4.46573 68.9087 4.01643L69.9258 1.09041Z" fill="currentColor" />
								<path d="M48.9258 1.09041C49.2798 0.0719128 50.7202 0.0719159 51.0742 1.09041L52.0913 4.01643C52.2475 4.46573 52.6668 4.77037 53.1424 4.78006L56.2395 4.84318C57.3175 4.86515 57.7626 6.23504 56.9034 6.88648L54.4349 8.75796C54.0558 9.04534 53.8957 9.53826 54.0334 9.99355L54.9304 12.9586C55.2427 13.9906 54.0774 14.8373 53.1923 14.2214L50.6496 12.452C50.2592 12.1803 49.7409 12.1803 49.3504 12.452L46.8077 14.2214C45.9226 14.8373 44.7573 13.9906 45.0696 12.9586L45.9666 9.99355C46.1044 9.53826 45.9442 9.04534 45.5652 8.75796L43.0966 6.88648C42.2374 6.23504 42.6825 4.86515 43.7605 4.84318L46.8577 4.78006C47.3332 4.77037 47.7525 4.46573 47.9087 4.01643L48.9258 1.09041Z" fill="currentColor" />
								<path d="M90.9258 1.09041C91.2798 0.0719128 92.7202 0.0719159 93.0742 1.09041L94.0913 4.01643C94.2475 4.46573 94.6668 4.77037 95.1424 4.78006L98.2395 4.84318C99.3175 4.86515 99.7626 6.23504 98.9034 6.88648L96.4349 8.75796C96.0558 9.04534 95.8957 9.53826 96.0334 9.99355L96.9305 12.9586C97.2427 13.9906 96.0774 14.8373 95.1923 14.2214L92.6496 12.452C92.2592 12.1803 91.7409 12.1803 91.3504 12.452L88.8077 14.2214C87.9226 14.8373 86.7573 13.9906 87.0696 12.9586L87.9666 9.99355C88.1044 9.53826 87.9442 9.04534 87.5651 8.75796L85.0966 6.88648C84.2374 6.23504 84.6825 4.86515 85.7606 4.84318L88.8577 4.78006C89.3332 4.77037 89.7525 4.46573 89.9087 4.01643L90.9258 1.09041Z" fill="currentColor" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php

	get_template_part('template-parts/rental-partners');
	
	get_template_part('template-parts/reviews'); ?>
	
	<section class="section section--how section-action">
		<div class="qp how">
			<div class="max-container">
				<div class="how__wrap">
					<div class="qp-action-header">
						<h2>Want to see Quipli in action?</h2>
						<p>Watch a brief demo of our platform below 👇</p>
					</div>
					<div class="qp-action-video">
						<a target="_blank" href="<?php echo esc_attr(get_field('pricing_video_link') );?>" data-lity>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/action.png' ?>" alt="Want to see Quipli in action">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="section section--faq">
		<div class="qp faq">
			<div class="container">
				<div class="faq__row">
					<div class="faq__header">
						<h2>
						<?php 
							$section_group = get_field('faq_section');
							echo $section_group['title']; 
						?>
						</h2>
					</div>
					<div class="faq__col-accordion">
						<div class="faq__accordion accordion">
							<div class="accordion__wrap no-more">
								<?php 
									$faq_lists = $section_group['faqs_list'];
									$faq_count = $faq_lists ? count($faq_lists) + 1 : 0;
									$current_faq = 1;

									if( $faq_count > 0 ):
										while($current_faq <= $faq_count):
											$faq_id = 'faq_group_' . $current_faq;
											$faq_title = $faq_lists[$faq_id]['title'];
											$faq_content = $faq_lists[$faq_id]['content'];
											if($faq_title && $faq_content):
								?>
									<div class="accordion__item">
										<div class="accordion__title">
											<button type="button" aria-expanded="<?php echo $current_faq == 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo $faq_id; ?>">
												<?php echo $faq_title; ?>
											</button>
										</div>
										<div class="accordion__content <?php echo $current_faq == 1 ? 'is__open' : ''; ?>" aria-hidden="false" id="<?php echo $faq_id; ?>">
											<p>
												<?php echo $faq_content; ?>
											</p>
										</div>
									</div>
								<?php
											endif;
											$current_faq = $current_faq + 1;
										endwhile;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	get_template_part('template-parts/rentals-cta');
	?>
	
	<style>
		.qp-pricing-block {
			background: var(--q-secondary);
        	color: #fff;
			max-width: 52.875rem;
			margin: auto;
			border-radius: 1.5rem;
			padding: 1.8rem 2.4rem;
			display: flex;
			flex-direction: column;
			justify-content: center;
			gap: 2.4rem;
		}
		.qp-pricing-block .pricing-usp {
			display: flex;
			justify-content: space-between;
			font-weight: 600;
			font-size: 20px;
			line-height: 30px;
			
			@media (max-width: 580px) {
				flex-direction: column;
				gap: 20px;
			}
		}
		.qp-pricing-block .pricing-usp li {
			display: flex;
			align-items: center;
			gap: 20px;
		}
		.qp-pricing-block .pricing-usp li:before {
			content: "";
			display: inline-block;
			width: 24px;
			height: 24px;
			background-image: url(https://quipli.com/wp-content/themes/quipli-v2/assets/img/yellow-circle-checkbox.svg);
			background-repeat: no-repeat;
			background-size: contain;
		}
		.qp-pricing-block .pricing-info {
			display: flex;
    		flex-direction: column;
			gap: 2.4rem;
		}
		.qp-pricing-block .pricing-data {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			gap: 8px;
		}
		.qp-pricing-block .q-btn{
			background-color: var(--q-primary);
            color: var(--q-secondary);
			text-align: center;
		}
		.qp-pricing-block .q-btn::after {
			background-image: url(https://quipli.com/wp-content/themes/quipli-v2/assets/img/arrow-right.svg);
		}
		.qp-pricing-block .q-btn:hover{
			background-color: var(--q-white);
		}
		.qp-pricing-block .pricing-data p {
			font-size: 2.5rem;
			font-weight: 500;
			font-family: var(--q-font-display);
		}
		.qp-pricing-block .pricing-data p > small {
			display: inline-block;
			font-size: 1.2rem;
			font-weight: 400;
			padding: 0px 6px;
		}
		.qp-pricing-block .pricing-data > span{
			color: #979797;
			font-weight: 500;
			font-size: 18px;
		}
		.qp-pricing-block .pricing-footer{
			color: #b1b1b1;
			font-weight: 400;
			font-size: 16px;
			text-align: center;
		}
		.qp-pricing-features-block {
			display: flex;
			gap: 8rem;
			
			@media (max-width: 768px) {
				gap: 5rem;
			}
			@media (max-width: 580px) {
				flex-direction: column;
				gap: 20px;
			}
		}
		.qp-pricing-features-block .pricing-features li{
			display: flex;
			line-height: 30px;
			
			@media (max-width: 580px) {
			}
		}
		.qp-pricing-features-block > .pricing-features {
			margin: 0;
		}
	</style>
</main>

<?php
get_sidebar();
get_footer();
