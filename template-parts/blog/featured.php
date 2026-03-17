<?php
$blog_featured_section = get_field('blog_featured_block');
$blog_featured_parent = $blog_featured_section['blog_featured_parent'];
$blog_thumbnail_id = get_post_thumbnail_id($blog_featured_parent->ID);
$blog_featured_child1 = $blog_featured_section['blog_featured_child1'];
$blog_featured_child2 = $blog_featured_section['blog_featured_child2'];

if ($blog_featured_parent) :
?>

    <section class="section section--featured">
        <div class="qp featured">
            <div class="container">
                <div class="featured__head">
                    <h2 class="q-title q-title--l">Featured</h2><a class="q-btn q-btn--grey" href="#scroll-bloglist" title="Read all">
                        Read all<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round" />
                        </svg></a>
                </div>
                <div class="featured__content">

                    <a href="<?php echo get_permalink($blog_featured_parent->ID); ?>" class="featured__vertical">
                        <div class="featured__blog">
                            <div class="featured__blog-date"><?php echo get_the_date(__('M d, Y'), $blog_featured_parent->ID); ?></div>
                            <div class="feature__blog-content">
                                <div class="featured__blog-title"><?php echo get_post_category($blog_featured_parent->ID, 'single'); ?></div>
                                <div class="featured__blog-head"><?php echo esc_html($blog_featured_parent->post_title); ?></div>
                            </div>
                        </div>
                        <div class="featured__img">
                            <figure><?php echo get_image(array('imgid' => $blog_thumbnail_id)); ?></figure>
                        </div>
                    </a>
                    <div class="featured__horizontal">
                        <a href="<?php echo get_permalink($blog_featured_child1->ID); ?>" class="featured__card">
                            <div class="featured__card-header">
                                <div class="featured__card-date"><?php echo get_the_date(__('M d, Y'), $blog_featured_child1->ID); ?></div>
                                <div class="featured__card-title"><?php echo get_post_category($blog_featured_child1->ID, 'single'); ?></div>
                            </div>
                            <div class="featured__card-desc"><?php echo esc_html($blog_featured_child1->post_title); ?></div>
                        </a>
                        <a href="<?php echo get_permalink($blog_featured_child2->ID); ?>" class="featured__card featured__card--dark">
                            <div class="featured__card-header">
                                <div class="featured__card-date"><?php echo get_the_date(__('M d, Y'), $blog_featured_child2->ID); ?></div>
                                <div class="featured__card-title"><?php echo get_post_category($blog_featured_child2->ID, 'single'); ?></div>
                            </div>
                            <div class="featured__card-desc"><?php echo esc_html($blog_featured_child2->post_title); ?></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>