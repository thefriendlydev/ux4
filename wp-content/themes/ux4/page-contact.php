<?php
/*
 Template Name: Contact Page
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

<div class="section hero">
  <div class="bgImage" style="background-image: url(<?= the_field('hero_background_image'); ?>)">
    <div class="blueOverlay">
      <div class="container">
        <div class="u-table">
          <div class="heroContent">
            <?php if( get_field('page_orientation_text') ): ?>
              <div class="heroOrientation"><?= the_field('page_orientation_text'); ?></div>
            <?php endif; ?>
            <div class="heroHeadline"><?= the_field('hero_headline'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section intro intro--contact">
  <div class="container">
    <?= the_field('intro_text'); ?>
  </div>
</div>

<div class="section contactForm">
  <div class="container">
    <div class="detailsContainer">
      <div class="detailsTable">
        <div class="detailsTable-row">
          <div class="first">
            <div class="icon icon-phone"></div>
          </div>
          <div class="second">
            <div class="phoneNumber"><?= the_field('phone_number'); ?></div>
          </div>
        </div>

        <div class="detailsTable-row">
          <div class="first lastRow">
            <div class="icon icon-email"></div>
          </div>
          <div class="second lastRow">
            <a href="mailto:<?= the_field('email_address'); ?>" class="email"><?= the_field('email_address'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <?php
      $contact_form_shortcode = get_field('contact_form_shortcode');
      echo do_shortcode($contact_form_shortcode);
    ?>
  </div>
</div>

<?php get_footer(); ?>
