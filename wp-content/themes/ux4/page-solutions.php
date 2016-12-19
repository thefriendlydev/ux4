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

<div class="section solutionsTabs">
  <div class="container">
    <div class="section-tabs ux-tabs u-noLarge" data-tab-content='.tabContent' data-tab-default='applications' data-tab-allow-empty='false'>
      <ul>
        <li class="uxTab" data-tab="applications">Applications</li>
        <li class="uxTab" data-tab="websites">Websites</li>
        <li class="uxTab" data-tab="consulting">Consulting</li>
      </ul>
    </div><!-- .section-tabs -->

    <div class="section-tabs ux-tabs u-noMobile" data-tab-content='.tabContent' data-tab-default='applications'>
      <ul>
        <li class="uxTab" data-tab="applications">Intuitive Applications</li>
        <li class="uxTab" data-tab="websites">Persuasive Websites</li>
        <li class="uxTab" data-tab="consulting">UX Consulting</li>
      </ul>
    </div><!-- .section-tabs -->
  </div>
</div>

<div class="tabContent">

  <div data-tab-filter="applications">
    <?php get_template_part('partials/solutions/applications'); ?>
  </div>

  <div data-tab-filter="websites">
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
