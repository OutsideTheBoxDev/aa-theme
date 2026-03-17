<?php
    $post_type = $args['post_type'] ?? '';
    $title = $args['title'] ?? 'Title Here';
    $slug = $args['slug'] ?? 'blog';

     if(is_search() && is_array($post_type)){
        return;
     }

    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'has_password'   => false,
    );
    
    if ( is_array( $post_type ) ) {
        if ( in_array( 'podcast', $post_type ) ) {
            $acf_field_key = 'date';
    
            $args['meta_query'] = array(
                'relation' => 'OR',
                array( 'key' => $acf_field_key, 'compare' => 'EXISTS' ),
                array( 'key' => $acf_field_key, 'compare' => 'NOT EXISTS' ),
            );
    
            $args['orderby']  = array( 'meta_value_num' => 'DESC', 'date' => 'DESC' );
            $args['meta_key'] = $acf_field_key;
        } else {
            $args['orderby'] = 'date';
            $args['order']   = 'DESC';
        }
    }
    
    if ( $post_type === 'podcast' ) {
        $args['meta_key'] = 'date'; 
        $args['orderby']  = 'meta_value';
        $args['order']    = 'DESC';
        $args['meta_type'] = 'DATE'; 
    }

    if($post_type !== 'success-story' || $post_type !== 'success-stories'){
        $exclude_ids = array();
        $exclude_ids[] = get_category_by_slug('tools')->term_id; 
        $exclude_ids[] = get_category_by_slug('podcasts')->term_id; 
        $exclude_ids[] = get_category_by_slug('events')->term_id;
        $exclude_ids[] = get_category_by_slug('success-stories')->term_id; 
        $args['category__not_in'] = $exclude_ids; 
    }


    if(is_search()){
        $args['s'] = get_search_query();
    }

    if ( ! empty( $_GET['category'] ) ) {
        $args['category_name'] = sanitize_title( wp_unslash( $_GET['category'] ) );
    }

    if(is_category()){
        $current_category = get_queried_object();
        if($current_category && !is_wp_error($current_category)){
            $args['category_name'] = $current_category->slug;
            $args['posts_per_page'] = 8;
        }
    }
    
    if (is_tax() ) {
        $current_term = get_queried_object();

        if ( $current_term && !is_wp_error( $current_term ) ) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => $current_term->taxonomy,
                    'field'    => 'slug',
                    'terms'    => $current_term->slug,
                ),
            );
            $args['posts_per_page'] = 8;
        }
    }
    

    $query = new WP_Query($args);
    if ($query->have_posts()) :
       
?>
<section>
    <div class="max-container">
        <div class="blog-sec-title">
            <h3 class="sec-title"><?php echo esc_html($title); ?></h3>
            <?php if(!is_array($post_type)):?>
            <a href="<?php echo home_url() . '/' . esc_html($slug); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                <span class="view-all">View All</span>
            </a>
            <?php endif;?>
        </div>
        <div class="blog-posts-grid">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('page-templates/overview/content'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php  endif; ?>