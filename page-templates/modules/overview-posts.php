<?php
/**
 * Overview Posts Module
 * Used in overview pages for custom post types
 * 
 * @package Quipli
 */

$post_type = $args['post_type'] ?? get_query_var('post_type') ?? 'post';
$paged = get_query_var('paged') ?: get_query_var('page') ?: 1;
$search_query = get_query_var('s') ?: '';

$args = [
    'post_type' => $post_type,
    'paged' => $paged,
    's' => $search_query,
    'posts_per_page' => 9,
    'orderby' => 'publish_date',
    'order' => 'DESC'
];

if ( $post_type === 'podcast' ) {
    $args['meta_key'] = 'date'; 
    $args['orderby']  = 'meta_value';
    $args['order']    = 'DESC';
    $args['meta_type'] = 'DATE'; 
}

$the_query = new WP_Query($args);
?>
<section class="overview-posts">
    <div class="max-container">
        <?php if ($the_query->have_posts()) : ?>
            <div class="posts-grid">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php get_template_part('page-templates/modules/content', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $the_query->max_num_pages,
                    'current' => $paged,
                    'format' => '?paged=%#%',
                    'prev_text' => __('« Previous'),
                    'next_text' => __('Next »'),
                ));
                ?>
            </div>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>