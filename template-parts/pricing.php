<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-title">
            <h2>Pricing</h2>
            <p>Choose the plan that's right for you.</p>
        </div>

        <div class="row">

            <?php

            $args = array(
                'post_type'      => 'pricing',
                'posts_per_page' => -1,
                'order'          => 'ASC'
            );

            $pricing = new WP_Query($args);

            if ($pricing->have_posts()) :

                while ($pricing->have_posts()) :

                    $pricing->the_post();

            ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="box <?php echo get_field('recommended') ? 'recommended' : ''; ?>">

                    <h3><?php the_title(); ?></h3>

                    <h4>

                        <sup>$</sup>

                        <?php echo esc_html(get_field('price')); ?>

                        <span> / <?php echo esc_html(get_field('duration')); ?></span>

                    </h4>

                    <?php

                    $features = explode("\n", get_field('features'));

                    ?>

                    <ul>

                        <?php foreach ($features as $feature) : ?>

                            <li>

                                <?php echo esc_html(trim($feature)); ?>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                    <div class="btn-wrap">

                        <a
                            href="<?php echo esc_url(get_field('button_url')); ?>"
                            class="btn-buy">

                            <?php echo esc_html(get_field('button_text')); ?>

                        </a>

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