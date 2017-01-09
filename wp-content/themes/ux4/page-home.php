<?php
/*
 Template Name: Home Page
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

<div class="section callout">
  <div class="container">
    <div class="calloutText calloutText--hideCta">
      <?= the_field('callout_text'); ?>
    </div>
    <a class="button u-noLarge" href="<?= the_field('callout_button_link'); ?>"><?= the_field('callout_button_text'); ?></a>
  </div>
</div>

<div class="section clientLogos">
  <div class="container">
    <div class="clientLogosHeadline">
      <?= the_field('client_logos_headline'); ?>
    </div>

    <div class="clientLogosContainer">
      <?php $client_logos = get_field('client_logos');
        if( $client_logos ): ?>
          <div class="grid grid--middle clientLogos-rotator">
            <?php foreach( $client_logos as $post): setup_postdata($post); // variable must be called $post (IMPORTANT) ?>
              <div class="grid-1of4 grid-2of4--palm clientLogos-logoWrapper">
                <img class="clientLogos-logo" src="<?= the_field('client_logo'); ?>">
              </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div><!-- .grid -->
        <?php endif; ?>
    </div><!-- .logoRotator-->

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

<div class="section services">
  <div class="container">
    <div class="grid">
      <?php if( have_rows('services') ): ?>
        <?php while( have_rows('services') ): the_row(); ?>
          <div class="grid-1of1--palm grid-1of2--lap grid-1of3">
            <div class="service">
              <div class="icon icon-<?= the_sub_field('service_icon'); ?>"></div>
              <div class="service-headline"><?= the_sub_field('service_headline'); ?></div>
              <div class="service-text"><?= the_sub_field('service_text'); ?></div>
              <a class="button button--secondary" href="<?= the_sub_field('service_button_link'); ?>">
                <?= the_sub_field('service_button_text'); ?>
              </a>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

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
