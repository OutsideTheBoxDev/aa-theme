<section>
    <div class="max-container">
        <div class="qp-footer-cta">
            <?php
            $cta_text = "It's time to get your arms around your inventory again";
            if ($args['title']) {
                $cta_text = $args['title'];
            }
            ?>
            <h2><?php echo $cta_text; ?></h2>
            <?php 
            if ($args['description']) {
                echo "<span style='max-width:800px;margin: -8px auto 20px;text-align:center;font-size:18px;line-height:1.5;'>" . $args['description'] . "</span>";
            }
            ?>
            <a class="q-btn q-btn--xl q-btn-secondary" href="<?php echo home_url(); ?>/book-a-demo" title="Book a Demo">Book a Demo</a>
        </div>
    </div>
</section>