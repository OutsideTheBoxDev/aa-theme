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
<section>
    <div class="max-container">
        <div class="qp-article-author-block">
            <?php
            $author_id = get_the_author_meta('ID');
            $author_name = get_the_author_meta('display_name');
            $author_description = get_the_author_meta('description');
            $author_image = get_avatar_url($author_id, array('size' => 100));
            $current_post_id = get_the_ID();
            ?>
            <div class="qp-artilce-info-box qp-article-author-info">
                <h4>About the author</h4>
                <div class="qp-author-title">
                    <img src="<?php echo $author_image; ?>" alt="<?php echo $author_name; ?>" />
                    <span><?php echo $author_name; ?></span>
                </div>
                <p>
                    <?php echo $author_description; ?>
                </p>
            </div>
            <div class="qp-artilce-info-box qp-article-author-posts">
                <h4>Posts from this author</h4>
                <?php
                $authors_posts = get_posts(array('author' => $author_id, 'post__not_in' => array($current_post_id), 'posts_per_page' => 2));
                ?>
                <ul class="qp-author-posts">
                    <?php
                    foreach ($authors_posts as $a_post) { ?>
                        <li>
                            <div class="p-title">
                                <div class="qp-author-title">
                                    <img src="<?php echo $author_image; ?>" alt="<?php echo $author_name; ?>" />
                                    <span><?php echo $author_name; ?></span>
                                </div>
                            <?php
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($a_post->ID), 'medium');
                            echo '<a href="' . get_permalink($a_post->ID) . '">' . apply_filters('the_title', $a_post->post_title, $a_post->ID) . '</a>';
                            echo '</div><img src="' . esc_url($image[0]) . '"/></li>';
                        } ?>
                </ul>

                <h4>Share with the world</h4>
                <ul class="qp-share-block">
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7988 13.5754V20.4706H9.6314V13.5754H7V10.7795H9.6314V9.76227C9.6314 5.98573 11.209 4 14.547 4C15.5703 4 15.8261 4.16446 16.3865 4.29847V7.06387C15.7591 6.95423 15.5825 6.89332 14.9307 6.89332C14.1572 6.89332 13.743 7.1126 13.3653 7.54507C12.9876 7.97755 12.7988 8.72677 12.7988 9.79882V10.7856H16.3865L15.4241 13.5814H12.7988V13.5754Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 17.0942C5.7414 17.1922 7.26417 16.7851 8.74926 15.7071C7.2491 15.4508 6.20879 14.7648 5.6434 13.3475C6.08063 13.2872 6.4651 13.4003 6.91741 13.2194C5.43986 12.5711 4.48247 11.5986 4.44477 9.91752C4.91216 9.95521 5.26648 10.2643 5.82432 10.2191C4.46739 8.89228 4.05277 7.44488 4.90462 5.68841C6.32186 7.31673 7.98034 8.42489 10.0082 8.94505C10.1213 8.9752 10.2268 9.00536 10.3399 9.02797C10.86 9.14859 11.4782 9.4049 11.7948 9.3672C12.3376 9.29936 11.7948 8.67366 11.9305 7.8595C12.3602 5.32656 15.1495 4.17317 17.215 5.65826C17.8181 6.09549 18.293 6.08795 18.8886 5.8241C19.1976 5.68841 19.5143 5.55272 19.8836 5.39441C19.8007 6.11811 19.2429 6.51765 18.7981 7.05288C19.3032 7.16596 19.7103 7.02273 20.1776 6.87196C20.0193 7.39212 19.6273 7.68612 19.273 7.97258C18.9036 8.26658 18.7604 8.57566 18.7453 9.05813C18.5192 16.3629 10.2193 22.0093 4.54278 17.5163C3.99247 17.0791 4.5277 17.5163 4 17.0942Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.71896 7.41602H4.27734V18.3911H7.71896V7.41602Z" fill="currentColor" />
                                <path d="M17.029 7.17823C16.9021 7.16237 16.7673 7.15444 16.6325 7.14651C14.7055 7.06721 13.6191 8.20913 13.2385 8.70079C13.1354 8.8356 13.0878 8.9149 13.0878 8.9149V7.44785H9.79688V18.423H13.0878H13.2385C13.2385 17.3048 13.2385 16.1946 13.2385 15.0765C13.2385 14.4738 13.2385 13.8711 13.2385 13.2685C13.2385 12.523 13.183 11.73 13.5557 11.0481C13.8729 10.4771 14.4438 10.1916 15.0862 10.1916C16.9894 10.1916 17.029 11.9124 17.029 12.071C17.029 12.079 17.029 12.0869 17.029 12.0869V18.4705H20.4706V11.3098C20.4706 8.85939 19.2256 7.41613 17.029 7.17823Z" fill="currentColor" />
                                <path d="M5.99836 5.99672C7.10202 5.99672 7.99672 5.10202 7.99672 3.99836C7.99672 2.8947 7.10202 2 5.99836 2C4.89469 2 4 2.8947 4 3.99836C4 5.10202 4.89469 5.99672 5.99836 5.99672Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="6" width="16" height="11" stroke="currentColor" stroke-width="2" />
                                <path d="M4 6L12 12L20 6" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
// Get the current post ID
$current_post_id = get_the_ID();

// Get the categories of the current post
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

                                <?php the_category(', '); ?>
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