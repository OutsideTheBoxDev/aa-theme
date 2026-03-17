<?php
/*
Template Name: Thank You
Template Post Type: page
 */

get_header('home');
?>

<main class="quipli main">
	<section class="page-hero">
		<div class="max-container">
			<div class="page-heading">
				<h1>We've received your inquiry!</h1>
				<p>Thank you for contacting us. Secure your call now by booking a <b>Discovery Call</b>
				</p>
			</div>
			<div class="demo-form calendly-from">
            
				<!-- Calendly inline widget begin -->
				<!-- <div class="calendly-inline-widget" data-url="https://calendly.com/quipi-sales/quipli-discovery-call" style="min-width:320px;height:630px;"></div>
				<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script> -->
				<!-- Calendly inline widget end -->
			
            <!-- Start of Meetings Embed Script -->
            <div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/court-kasten/inbound-demo-round-robin?embed=true" style="min-width:320px;height:630px;"></div>
            <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
            <!-- End of Meetings Embed Script -->

			</div>
		</div>
	</section>
	<?php
	get_template_part('template-parts/reviews');
	get_template_part('template-parts/latest-blogs');
	?>
</main>

<?php
get_sidebar();
get_footer();