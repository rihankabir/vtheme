<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo('charset'); ?> ">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vtheme</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <?php if(has_custom_logo()){
          the_custom_logo();
        }else{
          ?>
          <h2>
<a href="<?php echo home_url(); ?>">

<?php bloginfo('name'); ?>

</a>
</h2>
<?php
        } ?>
        
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu d-none d-lg-block">
       <?php
       wp_nav_menu(
        array(
            'theme_location' => 'primary_menu',
            'menu_class' => 'nav-menu',
            'container' => false,
            'fallback_cb'    => false,
        )
       );
       
       ?>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
