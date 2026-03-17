<?php

/**
 * The new homepage template file (Fully Custom - No ACF)
 * Template Name: New Home Page
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header('home'); ?>

<main class="quipli main">

    <!-- HERO BANNER -->
    <style>
        .new-hero {
            background: #1D252C;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            padding: 180px 60px 60px;
            margin: -80px auto 0;
            max-width: 1280px;
        }

        .new-hero .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .new-hero .hero-text {
            max-width: 655px;
            color: #fff;
        }

        .new-hero .hero-text h1 {
            font-family: var(--q-font-display);
            font-size: clamp(40px, 5vw, 64px);
            line-height: 1.12;
            margin-bottom: 16px;
            font-weight: 500;
        }

        .new-hero .hero-text h1 .highlight {
            color: #FCDA01;
            background: rgba(252, 218, 1, 0.12);
            padding: 0 4px;
        }

        .new-hero .hero-text p {
            font-size: 18px;
            line-height: 28px;
            max-width: 462px;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .new-hero .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .new-hero .hero-buttons .btn-primary {
            background: #FCDA01;
            border: 2px solid rgba(29, 37, 44, 0.12);
            color: #1D252C;
            padding: 0 40px;
            height: 60px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 18px;
            display: inline-flex;
            align-items: center;
            gap: 16px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .new-hero .hero-buttons .btn-primary:hover {
            background: #e5c700;
        }

        .new-hero .hero-buttons .btn-secondary {
            background: #fff;
            color: #1D252C;
            padding: 0 40px;
            height: 60px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 18px;
            display: inline-flex;
            align-items: center;
            gap: 16px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .new-hero .hero-buttons .btn-secondary:hover {
            background: #f5f5f5;
        }

        .new-hero .hero-buttons .btn-arrow {
            width: 7px;
            height: 14px;
        }

        .new-hero .hero-image {
            flex-shrink: 0;
            max-width: 506px;
        }

        .new-hero .hero-image img {
            width: 100%;
            height: auto;
        }

        .new-hero .pattern-decoration {
            position: absolute;
            bottom: -50px;
            right: -30px;
            width: 145px;
            height: 163px;
            z-index: 10;
        }

        @media (max-width: 1100px) {
            .new-hero {
                padding: 160px 40px 40px;
            }

            .new-hero .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .new-hero .hero-text {
                max-width: 100%;
            }

            .new-hero .hero-text p {
                max-width: 100%;
                margin-left: auto;
                margin-right: auto;
            }

            .new-hero .hero-buttons {
                justify-content: center;
            }

            .new-hero .hero-image {
                max-width: 100%;
            }
        }

        @media (max-width: 600px) {
            .new-hero {
                padding: 140px 20px 30px;
                border-radius: 12px;
            }

            .new-hero .hero-buttons {
                flex-direction: column;
                width: 100%;
            }

            .new-hero .hero-buttons a {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <section class="new-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Equipment rental software <span class="highlight">built for 2026, not 1980</span></h1>
                <p>Don't slow your team down with software that's older than you. Built specifically for construction equipment rental businesses, Quipli is the modern alternative to legacy providers.</p>
                <div class="hero-buttons">
                    <a href="<?php echo home_url(); ?>/book-a-demo" class="btn-primary" title="Book a Demo">
                        Book a Demo
                        <svg class="btn-arrow" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L6 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="<?php echo home_url(); ?>/tour" class="btn-secondary" title="Take a Tour">
                        Take a Tour
                        <svg class="btn-arrow" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L6 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/new-home-hero-image.webp" />
                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/new-home-hero-image.webp" />
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/new-home-hero-image.webp" alt="Quipli GPS Tracking and Equipment Management" loading="eager" decoding="async" width="900" height="980">
                </picture>
            </div>
        </div>
        <!-- Decorative pattern -->
        <img class="pattern-decoration" src="<?php echo get_template_directory_uri() ?>/assets/img/quipli-white-blocker.svg" alt="" />
    </section>

    <!-- COMPANIES SECTION -->
    <style>
        .companies-section {
            padding: 80px 0;
            overflow: hidden;
        }

        .companies-section .max-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .companies-section .sec-heading {
            margin-bottom: 60px;
        }

        .companies-section .sec-heading h2 {
            font-weight: 500;
            text-wrap: pretty;
        }

        .companies-section .section-content {
            display: flex;
            flex-direction: column;
            gap: 60px;
        }

        .companies-section .logos-carousel {
            position: relative;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }

        .companies-section .logos-track {
            display: flex;
            gap: 80px;
            animation: scroll-logos 60s linear infinite;
            width: max-content;
        }

        .companies-section .logos-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll-logos {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .companies-section .logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 48px;
            min-width: 120px;
            flex-shrink: 0;
        }

        .companies-section .logo-item img {
            max-height: 48px;
            width: auto;
            transition: all 0.3s ease;
        }

        .companies-section .logo-item:hover img {
            opacity: 0.6;
        }

        .companies-section .image-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .companies-section .ipad-mockup {
            overflow: hidden;
        }

        .companies-section .ipad-mockup img {
            width: 100%;
            height: auto;
            display: block;
        }

        .sec-heading .smaller-content {
            max-width: 875px;
            text-wrap: pretty;
        }

        @media (max-width: 768px) {
            .companies-section .logos-track {
                gap: 50px;
            }

            .companies-section .logo-item {
                min-width: 100px;
            }
        }

        @media (max-width: 600px) {
            .companies-section {
                padding: 60px 0;
            }

            .companies-section .section-content {
                gap: 40px;
            }

            .companies-section .logos-track {
                gap: 40px;
            }
        }
    </style>

    <section class="companies-section">
        <div class="max-container">
            <div class="sec-heading">
                <h2 class="smaller-content">Hundreds of equipment rental companies choose Quipli over legacy rental software providers</h2>
            </div>
            <div class="section-content">
                <div class="logos-carousel">
                    <div class="logos-track">
                        <!-- First set of logos -->
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/brainerd-logo.png" alt="Brainerd Logo" width="180" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/dots-logo.png" alt="DOTS Logo" width="85" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/arapahoe-logo.png" alt="Arapahoe Rental Logo" width="78" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/sonsray-logo.png" alt="Sonsray Logo" width="164" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/ace-logo.png" alt="Ace Hardware Logo" width="150" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/rst-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/skyblack-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/marsh-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/lybroco-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/camas-creek-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/austin-rentway-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/econorent-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/patriot-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/peaceful-valley-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/amerivet-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/flagstaff-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/equipped-rentals-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/wp-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/corner-rental-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <!-- Duplicate set for seamless loop -->
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/brainerd-logo.png" alt="Brainerd Logo" width="180" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/dots-logo.png" alt="DOTS Logo" width="85" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/arapahoe-logo.png" alt="Arapahoe Rental Logo" width="78" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/sonsray-logo.png" alt="Sonsray Logo" width="164" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/ace-logo.png" alt="Ace Hardware Logo" width="150" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/rst-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/skyblack-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/marsh-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/lybroco-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/camas-creek-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/austin-rentway-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/econorent-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/patriot-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/peaceful-valley-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/amerivet-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/flagstaff-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/equipped-rentals-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/wp-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                        <div class="logo-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/corner-rental-logo.png" alt="RST Rentals Logo" width="136" height="48" loading="lazy" />
                        </div>
                    </div>
                </div>
                <div class="image-content">
                    <div class="ipad-mockup">
                        <picture>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/dot-map-users.webp" alt="Quipli Equipment Rental Software Map" loading="lazy" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE QUIPLI SECTION -->
    <style>
        .why-choose-section {
            padding: 80px 0;
        }

        .why-choose-section .max-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .why-choose-section .sec-heading h2 {
            font-weight: 500;
            text-wrap: pretty;
        }

        .why-choose-section .columns-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto repeat(5, auto);
            gap: 20px 40px;
        }

        .why-choose-section .columns-wrapper .column {
            display: grid;
            grid-template-rows: subgrid;
            grid-row: span 6;
        }

        .why-choose-section .columns-wrapper .column .quotes-column {
            display: grid;
            grid-template-rows: subgrid;
            grid-row: span 5;
            gap: 20px;
        }

        .why-choose-section .column-header {
            font-family: var(--q-font-display);
            font-size: 24px;
            line-height: 40px;
            color: #1D252C;
            font-weight: 500;
            text-align: center;
            margin-bottom: 24px;
        }

        .why-choose-section .quotes-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .why-choose-section .quote-card {
            background: #F4F5F7;
            border-radius: 20px;
            padding: 32px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .why-choose-section .quote-card.highlight {
            background: #FCDA01;
            overflow: visible;
        }

        .why-choose-section .quote-card .quote-text {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            line-height: 26px;
            color: #1D252C;
            font-weight: regular;
            margin-bottom: 0;
        }

        .why-choose-section .quote-card .quote-author {
            font-family: var(--q-font-body);
            font-size: 18px;
            line-height: 26px;
            color: #1D252C;
        }

        .why-choose-section .quote-card .quote-author .name {
            font-weight: 400;
        }

        .why-choose-section .quote-card .quote-author .title {
            font-weight: 400;
        }

        .why-choose-section .quote-card.highlight .quipli-icon {
            position: absolute;
            top: -43px;
            right: -35px;
            width: 70px;
            height: 82px;
        }

        .why-choose-section .quotes-column .quote-card:nth-child(1) {
            z-index: 5;
        }

        .why-choose-section .quotes-column .quote-card:nth-child(2) {
            z-index: 4;
        }

        .why-choose-section .quotes-column .quote-card:nth-child(3) {
            z-index: 3;
        }

        .why-choose-section .quotes-column .quote-card:nth-child(4) {
            z-index: 2;
        }

        .why-choose-section .quotes-column .quote-card:nth-child(5) {
            z-index: 1;
        }

        .sec-heading p {
            font-size: 18px;
            font-weight: regular;
        }

        @media (max-width: 768px) {
            .why-choose-section .columns-wrapper {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                gap: 48px;
            }

            .why-choose-section .columns-wrapper .column {
                display: flex;
                flex-direction: column;
                grid-row: auto;
            }

            .why-choose-section .columns-wrapper .column .quotes-column {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .why-choose-section .column-header {
                font-size: 18px;
                line-height: 32px;
            }

            .sec-heading p {
                font-size: 18px;
                font-weight: regular;
            }
        }

        @media (max-width: 480px) {
            .why-choose-section {
                padding: 60px 0;
            }
        }
    </style>

    <section class="why-choose-section">
        <div class="max-container">
            <div class="sec-heading">
                <h2>Why Equipment Rental Businesses Choose Quipli</h2>
                <p>Real quotes from real customers, based on Capterra reviews.</p>
            </div>

            <div class="columns-wrapper">
                <!-- Legacy Providers Column -->
                <div class="column">
                    <h3 class="column-header">About Legacy Providers</h3>
                    <div class="quotes-column">
                        <div class="quote-card">
                            <p class="quote-text">“There were many promises and no quality follow-up. In the end, the software was not workable for us.”</p>
                        </div>
                        <div class="quote-card">
                            <p class="quote-text">“The communications with us were sparse and low quality.”</p>
                        </div>
                        <div class="quote-card">
                            <p class="quote-text">“Milk you dry with fees, add-ons, lies, and poor service!”</p>
                        </div>
                        <div class="quote-card">
                            <p class="quote-text">“If you have a critical issue, you are on your own.”</p>
                        </div>
                        <div class="quote-card">
                            <p class="quote-text">“Onboarding was not organized or helpful.”</p>
                        </div>
                    </div>
                </div>

                <!-- Quipli Column -->
                <div class="column">
                    <h3 class="column-header">About Quipli</h3>
                    <div class="quotes-column">
                        <div class="quote-card highlight">
                            <svg class="quipli-icon" viewBox="0 0 35 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="7" height="28" fill="white" />
                                <rect x="28" y="7" width="7" height="28" fill="white" />
                                <rect x="28" width="7" height="21" transform="rotate(90 28 0)" fill="white" />
                                <rect x="28" y="35" width="7" height="21" transform="rotate(90 28 35)" fill="white" />
                            </svg>
                            <p class="quote-text">“They were very honest about their current features and their commitment to implement new features often.”</p>
                        </div>
                        <div class="quote-card highlight">
                            <svg class="quipli-icon" viewBox="0 0 35 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="7" height="28" fill="white" />
                                <rect x="28" y="7" width="7" height="28" fill="white" />
                                <rect x="28" width="7" height="21" transform="rotate(90 28 0)" fill="white" />
                                <rect x="28" y="35" width="7" height="21" transform="rotate(90 28 35)" fill="white" />
                            </svg>
                            <p class="quote-text">“Constant communication and asking how they can help us.”</p>
                        </div>
                        <div class="quote-card highlight">
                            <svg class="quipli-icon" viewBox="0 0 35 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="7" height="28" fill="white" />
                                <rect x="28" y="7" width="7" height="28" fill="white" />
                                <rect x="28" width="7" height="21" transform="rotate(90 28 0)" fill="white" />
                                <rect x="28" y="35" width="7" height="21" transform="rotate(90 28 35)" fill="white" />
                            </svg>
                            <p class="quote-text">“A very rare type of business that really works with you to help you succeed.”</p>
                        </div>
                        <div class="quote-card highlight">
                            <svg class="quipli-icon" viewBox="0 0 35 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="7" height="28" fill="white" />
                                <rect x="28" y="7" width="7" height="28" fill="white" />
                                <rect x="28" width="7" height="21" transform="rotate(90 28 0)" fill="white" />
                                <rect x="28" y="35" width="7" height="21" transform="rotate(90 28 35)" fill="white" />
                            </svg>
                            <p class="quote-text">“The team always goes above and beyond to assist with each and every request with urgency.”</p>
                        </div>
                        <div class="quote-card highlight">
                        <svg class="quipli-icon" viewBox="0 0 35 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="7" width="7" height="28" fill="white" />
                                <rect x="28" y="7" width="7" height="28" fill="white" />
                                <rect x="28" width="7" height="21" transform="rotate(90 28 0)" fill="white" />
                                <rect x="28" y="35" width="7" height="21" transform="rotate(90 28 35)" fill="white" />
                            </svg>
                            <p class="quote-text">“Quipli is easy to learn and is straightforward in training new employees.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- RATINGS/TRUST BADGES SECTION -->
    <style>
        .ratings-section {
            padding: 80px 0;
            overflow: hidden;
        }

        .ratings-section .max-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .ratings-section .sec-heading {
            margin-bottom: 60px;
        }

        .ratings-section .sec-heading h2 {
            text-wrap: pretty;
            font-weight: 500;
        }

        .ratings-section .ratings-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 40px;
        }

        .ratings-section .ratings-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 80px;
        }

        .ratings-section .rating-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }

        .ratings-section .rating-item .rating-logo {
            height: auto;
            width: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ratings-section .rating-item .rating-logo img {
            max-height: none;
            width: 100%;
            height: auto;
        }

        .ratings-section .rating-item .rating-score {
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: var(--q-font-body);
            font-size: 14px;
            font-weight: 600;
            color: #1D252C;
        }

        .ratings-section .rating-item .rating-score .stars {
            display: flex;
            gap: 2px;
        }

        .ratings-section .rating-item .rating-score .stars svg {
            width: 16px;
            height: 16px;
            fill: #FCDA01;
        }

        .ratings-section .rating-item .rating-subtitle {
            font-size: 12px;
            color: #1D252C;
            font-weight: 500;
        }

        .ratings-section .partners-row .rating-item .rating-logo {
            height: auto;
            width: 220px;
        }

        .ratings-section .partners-row .rating-item .rating-logo img {
            max-height: none;
            width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .ratings-section .ratings-row {
                gap: 40px;
            }
        }

        @media (max-width: 600px) {
            .ratings-section {
                padding: 60px 0;
            }

            .ratings-section .ratings-grid {
                padding: 0 20px;
            }

            .ratings-section .ratings-row {
                flex-wrap: wrap;
                gap: 30px 50px;
            }
        }
    </style>

    <section class="ratings-section">
        <div class="max-container">
            <div class="sec-heading">
                <h2>Because your rental software should be from this century</h2>
            </div>
        </div>
        <div class="ratings-grid">
            <!-- Row 1: Ratings with stars -->
            <div class="ratings-row">
                <div class="rating-item">
                    <div class="rating-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/capterra-logo.svg" alt="Capterra" loading="lazy" />
                    </div>
                    <div class="rating-score">
                        <span>4.9/5</span>
                        <div class="stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                        </div>
                    </div>
                </div>
                <div class="rating-item">
                    <div class="rating-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/g2-logo.svg" alt="G2" loading="lazy" />
                    </div>
                    <div class="rating-score">
                        <span>5/5</span>
                        <div class="stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                        </div>
                    </div>
                </div>
                <div class="rating-item">
                    <div class="rating-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/google-logo.svg" alt="Google" loading="lazy" />
                    </div>
                    <div class="rating-score">
                        <span>4.9/5</span>
                        <div class="stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row 2: Partner logos -->
            <div class="ratings-row partners-row">
                <div class="rating-item">
                    <div class="rating-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/ara-cert-logo.png" alt="ARA Associate Member" loading="lazy" />
                    </div>
                </div>
                <div class="rating-item">
                    <div class="rating-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/peer-cert-logo.png" alt="PEER Executive Groups" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATEMENT SECTION -->
    <style>
    .statement-section {
        padding: 80px 0;
    }
    .statement-section .max-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 40px;
    }
    .statement-section .time-block {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--q-secondary);
        color: #fff;
        border-radius: 0.75rem;
        margin: auto;
        max-width: 68rem;
        padding: 3.5rem 3rem;
    }
    .statement-section .time-block svg {
        position: absolute;
        pointer-events: none;
        width: 200px;
        height: auto;
    }
    .statement-section .time-block svg.pat-before {
        top: 0;
        left: 20%;
        transform: translateY(-60%);
    }
    .statement-section .time-block svg.pat-after {
        bottom: 0;
        right: 30%;
        width: 150px;
        transform: translateY(60%);
    }
    .statement-section .time-block .tm-content {
        flex-shrink: 0;
    }
    .statement-section .time-block .tm-content p {
        line-height: 1.3;
        font-size: 1rem;
        font-weight: 400;
    }
    .statement-section .time-block .tm-content p.num {
        font-size: 2.5rem;
        font-weight: 600;
    }
    .statement-section .time-block .text {
        line-height: 1.3;
        max-width: max(50%, 600px);
        font-weight: 400;
    }
    .statement-section .time-block .text span {
        color: #FCDA01;
    }
    @media (max-width: 900px) {
        .statement-section .time-block {
            padding: 1.5rem 3rem;
            gap: 4rem;
        }
        .statement-section .time-block svg {
            width: 100px;
        }
    }
    @media (max-width: 640px) {
        .statement-section .time-block {
            flex-direction: column;
            gap: 2rem;
            padding: 3rem 1.5rem;
            text-align: center;
        }
    }
    </style>
    <section class="statement-section">
        <div class="max-container">
            <div class="time-block">
                <svg width="237" height="198" class="pat-before" viewBox="0 0 237 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M231.137 158.4H203.363C200.124 158.4 197.5 155.77 197.5 152.522V45.4782C197.5 42.2303 194.876 39.6 191.637 39.6H163.863C160.624 39.6 158 36.9697 158 33.7218V5.8782C158 2.6303 155.376 0 152.137 0H45.3634C42.1236 0 39.5 2.6303 39.5 5.8782V33.7218C39.5 36.9697 36.8764 39.6 33.6366 39.6H5.86339C2.62364 39.6 0 42.2303 0 45.4782V152.522C0 155.77 2.62364 158.4 5.86339 158.4H33.6366C36.8764 158.4 39.5 161.03 39.5 164.278V192.122C39.5 195.37 42.1236 198 45.3634 198H152.137C155.376 198 158 195.37 158 192.122V164.278C158 161.03 160.624 158.4 163.863 158.4H191.637C194.876 158.4 197.5 161.03 197.5 164.278V192.122C197.5 195.37 200.124 198 203.363 198H231.137C234.376 198 237 195.37 237 192.122V164.278C237 161.03 234.376 158.4 231.137 158.4ZM152.137 158.4H45.3634C42.1236 158.4 39.5 155.77 39.5 152.522V45.4782C39.5 42.2303 42.1236 39.6 45.3634 39.6H152.137C155.376 39.6 158 42.2303 158 45.4782V152.522C158 155.77 155.376 158.4 152.137 158.4Z" fill="white" fill-opacity="0.08"/>
                </svg>
                <div class="tm-content">
                    <p class="num">67%</p>
                    <p>of rental companies</p>
                </div>
                <p class="text">
                    <span>waste time on tasks that modern equipment rental software could handle in seconds.</span> Quipli is the platform built to change that.
                </p>
                <svg width="237" height="198" class="pat-after" viewBox="0 0 237 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M231.137 158.4H203.363C200.124 158.4 197.5 155.77 197.5 152.522V45.4782C197.5 42.2303 194.876 39.6 191.637 39.6H163.863C160.624 39.6 158 36.9697 158 33.7218V5.8782C158 2.6303 155.376 0 152.137 0H45.3634C42.1236 0 39.5 2.6303 39.5 5.8782V33.7218C39.5 36.9697 36.8764 39.6 33.6366 39.6H5.86339C2.62364 39.6 0 42.2303 0 45.4782V152.522C0 155.77 2.62364 158.4 5.86339 158.4H33.6366C36.8764 158.4 39.5 161.03 39.5 164.278V192.122C39.5 195.37 42.1236 198 45.3634 198H152.137C155.376 198 158 195.37 158 192.122V164.278C158 161.03 160.624 158.4 163.863 158.4H191.637C194.876 158.4 197.5 161.03 197.5 164.278V192.122C197.5 195.37 200.124 198 203.363 198H231.137C234.376 198 237 195.37 237 192.122V164.278C237 161.03 234.376 158.4 231.137 158.4ZM152.137 158.4H45.3634C42.1236 158.4 39.5 155.77 39.5 152.522V45.4782C39.5 42.2303 42.1236 39.6 45.3634 39.6H152.137C155.376 39.6 158 42.2303 158 45.4782V152.522C158 155.77 155.376 158.4 152.137 158.4Z" fill="white" fill-opacity="0.08"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- FEATURES SECTION (moved) -->
    <style>
        .moved-features {
            padding: 80px 0;

            @media (max-width: 767px) {
                padding: 40px 20px;
            }

            .block__label {
                font-family: "Inter";
                font-size: 18px;
                font-weight: 600;
                color: #A5A8AB;
                margin-bottom: 8px;
            }

            .block__content h4 {
                font-weight: 600;
            }

            .l-link:hover {
                color: #FCDA01;
            }
            .l-link:hover svg path {
                stroke: #FCDA01;
            }

            .qp.feature {
                .feature__wrap {
                    display: flex;
                    flex-direction: column;
                    gap: 3rem;

                    @media (min-width:768px) {
                        gap: 8rem;
                    }

                    .feature__block {
                        margin: 0 !important;

                        @media (max-width: 767px) {
                            display: flex;
                            flex-direction: column;
                        }

                        .block__content {
                            flex: 0 0 45%;

                            @media (max-width: 767px) {
                                order: 1;
                            }
                        }

                        .block__img {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            flex-grow: 1;

                            @media (max-width: 767px) {
                                order: 2;
                                margin-top: 2rem;
                            }

                            @media (min-width:768px) {
                                padding-right: 4rem;
                                justify-content: flex-start;
                            }

                            picture {
                                max-width: 600px;
                            }
                        }

                        &.image-right {
                            .block__img {
                                @media (min-width:768px) {
                                    padding-left: 4rem;
                                    padding-right: 0;
                                    justify-content: flex-end;
                                }
                            }
                        }

                        &.image-left {
                            @media (min-width:768px) {
                                flex-direction: row;
                            }

                            .block__img {
                                @media (min-width:768px) {
                                    padding-right: 4rem;
                                    padding-left: 0;
                                    justify-content: flex-start;
                                }
                            }
                        }
                    }
                }
            }
        }
    </style>

    <section class="section section--feature moved-features">
        <div class="qp feature">
            <div class="max-container">
                <div class="feature__wrap">
                    <div class="feature__block image-right">
                        <div class="block__content">
                            <div class="block__icon">
                                <i>
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.25 23.25H1.25L2.25 7.25H22.25L23.25 23.25Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
                                        <path d="M7.25 10.25V6.25C7.25 3.52667 9.52667 1.25 12.25 1.25C14.9733 1.25 17.25 3.52668 17.25 6.25V10.25" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </div>
                            <p class="block__label">Modern Design</p>
                            <h4>Intuitive from day one</h4>
                            <p>Tired of confusing workflows and hidden keystrokes? Quipli is clean, straightforward, and easy for anyone to pick up in a day.</p>
                        </div>
                        <div class="block__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/intuitive-from-day-one.webp" alt="Quipli's intuitive rental software interface" loading="lazy" decoding="async">
                            </picture>
                        </div>
                    </div>
                    <div class="feature__block image-left">
                        <div class="block__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/ai-that-knows-your-business.webp" alt="Quipli AI inventory management" loading="lazy" decoding="async">
                            </picture>
                        </div>
                        <div class="block__content">
                            <div class="block__icon">
                                <i>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1H1V10H13V1Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M23 1H17V10H23V1Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M7 14H1V23H7V14Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M23 14H11V23H23V14Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </div>
                            <p class="block__label">Innovative AI</p>
                            <h4>AI that knows your business and gets sh*t done</h4>
                            <p>
                                Meet Quinn, Quipli's AI that automates daily activities (even while you sleep) so you close more deals, keep customers coming back, and grow your business.
                            </p>
                            <a class="l-link l-link--icon" href="https://getquinn.ai/" title="Learn more about Quinn">
                                Learn more<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION -->
    <style>
        .section--pricing {
            padding: 6rem 0;
            background: #fff;

            @media (max-width:768px) {
                padding: 4rem 0;
            }
        }

        .pricing__wrap {
            display: flex;
            align-items: center;
            gap: 4rem;
            max-width: 1250px;
            margin: 0 auto;
            padding: 0 2rem;

            @media (max-width:1024px) {
                flex-direction: column;
                gap: 3rem;
            }

            @media (max-width:640px) {
                padding: 0 1.5rem;
            }
        }

        .pricing__content {
            flex: 0 0 45%;

            @media (max-width:1024px) {
                flex: 1;
                max-width: 100%;
            }

            .pricing__icon {
                margin-bottom: 12px;
            }

            .pricing__label {
                font-family: 'Inter', sans-serif;
                font-weight: 600;
                font-size: 1.125rem;
                line-height: 1.56;
                color: #A5A8AB;
                margin-bottom: 8px;
                text-transform: none;
            }

            h2 {
                font-family: var(--q-font-display);
                font-size: 2rem;
                font-weight: 500;
                line-height: 1.25;
                color: #1D252C;
                margin-bottom: 1.5rem;

                @media (max-width:640px) {
                    font-size: 1.75rem;
                }
            }

            .pricing__description {
                font-family: 'Inter', sans-serif;
                font-size: 1.125rem;
                line-height: 1.56;
                color: #1D252C;
                margin-bottom: 1rem;

                p {
                    margin-bottom: 1rem;
                }

                strong {
                    font-weight: 700;
                }
            }

            .pricing__note {
                font-family: 'Inter', sans-serif;
                font-weight: 700;
                font-size: 1.125rem;
                line-height: 1.56;
                color: #1D252C;
                margin-top: 0.5rem;
            }
        }

        .pricing__card {
            position: relative;
            flex: 1;
            background: #1D252C;
            border-radius: 1.25rem;
            padding: 3rem;
            color: #fff;
            overflow: hidden;
            min-height: 400px;
            display: flex;
            flex-direction: column;

            @media (max-width:1024px) {
                width: 100%;
                max-width: 620px;
            }

            @media (max-width:640px) {
                padding: 2rem 1.5rem;
                min-height: auto;
            }

            .pricing__card-bg {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 100%;
                height: auto;
                pointer-events: none;
                opacity: 0.3;
            }

            .pricing__card-icon {
                position: relative;
                z-index: 1;
                width: 80px;
                height: 80px;
                margin-bottom: 2rem;

                img {
                    width: 100%;
                    height: 100%;
                }
            }

            .pricing__card-label {
                position: relative;
                z-index: 1;
                font-family: 'Inter', sans-serif;
                font-size: 1.125rem;
                line-height: 1.56;
                color: #FCDA01;
                margin-bottom: 0.5rem;
            }

            .pricing__card-price {
                position: relative;
                z-index: 1;
                font-family: 'Sharp Grotesk', sans-serif;
                font-weight: 500;
                font-size: 2rem;
                line-height: 1.31;
                color: #fff;
                margin-bottom: 1.5rem;
            }

            .pricing__card-subtitle {
                position: relative;
                z-index: 1;
                font-family: 'Sharp Grotesk', sans-serif;
                font-weight: 500;
                font-size: 1.5rem;
                line-height: 1.25;
                color: #fff;
                margin-bottom: 1.5rem;
            }

            .pricing__card-included {
                position: relative;
                z-index: 1;
                font-family: 'Inter', sans-serif;
                font-size: 18px;
                line-height: 1.56;
                color: rgba(255, 255, 255, 0.8);
                margin-bottom: 1rem;
            }

            .pricing__card-features {
                position: relative;
                z-index: 1;
                list-style: disc;
                padding-left: 1.5rem;
                margin-bottom: 2rem;
                flex-grow: 1;

                li {
                    font-family: 'Inter', sans-serif;
                    font-size: 18px;
                    line-height: 1.56;
                    color: rgba(255, 255, 255, 0.8);
                    margin-bottom: 0rem;
                }
            }

            .pricing__card-cta {
                position: relative;
                z-index: 1;
                display: inline-flex;
                align-items: center;
                gap: 20px;
                padding: 0;
                background: transparent;
                border: none;
                font-family: 'Inter', sans-serif;
                font-weight: 600;
                font-size: 1.5rem;
                line-height: 1;
                color: #fff;
                cursor: pointer;
                text-decoration: none;
                transition: opacity 0.2s ease;

                &:hover {
                    opacity: 0.8;
                }

                svg {
                    width: 24px;
                    height: 24px;
                }
            }
        }
    </style>

    <section class="section section--pricing">
        <div class="qp pricing">
            <div class="pricing__wrap">
                <div class="pricing__content">
                    <div class="pricing__icon">
                        <svg width="80" height="86" viewBox="0 0 80 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M53.75 37.325V76.9755C53.75 81.6007 49.9941 85.3142 45.6019 85.3142H7.9491C3.55691 85.3142 4.98542e-07 81.5686 4.46462e-07 76.9433L0 37.2928C-5.20798e-08 32.6676 3.58001 27.9937 7.9722 27.9937H45.625C50.0172 27.9937 53.75 25.2084 53.75 20.5832V5.91586C53.75 2.66636 56.2202 0.0321229 59.2672 0.0321229L74.4828 0C77.5299 -3.8482e-08 80 2.63424 80 5.88374V23.0382C80 26.2877 77.5529 27.9937 74.5059 27.9937H61.5232C57.1311 27.9937 53.75 32.6997 53.75 37.325Z" fill="#FCDA01"/>
                            <path d="M35 63.9856V68.2513H16V51.1885H35V55.4542" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M29 63.9855H38V55.4541H29L25 59.7198L29 63.9855Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M31 61.3199C31.8284 61.3199 32.5 60.6037 32.5 59.7202C32.5 58.8368 31.8284 58.1206 31 58.1206C30.1716 58.1206 29.5 58.8368 29.5 59.7202C29.5 60.6037 30.1716 61.3199 31 61.3199Z" fill="#1D252C"/>
                            <path d="M17 51.1886L31 44.79L33 51.1886" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p class="pricing__label">Transparent Partnership</p>
                    <h2>Simple (and fair) pricing with expert support</h2>
                    <div class="">
                        <p>Don't be held hostage by predatory pricing contracts. Quipli has one flat fee per location for unlimited users, every feature, and fast support based in the US.</p>
                    </div>
                    <p class="pricing__note">(And by the way... there's zero implementation fee.)</p>
                </div>

                <div class="pricing__card">
                    <p class="pricing__card-label">Quipli Subscription</p>
                    <p class="pricing__card-price">$6,000/year</p>
                    <p class="pricing__card-subtitle">Only pay more when you add a location</p>

                    <p class="pricing__card-included">Everything else? Included.</p>

                    <ul class="pricing__card-features">
                        <li>Unlimited users</li>
                        <li>Unlimited inventory</li>
                        <li>Driver's license scanning, website, and integrations covered</li>
                        <li>No implementation fee</li>
                        <li>No training or support fees</li>
                    </ul>

                    <a href="<?php echo home_url(); ?>/pricing/" class="pricing__card-cta">
                        <span>Get Started</span>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/right-caret.svg" alt="" width="12" height="27" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- EASY RENTAL MANAGEMENT SECTION -->
    <style>
        .easy-rental-section .feature__block {
            display: flex !important;
            flex-direction: column !important;
            gap: 2rem !important;
        }
        @media (min-width: 768px) {
            .easy-rental-section .feature__block {
                flex-direction: row !important;
                align-items: center !important;
                gap: 4rem !important;
            }
            .easy-rental-section .feature__block .block__img {
                flex: 1 !important;
                order: -1 !important;
            }
            .easy-rental-section .feature__block .block__content {
                flex: 1 !important;
                order: 2 !important;
            }
        }
        @media (max-width: 767px) {
            .easy-rental-section .feature__block .block__content {
                order: 1 !important;
            }
            .easy-rental-section .feature__block .block__img {
                order: 2 !important;
                margin-top: 2rem !important;
            }
        }
    </style>
    <section class="section section--feature moved-features easy-rental-section">
        <div class="qp feature">
            <div class="max-container">
                <div class="feature__wrap">
                    <div class="feature__block">
                        <div class="block__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/easy-workflows.png" alt="Quipli AI inventory management" loading="lazy" decoding="async">
                            </picture>
                        </div>
                        <div class="block__content">
                            <div class="block__icon">
                                <i>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1H1V10H13V1Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M23 1H17V10H23V1Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M7 14H1V23H7V14Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                        <path d="M23 14H11V23H23V14Z" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </div>
                            <p class="block__label">One Platform</p>
                            <h4>Easy Rental Management Workflows</h4>
                            <p>
                                Quipli unifies every part of your rental workflow - helping you eliminate chaos, serve customers faster, and grow with less effort.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TAB SECTION -->
    <style>
        .qp.tab .tab__nav li {
            svg, img {
                width: 20px;
                height: 20px;
                margin-right: 12px;
            }
        }

        @media (min-width:1199px) {
            .qp.tab .tab__nav li {
                border-radius: 1.25rem 1.25rem 0 0;

                &:first-child.is-active {
                    border-radius: 1.25rem 1.25rem 0 0
                }

                &.is-active {
                    background-color: var(--q-primary, #fcda01);
                    border-radius: 1.25rem 1.25rem 0 0;
                }

                a {
                    height: 100%;
                }

                span {
                    margin-left: 0rem;
                    font-size: 1rem;
                    text-align: center;
                }

                svg {
                    display: none;
                }
            }

            h2.q-desk {
                max-width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>

    <section class="section section--tab">
        <div class="max-container">
            <div class="sec-heading">
                <h2>Features that just make sense for construction equipment rental companies</h2>
            </div>
            <div class="qp tab">
                <div class="tab__nav">
                    <ul class="jsTabNav">
                        <li class="is-active">
                            <a href="#" data-category="filter-cat-1" role="button" aria-label="Read more about Accounting & Collectibles">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/qp-icon.svg" alt="" width="20" height="20" />
                                <span>Accounting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-category="filter-cat-2" role="button" aria-label="Read more about Online Storefront & Customer Portal">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/tag-icon.svg" alt="" width="20" height="20" />
                                <span>Customer Portal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-category="filter-cat-3" role="button" aria-label="Read more about Inventory Management">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/inventory-icon.svg" alt="" width="20" height="20" />
                                <span>Inventory Management</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab__body">
                    <div class="tab__list jsTabList">
                        <div class="tab__item filter-cat-1">
                            <div class="tab__content">
                                <div class="tab__wrapper">
                                    <article>
                                        <div class="tab__icon">
                                            <i>
                                                <svg width="20" height="20" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.33594 2.42163L21.3359 2.50496V23.1716L18.3359 21.1716L15.3359 23.1716L12.3359 21.1716L9.33594 23.1716L6.33594 21.1716L3.33594 23.1716V2.42163Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.33594 16.5049H12.0026" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M16 16.5049H17.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.3359 12.5049C13.9928 12.5049 15.3359 11.1617 15.3359 9.50488C15.3359 7.84803 13.9928 6.50488 12.3359 6.50488C10.6791 6.50488 9.33594 7.84803 9.33594 9.50488C9.33594 11.1617 10.6791 12.5049 12.3359 12.5049Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </div>
                                        <h3>Accounting & Collectibles</h3>
                                        <p>
                                            Sync invoices, taxes, and payments with QuickBooks Online in real time — so you can track rental income, stay on top of open balances, and get paid faster.
                                        </p>
                                        <a class="l-link l-link--icon" href="<?php echo home_url(); ?>/solutions/rental-invoicing-billings-payments-software/" title="Accounting & Collectibles">
                                            Learn more<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 15L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                            </svg></a>
                                    </article>
                                    <figure>
                                        <figcaption>Accounting & Collectibles</figcaption>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/png/qp-tab-content.png" alt="Accounting & Collectibles" loading="lazy" decoding="async" width="1288" height="934">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab__item filter-cat-2">
                            <div class="tab__content">
                                <div class="tab__wrapper">
                                    <article>
                                        <div class="tab__icon">
                                            <i>
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13 1H1V10H13V1Z" stroke="white" stroke-width="2" stroke-linejoin="round" />
                                                    <path d="M23 1H17V10H23V1Z" stroke="white" stroke-width="2" stroke-linejoin="round" />
                                                    <path d="M7 14H1V23H7V14Z" stroke="white" stroke-width="2" stroke-linejoin="round" />
                                                    <path d="M23 14H11V23H23V14Z" stroke="white" stroke-width="2" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </div>
                                        <h3>Online Storefront & Customer Portal</h3>
                                        <p>Let your customers browse equipment, place orders, extend rentals, and make payments, all from a mobile-friendly, self-service portal that's available 24/7.</p>
                                        <a class="l-link l-link--icon" href="<?php echo home_url(); ?>/solutions/rental-customer-portal/" title="Online Storefront & Customer Portal">
                                            Learn more<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 15L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                            </svg></a>
                                    </article>
                                    <figure>
                                        <figcaption>Online Storefront & Customer Portal</figcaption>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/customer-portal-tab-content.webp" alt="Online Storefront & Customer Portal" loading="lazy" decoding="async" width="1334" height="952">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab__item filter-cat-3">
                            <div class="tab__content">
                                <div class="tab__wrapper">
                                    <article>
                                        <div class="tab__icon">
                                            <i><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="white" />
                                                    <path d="M17.759 21.359C20.9 19.422 23 15.961 23 12C23 5.925 18.075 1 12 1C5.925 1 1 5.925 1 12C1 15.961 3.1 19.422 6.241 21.359" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
                                                    <path d="M15.141 17.105C16.854 16.048 18 14.16 18 12C18 8.686 15.314 6 12 6C8.686 6 6 8.686 6 12C6 14.16 7.146 16.048 8.859 17.105" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </div>
                                        <h3>Inventory Management</h3>
                                        <p>Monitor availability, maintenance status, and equipment utilization across your entire fleet, with full visibility into what's ready to rent and what's not.</p>
                                        <a class="l-link l-link--icon" href="<?php echo home_url(); ?>/solutions/equipment-inventory-management-software/" title="Inventory Management">
                                            Learn more<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 15L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                            </svg></a>
                                    </article>
                                    <figure>
                                        <figcaption>Inventory Management</figcaption>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/inventory-management-tab-content.webp" alt="Inventory Management" loading="lazy" decoding="async" width="1381" height="988">
                                        </picture>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTEGRATIONS & PROTECTIONS SECTION -->
    <style>
    .integrations-protections .sec-heading h2 {
        max-width: none;
    }
    .integrations-protections .l-link:hover {
        color: #FCDA01;
    }
    .integrations-protections .l-link:hover svg path {
        stroke: #FCDA01;
    }
    </style>
    <section class="section section--feature moved-features integrations-protections">
        <div class="qp feature">
            <div class="max-container">
                <div class="sec-heading">
                    <h2>Built-in integrations and protections for rental companies</h2>
                </div>
                <div class="feature__wrap">
                    <div class="feature__block image-right">
                        <div class="block__content">
                            <div class="block__icon">
                                <i>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/integrations-icon-v2.svg" alt="" width="24" height="24" />
                                </i>
                            </div>
                            <p class="block__label">Integrations</p>
                            <h4>Industry Integrations</h4>
                            <p>Quipli works natively with Rouse, Hapn, Boom & Bucket, Speciality Equipment Insurance Services, and more.</p>
                            <a class="l-link l-link--icon" href="<?php echo home_url(); ?>/integrations" title="See all integrations">
                                See all integrations<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                        <div class="block__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/industry-integrations.webp" alt="Quipli Industry Integrations" loading="lazy" decoding="async">
                            </picture>
                        </div>
                    </div>
                    <div class="feature__block image-left">
                        <div class="block__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/webp/equipment-theft-prevention.webp" alt="Equipment Theft Prevention" loading="lazy" decoding="async">
                            </picture>
                        </div>
                        <div class="block__content">
                            <div class="block__icon">
                                <i>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home-v2/theft-prevention-icon.svg" alt="" width="24" height="24" />
                                </i>
                            </div>
                            <p class="block__label">Protection</p>
                            <h4>Equipment Theft Prevention</h4>
                            <p>Easily scan customer driver's licenses to verify identity and validate customer credit cards - in-person or remotely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO SECTION -->
    <section class="section section--who">
        <div class="sec-heading">
            <h2>Who our rental software is built for</h2>
        </div>
        <div class="qp who">
            <div class="container">
                <div class="who__wrap">
                    <div class="who__block">
                        <div class="block__content">
                            <div class="block__head">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/who-screwdriver-icon.svg" alt="Screwdriver Icon" loading="lazy" width="36" height="36" />
                                </figure>
                                <h4>General Tool and Light Equipment</h4>
                            </div>
                            <div class="block__detail">
                                <ul>
                                    <li>
                                        For rental companies offering everything from hand tools
                                        and ladders to compact machines and attachments.
                                    </li>
                                    <li>
                                        Save hours every week, reduce paperwork and mind-numbing
                                        admin time. Get your life back, and spend more time
                                        adding value to your customers and growing your
                                        business.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block__footer">
                            <a class="q-btn q-btn--wte" href="<?php echo home_url(); ?>/general-tool-rental-software" title="General Tools">Learn more</a>
                            <figure class="block__img">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/who-tool-img-mob.webp" />
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/who-tool-img-mob.jpeg" />
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/who-tool-img-mob.jpeg" alt="General Tools Image" width="624" height="320" loading="lazy" decoding="async" width="1200" height="847">
                                </picture>
                            </figure>
                        </div>
                    </div>
                    <div class="who__block">
                        <div class="block__content">
                            <div class="block__head">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/who-equip-icon.svg" alt="Equipment Icon" width="36" height="36" loading="lazy" />
                                </figure>
                                <h4>Heavy Equipment</h4>
                            </div>
                            <div class="block__detail">
                                <ul>
                                    <li>
                                        Excavators, loaders, aerial lifts, telehandlers, and
                                        more, for those serving heavy equipment contractors and
                                        large-scale construction projects, Quipli is ideal for
                                        you.
                                    </li>
                                    <li>
                                        Gone are the days where Service & Repair records and
                                        schedules are managed in Excel or outdated software.
                                        Quipli's solution ties it all together in a seamless,
                                        cloud-based solution so you can run your business
                                        smoothly, even when not in the office.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block__footer">
                            <a class="q-btn q-btn--wte" href="<?php echo home_url(); ?>/construction-and-heavy-equipment-rental-software/" title="Heavy Equipment">Learn more</a>
                            <figure class="block__img">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/who-equip-img-mob.webp" />
                                    <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/who-equip-img-mob.jpeg" />
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/who-equip-img-mob.jpeg" alt="Heavy Equipment" width="624" height="320" loading="lazy" decoding="async" width="1200" height="847">
                                </picture>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MOST RECENT POSTS -->
    <?php
    $recent_post_types = get_post_types(array('public' => true), 'names');
    unset($recent_post_types['page']);

    $most_recent_args = array(
        'post_type'      => $recent_post_types,
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'has_password'   => false,
    );

    // Handle podcast date ordering
    if (in_array('podcast', $recent_post_types)) {
        $acf_field_key = 'date';
        $most_recent_args['meta_query'] = array(
            'relation' => 'OR',
            array('key' => $acf_field_key, 'compare' => 'EXISTS'),
            array('key' => $acf_field_key, 'compare' => 'NOT EXISTS'),
        );
        $most_recent_args['orderby']  = array('meta_value_num' => 'DESC', 'date' => 'DESC');
        $most_recent_args['meta_key'] = $acf_field_key;
    }

    $most_recent_query = new WP_Query($most_recent_args);
    ?>

    <?php if ($most_recent_query->have_posts()) : ?>
        <section class="section section--most-recent">
            <div class="max-container">
            <div class="sec-heading">
                <h2>Articles, tools, and expert advice for construction equipment rental companies</h2>
            </div>
                <div class="blog-sec-title">
                    <h3 class="sec-title">Most Recent</h3>
                    <a href="<?php echo home_url(); ?>/resources/podcast/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                        <span class="view-all">View All</span>
                    </a>
                </div>
                <div class="blog-posts-grid">
                    <?php while ($most_recent_query->have_posts()) : $most_recent_query->the_post(); ?>
                        <div class="related-posts-link">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="qp-featured-img">
                                    <?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
                                </a>
                            <?php endif; ?>

                            <div class="qp-related-content">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    foreach ($categories as $cat) {
                                        if ($cat->slug !== 'uncategorized') {
                                            echo '<a class="event-category" href="' . esc_url(get_category_link($cat->term_id)) . '">'
                                                . esc_html($cat->name) . '</a>';
                                            break;
                                        }
                                    }
                                }
                                $date = get_the_date();
                                $post_type = get_post_type();
                                if ($post_type == 'podcast') {
                                    $date = get_field('date');
                                }
                                ?>
                                <h4 class="related-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <p>
                                    <?php
                                    $excerpt = get_the_content();
                                    $excerpt = preg_replace('/<h1\b[^>]*>.*?<\/h1>/is', '', $excerpt);
                                    $excerpt = preg_replace('/<h2\b[^>]*>.*?<\/h2>/is', '', $excerpt);
                                    $excerpt = wp_strip_all_tags($excerpt);
                                    $limit = 80;
                                    if (strlen($excerpt) > $limit) {
                                        $excerpt = substr($excerpt, 0, $limit) . '...';
                                    }
                                    echo esc_html($excerpt);
                                    ?>
                                </p>
                                <div class="event-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                        <line x1="16" x2="16" y1="2" y2="6"></line>
                                        <line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                    </svg>
                                    <?php echo $date; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- LATEST BLOGS -->
    <!-- BLOGS SECTION -->
    <style>
    .qp.blogs h2 {
        max-width: 100% !important;
        width: 100% !important;
    }
    </style>
    <?php
    $latest_posts_query = array(
        'post_type' => 'post',
        'orderby' => array('date' => 'DESC'),
        'posts_per_page' => 3
    );
    $latest_posts = new WP_Query($latest_posts_query);
    ?>

    <?php if ($latest_posts->have_posts()) : ?>
        <section class="section section--blogs">
            <div class="qp blogs">
                <div class="max-container">
                    <h2>Hear Why Quipli is the #1 Rated Construction Equipment Rental Software</h2>
                    <div class="blogs__row">
                        <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                            <div class="blog__item">
                                <div class="qp blog">
                                    <div class="blog__image">
                                        <span class="layer">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog__vector.svg" alt="vector" height="107" width="107"></span>
                                        <figure>
                                            <?php
                                            $img_url = get_template_directory_uri() . '/assets/img/default-quipli-placeholder.jpg';
                                            if (get_the_post_thumbnail_url(null, 'large')) {
                                                $img_url = get_the_post_thumbnail_url(null, 'large');
                                            }
                                            ?>
                                            <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
                                        </figure>
                                    </div>
                                    <article>
                                        <span class="l-tag">Blog</span>
                                        <h4><?php the_title(); ?></h4>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </article>
                                    <a class="blog__link" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- REVIEWS SECTION -->
    <section id="reviews-sec">
        <div class="max-container">
            <div class="sec-heading">
                <?php
                $customers_reviews = get_field("customers_reviews");
                if (!$customers_reviews) {
                    $customers_reviews = get_field("customers_reviews", 13228);
                }
                $heading = $customers_reviews['heading'];
                $desc = $customers_reviews['desc'];
                $customers_reviews_list = $customers_reviews['reviews'];
                ?>
                <h2 style="text-wrap: pretty;">Trusted by equipment rental leaders across the US and Canada, big and small.</h2>
            </div>
            <div class="qp-reviews-cards-wrapper">
                <div class="qp-reviews-cards">
                    <?php if ($customers_reviews && ! empty($customers_reviews['reviews'])) : ?>
                        <?php foreach ($customers_reviews['reviews'] as $review) :
                            $color        = $review['color'];
                            $review_from  = $review['review_from'];
                            $review_text  = $review['review'];
                            $user_info    = $review['user'];
                            $user_name    = $user_info['name'];
                            $user_company = $user_info['company'];
                            $user_avatar  = $user_info['avatar'];
                        ?>
                            <div class="qp-review-card <?php echo $color; ?>">
                                <div class="review__content">
                                    <div class="review__blockquote">
                                        <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                                        </svg>
                                        <img src="<?php echo $review_from; ?>" alt="<?php "Reviewed On" ?>" style="filter: none !important;" />
                                    </div>
                                    <p><?php echo $review_text; ?></p>
                                </div>
                                <div class="review__footer">
                                    <div class="quote-owner">
                                        <?php if ($user_avatar) : ?>
                                            <img src="<?php echo $user_avatar; ?>" alt="<?php echo $user_name; ?>" />
                                        <?php else : ?>
                                            <span class="owner-letters">
                                                <?php
                                                $owner_name = explode(" ", $user_name);
                                                echo strtoupper(substr($owner_name[0], 0, 1) . substr($owner_name[1], 0, 1));
                                                ?>
                                            </span>
                                        <?php endif; ?>
                                        <div class="owner-details">
                                            <h4><?php echo $user_name; ?></h4>
                                            <p><?php echo $user_company; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="qp-reviews-button">
                <button id="reviews-toggler" class="collapsed">
                    <span>See <em>more</em> reviews</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8.5L8 1.5L15 8.5" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- TIME/STAT SECTION -->
    <style>
        .time-block {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 100%;
            background: var(--q-secondary);
            color: #fff;
            border-radius: .75rem;
            margin: auto;
            max-width: 68rem;
            padding: 3.5rem 3rem;

            @media (max-width:900px) {
                padding: 1.5rem 3rem;
                gap: 4rem;
            }

            @media (max-width:640px) {
                flex-direction: column;
                gap: 2rem;
                padding: 3rem 1.5rem;
                text-align: center;
            }

            svg {
                position: absolute;
                pointer-events: none;
                width: 200px;
                height: auto;

                &.pat-before {
                    top: 0;
                    left: 20%;
                    transform: translateY(-60%);
                }

                &.pat-after {
                    bottom: 0;
                    right: 30%;
                    width: 150px;
                    transform: translateY(60%);
                }


                @media (max-width:900px) {
                    width: 100px;
                }

            }

            .tm-content {
                flex-shrink: 0;

                @media (max-width:640px) {
                    flex-direction: column;
                    align-items: center;
                }

                p {
                    line-height: 1.3;
                    font-size: 1rem;
                    font-weight: 400;

                    &.num {
                        font-size: 2.5rem;
                        font-weight: 600;
                    }
                }
            }

            .text {
                line-height: 1.3;
                max-width: max(50%, 600px);
                font-weight: 400;

                span {
                    animation: 1.5s highlightprimary .5s 1 normal forwards;
                    background-color: none;
                    background: linear-gradient(90deg, rgba(var(--q-primary-rgb), .2) 50%, #fff0 50%);
                    background-size: 200% 100%;
                    background-position: 100% 0
                }
            }
        }
    </style>


    <!-- PLATFORM SECTION -->
    <style>
        .platform-image {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -2.5rem;
            max-width: 100%;

            img {
                max-width: max(75%, 800px);
                width: 100%;
            }
        }
    </style>


    <!-- FOOTER CTA -->
    <style>
    .qp-footer-cta .hero-buttons .btn-secondary {
        background: #fff;
        color: #1D252C;
        padding: 0 40px;
        height: 60px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 18px;
        display: inline-flex;
        align-items: center;
        gap: 16px;
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1px solid #E5E7EB;
    }
    .qp-footer-cta .hero-buttons .btn-secondary:hover {
        background: #f5f5f5;
    }
    </style>
    <section>
        <div class="max-container">
            <div class="qp-footer-cta">
                <h2>Don’t let your software keep you trapped in the past. Get Quipli.</h2>
                <div class="cta-buttons hero-buttons">
                    <a class="q-btn q-btn--xl q-btn-secondary" href="<?php echo home_url(); ?>/book-a-demo" title="Book a Demo">Book a Demo</a>
                    <a class="btn-secondary" href="<?php echo home_url(); ?>/tour" title="Take a Tour">
                        Take a Tour
                        <svg class="btn-arrow" width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L6 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="section section--faq">
        <div class="qp faq">
            <div class="container">
                <div class="faq__row">
                    <div class="faq__header">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="faq__col-accordion">
                        <div class="faq__accordion accordion">
                            <div class="accordion__wrap no-more">
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="true" aria-controls="faq_group_1">
                                            What types of rental businesses is Quipli a good fit for?
                                        </button>
                                    </div>
                                    <div class="accordion__content is__open" aria-hidden="false" id="faq_group_1">
                                        <p>
                                            Quipli was custom built for heavy equipment and general tool rental companies. Other recreational rental companies like boat and golf cart rental, event rental or other non-construction equipment rental companies are generally not a good fit for Quipli.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_2">
                                            Does Quipli work with multi-location rental companies?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_2">
                                        <p>
                                            Yes! Our robust rental system can easily support rental business with multiple rental locations. You can easily share inventory, view reports, and track equipment statuses by location from anywhere in the world.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_3">
                                            How much does Quipli cost?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_3">
                                        <p>
                                            The subscription fee for Quipli is a simple $6,000 flat fee per rental location per year. No implementation fees, unlimited users, and unlimited inventory. You only pay more when you add another location.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_4">
                                            Can my rental customers reserve and pay for rentals fully online?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_4">
                                        <p>
                                            Yes - absolutely. Quipli's Customer Portal and E-Commerce Storefront integrates real time with your backend inventory, allowing customers to automatically create rental requests and pay for their orders directly online. They can also upload COIs, licenses, credit apps. No more back and forth or shuffling through different systems.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_5">
                                            Can you import my data from our existing software?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_5">
                                        <p>
                                            Yes! We can import data from your existing software platform into Quipli. Our dedicated team of onboarding specialists will guide you through this process and have you up and running in no time.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_6">
                                            Do you support on-account billing and purchase orders?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_6">
                                        <p>
                                            Yes, Quipli fully supports on-account billing and purchase order workflows — which is especially important for rental businesses serving contractors, construction firms, and other B2B customers. You can create customer accounts with defined credit limits, set payment terms (e.g., Net 30), and allow those customers to submit POs directly through the system.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_7">
                                            Can I send quotes?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_7">
                                        <p>
                                            Yes. Quipli allows for easy quote creation and generation. You can create quotes and send them via email for your customer to review and accept digitally.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_8">
                                            Do you integrate with Quickbooks?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_8">
                                        <p>
                                            Yes, we have a direct, real-time integration with QuickBooks Online. Our team can help you set this up to match your existing configuration.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_9">
                                            Is Quipli mobile-friendly?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_9">
                                        <p>
                                            Yes, Quipli is fully mobile-responsive and designed to work seamlessly across any device — phone, tablet, or desktop — without needing a separate app download. Whether you're in the office, out in the yard, or on a job site, your team can create rental contracts, check equipment availability, upload photos, manage deliveries, or collect digital signatures right from their phone.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_10">
                                            Do you have inventory management capabilities?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_10">
                                        <p>
                                            Yes. Quipli allows for inventory management in a variety of ways. You can assign units for asset tracking to avoid over/double booking. There is a calendar view to check available inventory. The dashboard helps you prep what's getting picked up or delivered today and what's past due.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_11">
                                            Do you track service and maintenance?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_11">
                                        <p>
                                            Yes! This was our most requested new module, and we released it in February 2023. Track scheduled maintenance and repairs, costs, notes, and future planned services. A game-changer for more established operators.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion__item">
                                    <div class="accordion__title">
                                        <button type="button" aria-expanded="false" aria-controls="faq_group_12">
                                            Does Quipli offer a website builder?
                                        </button>
                                    </div>
                                    <div class="accordion__content" aria-hidden="true" id="faq_group_12">
                                        <p>
                                            Yes. Quipli's rental business software powers your website. You are able to edit your homepage, locations, products, category pages and more within Quipli's Content Management System – from which your website, product pages, and category pages are all updated. No coding is necessary.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>