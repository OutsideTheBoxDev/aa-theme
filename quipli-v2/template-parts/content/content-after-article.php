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
get_template_part('template-parts/content/random-author');

$current_post_id = get_the_ID();
$categories = get_the_category($current_post_id);

// Check if there are any categories assigned to the current post
if ($categories) {
    $category_ids = array();
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }

    // Query related posts
    $args = array(
        'post__not_in' => array($current_post_id),
        'posts_per_page' => 3, // Number of related posts to display
        'category__in' => $category_ids,
        'orderby' => 'rand', // Randomize the order of related posts
    );

    $related_query = new WP_Query($args);

    // Check if there are any related posts
    if ($related_query->have_posts()) {
?>

        <section>
            <div class="max-container">
                <div class="qp-related-posts">
                    <h3>Related posts</h3>
                    <div class="qp-related-posts-blocks">
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <div class="related-posts-link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="qp-featured-img">
                                        <?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?>
                                    </a>
                                <?php endif; ?>
                                <a rel="bookmark" href="<?php the_permalink(); ?>" class="qp-related-title">
                                    <h4 class="related-post-title">
                                        <?php the_title(); ?>
                                    </h4>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    }

    // Restore original post data
    wp_reset_postdata();
}
?>