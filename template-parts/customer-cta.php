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
            <div class="how__wrap cs-new-wrap">
                <div class="title-content">
                    <h2>Already a Customer?</h2>
                    <p>If you’re already a Quipli customer, contact Quipli’s Customer Support Team for assistance</p>
                </div>
                <div class="how__block">
                    <ul>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/how-faq.svg" alt="how-faq" width="258px" height="216px" />
                            </figure>
                            <p>Text us at</p>
                            <a href="tel:(831)298-6330" title="Text us at">(831) 298-6330</a>
                        </li>
                        <li>
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/how-call-icon.svg" alt="how-call-icon" width="258px" height="216px" />
                            </figure>
                            <p>Email us at</p>
                            <a href="mailto:support@quipli.com" title="Email us at">support@quipli.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>