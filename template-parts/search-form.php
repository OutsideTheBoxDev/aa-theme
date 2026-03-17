<?php
$search_term = get_search_query();
?>
<section class="custom-search-header">
    <div class="max-container">
        <div class="overview-header">
            <h1 class="overview-header__title">
            <?php if(is_search()): ?>
              <?php if ( $search_term ) : ?>
                <?php printf( esc_html__( 'Search Results for: %s', 'quipli' ), '<span>' . esc_html( $search_term ) . '</span>' ); ?>
              <?php else: ?>
                <?php esc_html_e( 'Search Resources', 'quipli' ); ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php if( is_category() ): ?>
              <?php single_cat_title(); ?>
            <?php endif; ?>
            <?php if( is_tax() ): ?>
              <?php echo (is_tax('event-type') ? 'Events: ' : '') . single_term_title( "", false ); ?>
            <?php endif; ?>
            </h1>
            <?php if( !is_tax() ): ?>
            <p class="overview-desc">Articles, Tools, and Expert Advice for Independent Equipment Rental Companies</p>
            <?php endif; ?>
            
            <div class="search-field">
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
                    <div class="search-box">
                        <input type="text" name="s" value="<?php echo esc_attr( $search_term ); ?>" placeholder="<?php esc_attr_e( 'Search …', 'quipli' ); ?>" />
                        <button type="submit">Search</button>
                    </div>
                </form>
                <?php
                $current_category = get_queried_object();
                $terms = get_terms( [
                    'taxonomy' => 'category',
                    'hide_empty' => true,
                    'number'     => 4,
                    'orderby'    => 'count',
                    'order'      => 'DESC',
                    'exclude'    => [1, $current_category->term_id],
                ]);
                if ( !empty($terms) && !is_wp_error($terms)  && !is_tax()): ?>
                    <div class="popular-topics">
                        <span>Popular:</span>
                        <?php foreach ( $terms as $term ): ?>
                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                <?php echo esc_html( $term->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
