<?php
/*
Template Name: Ad
Template Post Type: page
 */

get_header('home', ['nav' => 'hidden']);
?>

<main class="quipli main ad-page">
    <section class="page-hero dark-bg">
        <div class="max-container">
            <div class="pattern-bg pattern-br-inwards">
                <div class="page-hero-inner">
                    <div class="page-hero-contents">
                        <?php
                        $hero = get_field('ad_hero_section');
                        if( $hero ): ?>
                            <div class="page-heading left-aligned">
                                <span style="font-size: 1.6rem; padding-bottom: 1.4rem;"><?php echo wp_kses_post($hero['ad_preheadline_active']); ?></span>
                                <h1 class="qp-highlighted-text"><?php echo wp_kses_post($hero['ad_headline_active']); ?></h1>
                                <p style="--max-w: 400px"><?php echo wp_kses_post($hero['ad_subheadline_active']); ?></p>
                                <!--<a class="q-btn q-btn--xl" href="<?php echo home_url(); ?>/book-a-demo" title="Book a Demo">Book a Demo</a>-->
                                <?php get_template_part('template-parts/cta-buttons'); ?>
                            </div>
                        
                        <?php endif; ?>
                        
                        <?php get_template_part('template-parts/solutions/ratings-light'); ?>
                    </div>
                    <picture class="page-hero-image align-top" style="--img-max-w: 5rem; --img-mr: -6rem">
                        <source media="(min-width: 768px)"
                            srcset="https://quipli.com/wp-content/uploads/2024/10/quipli-ad.png" />
                        <source media="(min-width: 768px)"
                            srcset="https://quipli.com/wp-content/uploads/2024/10/quipli-ad.png" />
                        <source
                            srcset="https://quipli.com/wp-content/uploads/2024/10/quipli-ad.png" />
                        <source
                            srcset="https://quipli.com/wp-content/uploads/2024/10/quipli-ad.png" />
                        <img src="http://quipli.com/wp-content/uploads/2024/10/quipli-ad.png"
                            alt="" loading="lazy" decoding="async" width="1200" height="852">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/home/rentals'); ?>

    <section>
        <div class="max-container">
            <?php
            $benefits = get_field('ad_benefits_section');
            if( $benefits ): ?>
                <div class="sec-heading">
                    <h2><?php echo wp_kses_post($benefits['ad_headline_active']); ?></h2>
                </div>
                <div class="qp-features-blocks">
                    <div class="qp-feature-block">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    								<path d="M2.42012 14.7133C2.28394 14.4977 2.21584 14.3898 2.17772 14.2235C2.14909 14.0986 2.14909 13.9016 2.17772 13.7767C2.21584 13.6104 2.28394 13.5026 2.42012 13.2869C3.54553 11.505 6.8954 7.00012 12.0004 7.00012C17.1054 7.00012 20.4553 11.505 21.5807 13.2869C21.7169 13.5026 21.785 13.6104 21.8231 13.7767C21.8517 13.9016 21.8517 14.0986 21.8231 14.2235C21.785 14.3898 21.7169 14.4977 21.5807 14.7133C20.4553 16.4953 17.1054 21.0001 12.0004 21.0001C6.8954 21.0001 3.54553 16.4953 2.42012 14.7133Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M12.0004 17.0001C13.6573 17.0001 15.0004 15.657 15.0004 14.0001C15.0004 12.3433 13.6573 11.0001 12.0004 11.0001C10.3435 11.0001 9.0004 12.3433 9.0004 14.0001C9.0004 15.657 10.3435 17.0001 12.0004 17.0001Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M11.8828 6.00012L11.8828 3.00012" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M17.1562 7.66931L18.809 5.16562" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M6.60156 7.66931L4.94882 5.16562" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M20.7578 11.3846L22.8819 9.72895" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M3.125 11.3846L1.00086 9.72895" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    							</svg>
    
                            </div>
                            <h3><?php echo wp_kses_post($benefits['benefit_headline_active_01']); ?></h3>
                            <p><?php echo wp_kses_post($benefits['benefit_subheadline_active_01']); ?></p>
                        </div>
                        <div class="qp-feature-image">
                            <picture>
    							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.webp" />
    							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.png" />
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.webp" />
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.png" />
    							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.png" alt="Inventory Management" loading="lazy" decoding="async" width="1453" height="1129">
    						</picture>
                        </div>
                    </div>
    
                    <div class="qp-feature-block qp-reverse">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    								<path d="M23 10.5L19.7219 13.5455L16.6757 10.5M19.9443 13.0909C19.9773 12.7924 19.9943 12.4891 19.9943 12.1818C19.9943 7.66312 16.3291 4 11.8079 4C8.96953 4 6.46857 5.44366 5 7.63636M11.8079 7.63636V12.1818L14.5367 14" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    								<path d="M0.98632 13.4647L4.67637 10.8817L7.68644 13.9433M4.43577 11.3176C4.38881 11.6093 4.35739 11.9066 4.34242 12.2086C4.12239 16.6495 7.54407 20.4279 11.985 20.6479C14.7729 20.7861 17.2997 19.489 18.8489 17.4055" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
    							</svg>
    
                            </div>
                            <h3><?php echo wp_kses_post($benefits['benefit_headline_active_02']); ?></h3>
                            <p><?php echo wp_kses_post($benefits['benefit_subheadline_active_02']); ?></p>
                        </div>
                        <div class="qp-feature-image">
                            <picture>
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.webp" />
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.png" />
    							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/shopping-cart.png" alt="Fast and seamless point of sale" loading="lazy" decoding="async" width="1453" height="1129">
    						</picture>
                        </div>
                    </div>
    
                    <div class="qp-feature-block">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    								<path d="M25.3 11.9033C25.3007 12.129 25.2327 12.3491 25.1055 12.5358C24.9784 12.7225 24.7982 12.8671 24.5886 12.9528L24.5832 12.955L24.5832 12.955C24.4433 13.009 24.2944 13.037 24.1443 13.0376L24.1418 13.0376C23.84 13.0364 23.5487 12.9227 23.3282 12.7178L23.3228 12.7128L23.3229 12.7127L20.7149 10.1671L14.6793 16.0463L14.6781 16.0475C14.4588 16.2586 14.1645 16.3757 13.8594 16.3757C13.5543 16.3757 13.2599 16.2586 13.0407 16.0475L13.0393 16.0462L9.57438 12.667L2.68169 19.3796L2.67668 19.3845L2.67663 19.3845C2.45613 19.5894 2.16483 19.7031 1.86302 19.7043L1.85783 19.7043L1.85783 19.7043C1.55831 19.7003 1.26972 19.5877 1.04902 19.3863L1.04088 19.3789L1.04102 19.3788C0.82356 19.1653 0.7 18.8751 0.7 18.571C0.7 18.2668 0.82356 17.9766 1.04102 17.7631L1.04205 17.7621L1.04205 17.7621L8.75479 10.2621L8.75582 10.2611C8.97505 10.05 9.26942 9.93294 9.57453 9.93294C9.87963 9.93294 10.174 10.05 10.3932 10.2611L10.3946 10.2624L13.8597 13.6418L19.0739 8.57137L16.4679 6.04685L16.4607 6.03981L16.4608 6.03969C16.3051 5.87834 16.1987 5.67648 16.1551 5.45709C16.1115 5.23766 16.1328 5.01078 16.2161 4.80303L16.22 4.79331L16.2202 4.79338C16.311 4.58802 16.4609 4.4142 16.6502 4.2923L16.8126 4.54453M25.3 11.9033V11.9043H25L25.3 11.9033ZM25.3 11.9033V5.23763C25.3 4.9343 25.176 4.64515 24.9581 4.4333C24.7406 4.22172 24.4472 4.1043 24.143 4.1043L17.2873 4.10429L17.2858 4.1043C17.0603 4.10541 16.8394 4.17045 16.6502 4.2923L16.8126 4.54453M16.8126 4.54453C16.6718 4.6352 16.5613 4.76385 16.4946 4.91471L17.2873 4.4043C17.1184 4.40513 16.9534 4.45387 16.8126 4.54453ZM24.4751 12.6751C24.3694 12.7159 24.2568 12.7371 24.143 12.7376L24.4751 12.6751Z" fill="#1D252C" stroke="#1D252C" stroke-width="0.6"/>
    							</svg>
    
                            </div>
                            <h3><?php echo wp_kses_post($benefits['benefit_headline_active_03']); ?></h3>
                            <p><?php echo wp_kses_post($benefits['benefit_subheadline_active_03']); ?></p>
                        </div>
                        <div class="qp-feature-image">
    						<picture>
    							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.webp">
    							<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png">
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.webp">
    							<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking-mob.png">
    							<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/smart-booking.png" alt="Smart booking" loading="lazy" decoding="async" width="1453" height="1129">
    						</picture>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
	
	<section>
		<div class="max-container">
			<div class="qp-footer-cta stats-info" style="background-color: var(--q-secondary); color: var(--q-white);">
				<div class="sec-heading">
                	<h2>Partner with the platform trusted by hundreds</h2>
					<p>These are just some of the ways rental businesses thrive when they switch to Quipli.</p>
				</div>
				<div class="stats-grid">
					<div class="stats-block yellow">
						<p>
							250,000+
						</p>
						<span>Of rental orders processed</span>
					</div>
					<div class="stats-block">
						<p>
							$100M
						</p>
						<span>Rental revenue for customers</span>
					</div>
					<div class="stats-block white">
						<p>
							4.9
							<span>out of</span>
							5
						</p>
						<span>Average user rating</span>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section>
        <div class="max-container">
            <?php
            $features = get_field('ad_features_section');
            if( $features ): ?>
            <div class="sec-heading">
                <h2><?php echo wp_kses_post($features['ad_headline_active']); ?></h2>
			</div>

            <div class="qp-features-horizontal ads-features">
                    <!-- First Row -->
                    <div class="qp-feature-block-horizontal qp-feature-wider">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                    <use xlink:href="#inventory" />
                                </svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_01']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_01']); ?></p>
                        </div>
                        <div class="qp-feature-image">
                            <picture>
								<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.webp" />
								<source srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal-mob.png" />
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/realtime-cal.png" alt="Inventory Management" loading="lazy" decoding="async" width="500" height="600">
							</picture>
                        </div>
                    </div>

                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_3620_3247)">
									<path d="M11.5 5H11.9344C14.9816 5 16.5053 5 17.0836 5.54729C17.5836 6.02037 17.8051 6.71728 17.6702 7.39221C17.514 8.17302 16.2701 9.05285 13.7823 10.8125L9.71772 13.6875C7.2299 15.4471 5.98599 16.327 5.82984 17.1078C5.69486 17.7827 5.91642 18.4796 6.41636 18.9527C6.99474 19.5 8.51836 19.5 11.5656 19.5H12.5M8 5C8 6.65685 6.65685 8 5 8C3.34315 8 2 6.65685 2 5C2 3.34315 3.34315 2 5 2C6.65685 2 8 3.34315 8 5ZM22 19C22 20.6569 20.6569 22 19 22C17.3431 22 16 20.6569 16 19C16 17.3431 17.3431 16 19 16C20.6569 16 22 17.3431 22 19Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									</g>
									<defs>
									<clipPath id="clip0_3620_3247">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
									</defs>
								</svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_02']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_02']); ?></p>
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                    <use xlink:href="#service-and-repair" />
                                </svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_03']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_03']); ?></p>
                        </div>
                    </div>

                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                    <use xlink:href="#booking" />
                                </svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_04']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_04']); ?></p>
                        </div>
                    </div>

                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                    <use xlink:href="#invoicing" />
                                </svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_05']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_05']); ?></p>
                        </div>
                    </div>

                    <!-- Third Row -->
                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="20px" height="20px" viewBox="0 0 20 20">
                                    <use xlink:href="#point-of-sale" />
                                </svg>
                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_06']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_06']); ?></p>
                        </div>
                    </div>

                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_3620_3292)">
									<path d="M7.5 20.999H1V0.999023H23V10.5" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M5 5C5.55228 5 6 4.55228 6 4C6 3.44772 5.55228 3 5 3C4.44772 3 4 3.44772 4 4C4 4.55228 4.44772 5 5 5Z" fill="#1D252C"/>
									<path d="M15.5 17.6646C16.3284 17.6646 17 16.993 17 16.1646C17 15.3361 16.3284 14.6646 15.5 14.6646C14.6716 14.6646 14 15.3361 14 16.1646C14 16.993 14.6716 17.6646 15.5 17.6646Z" fill="#1D252C"/>
									<path d="M9 5C9.55228 5 10 4.55228 10 4C10 3.44772 9.55228 3 9 3C8.44772 3 8 3.44772 8 4C8 4.55228 8.44772 5 9 5Z" fill="#1D252C"/>
									<path d="M1 6.99902H23" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M13.8994 20.4227L14.2582 21.2113C14.3649 21.4461 14.539 21.6456 14.7594 21.7856C14.9799 21.9255 15.2371 22 15.5 22C15.7629 22 16.0201 21.9255 16.2406 21.7856C16.461 21.6456 16.6351 21.4461 16.7418 21.2113L17.1006 20.4227C17.2284 20.1428 17.4433 19.9095 17.7147 19.756C17.9878 19.6021 18.3038 19.5365 18.6174 19.5687L19.4955 19.66C19.7569 19.687 20.0207 19.6394 20.2549 19.5228C20.4891 19.4062 20.6837 19.2258 20.815 19.0033C20.9465 18.781 21.0092 18.5262 20.9954 18.2697C20.9816 18.0133 20.8919 17.7663 20.7372 17.5587L20.2173 16.8607C20.0322 16.6103 19.9333 16.3089 19.9349 16C19.9348 15.692 20.0347 15.3918 20.2201 15.1427L20.74 14.4447C20.8946 14.2371 20.9843 13.99 20.9981 13.7336C21.0119 13.4772 20.9493 13.2223 20.8178 13C20.6864 12.7775 20.4918 12.5971 20.2576 12.4805C20.0234 12.364 19.7596 12.3163 19.4982 12.3433L18.6201 12.4347C18.3065 12.4668 17.9906 12.4013 17.7174 12.2473C17.4455 12.093 17.2305 11.8584 17.1034 11.5773L16.7418 10.7887C16.6351 10.5539 16.461 10.3544 16.2406 10.2144C16.0201 10.0744 15.7629 9.99996 15.5 10C15.2371 9.99996 14.9799 10.0744 14.7594 10.2144C14.539 10.3544 14.3649 10.5539 14.2582 10.7887L13.8994 11.5773C13.7722 11.8584 13.5572 12.093 13.2853 12.2473C13.0122 12.4013 12.6962 12.4668 12.3826 12.4347L11.5018 12.3433C11.2404 12.3163 10.9766 12.364 10.7424 12.4805C10.5082 12.5971 10.3136 12.7775 10.1822 13C10.0507 13.2223 9.98807 13.4772 10.0019 13.7336C10.0157 13.99 10.1054 14.2371 10.26 14.4447L10.7799 15.1427C10.9653 15.3918 11.0652 15.692 11.0651 16C11.0652 16.308 10.9653 16.6082 10.7799 16.8573L10.26 17.5553C10.1054 17.7629 10.0157 18.01 10.0019 18.2664C9.98807 18.5228 10.0507 18.7777 10.1822 19C10.3137 19.2223 10.5083 19.4027 10.7425 19.5192C10.9767 19.6358 11.2404 19.6835 11.5018 19.6567L12.3799 19.5653C12.6935 19.5332 13.0094 19.5987 13.2826 19.7527C13.5555 19.9066 13.7715 20.1412 13.8994 20.4227Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									</g>
									<defs>
									<clipPath id="clip0_3620_3292">
									<rect width="24" height="24" fill="white"/>
									</clipPath>
									</defs>
								</svg>

                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_07']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_07']); ?></p>
                        </div>
                    </div>

                    <div class="qp-feature-block-horizontal">
                        <div class="qp-feature-content">
                            <div class="qp-icon-holder light">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.33663 12.8564L6.19307 11L13 17.8069L11.1436 19.6633C10.2153 20.5916 6.81188 22.1386 4.33663 19.6633C1.86139 17.1881 3.40842 13.7847 4.33663 12.8564Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M2 22L4.5 19.5" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M19.6634 11.1436L17.8069 13L11 6.1931L12.8564 4.33667C13.7847 3.4084 17.1881 1.86137 19.6634 4.33667C22.1386 6.81191 20.5916 10.2153 19.6634 11.1436Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M17 10.5L14 13.5" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M13.5 7L10.5 10" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
									<path d="M22 2L19.5 4.5" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
								</svg>

                            </div>
                            <h3><?php echo wp_kses_post($features['feature_headline_active_08']); ?></h3>
                            <p><?php echo wp_kses_post($features['feature_subheadline_active_08']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('template-parts/footer-cta', null, ["title" => "Ready to Unify Your Online &amp; In-store Rental Operations?"]); ?>

	
    <section>
        <div class="max-container">
            <div class="qp-related-posts">
                <div class="sec-heading">
                    <h2>Why Our Customers Love Quipli</h2>
                </div>
                <div class="qp-news-posts-blocks qp-feedbacks">
                    <!-- First Video Block -->
                    <div class="news-posts-link">
                        <a href="https://www.youtube.com/watch?v=162dzqw9UrY" class="qp-featured-img video-trigger" data-lity>
                            <img class="featured-image" src="https://quipli.com/wp-content/uploads/2024/11/Arapahoe.jpg" loading="lazy" />
                            <div class="play-button-overlay">
                                <div>
                                    <div></div>
                                </div>
                            </div>
                        </a>
                        <div class="review__content">
                            <div class="review__blockquote">
                                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.8 31.6667C11.7714 31.6667 13.9048 31.0592 15.2 29.8441C16.4952 28.6291 17.1429 26.4648 17.1429 23.3513C17.1429 20.0859 16.5714 17.9596 15.4286 16.9724C14.3619 15.9852 12.4952 15.4916 9.82857 15.4916C9.52381 15.4916 9.21905 15.4916 8.91429 15.4916C8.68571 15.4916 8.49524 15.5296 8.34286 15.6055C8.64762 12.7958 9.40952 10.6315 10.6286 9.11271C11.9238 7.51798 13.6762 6.56874 15.8857 6.26499L14.8571 0C9.75238 0.759392 5.98095 2.84772 3.54286 6.26499C1.18095 9.68225 0 14.2766 0 20.048C0 24.4524 0.647619 27.49 1.94286 29.1607C3.31429 30.8313 5.6 31.6667 8.8 31.6667ZM31.6571 31.6667C34.6286 31.6667 36.7619 31.0592 38.0571 29.8441C39.3524 28.6291 40 26.4648 40 23.3513C40 20.0859 39.4286 17.9596 38.2857 16.9724C37.219 15.9852 35.3524 15.4916 32.6857 15.4916C32.381 15.4916 32.0762 15.4916 31.7714 15.4916C31.5429 15.4916 31.3524 15.5296 31.2 15.6055C31.5048 12.7958 32.2667 10.6315 33.4857 9.11271C34.781 7.51798 36.5333 6.56874 38.7429 6.26499L37.7143 0C32.6095 0.759392 28.8381 2.84772 26.4 6.26499C24.0381 9.68225 22.8571 14.2766 22.8571 20.048C22.8571 24.4524 23.5048 27.49 24.8 29.1607C26.1714 30.8313 28.4571 31.6667 31.6571 31.6667Z" fill="#FCDA01"/>
								</svg>
                            </div>
                            <p>Customers absolutely love (Quipli). I mean, it is streamlined for them. They can go on our website and they can start and finish without getting stuck, without having to call us, and without any surprises.</p>
                        </div>
                        <div class="qp-news-title">
                            <h4 class="news-post-title">Evan Moore</h4>
                            <span class="tag">Arapahoe Rental</span>
                        </div>
                    </div>

                    <!-- Second Video Block -->
                    <div class="news-posts-link">
                        <a href="https://www.youtube.com/watch?v=yHX6lvW6Wmg" class="qp-featured-img video-trigger" data-lity>
                            <img class="featured-image" src="https://quipli.com/wp-content/uploads/2024/11/RST.jpg" loading="lazy" />
                            <div class="play-button-overlay">
                                <div>
                                    <div></div>
                                </div>
                            </div>
                        </a>
                        <div class="review__content">
                            <div class="review__blockquote">
                                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.8 31.6667C11.7714 31.6667 13.9048 31.0592 15.2 29.8441C16.4952 28.6291 17.1429 26.4648 17.1429 23.3513C17.1429 20.0859 16.5714 17.9596 15.4286 16.9724C14.3619 15.9852 12.4952 15.4916 9.82857 15.4916C9.52381 15.4916 9.21905 15.4916 8.91429 15.4916C8.68571 15.4916 8.49524 15.5296 8.34286 15.6055C8.64762 12.7958 9.40952 10.6315 10.6286 9.11271C11.9238 7.51798 13.6762 6.56874 15.8857 6.26499L14.8571 0C9.75238 0.759392 5.98095 2.84772 3.54286 6.26499C1.18095 9.68225 0 14.2766 0 20.048C0 24.4524 0.647619 27.49 1.94286 29.1607C3.31429 30.8313 5.6 31.6667 8.8 31.6667ZM31.6571 31.6667C34.6286 31.6667 36.7619 31.0592 38.0571 29.8441C39.3524 28.6291 40 26.4648 40 23.3513C40 20.0859 39.4286 17.9596 38.2857 16.9724C37.219 15.9852 35.3524 15.4916 32.6857 15.4916C32.381 15.4916 32.0762 15.4916 31.7714 15.4916C31.5429 15.4916 31.3524 15.5296 31.2 15.6055C31.5048 12.7958 32.2667 10.6315 33.4857 9.11271C34.781 7.51798 36.5333 6.56874 38.7429 6.26499L37.7143 0C32.6095 0.759392 28.8381 2.84772 26.4 6.26499C24.0381 9.68225 22.8571 14.2766 22.8571 20.048C22.8571 24.4524 23.5048 27.49 24.8 29.1607C26.1714 30.8313 28.4571 31.6667 31.6571 31.6667Z" fill="#FCDA01"/>
								</svg>
                            </div>
                            <p>I would absolutely say that Quipli is a great investment and the team standing behind Quipli is the best.</p>
                        </div>
                        <div class="qp-news-title">
                            <h4 class="news-post-title">Rob Moczygemba</h4>
                            <span class="tag">Rental Services of Texas</span>
                        </div>
                    </div>

                    <!-- Third Video Block -->
                    <div class="news-posts-link">
                        <a href="https://www.youtube.com/watch?v=zVZiGBqX0v4" class="qp-featured-img video-trigger" data-lity>
                            <img class="featured-image" src="https://quipli.com/wp-content/uploads/2024/11/Cardinal.jpg" loading="lazy"/>
                            <!-- Play Button Overlay -->
                            <div class="play-button-overlay">
                                <div>
                                    <div></div>
                                </div>
                            </div>
                        </a>
                        <div class="review__content">
                            <div class="review__blockquote">
                                <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.8 31.6667C11.7714 31.6667 13.9048 31.0592 15.2 29.8441C16.4952 28.6291 17.1429 26.4648 17.1429 23.3513C17.1429 20.0859 16.5714 17.9596 15.4286 16.9724C14.3619 15.9852 12.4952 15.4916 9.82857 15.4916C9.52381 15.4916 9.21905 15.4916 8.91429 15.4916C8.68571 15.4916 8.49524 15.5296 8.34286 15.6055C8.64762 12.7958 9.40952 10.6315 10.6286 9.11271C11.9238 7.51798 13.6762 6.56874 15.8857 6.26499L14.8571 0C9.75238 0.759392 5.98095 2.84772 3.54286 6.26499C1.18095 9.68225 0 14.2766 0 20.048C0 24.4524 0.647619 27.49 1.94286 29.1607C3.31429 30.8313 5.6 31.6667 8.8 31.6667ZM31.6571 31.6667C34.6286 31.6667 36.7619 31.0592 38.0571 29.8441C39.3524 28.6291 40 26.4648 40 23.3513C40 20.0859 39.4286 17.9596 38.2857 16.9724C37.219 15.9852 35.3524 15.4916 32.6857 15.4916C32.381 15.4916 32.0762 15.4916 31.7714 15.4916C31.5429 15.4916 31.3524 15.5296 31.2 15.6055C31.5048 12.7958 32.2667 10.6315 33.4857 9.11271C34.781 7.51798 36.5333 6.56874 38.7429 6.26499L37.7143 0C32.6095 0.759392 28.8381 2.84772 26.4 6.26499C24.0381 9.68225 22.8571 14.2766 22.8571 20.048C22.8571 24.4524 23.5048 27.49 24.8 29.1607C26.1714 30.8313 28.4571 31.6667 31.6571 31.6667Z" fill="#FCDA01"/>
								</svg>
                            </div>
                            <p>Quipli helped us overcome the kinks in our sales, outdated website, and overwhelming rental reservation system and present our products in the best light.</p>
                        </div>
                        <div class="qp-news-title">
                            <h4 class="news-post-title">Bryce M. Cardinal</h4>
                            <span class="tag">Cardinal Rental and Sales</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-hero dark-bg" style="padding-top: 4rem;">
        <div class="max-container">
            <div class="pattern-bg">
                <div class="page-hero-inner" style="padding: 0 4rem 0 4rem;">
                    <div class="page-hero-contents" style="padding:0;">
                        <div class="page-heading left-aligned">
                            <span style="font-size: 1.6rem; padding-bottom: 1.4rem;">
                                Supercharge your rental business
                            </span>
                            <h1 class="qp-highlighted-text">
                                Book a personalized demo.
                            </h1>
                            <a class="q-btn q-btn--xl" href="<?php echo home_url(); ?>/book-a-demo"
                                title="Book a Demo">Book a Demo</a>
                        </div>
                    </div>
                    <picture class="page-hero-image align-top" style="--img-max-w: 5rem; --img-mr: -6rem; padding: 0;">
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.webp" />
                        <source media="(min-width: 768px)"
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.png" />
                        <source
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero-mob.webp" />
                        <source
                            srcset="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero-mob.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/solutions/quickbook-hero.png"
                            alt="" loading="lazy" decoding="async" width="1200" height="852"
                            style="margin-right:0; max-width:90%;">
                    </picture>
                </div>
            </div>
        </div>
    </section>

	<style>
	.qp-icon-holder.light {
	  background-image: url('https://quipli.com/wp-content/themes/quipli-v2/assets/img/feature-vector-light.svg');
	  color: var(--q-secondary);
	}
	.ads-features {
	  display: grid;
	  grid-template-columns: repeat(3, 1fr);
	  gap: 1rem;
		
		@media (max-width: 820px) {
			grid-template-columns: repeat(2, 1fr);
		}
		
		@media (max-width: 640px) {
			display: flex;
        	flex-direction: column;
		}


	  .qp-feature-block-horizontal.qp-feature-wider {
		grid-column: span 2;
		background: #fff;
		padding: 1.5rem;
		border: 2px solid var(--q-gray);
		display: flex;
		flex-direction: row;
		  
		  @media (max-width: 580px) {
        	flex-direction: column;
			}

		.qp-feature-image {
		  margin-right: -90px;
		  margin-bottom: -100px;
		}
	  }

	  .qp-feature-block-horizontal {
		background: #fff;
		padding: 1.5rem;
		border: 2px solid var(--q-gray);

		.qp-feature-content {
		  padding: 0;
		}
	  }
	}

	.qp-news-posts-blocks.qp-feedbacks {
	  margin-bottom: 6rem;

	  .news-posts-link {
		  .qp-featured-img{
			  position: relative;
		  }
		.featured-image {
		  width: 100%;
		  height: auto;
		}
		.review__blockquote {
		  padding-bottom: 1.5rem;
		  color: var(--q-primary);

		  svg{
			width: 2rem;
			height: 2rem;
		  }
		}
	  }
	  .qp-news-title {
		margin-top: auto;
	  }
	  .play-button-overlay {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 80px;
		height: 80px;
		background-color: rgba(255, 255, 255, 0.2);
		border-radius: 50%;
		display: flex;
		justify-content: center;
		align-items: center;
		pointer-events: none;

		> div {
		  width: 60px;
		  height: 60px;
		  background-color: #ffd700;
		  border-radius: 50%;
		  display: flex;
		  justify-content: center;
		  align-items: center;

		  > div{
			width: 0;
			height: 0;
			border-top: 12px solid transparent;
			border-bottom: 12px solid transparent;
			border-left: 20px solid black;
			margin-left: 4px;
		  }
		}
	  }
	}
.stats-info {
  background-color: var(--q-secondary);
  color: var(--q-white);

  .sec-heading {
    max-width:850px;
    h2,
    p {
      color: var(--q-white);
    }
    p {
      font-size: var(--q-sec-subheading);
      line-height: 1.5;
      font-weight: 400;
      margin-bottom: 2.5rem;
      max-width: var(--max-w, 100%);
    }
  }
  .stats-grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
	  
	@media (max-width: 820px) {
        grid-template-columns: 1fr;
    }

    .stats-block {
        background-color: #4A51564D;
        color: #fff;
        padding: 1.25rem;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 1rem;
        
        &.yellow{
            background-color: var(--q-primary);
            color: var(--q-secondary);
            span{
                color: var(--q-secondary);
            }
        }

        &.white{
            background-color: var(--q-gray);
            color: var(--q-secondary);

            span{
                color: var(--q-secondary);
				line-height: 1;
				margin-bottom: 5px;
				font-weight: 500;
            }

            p{
                display: inline-flex;
                align-items: flex-end;
                justify-content: center;
                gap: 0.5rem;
            }
        }
        
        p{
            font-size: 2.25rem;
            font-weight: 500;
            margin: 0;
			line-height:1;
        }

        span{
            font-size: 1rem;
            font-weight: 600;
            color: var(--q-primary);
        }
    }
  }
}

	</style>

</main>

<?php
get_sidebar();
get_footer();
