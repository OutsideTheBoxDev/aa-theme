<div class="related-posts-link">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="qp-featured-img">
            <?php the_post_thumbnail('medium', array('class' => 'featured-image')); ?>
        </a>
    <?php endif; ?>

    <div class="qp-related-content">
        <?php
        $categories = get_the_category();
        if (! empty($categories)) {
            foreach ($categories as $cat) {
                if ($cat->slug !== 'uncategorized') { // skip Uncategorized
                    echo '<a class="event-category" href="' . esc_url(get_category_link($cat->term_id)) . '">'
                        . esc_html($cat->name) . '</a>';
                    break; // stop after first valid category
                }
            }
        }
        $date =  get_the_date();
        $post_type = get_post_type();
        if($post_type == 'podcast'){
            $date = get_field('date');
        }
        ?>
        <h4 class="related-post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h4>
        <p>
            <?php
            // Get excerpt or fallback to content
            $excerpt = get_the_content();

            // Remove <h1>...</h1> and <h2>...</h2> including their content
            $excerpt = preg_replace('/<h1\b[^>]*>.*?<\/h1>/is', '', $excerpt);
            $excerpt = preg_replace('/<h2\b[^>]*>.*?<\/h2>/is', '', $excerpt);

            // Strip remaining tags/shortcodes
            $excerpt = wp_strip_all_tags( $excerpt );

            // Limit to 150 characters
            $limit = 80;
            if ( strlen( $excerpt ) > $limit ) {
                $excerpt = substr( $excerpt, 0, $limit ) . '...';
            }

            echo esc_html( $excerpt );
            ?>
        </p>
            <div class="event-date">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                <?php echo $date; ?>
            </div>
    </div>
</div>
