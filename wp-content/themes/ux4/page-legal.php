<?php
/*
 Template Name: Legal Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="section legal">
  <div class="container container--legal">
    <div class="legalTitle"><?= the_field('legal_title'); ?></div>
    <div class="legalText"><?= the_field('legal_text'); ?></div>
  </div>
</div>

<?php get_footer(); ?>
