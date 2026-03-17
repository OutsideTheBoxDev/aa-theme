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
	echo '<span class="title">Search</span></div></div>';
	?>
  <?php get_template_part( 'template-parts/search', 'form' ); ?>

  <?php 
 
		$blocks = array(
			'event' => array('title' => 'Events', 'slug' => 'resources/events', 'post_type' => 'events'),
			'blog' => array('title' => 'Blog Posts', 'slug' => 'resources/blog', 'post_type' => 'post'),
			'podcast' => array('title' => 'Podcasts', 'slug' => 'resources/podcasts', 'post_type' => 'podcast'),
			'tool' => array('title' => 'Tools', 'slug' => 'resources/tools', 'post_type' => 'tool'),
			'story' => array('title' => 'Calculators', 'slug' => 'resources/calculators', 'post_type' => 'calculators'),
			'template' => array('title' => 'Templates', 'slug' => 'resources/templates', 'post_type' => 'templates'),
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

  <!-- <section class="search-results">
    <?php
    // Build query args
    $args = array(
		's'              => $search_term,
		'post_status'    => 'publish',
		'paged'          => $current_page,
		'posts_per_page' => 10,
	);

	// Handle category slug
	if ( ! empty( $_GET['category'] ) ) {
	$args['category_name'] = sanitize_title( wp_unslash( $_GET['category'] ) );
	}

	$search_query = new WP_Query( $args );

    if ( $search_query->have_posts() ) :
      while ( $search_query->have_posts() ) : $search_query->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('search-item'); ?>>
          <header class="entry-header">
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="entry-meta">
              <span class="posted-in"><?php the_time( get_option( 'date_format' ) ); ?></span>
              <span class="post-type"><?php echo esc_html( get_post_type() ); ?></span>
            </div>
          </header>

          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile;

      // Pagination
      $big = 999999999; // need an unlikely integer
      $pagination = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => $current_page,
        'total'     => $search_query->max_num_pages,
        'type'      => 'list',
        'mid_size'  => 1,
        'prev_text' => esc_html__( '« Prev', 'quipli' ),
        'next_text' => esc_html__( 'Next »', 'quipli' ),
      ) );

      if ( $pagination ) : ?>
        <nav class="search-pagination" aria-label="<?php esc_attr_e( 'Search Results Pagination', 'quipli' ); ?>">
          <?php echo $pagination; // already escaped by WP functions above ?>
        </nav>
      <?php endif;

    else : ?>
      <div class="no-results">
        <p><?php esc_html_e( 'Sorry, no results matched your search. Try different keywords.', 'quipli' ); ?></p>
      </div>
    <?php
    endif;

    // Reset postdata
    wp_reset_postdata();
    ?>
  </section> -->
</main>

<?php
get_footer();
