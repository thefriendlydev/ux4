<?php
/*
 Template Name: EDI Homepage
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
<div class="section videoCta">
  <div class="bgImage" style="background-image: url(<?= the_field('background_image'); ?>)">
    <div class="greenOverlay">
      <div class="content">
        <h1>
          <?= the_field('main_text'); ?> <span><?= the_field('underline_text'); ?></span>
        </h1>
        <div class="playVideo">
          <a href="http://www.youtube.com/watch?v=<?= the_field('video_shortcode'); ?>&lightbox[autoresize]=true&showinfo=0&rel=0&controls=0" class="lightbox">
            <div class="button button--icon">
              <i class="icomoon icon-play"></i>
              <span class="buttonText"><?= the_field('button_text'); ?></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section serviceLinks">
  <div class="container">
    <div class="grid">
      <div class="grid-1of4 grid-1of2--lap grid-1of1--palm">
        <div class="serviceLinks-introText">
          <?= the_field('intro_text'); ?>
        </div>
      </div>

      <div class="grid-1of4 grid-1of2--lap grid-1of1--palm">
        <a href="services/e-recycling">
          <div class="serviceBox serviceBox--green">
            <div class="serviceBox-top">
              <img class="serviceBox-icon" src="<?php bloginfo('template_url'); ?>/dist/img/icon-recycle.png">
            </div>
            <div class="serviceBox-bottom">
              <span>E-Recycling</span>
            </div>
          </div>
        </a>
      </div>

      <div class="grid-1of4 grid-1of2--lap grid-1of1--palm">
        <a href="services/asset-management">
          <div class="serviceBox">
            <div class="serviceBox-top">
              <img class="serviceBox-icon" src="<?php bloginfo('template_url'); ?>/dist/img/icon-management.png">
            </div>
            <div class="serviceBox-bottom">
              <span>Asset Management</span>
            </div>
          </div>
        </a>
      </div>

      <div class="grid-1of4 grid-1of2--lap grid-1of1--palm">
        <a href="services/precious-metals-refining">
          <div class="serviceBox">
            <div class="serviceBox-top">
              <img class="serviceBox-icon" src="<?php bloginfo('template_url'); ?>/dist/img/icon-refining.png">
            </div>
            <div class="serviceBox-bottom">
              <span>Precious Metals Refining</span>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>

<div class="section personLeftGreen">
  <div class="container">
    <div class="leftCircle">
      <div class="personLeftPhoto"><img src="<?= the_field('person_photo'); ?>"></div>
      <div class="personLeftDetails">
        <div class="personLeftName">
          <?= the_field('person_name'); ?>,
        </div>
        <div class="personLeftTitle">
          <?= the_field('person_title'); ?>
        </div>
      </div>
    </div>
    <div class="personLeft-rightContent">
      <h1><?= the_field('section_title'); ?></h1>
      <div class="personLeft-sectionText"><?= the_field('section_text'); ?></div>
      <a href="<?= the_field('personLeft_button_link'); ?>" class="button button--yellow"><?= the_field('personLeft_button_text'); ?></a>
    </div>
  </div>
</div>

<?php if( have_rows('certifications') ): ?>
  <div class="section certifications">
    <div class="container">
      <?php while( have_rows('certifications') ): the_row(); ?>
        <div class="certification">
          <?php if( get_sub_field('cert_pdf') ): ?>
            <a href="<?= the_sub_field('cert_pdf'); ?>" target="_blank"><img src="<?= the_sub_field('certification_logo'); ?>"></a>
          <?php else: ?>
            <img src="<?= the_sub_field('certification_logo'); ?>">
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

<div class="personRightGrey">
  <div class="container">
    <div class="personRight-leftContent">
      <h1><?= the_field('section_title_person_right'); ?></h1>
      <div class="personRight-sectionText"><?= the_field('section_text_person_right'); ?></div>
      <a href="<?= the_field('button_link_person_right'); ?>" class="button button--ctaGreen"><?= the_field('button_text_person_right'); ?></a>
      <div class="buttonSupport"><?= the_field('button_supporting_text'); ?></div>
    </div>

    <div class="rightCircle">
      <div class="personRight-photo"><img src="<?= the_field('person_photo_person_right'); ?>"></div>
      <div class="personRight-details">
        <div class="personRight-name">
          <?= the_field('person_name_person_right'); ?>,
        </div>
        <div class="personRight-title">
          <?= the_field('person_title_person_right'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
