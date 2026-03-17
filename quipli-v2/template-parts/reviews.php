<section id="reviews-sec">
    <div class="max-container">
        <div class="sec-heading" style="--max-w: 44rem">
    		 <h2>
    		<?php 
    			$sec_title = get_field("testimonial_heading", get_the_ID());  
				if($sec_title){
					echo $sec_title;
                } else {
                	echo "Trusted by equipment rental leaders across the US and Canada, big and small.";
                }
			?>
           </h2>
        </div>
        <div class="qp-reviews-cards-wrapper">
            <div class="qp-reviews-cards">
                <div class="qp-review-card secondary">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="Google" />
                        </div>
                        <p>We ran trials with multiple software vendors side-by-side for several months, and there was no comparison to Quipli’s pace of development and customer support. Quipli listens to our needs regularly and shows an excitement to develop requested features. <span>The crew at Quipli has made Arapahoe Rental feel like a partnership</span> and not just another customer.</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">EM</span>
                            <div class="owner-details">
                                <h4>Evan M.</h4>
                                <p>Arapahoe Rental</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/cap.svg" alt="Capterra" />
                        </div>
                        <p>
                            <span>Quipli is a very easy team to work with and a very rare
                                type of business that really works with you to help you
                                succeed</span> and set up the platform. If you like having options on how your platform works and like to have things customized without
                            having options hidden from you, this is the platform to go
                            with.” <em>Chose Quipli after comparing it to Booqable, EZRentOut,
                                and Rentle (according to Capterra).</em>
                        </p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">BH</span>
                            <div class="owner-details">
                                <h4>Brandon H.</h4>
                                <p>Everything Rental</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card primary">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p>Top notch people. <span>Their customer service is hands down the best.</span> Software is easy to use, and user friendly. Easy to navigate and make adjustments to fit your business. They are constantly adding new features and best of all - they listen to customer feedback for what they do next.</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">BG</span>
                            <div class="owner-details">
                                <h4>Brandon G.</h4>
                                <p>Equipped Rentals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/g2.svg" alt="Cap" />
                        </div>
                        <p><span>My overall experience has been amazing.</span> I am able to accept orders 24/7. I love that it’s cloud based. This allows us to accept orders on the fly.</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">AT</span>
                            <div class="owner-details">
                                <h4>Audra T.</h4>
                                <p>Comic Rentals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card primary">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p>We use Quipli for our small, family owned equipment rental business. Through Quipli we are able to enter, track, and rent equipment to customers with ease. <span>The Quipli team is also phenomenal to work with!</span> If it is a big issue they will call or set up one-on-one Zoom meeting to discuss a solution to the problem!</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">BC</span>
                            <div class="owner-details">
                                <h4>Brittany C.</h4>
                                <p>J Creek Equipment Rental</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card white">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p>Very easy page to navigate for the end user. Customer service is top notch with attention given to the specific needs of my company. <span>QUIPLI is the one stop shop for our online rental needs from inception, design and ongoing maintenance.</span></p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">SM</span>
                            <div class="owner-details">
                                <h4>Susan M.</h4>
                                <p>Toy Box Rental</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card primary">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p>I didn't expect a response to a non-emergent question over the weekend but <span>the response was quick and gave clear instructions on how to fix my concern.</span> Love working with the Quipli team!</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">LG</span>
                            <div class="owner-details">
                                <h4>Lacey Gotshall</h4>
                                <p>Sandhills Rents LLC</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p>The fast response is much appreciated, and even better when they take it a step further and <span>help find a solution :)</span></p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">KK</span>
                            <div class="owner-details">
                                <h4>Kerryn King</h4>
                                <p>Magnolia Trailer Rentals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card secondary">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/cap.svg" alt="Capterra" />
                        </div>
                        <p><span>Annika is simply put an asset of unseen potential that I am blessed to have on my support team.</span> There are no words for being able to work with someone who makes you feel like you can just sit back and relax because she has got it covered. 👍</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">PS</span>
                            <div class="owner-details">
                                <h4>Paul Sanders</h4>
                                <p>Magnolia Trailer Rentals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qp-review-card">
                    <div class="review__content">
                        <div class="review__blockquote">
                            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="qt-icon">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0V11.2V16V20H3.94737H8.68421H12.6316V16V11.2V7.2H8.68421H7.89474V0H0ZM17.3684 0V11.2V16V20H21.3158H26.0526H30V16V11.2V7.2H26.0526H25.2632V0H17.3684Z" fill="currentColor"></path>
                            </svg>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/reviews/google.svg" alt="google" />
                        </div>
                        <p><span>Court has been amazing to work with</span> and help me through my start up growing pains. Thanks.</p>
                    </div>
                    <div class="review__footer">
                        <div class="quote-owner">
                            <span class="owner-letters">PS</span>
                            <div class="owner-details">
                                <h4>Paul Sanders</h4>
                                <p>Magnolia Trailer Rentals</p>
                            </div>
                        </div>
                    </div>
                </div>
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