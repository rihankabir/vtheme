<?php

function vtheme_register_post_types(){

register_post_type(
'service',
array(
    'labels' => array(
        'name' => ('services'),
'singular_name' => ('service'),
    ),
    'public' => true,
    'menu_position'=> 5,
    'menu_icon'    => 'dashicons-admin-tools',
            'supports'     => array(
                'title',
                'editor',
                'thumbnail',
            ),
             'has_archive'  => true,
            'rewrite'      => array(
                'slug' => 'services',
            ),
            'show_in_rest' => true,
)


 );

register_post_type(
    'more_service',
    array(
        'labels' => array(
            'name' => ('More Services'),
            'singular_name'=> ('More Service'),
        ),
        'public'=> true,
        'menu_position'=> 6,
        'menu_icon'=> 'dashicons-hammer',
        'supports' => array(
            'title',
            'editor',
        ),
        'has_archive'  => true,
            'rewrite'      => array(
                'slug' => 'More Services',
            ),
            'show_in_rest' => true,
    )
);

register_post_type(
    'portfolio',
    array(
        'labels' => array(
            'name'          => __('Portfolio', 'vtheme'),
            'singular_name' => __('Portfolio Item', 'vtheme'),
        ),
        'public'       => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'show_in_rest' => true,
    )
);

register_taxonomy(
    'portfolio_category',
    'portfolio',
    array(
        'labels' => array(
            'name'          => __('Portfolio Categories', 'vtheme'),
            'singular_name' => __('Portfolio Category', 'vtheme'),
        ),
        'hierarchical' => true,
        'show_ui'       => true,
        'show_in_rest'  => true,
        'rewrite'       => array(
            'slug' => 'portfolio-category',
        ),
    )
);
register_post_type(
    'pricing',
    array(
        'labels' => array(
            'name'          => __('Pricing', 'vtheme'),
            'singular_name' => __('Pricing Plan', 'vtheme'),
        ),
        'public'       => true,
        'menu_icon'    => 'dashicons-money-alt',
        'supports'     => array(
            'title',
        ),
        'show_in_rest' => true,
    )
);
register_post_type(
    'team',
    array(
     'labels' => array(
        'name' => ('Team'),
        'singular_name'=> ('Team Member'),
     )   ,
'public' => true,
'menu_icon'=>'dashicons-groups',
'supports' => array(
    'title',
    'editor',
    'thumbnail',

),
 'show_in_rest' => true
    )
);
register_post_type(
    'client',array(
        'labels' => array(
            'name' => ('Clients'),
            'singluar_name'=>('client'),
        ),
         'public' => true,

        'menu_icon' => 'dashicons-building',

        'supports' => array(

            'thumbnail'

        ),

        'show_in_rest' => true
    )
);




}
add_action('init', 'vtheme_register_post_types');








?>