<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Electronic recycling and asset management made simple. Tailored solutions that deliver exception ROI while  being fisically responsible.">

  <title><?php wp_title( 'EDI Inc. - ', true, 'left' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="<?php bloginfo('template_url'); ?>/dist/img/favicon.ico" rel="icon" type="image/x-icon">
  <link href="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application.css'); ?>" rel="stylesheet">
  <script src="https://www.youtube.com/iframe_api"></script>
  <script src="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application.js'); ?>"></script>
  <script src="https://apis.google.com/js/client.js"></script>

  <!-- TypeKit Fonts -->
  <script src="https://use.typekit.net/gfg3dqh.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <base href="/">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="siteWrapper">
    <div class="siteBody">
      <div class="primaryNav u-noMobileEdi">
        <div class="container">
          <div class="primaryNav-logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/dist/img/nav-logo.png"></a><a href="https://sustainableelectronics.org/r2-standard" target="_blank"><img class="primaryNav-grayscale" src="<?php bloginfo('template_url'); ?>/dist/img/cert-r2.png"></a></div>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'container_class' => 'primaryNav-items', 'menu_class' => 'navigation-list' ) ); ?>
        </div>
      </div>

