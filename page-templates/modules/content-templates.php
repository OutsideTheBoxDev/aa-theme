<div class="related-posts-link">
    <?php if (has_post_thumbnail()) : ?>
        <?php
            $terms = get_the_terms( get_the_ID(), 'event-type' );

           $event_type = $terms ? $terms[0]->name : '';
           if ($event_type) {
               echo '<span class="event-type ' . esc_attr(strtolower($event_type)) . '">' . esc_html($event_type) . '</span>';
           }
        ?>
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

        $speaker_info = get_field('speaker');
        $speaker_name = $speaker_info['name'] ?? '';
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
            $limit = 150;
            if ( strlen( $excerpt ) > $limit ) {
                $excerpt = substr( $excerpt, 0, $limit ) . '...';
            }

            echo esc_html( $excerpt );
            ?>
        </p>
        <div class="event-link">
            <a href="<?php the_permalink(); ?>" class="watch-btn <?php echo strtolower($event_type); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <span>View Template</span>
            </a>
        </div>
    </div>
</div>
