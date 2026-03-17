<style>
  .equal-features{
    .qp.feature{
      .feature__wrap{
        display:flex;
        flex-direction:column;
        gap:3rem;

        @media (min-width:768px) {
          gap:4rem;
        }

        .feature__block{
          margin:0 !important;

          .block__content{
            flex: 0 0 45%;
          }

          .block__img{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-grow: 1;

            @media (min-width:768px) {
              padding-right:4rem;
              justify-content:flex-start;
            }

            picture{
              max-width:600px;
            }
          }
          &.image-right{
            .block__img{
              @media (max-width:767px) {
                order:-1;
              }
              @media (min-width:768px) {
                padding-left:4rem;
                padding-right:0;
                justify-content:flex-end;
              }
            }
          }
        }
      }
    }
  }
</style>

<section class="section section--feature equal-features">
  <?php 
    $feat_sec = get_field("features_section");
    $feat1 = $feat_sec['feature_1'];
    $feat2 = $feat_sec['feature_2'];
    $feat3 = $feat_sec['feature_3'];
  ?>
  <div class="qp feature">
    <div class="max-container">
      <div class="feature__wrap">
        <div class="feature__block image-right">
          <div class="block__content">
            <div class="block__icon">
              <i>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_5051_4905)">
                <path d="M13.0889 11.6397L2.84744 21.8812M14.1897 3.57438C15.5063 4.44799 16.7718 5.47792 17.9543 6.66044C19.147 7.85316 20.1845 9.13025 21.0629 10.4591M9.04081 8.28469L5.9333 7.24885C5.57542 7.12956 5.18124 7.20547 4.89327 7.44914L1.8049 10.0624C1.17264 10.5974 1.35227 11.6155 2.12943 11.9018L5.0557 12.9799M11.6632 19.5872L12.7413 22.5135C13.0276 23.2907 14.0458 23.4703 14.5808 22.838L17.194 19.7497C17.4377 19.4617 17.5136 19.0675 17.3943 18.7096L16.3584 15.6021M19.9512 2.20405L14.6477 3.08797C14.075 3.18341 13.5498 3.46489 13.1531 3.88887L6.00493 11.5301C4.15206 13.5107 4.2036 16.6039 6.12142 18.5217C8.03925 20.4395 11.1324 20.4911 13.1131 18.6382L20.7542 11.49C21.1782 11.0933 21.4597 10.5681 21.5551 9.9954L22.4391 4.69188C22.6829 3.2287 21.4144 1.96019 19.9512 2.20405Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
                </g>
                <defs>
                <clipPath id="clip0_5051_4905">
                <rect width="24" height="24" fill="white" transform="translate(0 0.719238)"/>
                </clipPath>
                </defs>
                </svg>
              </i>
            </div>
            <h4><?php echo $feat1['feat_title'] ?? "Deliver a World-Class Rental Experience" ?></h4>
            <p><?php echo $feat1['feat_description'] ?? "Let customers browse, reserve, and manage rentals from any device. Quipli gives your customers the experience they expect from top-tier businesses, with a customer portal and mobile-friendly storefront that runs 24/7." ?></p>
            <a class="q-btn q-btn--xl" title="<?php echo $feat1['url_title'] ?? "Customer Portal Software for Your Rental Business " ?>" href="<?php echo $feat1['url'] ?? '#' ?>">Learn more</a>
          </div>
          <div class="block__img">
            <picture>
              <img src="<?php echo $feat1['feat_img'] ?? get_template_directory_uri() ?>/assets/img/home/2025/welcomeback.webp" alt="<?php echo $feat1['url_title'] ?? "Customer Portal Software for Your Rental Business " ?>" loading="lazy" decoding="async">
            </picture>
          </div>
        </div>
        <div class="feature__block image-left">
          <div class="block__img">
            <picture>
              <img src="<?php echo $feat2['feat_img'] ?? get_template_directory_uri() ?>/assets/img/home/2025/categories.webp" alt="<?php echo $feat2['url_title'] ?? "Easy Equipment Rental Invoice & Billing Software"; ?>" loading="lazy" decoding="async">
            </picture>
          </div>
          <div class="block__content">
            <div class="block__icon">
              <i>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_5119_4528)">
                <path d="M8.64021 18.8729L3.59375 17.4668L4.24007 22.6064" stroke="#1D252C" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                <path d="M22 12.9688C22.001 15.1534 21.2685 17.2751 19.9198 18.9938C18.5712 20.7125 16.6845 21.9285 14.5623 22.4471C12.4401 22.9656 10.2052 22.7565 8.21595 21.8534C6.67664 21.1545 5.3534 20.0714 4.36719 18.7188" stroke="#1D252C" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                <path d="M15.8594 7.06546L20.9058 8.47159L20.2595 3.33203" stroke="#1D252C" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                <path d="M2.5 12.9689C2.49899 10.7842 3.23154 8.66252 4.5802 6.94386C5.92886 5.22519 7.81553 4.00912 9.93775 3.4906C12.06 2.97208 14.2948 3.18114 16.2841 4.08426C17.7553 4.75219 19.0291 5.77116 20 7.04097" stroke="#1D252C" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                </g>
                <defs>
                <clipPath id="clip0_5119_4528">
                <rect width="24" height="24" fill="white" transform="translate(0 0.71875)"/>
                </clipPath>
                </defs>
                </svg>
                </i>
            </div>
            <h4><?php echo $feat2['feat_title'] ?? "Get Financial Clarity and Control"; ?></h4>
            <p>
              <?php echo $feat2['feat_description'] ?? "Track utilization, revenue, and profitability in real time, with built-in reporting and seamless QuickBooks Online integration. Quipli gives you the financial visibility to price smarter, get paid faster, and plan with confidence."; ?>
            </p>
            <a class="q-btn q-btn--xl" title="<?php echo $feat2['url_title'] ?? "Easy Equipment Rental Invoice & Billing Software"; ?>" href="<?php echo $feat2['url'] ?? '#' ?>">Learn more</a>
          </div>
        </div>
        <div class="feature__block image-right">
          <div class="block__content">
            <div class="block__icon">
              <i>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_5092_7595)">
              <path d="M2.22109 16.5461L4.22469 15.3895C4.33322 15.3268 4.46058 15.3051 4.58375 15.3281L8.52597 16.0659C8.84995 16.1265 9.14902 15.8771 9.14755 15.5475L9.1322 12.0934C9.13178 11.9996 9.15653 11.9073 9.20386 11.8263L11.1933 8.42027C11.2969 8.24301 11.2876 8.02166 11.1696 7.85368L7.81987 3.08572M19.3502 5.22075C13.5752 7.99379 16.7251 11.6688 17.7752 12.1938C19.7461 13.1791 22.487 13.2437 22.487 13.2437C22.4956 13.0698 22.5 12.8948 22.5 12.7188C22.5 6.91976 17.799 2.21875 12 2.21875C6.20101 2.21875 1.5 6.91976 1.5 12.7188C1.5 18.5177 6.20101 23.2188 12 23.2188C12.176 23.2188 12.3511 23.2144 12.525 23.2059M16.5 23.2188L13.1749 14.4525L21.9411 17.7776L18.0538 19.3315L16.5 23.2188Z" stroke="#1D252C" stroke-width="2.5" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_5092_7595">
              <rect width="24" height="24" fill="white" transform="translate(0 0.71875)"/>
              </clipPath>
              </defs>
              </svg></i>
            </div>
            <h4><?php echo $feat3['feat_title'] ?? "Manage Rentals from Anywhere"; ?></h4>
            <p><?php echo $feat3['feat_description'] ?? "Let customers browse, reserve, and manage rentals from any device with ease. With a self-service portal, mobile-friendly storefront, and built-in SMS tools to send quotes, documents, and payment links, Quipli makes it simple for your customers to book and pay quickly, on their terms.";?></p>
            <a class="q-btn q-btn--xl" title="<?php echo $feat3['url_title'] ?? "Rental Business Website Builder"; ?>" href="<?php echo $feat3['url'] ?? '#' ?>">Learn more</a>
          </div>
          <div class="block__img">
            <picture>
              <img src="<?php echo $feat3['feat_img'] ?? get_template_directory_uri() ?>/assets/img/home/2025/create-order.webp" alt="<?php echo $feat3['url_title'] ?? "Rental Business Website Builder"; ?>" loading="lazy" decoding="async">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>