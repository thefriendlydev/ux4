<?php
/*
 Template Name: Solutions Page
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

<div class="section solutionsTabs">
  <div class="container">
    <div class="section-tabs ux-tabs u-noLarge ux-tabs--solutions" data-tab-content='.tabContent' data-tab-default='application' data-tab-allow-empty='false'>
      <ul>
        <li class="uxTab" data-tab="application">Applications</li>
        <li class="uxTab" data-tab="website">Websites</li>
        <li class="uxTab" data-tab="consulting">Consulting</li>
      </ul>
    </div><!-- .section-tabs -->

    <div class="section-tabs ux-tabs ux-tabs--solutions u-noMobile" data-tab-content='.tabContent' data-tab-default='application'>
      <ul>
        <li class="uxTab" data-tab="application">Intuitive Applications</li>
        <li class="uxTab" data-tab="website">Persuasive Websites</li>
        <li class="uxTab" data-tab="consulting">Strategic Consulting</li>
      </ul>
    </div><!-- .section-tabs -->
  </div>
</div>

<div class="tabContent">

  <div data-tab-filter="application">
    <?php get_template_part('partials/solutions/applications'); ?>
  </div>

  <div data-tab-filter="website">
    <?php get_template_part('partials/solutions/websites'); ?>
  </div>

  <div data-tab-filter="consulting">
    <?php get_template_part('partials/solutions/consulting'); ?>
  </div>

</div>

<div class="section callout">
  <div class="container">
    <div class="calloutText">
      <?= the_field('bottom_callout_text'); ?>
    </div>
    <a class="button" href="<?= the_field('bottom_button_link'); ?>"><?= the_field('bottom_button_text'); ?></a>
  </div>
</div>

<?php get_footer(); ?>
