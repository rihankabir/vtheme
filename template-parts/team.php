<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">
<?php
$member = array(
  'post_type' => 'team',
  'post_per_page'=> -1,
  'order_by'=> 'menu_order',
  'order'=> 'ASC',
);
$team = new WP_Query($member);
if($team-> have_posts()): while($team->have_posts()):
  $team->the_post();

?>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <?php the_post_thumbnail('large',array(

'class'=>'img-fluid'

)); ?>
                
                <div class="social">
<?php if(get_field('twitter')):?>
                  <a href="<?php echo esc_url(get_field('twitter')); ?>"><i class="icofont-twitter"></i></a>
<?php endif; ?>
<?php if(get_field('facebook')): ?>
                  <a href="<?php echo esc_url(get_field('facebook')); ?> "><i class="icofont-facebook"></i></a>
<?php endif;?>
<?php if(get_field('instagram')): ?>
                  <a href="<?php echo esc_url(get_field('instagram')); ?> "><i class="icofont-instagram"></i></a>
<?php endif;?>
<?php if(get_field('linkedin')): ?>
                  <a href="<?php echo esc_url(get_field('linkedin')); ?> "><i class="icofont-linkedin"></i></a>
<?php endif;?>
                </div>
              </div>
              <div class="member-info">
                <h4><?php the_title(); ?></h4>
                <span><?php echo esc_html(get_field('position')); ?> </span>
              </div>
            </div>
          </div>
<?php

endwhile;

wp_reset_postdata();

endif;

?>
         

        </div>

      </div>
    </section>