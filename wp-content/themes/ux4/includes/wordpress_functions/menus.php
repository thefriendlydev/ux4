<?php

function register_navs() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' )
    )
  );
}
add_action( 'init', 'register_navs' );