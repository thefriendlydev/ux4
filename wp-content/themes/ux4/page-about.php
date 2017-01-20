<?php
/*
 Template Name: About Page
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

<div class="section introText">
  <div class="container">
    <?= the_field('intro_text'); ?>
  </div>
</div>

<div class="section team">
  <div class="container">
    <div class="aboutTeam">
      <div class="icon icon-<?= the_field('team_icon'); ?>"></div>
      <div class="aboutTeam-headline"><?= the_field('team_headline'); ?></div>

      <div class="leadPhoto">
        <img src="<?= the_field('abdul_photo'); ?>">
      </div>
      <div class="leadName"><?= the_field('abdul_name_and_designations'); ?></div>
      <div class="leadTitle"><?= the_field('abdul_title'); ?></div>
      <div class="leadInfo">
        <span>
          <a href="mailto:<?= the_field('abdul_email'); ?>"><?= the_field('abdul_email'); ?></a>
        </span>
        <span><?= the_field('abdul_linkedin'); ?></span>
      </div>
    </div>
    <div class="aboutText"><?= the_field('about_text'); ?></div>
  </div>
</div>

<div class="section blueCallout">
  <div class="container">
    <div class="icon icon-<?= the_field('blue_callout_icon'); ?>"></div>
    <div class="blueCallout-headline">
      <?= the_field('blue_callout_headline'); ?>
    </div>
    <div class="blueCallout-text">
      <?= the_field('blue_callout_text'); ?>
    </div>
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

<div class="section hero hero--careers">
  <div class="bgImage" style="background-image: url(<?= the_field('careers_background_image'); ?>)">
    <div class="blueOverlay">
      <div class="container">
        <div class="u-table">
          <div class="heroContent">
            <div class="heroHeadline"><?= the_field('careers_headline'); ?></div>
            <a href="<?= the_field('careers_button_link'); ?>" class="button button--white">
              <?= the_field('careers_button_text'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
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
