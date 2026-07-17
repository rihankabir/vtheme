<section id="clients" class="clients clients">
      <div class="container">

        <div class="row">
          <?php
          $brand = array(
            'post_type' => 'client',
            'post_per_page' => -1,
            'orderby'=>'menu_order',

'order'=>'ASC'
          );
          $clients = new WP_Query($brand);
          
          ?>
          <?php 
          if($clients-> have_posts(  )):while($clients-> have_posts(  )):
            $clients-> the_post(  );
          
          ?>

          <div class="col-lg-2 col-md-4 col-6">
           <?php

the_post_thumbnail(

'large',

array(

'class'=>'img-fluid'

)

);

?>
          </div>
<?php

endwhile;

wp_reset_postdata();

endif;

?>
      
          

        </div>

      </div>
    </section>