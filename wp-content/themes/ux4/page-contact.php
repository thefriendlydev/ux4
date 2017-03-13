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
  <?php if( !get_field('background_video_mp4') && !get_field('background_video_webm') && !get_field('background_video_backup_photo') ): ?>
  <div class="bgImage" style="background-image: url(<?= the_field('hero_background_image'); ?>)">
  <?php endif; ?>
    <div class="blueOverlay">

      <?php if( get_field('background_video_mp4') && get_field('background_video_webm') && get_field('background_video_backup_photo') ): ?>
        <video autoplay muted playsinline loop poster="<?= the_field('background_video_backup_photo'); ?>" class="IIV" id="bgvid" style="background-image: url(<?= the_field('background_video_backup_photo'); ?>)">
          <source src="<?= the_field('background_video_webm'); ?>">
          <source src="<?= the_field('background_video_mp4'); ?>" type="video/mp4">
        </video>
      <?php endif; ?>

      <div class="container">
        <div class="u-table">
          <div class="heroContent">
            <?php if( get_field('page_orientation_text') ): ?>
              <div class="heroOrientation u-noLarge"><?= the_field('page_orientation_text'); ?></div>
            <?php endif; ?>
            <?php if( get_field('hero_headline') ): ?>
              <div class="heroHeadline"><?= the_field('hero_headline'); ?></div>
            <?php endif; ?>
            <?php if( get_field('hero_secondary_headline') ): ?>
              <div class="heroSecondaryHeadline"><?= the_field('hero_secondary_headline'); ?></div>
            <?php endif; ?>
            <?php if( get_field('hero_secondary_sub_headline') ): ?>
              <div class="heroSecondarySubHeadline"><?= the_field('hero_secondary_sub_headline'); ?></div>
            <?php endif; ?>

            <?php if( get_field('pop_up_video') ): ?>
              <div class="heroPopUp">
                <div class="openVideo button button--white">
                  <div class="combo combo--middle">
                    <div class="combo-first">
                      <i class="icon icon-play_circle_outline"></i>
                    </div>
                    <div class="combo-last">
                      <?= the_field('pop_up_play_label'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="heroPopUpVideo">
                <div class="videoOverlay closeVideo"></div>
                <div class="videoContainer">
                  <div class="videoContent">
                    <video controls id="popvid" poster="<?= the_field('popup_video_backup_photo'); ?>" style="background-image: url(<?= the_field('popup_video_backup_photo'); ?>)">
                      <source src="<?= the_field('pop_up_video'); ?>" type="video/mp4">
                    </video>
                    <i class="icon icon-close closeVideo"></i>

                    <?php if( get_field('pop_up_video_button_text') && get_field('pop_up_button_link') ): ?>
                      <a class="button button--popUp" href="<?= the_field('pop_up_button_link'); ?>">
                        <?= the_field('pop_up_video_button_text'); ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php if( !get_field('background_video_mp4') && !get_field('background_video_webm') && !get_field('background_video_backup_photo') ): ?>
  </div>
  <?php endif; ?>
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
