<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Intuitive UX means better business. We make your website or app easier to use and more relevant to your end users.">

  <title><?php wp_title( 'UX 4Sight - ', true, 'left' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="<?php bloginfo('template_url'); ?>/dist/img/favicon.ico" rel="icon" type="image/x-icon">
  <link href="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application.css'); ?>" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.0/jquery.modal.min.css" rel="stylesheet">
  <script src="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application.js'); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.0/jquery.modal.js"></script>

  <!-- Slick Slider: Include as bower package -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
  <link ref="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

  <!-- TypeKit Fonts -->
  <script src="https://use.typekit.net/bhb0knn.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <base href="/">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="siteWrapper">
    <div class="siteBody">
      <div class="primaryNav">
        <div class="container">
          <a href="/" class="navLogo">
            <img src="<?php bloginfo('template_url'); ?>/dist/img/logo.png">
          </a>
          <div class="icon icon-menu"></div>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container_class' => 'primaryNav-items', 'menu_class' => 'navigation-list' ) ); ?>
        </div>
      </div>
