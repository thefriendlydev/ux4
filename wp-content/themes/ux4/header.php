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


  <!-- TypeKit Fonts -->
  <script src="https://use.typekit.net/bhb0knn.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <base href="/">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="siteWrapper">
    <div class="siteBody">
      <div class="primaryNav u-noLarge">
        <div class="container">
          <a href="/" class="navLogo">
            <img src="<?php bloginfo('template_url'); ?>/dist/img/logo.png">
          </a>
          <div class="icon icon-menu"></div>
          <div class="icon icon-close"></div>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container_class' => 'primaryNav-items', 'menu_class' => 'navigation-list' ) ); ?>
        </div>
      </div>

      <div class="primaryNav primaryNav--desk u-noMobile">
        <div class="container">
          <div class="combo combo--middle">
            <div class="combo-first">
              <a href="/" class="navLogo">
                <img src="<?php bloginfo('template_url'); ?>/dist/img/logo.png">
              </a>
            </div>
            <div class="combo-last">
              <?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container_class' => 'primaryNav-items', 'menu_class' => 'navigation-list' ) ); ?>
            </div>
          </div>
        </div>
      </div>
