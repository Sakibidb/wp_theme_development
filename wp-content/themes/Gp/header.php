<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo('name'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>style.css" rel="stylesheet">



  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="<?php echo home_url() ?>" class="logo me-auto me-lg-0"><img src="<?php echo get_theme_mod('nsd_logo'); ?>" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        
        <?php
        wp_nav_menu(array(
          'menu'        => "primary menu",
          'menu_class'    => "navbar order-last order-lg-0",
          'menu_id'      => "navbar",
          'container'      => "",
          'container_class'  => "",
          'container_id'    => "",
          'theme_location'  => "primary_menu",

        ));
        ?>

        
      </nav>

      <?php 		
			get_search_form(); 
		  ?>

    </div>
  </header>