<?php
/*
 Template Name: Work Page
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

<div class="section intro">
  <div class="container">
    <?= the_field('intro_text'); ?>
  </div>
</div>


<?php
$clients = Client::posts();
if(count($clients) > 0):
?>

<div class="section-tabs ux-tabs u-noLarge" data-tab-content='.clientTiles'>
  <ul>
    <li class="uxTab" data-tab="application">Applications</li>
    <li class="uxTab" data-tab="website">Websites</li>
    <li class="uxTab" data-tab="consulting">Consulting</li>
  </ul>
  <ul class="industryTabs">
    <?php foreach(Client::industries() as $industry): ?>
      <li class="uxTab uxTab--secondary" data-industry="<?= $industry->slug; ?>"><?= $industry->name; ?></li>
    <?php endforeach; ?>
  </ul>
</div><!-- .section-tabs -->

<div class="section-tabs ux-tabs u-noMobile" data-tab-content='.clientTiles'>
  <ul>
    <li class="uxTab uxTab--all" data-tab="all">All</li>
    <li class="uxTab" data-tab="application">Intuitive Applications</li>
    <li class="uxTab" data-tab="website">Persuasive Websites</li>
    <li class="uxTab" data-tab="consulting">Strategic Consulting</li>
  </ul>
  <ul class="industryTabs">
    <?php foreach(Client::industries() as $industry): ?>
      <li class="uxTab uxTab--secondary" data-industry="<?= $industry->slug; ?>"><?= $industry->name; ?></li>
    <?php endforeach; ?>
  </ul>
</div><!-- .section-tabs -->

<div class="section clientTiles">
  <div class="container">
    <div class="grid">
      <?php foreach(Client::posts() as $client): $post = $client; setup_postdata($post); ?>
        <?php $filters = get_field('project_type'); ?>
        <?php $industries = get_field('industry'); ?>
        <div class="grid-1of1--palm grid-1of3" data-tab-filter="<?php foreach( $filters as $filter ): ?><?= $filter->slug; ?> <?php endforeach; ?>" data-tab-industry="<?php foreach( $industries as $industry ): ?><?= $industry->slug; ?> <?php endforeach; ?>">
          <div class="clientTile">
            <?php if (get_field('casestudy')) : ?>
              <a class="u-table" href="<?php the_permalink(); ?>">
              <div class="clientTile-top">
            <?php else : ?>
              <div class="clientTile-top clientTile--noCase">
            <?php endif; ?>
              <div class="clientTile-topContainer">
                <?php if (get_field('client_logo')) : ?>
                  <div>
                    <img class="clientTile-logo" src="<?= the_field('client_logo'); ?>">
                  </div>
                <?php else : ?>
                  <div class="clientTile-logoText"><?= the_field('client_logo_text'); ?></div>
                <?php endif; ?>

                <div class="clientTile-text"><?= the_field('hero_text'); ?></div>
              </div>
            </div>
            <?php if (get_field('casestudy')) : ?>
              </a>
            <?php endif; ?>
            <?php if (get_field('casestudy')) : ?>
              <div class="clientTile-bottom">
                <div class="clientTile-bottomContainer">
                  <a href="<?php the_permalink(); ?>"><span>Read the case study</span> &nbsp; ></a>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <?php wp_reset_query(); ?>
      <?php wp_reset_postdata();  ?>
    </div>
  </div>
</div>

<?php endif; ?>

<div class="section testimonials">
  <?php $testimonials = get_field('testimonials');
  if( $testimonials ): ?>
    <div class="container">
      <div class="grid u-noLarge">
        <?php $i = 0; foreach( $testimonials as $post): // variable must be called $post (IMPORTANT) ?>
          <?php if(++$i > 1) break; ?>
          <?php setup_postdata($post); ?>
          <div class="grid-1of1--palm grid-1of2--lap grid-1of3">
            <div class="testimonialsContainer">
            <div class="testimonialsTop">
              <div class="bgImage" style="background-image: url(<?= the_field('test_background_image'); ?>)">
                <div class="blueOverlayLight">
                  <div class="combo combo--rev combo--middle testimonialHero">
                    <div class="combo-first">
                    <?php if( get_field('test_logo') ): ?>
                      <div class="testimonialLogo">
                        <img src="<?= the_field('test_logo'); ?>">
                      </div>
                    <?php else: ?>
                      <div class="testLogoText">
                        <?= the_field('test_company_if_no_logo'); ?>
                      </div>
                    <?php endif; ?>
                    </div>
                    <div class="combo-last">
                      <img class="testimonialHeadshot" src="<?= the_field('test_headshot'); ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonialsBottom">
              <div class="theTestimonial">
                <?= the_field('test_testimonial'); ?>
              </div>
              <div class="testimonial-name">
                <?= the_field('test_full_name'); ?>
              </div>
              <div class="testimonial-title">
                <?= the_field('test_title'); ?>
              </div>
              <div class="testimonial-company">
                <?= the_field('test_company'); ?>
              </div>
            </div>
          </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>


      <div class="grid u-noMobile u-noDesk">
        <?php $i = 0; foreach( $testimonials as $post): // variable must be called $post (IMPORTANT) ?>
          <?php if(++$i > 2) break; ?>
          <?php setup_postdata($post); ?>
          <div class="grid-1of1--palm grid-1of2--lap grid-1of3">
            <div class="testimonialsContainer">
            <div class="testimonialsTop">
              <div class="bgImage" style="background-image: url(<?= the_field('test_background_image'); ?>)">
                <div class="blueOverlayLight">
                  <div class="combo combo--rev combo--middle testimonialHero">
                    <div class="combo-first">
                    <?php if( get_field('test_logo') ): ?>
                      <div class="testimonialLogo">
                        <img src="<?= the_field('test_logo'); ?>">
                      </div>
                    <?php else: ?>
                      <div class="testLogoText">
                        <?= the_field('test_company_if_no_logo'); ?>
                      </div>
                    <?php endif; ?>
                    </div>
                    <div class="combo-last">
                      <img class="testimonialHeadshot" src="<?= the_field('test_headshot'); ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonialsBottom">
              <div class="theTestimonial">
                <?= the_field('test_testimonial'); ?>
              </div>
              <div class="testimonial-name">
                <?= the_field('test_full_name'); ?>
              </div>
              <div class="testimonial-title">
                <?= the_field('test_title'); ?>
              </div>
              <div class="testimonial-company">
                <?= the_field('test_company'); ?>
              </div>
            </div>
          </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>


      <div class="grid u-noPortable">
        <?php $i = 0; foreach( $testimonials as $post): // variable must be called $post (IMPORTANT) ?>
          <?php if(++$i > 3) break; ?>
          <?php setup_postdata($post); ?>
          <div class="grid-1of1--palm grid-1of2--lap grid-1of3">
            <div class="testimonialsContainer">
            <div class="testimonialsTop">
              <div class="bgImage" style="background-image: url(<?= the_field('test_background_image'); ?>)">
                <div class="blueOverlayLight">
                  <div class="combo combo--rev combo--middle testimonialHero">
                    <div class="combo-first">
                    <?php if( get_field('test_logo') ): ?>
                      <div class="testimonialLogo">
                        <img src="<?= the_field('test_logo'); ?>">
                      </div>
                    <?php else: ?>
                      <div class="testLogoText">
                        <?= the_field('test_company_if_no_logo'); ?>
                      </div>
                    <?php endif; ?>
                    </div>
                    <div class="combo-last">
                      <img class="testimonialHeadshot" src="<?= the_field('test_headshot'); ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="testimonialsBottom">
              <div class="theTestimonial">
                <?= the_field('test_testimonial'); ?>
              </div>
              <div class="testimonial-name">
                <?= the_field('test_full_name'); ?>
              </div>
              <div class="testimonial-title">
                <?= the_field('test_title'); ?>
              </div>
              <div class="testimonial-company">
                <?= the_field('test_company'); ?>
              </div>
            </div>
          </div>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      </div>


    </div>
  <?php endif; ?>
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
