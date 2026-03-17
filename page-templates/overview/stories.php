<section>
    <div class="max-container">
        <div class="blog-sec-title">
            <h3 class="sec-title">Success Stories</h3>
            <a href="<?php echo home_url() . '/success-stories' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <span class="view-all">View All</span>
            </a>
        </div>
        <div class="blog-posts-grid">
        <?php
        $args = array(
            'post_type'      => 'success-stories', // includes all public post types
            'posts_per_page' => 4,    // adjust number of posts
            'orderby'        => 'date',
            'order'          => 'DESC',
            'post_status'    => 'publish'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <?php get_template_part('page-templates/overview/content'); ?>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
    </div>
</section>