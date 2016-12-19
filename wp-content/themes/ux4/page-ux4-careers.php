<?php
/*
 Template Name: Careers Page
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

<?php $careers = get_field('careers');
  if( $careers ): ?>

  <div class="section careersSection">
    <div class="container">
      <div class="iconBullet">
        <div class="icon icon-office-table"></div>
        <div class="section-headline">Current Job Openings</div>

        <div class="careersContainer">
          <?php foreach( $careers as $post): setup_postdata($post); ?>
            <div class="u-tableRow">
              <div class="openCareer">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>

<?php else: ?>

<?php endif; ?>


<?php get_footer(); ?>
