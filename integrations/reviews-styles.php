<style>
.qp-integrations-grid{
    --columns: 1 !important;
    display: grid;
    grid-template-columns: repeat(var(--columns,1), 1fr);
    gap: 1.5rem;

}
@media (min-width: 640px) {
    .qp-integrations-grid {
        --columns:2 !important;
    }
}

@media (min-width: 1024px) {
    .qp-integrations-grid {
        --columns:4 !important;
        gap: 2rem
    }
}
.qp-ig-block{
    display:flex;
    position:relative;
    flex-direction: column;
    justify-content: space-between;
    padding:1.5rem 1.5rem 1.25rem;
    border: 1px solid rgba(var(--q-secondary-rgb), 0.1);
    border-radius:16px;
    gap:2rem;


    a{
        display:flex;
        align-items: center;
        justify-content: center;
        background-color: var(--q-gray);
        color: var(--q-secondary);
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        line-height: 1;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;

        &:hover{
            background-color: var(--q-secondary);
            color: var(--q-white);
        }
    }
}

.qp-ig-content{
    display:flex;
    align-items: flex-start;
    flex-direction: column;
    gap: 1.25rem;

    img{
        width: auto;
        height: auto;
        max-height: 2.5rem;
    }
    p{
        font-size: 16px;
        line-height: 1.5;
    }
    b, strong{
        font-weight: 600;
    }
}

.qp-videos-grid{
    --columns: 2;
    display: grid;
    grid-template-columns: repeat(var(--columns,2), 1fr);
    gap: 1.5rem;

    @media screen and (max-width: 600px){
        --columns: 1;
    }


    .qp-video-block{
        display:flex;
        align-items: flex-start;
        flex-direction: column;

        .qp-video-embed{
            width:100%;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            
            iframe{
                max-width: 100%;
                min-width: 100%;
                aspect-ratio: 560 / 315;
                object-fit: contain;
                height: 100%;
            }
        }
    }

    img{
        width: 100%;
        height: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
        border-radius: 16px;
    }

    p{
        font-size: 16px;
        line-height: 1.5;
        margin: 1rem 0;
        font-weight: 500;
    }

    .user{
        display:flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;

        p{
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
        }

        span{
            font-size: 13px;
            line-height: 1.5;
            color: #777C80;
            opacity:0.65;
            text-transform: uppercase;
            font-weight: 500;
        }
    }
}

.google-reviews-cards{
    max-height: unset !important;
    &::after{
        display:none !important;
    }
    .qp-reviews-cards{
        column-count: unset !important;
        max-width: 100% !important;

        .qp-review-card-wrap{
            padding: 1rem !important;
        }
        .qp-review-card{
            margin: 0 !important;
        }
    }

    @media screen and (max-width: 600px){
        .qp-reviews-cards .qp-review-card-wrap{
            padding: 0 0 1rem !important;
        }
    }
    .review__footer {
        .owner-letters{
            width: 2.25rem !important;
            height: 2.25rem !important;
            font-size: 0.75rem !important;
        }
        .owner-details h4{
            font-size: 0.875rem !important;
            margin:0 !important;
        }

        > svg{
            height: 1.25rem;
        }
    }
}
.qp-google-reviews-arrows{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: .5rem 0 0;
    gap:0.5rem;

    > button{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--q-white);
        color: var(--q-secondary);
        border-radius: 999px;
        border: 1px solid rgba(var(--q-secondary-rgb), 0.1);
        width: 2.5rem;
        height: 2.5rem;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;

        svg{
            width: 1rem;
            height: 1rem;
        }

        &:hover{
            background-color: var(--q-secondary);
            color: var(--q-white);
        }
    }
}


.awards-ratings{
    position:relative;
    background: var(--q-gray);
    border-radius: 16px;
    padding: 4rem 5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap:2rem;
    
    @media (max-width:939px){
        flex-direction: column;
    }

    @media (max-width:780px){
        padding: 2rem 4rem 4rem;
    }

    @media (max-width:640px){
        padding: 2rem 2rem 4.5rem;
    }

    &:before {
        content: "";
        background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/why-vector-icon.svg);
        background-size: contain;
        background-repeat: no-repeat;
        left: -30px;
        bottom: -30px;
        width: 5.25rem;
        height: 5.25rem;
        position: absolute;
        transform: rotate(180deg);
    }

    p{
        font-size: 34px;
        max-width: 70%;
        font-weight: 500;
        line-height: 1.5;

        @media (max-width:1024px){
            font-size: 28px;
            max-width: 50%;
        }

        @media (max-width:939px){
            font-size: 28px;
            max-width: 100%;
            text-align:center;
        }

        @media (max-width:480px){
            font-size: 26px;
        }
    }
}

.awards-ratings .awards-imgs{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 22px;
}

.awards-ratings .awards-imgs img{
    max-height: 82px;
}
</style>

<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", () => {
        $(".google-reviews-cards .qp-reviews-cards").slick({
            slidesToScroll: 2,
            slidesToShow: 2,
            rows: 2,
            speed: 600,
            arrows: false,
            dots: false,
            adaptiveHeight: false,
            infinite: true,
            swipeToSlide: true,
            dragToSlide: true,
            touchThreshold: 1000,
            draggable: true,
            responsive: [
                {
                // when viewport width is <= 1024px
                breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        rows: 1
                    }
                },
                {
                // when viewport width is <= 600px
                breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        rows: 1
                    }
                }
            ]
        });

        $(".google-review-prev").on("click", function () {
            $(".google-reviews-cards .qp-reviews-cards").slick("slickPrev");
        });

        $(".google-review-next").on("click", function () {
            $(".google-reviews-cards .qp-reviews-cards").slick("slickNext");
        });
    });
</script>