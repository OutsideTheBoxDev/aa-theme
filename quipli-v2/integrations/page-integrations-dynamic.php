<?php
/*
Template Name: Integrations - Main Dynamic
Template Post Type: page
 */

get_header('home');
get_template_part('integrations/styles');
?>

<main class="quipli main integrations-page">
	<section class="page-hero dark-bg">
		<div class="max-container">
			<div class="pattern-bg pattern-bottom-right">
				<div class="page-hero-inner">
					<div class="page-hero-contents">
						<div class="page-heading left-aligned">
							<h1 class="qp-highlighted-text">
								<?php
									$hero_group = get_field('hero_section');
									if($hero_group['hero_heading'] == ''){
										$hero_group['hero_heading'] = 'Partners and Integrations';
									}
									echo $hero_group['hero_heading'];
								?>
							 </h1>
							<p style="--max-w: 400px"><?php echo $hero_group['hero_desc'] ?? 'Unlock new growth opportunities with trusted partners and integrations that keep your rental business running smoothly.'; ?></p>
							<?php get_template_part('template-parts/cta-buttons'); ?>
						</div>
						<?php get_template_part('template-parts/solutions/ratings-light'); ?>
					</div>
					<picture class="page-hero-image align-top" style="<?php echo $hero_group['inline_image_styles'] ? $hero_group['inline_image_styles'] : '--img-max-w: 0rem; --img-mr: -2rem; max-width: 500px;';?>">
						<img src="<?php echo $hero_group['hero_image'];?>" alt="<?php get_the_title(); ?>" loading="lazy" decoding="async" width="1200" height="852">
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="max-container">
			<?php 
				$integrations_group = get_field('integrations_list');
				$title = $integrations_group['title'];
				$desc = $integrations_group['description'];
				$list = $integrations_group['integrations'];
			?>
			<div class="sec-heading" style="--max-w: 60rem">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $desc;?></p>
			</div>
			<div class="qp-integrations-grid">
				<?php foreach($list as $integration): ?>
					<div class="qp-ig-block">
						<div class="qp-ig-content">
							<div class="qp-ig-icon">
								<img src="<?php echo $integration['logo']; ?>" alt="<?php echo $integration['title']; ?>">
							</div>
							<p><?php echo $integration['content']; ?></p>
						</div>
						<a href="<?php echo $integration['link']; ?>">Learn more</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section style="margin-bottom: 4rem;">
		<div class="max-container">
			<?php 
				$partners_group = get_field('partners_list');
				$title = $partners_group['title'];
				$desc = $partners_group['description'];
				$partners_list = $partners_group['partners'];
			?>
			<div class="sec-heading">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $desc;?></p>
			</div>
			<div class="qp-integrations-grid">
				<?php foreach($partners_list as $partner): ?>
					<div class="qp-ig-block">
						<div class="qp-ig-content">
							<div class="qp-ig-icon">
								<img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['title']; ?>">
							</div>
							<p>
								<?php echo $partner['content']; ?>
							</p>
						</div>
						<a href="<?php echo $partner['link']; ?>">Learn more</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

</main>

<?php
get_sidebar();
get_footer();
