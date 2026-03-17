<?php
/**
 * Overview Header Module
 * Used in overview pages for custom post types
 * 
 * @package Quipli
 */

$description = get_field('description');
$placeholder = get_field('placeholder') ?? 'Search...';
$post_type = $args['post_type'];
$taxonomy = $args['taxonomy'];
$search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
?>

<section class="custom-search-header">
    <div class="max-container">
        <div class="overview-header">
            <?php if ( is_post_type_archive( 'podcast' ) ): ?>
                <h1 class="overview-header__title">The Rental Roundtable</h1>
                <p class="overview-desc">Join industry leaders and experts as they share insights, strategies, and success stories from the equipment rental world. New episodes every week.</p>
            <?php else: ?>
            <h1 class="overview-header__title"><?php the_title(); ?></h1>
            <p class="overview-desc"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
            <div class="search-field">
                <form method="get" action="/" class="search-form">
                    <div class="search-box">
                        <input type="text" name="s" value="<?php echo esc_attr($search_query); ?>" placeholder="<?php echo esc_attr($placeholder); ?>" />
                        <button type="submit">Search</button>
                    </div>
                    <input type="hidden" name="post_type" value="<?php echo esc_attr( $post_type ); ?>">
                </form>
                <?php
                $terms = get_terms( [
                    'taxonomy' => 'category',
                    'hide_empty' => true,
                    'number'     => 4,
                    'object_ids' => get_posts([
                        'post_type'      => $post_type,
                        'posts_per_page' => -1,
                        'fields'         => 'ids',
                    ]),
                ] );
                if ( !empty($terms) && !is_wp_error($terms) ): ?>
                    <div class="popular-topics">
                        <span>Popular:</span>
                        <?php foreach ( $terms as $term ): ?>
                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                                <?php echo esc_html( $term->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if($post_type === "podcast"): ?>
                    <div class="podcast-links">
                        <a href="https://open.spotify.com/show/2TQeYeL9FlTizh7B2Ga9GI" target="_blank" rel="noopener noreferrer" class="spotify">
                            <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2023/05/Spotify_Full_Logo_RGB_Green.png" alt="Listen on Spotify">
                        </a>
                        <a href="https://podcasts.apple.com/us/podcast/the-rental-roundtable/id1695158359" target="_blank" rel="noopener noreferrer" class="apple">
                            <img src="https://quipli.com/wp-content/uploads/2025/07/US-UK_Apple_Podcasts_Listen_Badge_RGB_062023.svg" alt="Listen on Apple Podcasts">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>