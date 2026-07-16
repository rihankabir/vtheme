<section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
        <?php
        $item = array(
'post_type' => 'more_service',
'post_per_page' => 6,
'order'=> 'ASC',
        );
        $more_services = new WP_Query($item);
if($more_services-> have_posts()) : while($more_services-> have_posts()): 
  
  $more_services-> the_post();

        ?>
<div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h5>
                <p class="card-text"><?php the_content(); ?> </p>
                <div class="read-more"><a href="<?php the_permalink( ); ?>"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <?php 
          endwhile;
          wp_reset_postdata(  );
        endif;
        ?>


        </div>

      </div>
    </section>