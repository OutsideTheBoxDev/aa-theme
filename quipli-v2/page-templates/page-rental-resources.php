<?php

/**
 * The blog page template file
 * Template Name: Overview - Rental Resources
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header('home'); 
$search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
$description = get_field('description');
$placeholder = get_field('placeholder') ?? 'Search...';
?>

<main class="quipli main less-spacing">
    <section class="custom-search-header">
        <div class="max-container">
            <div class="overview-header">
                <h1 class="overview-header__title"><?php the_title(); ?></h1>
                <p class="overview-desc"><?php echo esc_html($description); ?></p>

                <div class="search-field">
                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
                        <div class="search-box">
                            <input type="text" name="s" value="<?php echo esc_attr($search_query); ?>" placeholder="<?php echo esc_attr($placeholder); ?>" />
                            <button type="submit">Search</button>
                        </div>
                    </form>
                    <?php
                    $terms = get_terms( [
                        'taxonomy' => 'category',
                        'hide_empty' => true,
                        'number'     => 4,
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'exclude'    => [1],
                    ]);
                    if ( !empty($terms) && !is_wp_error($terms) ): ?>
                        <div class="popular-topics">
                            <span>Popular:</span>
                            <?php foreach ( $terms as $term ): ?>
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                    <?php echo esc_html( $term->name ); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php 
        $recent_post_types = get_post_types(array( 'public' => true ), 'names');
        unset($recent_post_types['page']);
        $blocks = array(
			'recent' => array('title' => 'Most Recent', 'slug' => '', 'post_type' => $recent_post_types),
			'event' => array('title' => 'Events', 'slug' => 'resources/events/', 'post_type' => 'events'),
			'blog' => array('title' => 'Blog Posts', 'slug' => 'resources/blog/', 'post_type' => 'post'),
			'podcast' => array('title' => 'Podcasts', 'slug' => 'resources/podcasts/', 'post_type' => 'podcast'),
// 			'tool' => array('title' => 'Tools', 'slug' => 'resources/tools', 'post_type' => 'tool'),
            'calculator' => array('title' => 'Calculators', 'slug' => 'resources/calculators/', 'post_type' => 'calculators'),
            'template' => array('title' => 'Templates', 'slug' => 'resources/templates/', 'post_type' => 'templates'),
// 			'story' => array('title' => 'Success Stories', 'slug' => 'resources/success-stories/', 'post_type' => 'success-stories'),
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

<?php get_footer(); ?>