<section class="section section--bloglist" id="scroll-bloglist">
    <div class="qp bloglist">
        <div class="max-container">
            <div class="bloglist__blog-wrap">
                <?php
                $load_category =   "";
                if ($args['category']) {
                    $load_category =   $args['category'];
                }
                echo load_more_blogposts('call', $load_category);
                ?>
            </div>
            <div class="bloglist__loadmore">
                <div class="loader loader--bloglist"></div>
                <button class="q-btn q-btn--loadmore" type="button" data-category="<?php echo $load_category; ?>">Load More </button>
            </div>
        </div>
    </div>
</section>