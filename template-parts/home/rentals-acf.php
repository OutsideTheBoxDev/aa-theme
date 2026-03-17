
<style>
    .section--rentals{
        display: block !important;

        .qp.rentals .rental__wrap{
            @media (max-width:640px) {
                flex-wrap:wrap;
                gap:2rem;
                justify-content:center;
                figure{
                    min-width:80px;
                    height:auto;
                    img{
                        width: auto;
                    }
                }
            }
        }
    }
    .stats__wrap{
    display:flex;
    text-align:center;
    flex-wrap: wrap;
    align-items:flex-start;
    justify-content: center;
    gap: 4rem;
    margin-bottom: 6rem;
    margin-top: -3rem;

    @media (max-width:767px) {
        gap: 2rem;
    }

    @media (max-width:481px) {
        margin-bottom: 4rem;
    }

    .stats-item{
        display:flex;
        flex-direction:column;
        gap:0.5rem;
        font-size: 15px;
        color: rgba(var(--q-secondary-rgb), 0.6);
        flex-shrink:0;

        p{
            font-size: 2.75rem;
            font-weight: 500;
            color: var(--q-secondary);
            font-family: var(--q-font-display);

            @media (max-width:481px) {
                font-size: 2rem;
            }
        }
    }
}
</style>
<section class="section section--rentals">
    <div class="qp rentals">
        <div class="max-container">
            <div class="stats__wrap">
                <div class="stats-item">
                    <p>$100M+</p>
                    <span>rental revenue processed annually</p>
                </div>
                <div class="stats-item">
                    <p>250,000+</p>
                    <span>rental orders processed annually</p>
                </div>
                <div class="stats-item">
                    <p>4.9/5</p>
                    <span>average customer rating</p>
                </div>
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