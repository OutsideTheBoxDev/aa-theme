<section class="section section--why">
  <div class="qp why">
    <div class="why__wrap">
      <div class="why__img">
        <figure>
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/why-img.webp" />
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/why-img.jpg" />
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/why-img-mob.webp" />
            <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/home/why-img-mob.png" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/home/why-img.jpg" alt="Why Image" loading="lazy" decoding="async" width="1280" height="1264">
          </picture>
        </figure>
      </div>
      <div class="why__content">
        <h3>Here’s what makes Quipli the right choice for your business</h3>
        <ul class="why__horizontal">
          <li>
            <figure>
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-headphone.svg" alt="Headphone Icon" width="40" height="40" />
            </figure>
            <p>We’re a partner, not a vendor. We’re here to work with you, respond quickly, and “surprise and delight” you with great service and growth opportunities.</p>
          </li>
          <li>
            <figure>
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-navigation-icon.svg" alt="Navigation Icon" width="40" height="40" />
            </figure>
            <p>
              1995 was a long time ago. Software has come a long way. You deserve a modern user experience that works for you and that releases great new functionality weekly, not annually.
            </p>
          </li>
          <li>
            <figure>
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-hand-icon.svg" alt="User Icon" width="40" height="40" />
            </figure>
            <p>Imagine a world in which everything you need is at your fingertips. Quipli is your new one-stop shop to manage and grow your rental business, while enjoying peace of mind along the way.</p>
          </li>
        </ul>
       	<?php get_template_part('template-parts/cta-buttons'); ?>
      </div>
    </div>
  </div>
</section>