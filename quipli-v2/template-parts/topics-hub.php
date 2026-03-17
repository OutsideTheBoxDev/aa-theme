<section class="section section--bloghub">
    <div class="qp bloghub">
        <div class="container">
            <?php
            $title = "More Resources";
            if (is_page('blog')) {
                echo "<h1 class='q-title q-title--l' style='margin-bottom: 2rem;'>The Equipment Rental Blog</h1>";
            } else {
                echo "<h2 class='q-title q-title--l'>". $title. "</h2>";
            }
            ?>
            
            <div class="bloghub__wrap">
                <a class="bloghub__block" href="<?php echo home_url(); ?>/equipment-rental-templates/" title="Templates">
                    <div class="bloghub__content">
                        <div class="bloghub__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="8" height="11" stroke="white" stroke-width="2" stroke-linejoin="round"></rect>
                                <rect x="2" y="17" width="8" height="5" stroke="white" stroke-width="2" stroke-linejoin="round"></rect>
                                <rect x="14" y="14" width="8" height="8" rx="4" stroke="white" stroke-width="2" stroke-linejoin="round"></rect>
                                <rect x="14" y="2" width="8" height="8" stroke="white" stroke-width="2" stroke-linejoin="round"></rect>
                            </svg>
                        </div>
                        <div class="bloghub__title">Templates</div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a><a class="bloghub__block" href="<?php echo home_url(); ?>/equipment-rental-calculators/" title="Calculators">
                    <div class="bloghub__content">
                        <div class="bloghub__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.2104 15.8899C20.5742 17.3944 19.5792 18.7202 18.3123 19.7512C17.0454 20.7823 15.5452 21.4874 13.9428 21.8047C12.3405 22.1221 10.6848 22.0421 9.12055 21.5717C7.55627 21.1014 6.13103 20.255 4.96942 19.1066C3.80782 17.9582 2.94522 16.5427 2.45704 14.9839C1.96886 13.4251 1.86996 11.7704 2.169 10.1646C2.46804 8.55873 3.1559 7.05058 4.17245 5.77198C5.189 4.49338 6.50329 3.48327 8.0004 2.82995M21.2392 8.17311C21.6395 9.13958 21.8851 10.1613 21.9684 11.2008C21.989 11.4576 21.9993 11.586 21.9483 11.7017C21.9057 11.7983 21.8213 11.8897 21.7284 11.9399C21.6172 11.9999 21.4783 11.9999 21.2004 11.9999H12.8004C12.5204 11.9999 12.3804 11.9999 12.2734 11.9455C12.1793 11.8975 12.1028 11.821 12.0549 11.7269C12.0004 11.62 12.0004 11.48 12.0004 11.1999V2.79995C12.0004 2.52208 12.0004 2.38315 12.0605 2.27193C12.1107 2.17903 12.2021 2.09464 12.2987 2.05204C12.4144 2.00105 12.5428 2.01134 12.7996 2.03193C13.839 2.11527 14.8608 2.36083 15.8272 2.76115C17.0405 3.2637 18.1429 4.00029 19.0715 4.92888C20.0001 5.85747 20.7367 6.95986 21.2392 8.17311Z" stroke="white" stroke-width="2" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="bloghub__title">Calculators</div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a><a class="bloghub__block" href="<?php echo home_url(); ?>/equipment-rental-software-comparison-guide/" title="Comparison Guides">
                    <div class="bloghub__content">
                        <div class="bloghub__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 18V17.8498C2 17.5333 2 17.3751 2.02421 17.2209C2.0457 17.084 2.08136 16.9497 2.13061 16.8202C2.18609 16.6743 2.2646 16.5369 2.42162 16.2622L6 10M2 18C2 20.2091 3.79086 22 6 22C8.20914 22 10 20.2091 10 18M2 18V17.8C2 17.52 2 17.38 2.0545 17.273C2.10243 17.1789 2.17892 17.1024 2.273 17.0545C2.37996 17 2.51997 17 2.8 17H9.2C9.48003 17 9.62004 17 9.727 17.0545C9.82108 17.1024 9.89757 17.1789 9.9455 17.273C10 17.38 10 17.52 10 17.8V18M6 10L9.57838 16.2622C9.7354 16.5369 9.81391 16.6743 9.86939 16.8202C9.91864 16.9497 9.9543 17.084 9.97579 17.2209C10 17.3751 10 17.5333 10 17.8498V18M6 10L18 8M14 16V15.8498C14 15.5333 14 15.3751 14.0242 15.2209C14.0457 15.084 14.0814 14.9497 14.1306 14.8202C14.1861 14.6743 14.2646 14.5369 14.4216 14.2622L18 8M14 16C14 18.2091 15.7909 20 18 20C20.2091 20 22 18.2091 22 16M14 16V15.8C14 15.52 14 15.38 14.0545 15.273C14.1024 15.1789 14.1789 15.1024 14.273 15.0545C14.38 15 14.52 15 14.8 15H21.2C21.48 15 21.62 15 21.727 15.0545C21.8211 15.1024 21.8976 15.1789 21.9455 15.273C22 15.38 22 15.52 22 15.8V16M18 8L21.5784 14.2622C21.7354 14.5369 21.8139 14.6743 21.8694 14.8202C21.9186 14.9497 21.9543 15.084 21.9758 15.2209C22 15.3751 22 15.5333 22 15.8498V16M12 0.5V9" stroke="white" stroke-width="2" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="bloghub__title">Comparison Guides</div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a><a class="bloghub__block" href="<?php echo home_url(); ?>/tool-rental-guides/" title="General Equipment Guides">
                    <div class="bloghub__content">
                        <div class="bloghub__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 23V1H14.0977L21 7.62622V23H3Z" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <mask id="path-2-inside-1_1579_455" fill="white">
                                    <path d="M13 0V9H22"></path>
                                </mask>
                                <path d="M13 9H11V11H13V9ZM11 0V9H15V0H11ZM13 11H22V7H13V11Z" fill="white" mask="url(#path-2-inside-1_1579_455)"></path>
                                <path d="M18 13H6" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M15 18H6" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                            </svg>
                        </div>
                        <div class="bloghub__title">General Equipment Guides</div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a><a class="bloghub__block" href="<?php echo home_url(); ?>/equipment-rental-marketing-guides/" title="Marketing &amp; Growth Guides">
                    <div class="bloghub__content">
                        <div class="bloghub__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 23V1H21V23H3Z" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M8 11L8 19" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M12 8L12 19" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                                <path d="M16 11L16 19" stroke="white" stroke-width="2" stroke-miterlimit="10"></path>
                            </svg>
                        </div>
                        <div class="bloghub__title">
                            Marketing &amp; Growth Guides
                        </div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a><a class="bloghub__block bloghub__block--btn" href="/blog/" title="Discover all topics">
                    <div class="bloghub__content">
                        <div class="bloghub__title">Discover all topics</div>
                    </div>
                    <div class="bloghub__arrw">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L8 8L1 1" stroke="#1D252C" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>