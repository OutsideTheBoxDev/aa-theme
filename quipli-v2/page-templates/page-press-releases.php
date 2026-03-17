<?php
/**
 * Template Name: Press Releases
 * Template Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quipli
 */

get_header('home'); ?>

<main class="quipli main less-spacing">

    <!-- Hero Header -->
    <section class="page-hero dark-bg">
        <div class="max-container">
            <div class="pattern-bg press-releases-hero">
                <div class="page-heading">
                    <h1>Press Releases</h1>
                    <p>Stay up to date with the latest Quipli news.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts Grid -->
    <section class="overview-posts">
        <div class="max-container">
            <h2 class="press-releases-section-title">Latest News</h2>

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $pr_args = array(
                'post_type'      => 'press-release',
                'posts_per_page' => 20,
                'paged'          => $paged,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $press_query = new WP_Query($pr_args);

            if ($press_query->have_posts()) : ?>
                <div class="blog-posts-grid press-releases-grid">
                    <?php while ($press_query->have_posts()) : $press_query->the_post(); ?>
                        <?php get_template_part('page-templates/overview/content'); ?>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total'   => $press_query->max_num_pages,
                        'current' => $paged,
                        'prev_text' => '&laquo; Previous',
                        'next_text' => 'Next &raquo;',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p>No press releases found.</p>
            <?php endif;

            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- CTA Section -->
    <?php get_template_part('template-parts/footer-cta', null, array(
        'title' => 'Unlock the Power of Automated Invoicing and Payments with Quipli',
    )); ?>

</main>

<?php get_footer(); ?>
