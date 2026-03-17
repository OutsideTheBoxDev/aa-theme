<section id="reviews-sec">
    <div class="max-container">
        <div class="sec-heading" style="--max-w: 54rem">
    		<?php 
                $customers_reviews = get_field("customers_reviews");
                if(!$customers_reviews){
                    $customers_reviews = get_field("customers_reviews", 13228);
                }
    			$heading = $customers_reviews['heading'];
                $desc = $customers_reviews['desc'];
                $customers_reviews_list = $customers_reviews['reviews'];
			?>
    		<h2><?php echo $heading ?? 'What Our Customers Are Saying'; ?></h2>
            <p><?php echo $desc ?? 'Hear directly from rental business owners and operators about how Quipli makes a difference.';?></p>
        </div>
        <div class="qp-reviews-cards-wrapper">
            <div class="qp-reviews-cards">
                <?php if ( $customers_reviews && ! empty( $customers_reviews['reviews'] ) ) : ?>
                    <?php foreach ( $customers_reviews['reviews'] as $review ) : 
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
                                <img src="<?php echo $review_from; ?>" alt="<?php "Reviewed On" ?>" style="filter: none !important;"/>
                            </div>
                            <p><?php echo $review_text; ?></p>
                        </div>
                        <div class="review__footer">
                            <div class="quote-owner">
                                <?php if ( $user_avatar ) : ?>
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
                                    <h4><?php echo $user_name;?></h4>
                                    <p><?php echo $user_company;?></p>
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