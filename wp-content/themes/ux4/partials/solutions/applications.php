<div class="section solutionsIntro">
  <div class="container">
    <?= the_field('app_intro_text'); ?>

    <?php if( get_field('app_bullet_intro_text') ): ?>
      <?= the_field('app_bullet_intro_text'); ?>
    <?php endif; ?>

    <?php if( have_rows('app_bullets') ): ?>
      <div class="iconBullet">
        <?php while( have_rows('app_bullets') ): the_row(); ?>
          <div class="combo ">
            <div class="combo-first">
              <div class="icon icon-bullet"></div>
            </div>
            <div class="combo-last">
              <div class="bulletText">
                <?= the_sub_field('app_bullet_text'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    <div class="u-alignCenter">
      <a class="button button--solutionsCta" href="<?= the_field('app_cta_button_link'); ?>"><?= the_field('app_cta_button_text'); ?></a>
    </div>
  </div>
</div>


<?php if( have_rows('app_service') ): ?>
  <?php while( have_rows('app_service') ): the_row(); ?>
    <div class="section solutionService">
      <div class="container">

        <div class="service">
          <div class="icon icon-<?= the_sub_field('app_service_icon'); ?>"></div>
          <div class="service-headline"><?= the_sub_field('app_service_title'); ?></div>
          <div class="service-text"><?= the_sub_field('app_service_text'); ?></div>
        </div>

        <div class="projectServicesContainer">
          <?php $services = get_sub_field('app_service_services');

          if( $services ): ?>
            <?php foreach( $services as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
                <div class="projectService">
                  <a><?php the_title(); ?></a>
                  <div class="projectService-description"><?= the_field('service_description'); ?></div>
                  <!-- <div class="serviceOverlay active"></div>
                  <div class="serviceModal active">
                    <div class="serviceTitle"><?php the_title(); ?></div>
                    <div class="serviceDescription"><?= the_field('service_description'); ?></div>
                  </div> -->
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>

        <?php if( have_rows('app_benefits') ): ?>
          <div class="benefitsContainer">
            <div class="benefitsTitle">Benefits</div>
            <div class="iconBullet">
              <?php while( have_rows('app_benefits') ): the_row(); ?>
                <div class="combo ">
                  <div class="combo-first">
                    <div class="icon icon-bullet"></div>
                  </div>
                  <div class="combo-last">
                    <div class="bulletText">
                      <?= the_sub_field('app_benefit'); ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php $case_study = get_sub_field('app_case_study'); if( $case_study ):
          $post = $case_study;
          setup_postdata( $post );
        ?>
          <div class="caseStudyTitle">Case Study</div>
          <div class="grid grid--solutions">
            <div class="grid-1of1--palm grid-1of2--lap grid-1of3">
              <div class="clientTile">
                <div class="clientTile-top">
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
                  <div class="clientTile-bottom">
                    <div class="clientTile-bottomContainer">
                      <a href="<?php the_permalink(); ?>"><span>Read the case study</span> <i class="icon icon-circle-right-arrow"></i></a>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>




<?php if( get_field('app_testimonials') ): ?>
<div class="section testimonials">
  <?php $testimonials = get_field('app_testimonials');
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
<?php endif; ?>
