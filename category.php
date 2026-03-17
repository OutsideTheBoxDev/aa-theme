<?php
/**
 * Template Name: Custom Search Page
 * Description: A custom search results page with post-type filter and pagination.
 */

get_header('home');

// Get sanitized query and post_type from GET
$search_term = isset($_GET['s']) ? sanitize_text_field(wp_unslash($_GET['s'])) : '';
$post_type   = isset($_GET['post_type']) ? sanitize_key(wp_unslash($_GET['post_type'])) : 'any';
$current_page = max(1, get_query_var('paged', 1));

?>

<main class="quipli main less-spacing">
	<?php
	echo '<div class="breadcrumbs">';
	echo '<div class="max-container">';
	echo '<a href="' . home_url() . '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-4 h-4 mr-1"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg> Home</a><span class="separator">›</span>';
	echo '<a href="' . home_url() . '/resources/">Rental Resources</a><span class="separator">›</span>';
	echo '<span>Category</span></div></div>';
	?>
  <?php get_template_part( 'template-parts/search', 'form' ); ?>

  <?php 
 
		$blocks = array(
			'event' => array('title' => 'Events', 'slug' => 'resources/events', 'post_type' => 'events'),
			'blog' => array('title' => 'Blog Posts', 'slug' => 'resources/blog', 'post_type' => 'post'),
			'podcast' => array('title' => 'Podcasts', 'slug' => 'resources/podcasts', 'post_type' => 'podcast'),
			'tool' => array('title' => 'Tools', 'slug' => 'resources/tools', 'post_type' => 'tool'),
			'story' => array('title' => 'Success Stories', 'slug' => 'resources/success-stories', 'post_type' => 'success-stories'),
		);

		// Loop through each block and include the corresponding template part
		foreach ( $blocks as $block ) {
			get_template_part('page-templates/overview/post-block', null, array(
				'post_type' => $block['post_type'],
				'title' => $block['title'],
				'slug' => $block['slug']
			));
		}
    ?>
</main>

<?php
get_footer();
