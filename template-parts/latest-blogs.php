<?php
$home_posts_ids = array(5668, 7018, 9551);
$latest_posts_query = array(
    'post_type' => 'post',
    'orderby' => array('date' => 'DESC'),
    'posts_per_page' => 3
);
if (is_front_page()) {
    // $latest_posts_query['post__in'] = $home_posts_ids;
}
$latest_posts = new WP_Query($latest_posts_query);
?>

<?php if ($latest_posts->have_posts()) : ?>
    <section class="section section--blogs">
        <div class="qp blogs">
            <div class="max-container">
                <h2>Read our latest blogs and articles</h2>
                <div class="blogs__row">
                    <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                        <div class="blog__item">
                            <div class="qp blog">
                                <div class="blog__image">
                                    <span class="layer">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog__vector.svg" alt="vector" height="107" width="107"></span>
                                    <figure>
                                        <?php
                                        $img_url = get_template_directory_uri() . '/assets/img/default-quipli-placeholder.jpg';
                                        if (get_the_post_thumbnail_url(null, 'large')) {
                                            $img_url = get_the_post_thumbnail_url(null, 'large');
                                        }
                                        ?>
                                        <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
                                    </figure>
                                </div>
                                <article>
                                    <span class="l-tag">Blog</span>
                                    <h4><?php the_title(); ?></h4>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </article>
                                <a class="blog__link" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>