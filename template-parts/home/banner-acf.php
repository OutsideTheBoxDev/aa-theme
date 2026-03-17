<style>
.hero-title{
    @media (min-width:1110px){ 
        max-width:70% !important; 
    }
}
</style>
<section class="section section--banner page-hero">
    <div class="qp banner max-container">
        <div class="container">
            <?php
                $home_hero_section = get_field('hero_section');
                $heading = $args['heading'] ?? $home_hero_section['hero_heading'] ?? "Equipment Rental Software to Run a Leaner, Smarter Rental Business";
                $desc = $args['desc'] ?? $home_hero_section['hero_desc'] ?? "Quipli connects your rentals, inventory, dispatch, maintenance, and payments in one powerful platform, so you can simplify operations, grow revenue, and deliver a world-class rental experience.";
                $img = $home_hero_section['hero_image'];
                $img_small = $home_hero_section['hero_image_small'];
            ?>
            <h1 class="hero-title"><?php echo $heading; ?></h1>
            <p><?php echo $desc; ?></p>
            <?php get_template_part('template-parts/cta-buttons'); ?>
            <div class="banner__ratings">
                <div class="rating__medium">
                    <figure>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/capterra-icon.svg" alt="Capterra Icon" width="104" height="24" />
                    </figure>
                    <div class="rating">
                        <span>4.9/5</span>
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/5star-icon.svg" alt="Five Star Icon" width="104" height="20" />
                        </figure>
                    </div>
                </div>
                <div class="rating__medium">
                    <figure>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/gstar-icon.svg" alt="G2star Icon" width="84" height="24" />
                    </figure>
                    <div class="rating">
                        <span>5/5</span>
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/5star-icon.svg" alt="Five Star Icon" width="104" height="20" />
                        </figure>
                    </div>
                </div>
                <div class="rating__medium">
                    <figure>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/google-icon.svg" alt="Google Icon" width="78" height="24" />
                    </figure>
                    <div class="rating">
                        <span>5/5</span>
                        <figure>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/5star-icon.svg" alt="Five Star Icon" width="104" height="20" />
                        </figure>
                    </div>
                </div>
            </div>
            <?php if($img): ?>
            <picture>
                <source media="(min-width: 768px)" fetchpriority="high" srcset="<?php echo $img; ?>" />
                <img src="<?php echo $img_small; ?>" alt="Quipli" decoding="async" width="1691" height="1063" fetchpriority="high">
            </picture>
            <?php endif; ?>
        </div>
    </div>
</section>