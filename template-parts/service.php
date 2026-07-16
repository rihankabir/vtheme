<section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class="row">
          <?php

$args = array(
    'post_type'      => 'service',
    'posts_per_page' => 4,
    'order'          => 'ASC'
);

$services = new WP_Query( $args );

if ( $services->have_posts() ) :

    $delay = 100;

    while ( $services->have_posts() ) :

        $services->the_post();

?>

<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

    <div class="icon-box" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">

        <div class="icon">
<i class="<?php
           the_field('icon');
            ?>"></i>
            

        </div>

        <h4 class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>

        <p class="description">
            <?php the_excerpt(); ?>
        </p>

    </div>

</div>

<?php

        $delay += 100;

    endwhile;

    wp_reset_postdata();

endif;

?>
         
        </div>

      </div>
    </section>