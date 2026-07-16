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





}
add_action('init', 'vtheme_register_post_types');








?>