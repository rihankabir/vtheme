<?php

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directiory() .'/inc/post-types.php';

function vtheme_setup(){

add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

register_nav_menus(
array(
    'primary_menu' => 'Primary Menu',
    'footer_menu'  => 'Footer Menu'
)

);



}


add_action(
    'after_setup_theme',
    'vtheme_setup'
);
















function wp_vthemes_scripts() {

   
   wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(),'5.0.3', 'all' );
   wp_enqueue_style( 'iconfont_css', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css', array(),'', 'all' );
   wp_enqueue_style( 'remixicon_css', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(),'', 'all' );
   wp_enqueue_style( 'boxicons_css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(),'', 'all' );
   wp_enqueue_style( 'owl_css', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', array(),'', 'all' );
   wp_enqueue_style( 'vendorbox_css', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', array(),'', 'all' );
wp_enqueue_style( 'aos_css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(),'', 'all' );
wp_enqueue_style( 'template_css', get_template_directory_uri() . '/assets/css/style.css', array(),'', 'all' );
wp_enqueue_style( 'theme_css', get_template_directory_uri() );





   wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '1.0.0', true );

   wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

   wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), '1.0.0', true );

   wp_enqueue_script( 'email_js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );

   wp_enqueue_script( 'waypoints_js', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array(), '', true );

   wp_enqueue_script( 'counterup_js', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array(), '', true );

   wp_enqueue_script( 'owl_js', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array(), '', true );

   wp_enqueue_script( 'venobox_js', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array(), '', true );

   wp_enqueue_script( 'aos_js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '', true );

   wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
}


add_action( 'wp_enqueue_scripts', 'wp_vthemes_scripts' );

 ?>