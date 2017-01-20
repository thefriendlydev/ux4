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
              <div class="heroOrientation u-noLarge"><?= the_field('page_orientation_text'); ?></div>
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

<div class="section intro contactForm">
  <div class="container">
    <div class="grid">
      <div class="grid-1of2 grid-1of1--palm">
        <div class="contactForm-title">
          <?= the_field('left_title'); ?>
        </div>
        <div class="formInfoContainer">
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
                  <?php if( get_field('second_email_address') ): ?>
                    <a href="mailto:<?= the_field('second_email_address'); ?>" class="email"><?= the_field('second_email_address'); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cf7Form">
          <?php
            $contact_form_shortcode = get_field('contact_form_shortcode');
            echo do_shortcode($contact_form_shortcode);
          ?>
        </div>
      </div>

      <div class="grid-1of2 grid-1of1--palm">
        <div class="contactForm-title contactForm-title--second">
          <?= the_field('right_title'); ?>
        </div>
        <div class="formInfoContainer formInfoContainer--map">
          <div class="combo">
            <div class="combo-first">
              <i class="icon icon-location2"></i>
            </div>
            <div class="combo-last">
              <div><?= the_field('form_street_address'); ?></div>
              <div><?= the_field('city_state_zip'); ?></div>
            </div>
          </div>
        </div>
        <div class="mapContainer">
          <?= the_field('map_embed_code'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
