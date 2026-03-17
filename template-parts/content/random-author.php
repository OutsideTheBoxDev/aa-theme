<?php
$authors = array(
    array(
        'image' => 'mgp.jpg',
        'name' => 'Michael Gannon-Pitts',
        'linkedin' => 'https://www.linkedin.com/in/michaelgp/',
        'description' => 'Michael Gannon-Pitts is the Growth Marketing Manager of Quipli, a provider of modern software for independent equipment rental companies. Michael has over 5 years of experience building modern, digital-focused brands and has worked with powerhouse companies like Ford and Nexgrill. As the digital marketing landscape continues to evolve, Michael keeps his finger on the pulse of emerging media trends, growth and marketing tactics, and new tech developments. Michael brings marketing knowledge from various industries such as D2C, CPG, B2B, as well as SaaS - and has written multiple top ranking blogs across numerous marketing topics.'
    ),
    array(
        'image' => 'carolyn.jpg',
        'name' => 'Carolyn Whalen',
        'linkedin' => 'https://www.linkedin.com/in/carolyn-whalen-4624367a/',
        'description' => "Carolyn Whalen is Quipli's lead product manager, responsible for overseeing the development and execution of the company's product roadmap. Drawing on her extensive background working for tech start-ups, she brings a passion for B2B client management and innovative technology development to her role at Quipli. Carolyn enjoys collaborating cross-functionally with internal teams as well as directly with users of the Quipli platform to gather feedback and ensure the software meets their needs. Carolyn has been working at Quipli since April 2022 and is based out of Atlanta, GA."
    ),
    array(
        'image' => 'dustin.jpg',
        'name' => 'Dustin Zielenski',
        'linkedin' => 'https://www.linkedin.com/in/dustinzielenski/',
        'description' => "Dustin is an Account Executive at Quipli, focused on working with prospective customers to explore how Quipli's software can be utilized within their rental business. He developed a passion for the heavy equipment rental industry from 7 years spent working at a Bobcat dealership for the first portion of his career. He loves the opportunity to meet with all different size rental companies across the globe and work together to help solve for their specific needs in a software. Dustin has been working at Quipli since October 2022 and is based in Sarasota, Florida."
    ),
    array(
        'image' => 'kyle.jpg',
        'name' => 'Kyle Clements ',
        'linkedin' => 'https://www.linkedin.com/in/kyle-clements-klc/',
        'description' => "Kyle Clements is the Founder & CEO of Quipli, a provider of modern software for independent equipment rental companies. Kyle has a decade of software startup experience and has been part of several successful ventures that have become publicly traded or been privately acquired, such as Uber and Clutch Technologies. In the past few years, Kyle has completed thousands of customer interviews understanding needs and trends in the growing equipment rental market. Kyle brings a unique perspective to the equipment rental industry and is passionate about partnering with independent equipment rental companies to run their operations more effectively and assist them in creating an impactful experience for their customers."
    ),
    array(
        'image' => 'court.jpg',
        'name' => 'Court Kasten',
        'linkedin' => 'https://www.linkedin.com/in/courtkasten/',
        'description' => "Court Kasten is Quipli’s COO, responsible for seeing the execution of Quipli’s customer-obsessed strategy. With an extensive background working with technology companies of all sizes, from early stage startups, to large enterprise software providers, Court’s team focuses on helping customers get the most out of their investment with Quipli. Court loves to work closely with customers to understand how they run their business and ensure Quipli exceeds their expectations."
    ),
    array(
        'image' => 'mckena.jpg',
        'name' => 'Mckena Voshell',
        'linkedin' => 'https://www.linkedin.com/in/mckena-voshell-467842a1/',
        'description' => "Mckena Voshell is a Senior Account Executive and Quipli's first sales hire with several years of experience helping independent rental companies run their business more efficiently while providing their customer's a memorable renting experience to grow profitability and efficiency. With a background in construction software and healthcare staffing, she's always prioritized 'falling in love with the problem, not the solution' to solve her customer's needs. Specializing in a 'customer first' and consultive sales approach, Mckena uses that experience to help lead the sales team hands-on to deliver an enjoyable and easy buying process to Quipli partners."
    )
);

$author_data = $authors[3];

?>


