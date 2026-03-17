<style>
    .protection-block{
        display:flex;
        align-items:center;
        justify-content:space-between;
        max-width:100%;
        background:var(--q-primary);
        border-radius: 1.5rem;
        max-width: 68rem;
        margin:auto;

        @media (max-width:600px) {
            flex-direction:column;
        }


        picture{
            height:100%;
            width:auto;
        }
        .pr-content{
            display:flex;
            flex-direction:column;
            gap:1rem;
            align-items:flex-start;
            padding:3rem;

             @media (max-width:845px) {
                padding:2rem;
            }

            @media (max-width:600px) {
                padding-bottom:0rem;
            }

            svg{
                width:32px;
                height:32px;
            }

            h2{
                font-size:1.75rem;
                @media (max-width:845px) {
                    font-size:1.25rem;
                }
            }
            p{
                font-size:1.1rem;
                max-width:800px;
                 @media (max-width:845px) {
                    font-size:1rem;
                }
            }
        }
        .pr-image{
            flex-shrink:0;
            max-width:min(50%, 400px);
            height:100%;

            @media (max-width:845px) {
                padding:2rem;
                max-width:250px;
            }

            @media (max-width:600px) {
               max-width:max(60%, 350px);
            }
        }
    }
</style>

<section class="section protection">
    <?php 
        $prot_sec = get_field('protection'); 
        $heading = $prot_sec['heading'] ?? "Built-In Rental Protection";
        $desc = $prot_sec['desc'] ?? "From ID verification to GPS tracking and damage waiver tools, Quipli's equipment rental software gives you built-in protection to reduce theft, protect your fleet, and keep your business secure.";
    ?>
    <div class="max-container">
        <div class="protection-block">
            <div class="pr-content">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <use xlink:href="#shield" />
                </svg>
                <h2><?php echo $heading;?></h2>
                <p><?php echo $desc;?></p>
            </div>
            <div class="pr-image">
               <picture>
                    <source media="(max-width: 845px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/2025/check-small.webp" />
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/2025/check.webp"/>
                </picture>
            </div>
        </div>
    </div>
</section>