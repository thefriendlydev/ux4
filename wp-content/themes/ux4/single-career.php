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

<div class="section introText">
  <div class="container">
    <?= the_field('intro_text'); ?>
  </div>
</div>

<div class="section iconBullets">
  <div class="container">
    <div class="grid">
      <?php if( have_rows('icon_section_with_bullets') ): ?>
        <?php while( have_rows('icon_section_with_bullets') ): the_row(); ?>
            <div class="grid-1of1">
              <div class="iconBullet">
                <div class="icon icon-<?= the_sub_field('icon_name'); ?>"></div>
                <div class="section-headline"><?= the_sub_field('section_title'); ?></div>
                <?php if( have_rows('bullets') ): ?>
                  <?php while( have_rows('bullets') ): the_row(); ?>
                    <div class="combo">
                      <div class="combo-first">
                        <div class="icon icon-bullet"></div>
                      </div>
                      <div class="combo-last">
                        <div class="bulletText">
                          <?= the_sub_field('bullet_text'); ?>
                        </div>
                        <?php if( get_sub_field('bullet_image') ): ?>
                          <img class="bulletImage" src="<?= the_sub_field('bullet_image'); ?>">
                        <?php endif; ?>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section callout callout--career">
  <div class="container">
    <div class="calloutText">
      <?= the_field('bottom_callout_text'); ?>
    </div>
    <a class="button" href="mailto:careers@ux4sight.com?subject=Job Application: <?php the_title(); ?>"><?= the_field('bottom_button_text'); ?></a>
  </div>
</div>

<?php get_footer(); ?>