<section>
    <div class="max-container">
        <div class="qp-article-author-block">
            <?php
            $current_post_id = get_the_ID();
            $categories = get_the_category($current_post_id);
            ?>
            <div class="qp-artilce-info-box qp-article-author-info">
                <h4>About the author</h4>
                <a href="<?php echo $author_data['linkedin']; ?>" target="_blank" class="qp-author-title">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/authors/<?php echo $author_data['image']; ?>" alt="<?php echo $author_data['name']; ?>" />
                    <span><?php echo $author_data['name']; ?></span>
                </a>
                <p>
                    <?php echo $author_data['description']; ?>
                </p>
            </div>
            <div class="qp-artilce-info-box qp-article-author-posts">
                <h4>Posts from this author</h4>
                <?php

                $category_ids = wp_get_post_categories($current_post_id, array('fields' => 'ids'));

                $authors_posts = get_posts(array(
                    'post__not_in' => array($current_post_id),
                    'posts_per_page' => 2,
                    'category__not_in' => $category_ids,
                    'orderby' => 'rand',
                ));

                ?>
                <ul class="qp-author-posts">
                    <?php
                    foreach ($authors_posts as $a_post) { ?>
                        <li>
                            <div class="p-title">
                                <div class="qp-author-title">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/authors/<?php echo $author_data['image']; ?>" alt="<?php echo $author_data['name']; ?>" />
                                    <span><?php echo $author_data['name']; ?></span>
                                </div>
                            <?php
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($a_post->ID), 'medium');
                            echo '<a href="' . get_permalink($a_post->ID) . '">' . apply_filters('the_title', $a_post->post_title, $a_post->ID) . '</a>';
                            echo '</div><img src="' . esc_url($image[0]) . '"/></li>';
                        } ?>
                </ul>

                <h4>Share with the world</h4>
                <ul class="qp-share-block">
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7988 13.5754V20.4706H9.6314V13.5754H7V10.7795H9.6314V9.76227C9.6314 5.98573 11.209 4 14.547 4C15.5703 4 15.8261 4.16446 16.3865 4.29847V7.06387C15.7591 6.95423 15.5825 6.89332 14.9307 6.89332C14.1572 6.89332 13.743 7.1126 13.3653 7.54507C12.9876 7.97755 12.7988 8.72677 12.7988 9.79882V10.7856H16.3865L15.4241 13.5814H12.7988V13.5754Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 17.0942C5.7414 17.1922 7.26417 16.7851 8.74926 15.7071C7.2491 15.4508 6.20879 14.7648 5.6434 13.3475C6.08063 13.2872 6.4651 13.4003 6.91741 13.2194C5.43986 12.5711 4.48247 11.5986 4.44477 9.91752C4.91216 9.95521 5.26648 10.2643 5.82432 10.2191C4.46739 8.89228 4.05277 7.44488 4.90462 5.68841C6.32186 7.31673 7.98034 8.42489 10.0082 8.94505C10.1213 8.9752 10.2268 9.00536 10.3399 9.02797C10.86 9.14859 11.4782 9.4049 11.7948 9.3672C12.3376 9.29936 11.7948 8.67366 11.9305 7.8595C12.3602 5.32656 15.1495 4.17317 17.215 5.65826C17.8181 6.09549 18.293 6.08795 18.8886 5.8241C19.1976 5.68841 19.5143 5.55272 19.8836 5.39441C19.8007 6.11811 19.2429 6.51765 18.7981 7.05288C19.3032 7.16596 19.7103 7.02273 20.1776 6.87196C20.0193 7.39212 19.6273 7.68612 19.273 7.97258C18.9036 8.26658 18.7604 8.57566 18.7453 9.05813C18.5192 16.3629 10.2193 22.0093 4.54278 17.5163C3.99247 17.0791 4.5277 17.5163 4 17.0942Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.71896 7.41602H4.27734V18.3911H7.71896V7.41602Z" fill="currentColor" />
                                <path d="M17.029 7.17823C16.9021 7.16237 16.7673 7.15444 16.6325 7.14651C14.7055 7.06721 13.6191 8.20913 13.2385 8.70079C13.1354 8.8356 13.0878 8.9149 13.0878 8.9149V7.44785H9.79688V18.423H13.0878H13.2385C13.2385 17.3048 13.2385 16.1946 13.2385 15.0765C13.2385 14.4738 13.2385 13.8711 13.2385 13.2685C13.2385 12.523 13.183 11.73 13.5557 11.0481C13.8729 10.4771 14.4438 10.1916 15.0862 10.1916C16.9894 10.1916 17.029 11.9124 17.029 12.071C17.029 12.079 17.029 12.0869 17.029 12.0869V18.4705H20.4706V11.3098C20.4706 8.85939 19.2256 7.41613 17.029 7.17823Z" fill="currentColor" />
                                <path d="M5.99836 5.99672C7.10202 5.99672 7.99672 5.10202 7.99672 3.99836C7.99672 2.8947 7.10202 2 5.99836 2C4.89469 2 4 2.8947 4 3.99836C4 5.10202 4.89469 5.99672 5.99836 5.99672Z" fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="6" width="16" height="11" stroke="currentColor" stroke-width="2" />
                                <path d="M4 6L12 12L20 6" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>