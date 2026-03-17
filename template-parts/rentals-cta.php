<section class="section section--how">
    <div class="qp how">
        <?php
        $block_text = "Renting equipment is about to get a whole lot easier";
        $block_cta = "Book a Demo";
        if ($args['title']) {
            $block_text = $args['title'];
        }
        if ($args['cta']) {
            $block_cta = $args['cta'];
        }
        ?>
        <div class="max-container">
            <div class="how__wrap">
                <h2><?php echo $block_text; ?></h2>
                <div class="how__block">
                    <ul>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/how-faq.svg" alt="how-faq" width="258px" height="216px" />
                            </figure>
                            <p>
                                <span>I. </span>Answer a few quick questions on your
                                business. It takes 2 minutes, tops.
                            </p>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/how-call-icon.svg" alt="how-call-icon" width="258px" height="216px" />
                            </figure>
                            <p>
                                <span>II. </span>Our team will reach out immediately to
                                take you through a demo of Quipli.
                            </p>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/how-check-icon.svg" alt="how-check-icon" width="258px" height="216px" />
                            </figure>
                            <p>
                                <span>III. </span>Once you’re up and running with Quipli
                                you’ll wonder how you ever managed without it.
                            </p>
                        </li>
                    </ul>
                    <a href="<?php echo home_url(); ?>/book-a-demo" class="q-btn q-btn--wte" title="Book a Demo"><?php echo $block_cta; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>