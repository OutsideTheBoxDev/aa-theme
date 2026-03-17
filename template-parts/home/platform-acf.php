<style>
    .platform-image{
        width:100%;
        display:flex;
        align-items:center;
        justify-content:center;
        margin-top:-2.5rem;
        max-width:100%;
        
        img{
            max-width:max(75%, 800px);
            width: 100%;
        }
    }
</style>

<section class="section">
    <?php 
        $rental_sec = get_field('platform'); 
        $heading = $rental_sec['heading'] ?? "One platform. Every rental management workflow.";
        $desc = $rental_sec['desc'] ?? "Quipli unifies every part of your rental workflow - helping you eliminate chaos, serve customers faster, and grow with less effort.";
    ?>
    <div class="max-container">
        <div class="sec-heading" >
            <h2 style="max-width: 60rem"><?php echo $heading; ?></h2>
            <p style="--max-w: 42rem"><?php echo $desc;?></p>
        </div>
    
        <div class="platform-image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/2025/platform.svg"/>
        </div>
    </div>
</section>