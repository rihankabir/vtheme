
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"><?php echo esc_html(get_theme_mod('hero_title')); ?></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><?php echo esc_html(get_theme_mod('hero_subtitle')); ?></h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="<?php echo esc_url(get_theme_mod('hero_button_url')); ?>" class="btn-get-started scrollto"><?php echo esc_html(get_theme_mod('hero_button_text')); ?></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="<?php echo esc_url(get_theme_mod('hero_image')); ?>"class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
