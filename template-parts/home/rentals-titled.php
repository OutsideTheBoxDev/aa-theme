<section class="section section--rentals">
    <div class="qp rentals" style="margin-top: -3rem;">
        <?php 
            $rental_sec = get_field('rental_companies'); 
            $heading = $rental_sec['heading'];
            $desc = $rental_sec['desc'];
        ?>
        <div class="max-container">
            <div class="sec-heading" >
                <h2><?php echo $heading ??'Rental Companies Who Run on Quipli'; ?></h2>
                <p style="--max-w: 42rem"><?php echo $desc ?? 'Join a growing community of forward-thinking rental businesses that rely on Quipli to manage their inventory, customers, and operations.';?></p>
            </div>
        
            <div class="rental__wrap">
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/eeco.svg" alt="EECOL Logo" width="180" height="48" loading="lazy" />
                </figure>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rental-ace.svg" alt="Ace Logo" width="85" height="48" loading="lazy" />
                </figure>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rental-ar.svg" alt="AR Logo" width="78" height="48" loading="lazy" />
                </figure>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rental-rst.svg" alt="RST Logo" width="164" height="48" loading="lazy" />
                </figure>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/c5.png" alt="EQ Logo" width="150" height="48" loading="lazy" />
                </figure>
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/rental-sonsray.svg" alt="SONSRAY Logo" width="136" height="48" loading="lazy" />
                </figure>
            </div>
        </div>
    </div>
</section>