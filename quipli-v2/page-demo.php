<?php
/*
Template Name: Book a Demo
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main">
	<!-- 
	<section class="page-hero">
		<div class="max-container">
			<div class="page-heading">
				<h1>Book a demo with Quipli</h1>
			</div>
			<div class="demo-form">
				<div data-tf-live="01HWDJ211WF1K2773ZFMJMZ0VN"></div>
			</div>
		</div>
	</section>
	-->
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-b-inwards">
				<div class="page-heading">
					<h1 class="qp-highlighted-text">
						See how Quipli can transform your rental business
					</h1>
					<div class="qp-action-video">
						<a target="_blank" href="https://www.youtube.com/watch?v=S4rT2BcWOZI" data-lity>
							<img src="<?php echo get_template_directory_uri() . '/assets/img/action.png' ?>" alt="Want to see Quipli in action">
						</a>
					</div>
					<a class="q-btn q-btn--xl" style="margin-top:40px;" href="<?php echo home_url(); ?>/book-a-demo" title="Book a Demo">Book a Demo</a>
				</div>
				<?php get_template_part('template-parts/solutions/ratings-light'); ?>

			</div>
		</div>
	</section>
	<?php
		get_template_part('template-parts/rental-partners');
		get_template_part('template-parts/reviews'); 
	?>
</main>

<?php
get_sidebar();
get_footer();
