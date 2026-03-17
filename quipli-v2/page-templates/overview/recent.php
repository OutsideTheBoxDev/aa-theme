<section>
    <div class="max-container">
        <div class="blog-sec-title">
            <h3 class="sec-title">Most Recent</h3>
        </div>
        <div class="blog-posts-grid">
        <?php
        $post_types = get_post_types(array( 'public' => true ), 'names');
        unset($post_types['page']);
        $args = array(
            'post_type'      => $post_types, // includes all public post types
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