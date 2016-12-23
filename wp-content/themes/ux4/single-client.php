<?php get_header(); ?>

<div class="section hero">
  <div class="bgImage" style="background-image: url(<?= the_field('hero_background_image'); ?>)">
    <div class="blueOverlay">
      <div class="container">
        <div class="u-table">
          <div class="heroContent">
            <div class="heroLogo"><img src="<?= the_field('client_logo'); ?>"></div>
            <div class="heroText u-semiBold"><?= the_field('hero_text'); ?></div>
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

<div class="section projectDetails">
  <div class="container">
    <div class="projectDetailsContainer">
      <div class="u-bold u-bottom8">Project Type</div>
      <div class="projectType">
        <?php $project_types = get_field('project_type'); $counter = 0; ?>

        <?php foreach( $project_types as $type ): ?>
          <?php $counter++; ?>
          <? if( sizeof($project_types) > $counter ): ?>
            <?php echo $type->name; ?>,
          <?php else: ?>
            <?php echo $type->name; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <div class="u-bold u-bottom8">Services</div>
      <div class="projectServices">
        <?php $services = get_field('services');

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

<div class="section callout">
  <div class="container">
    <div class="calloutText">
      <?= the_field('bottom_callout_text'); ?>
    </div>
    <a class="button" href="<?= the_field('bottom_button_link'); ?>"><?= the_field('bottom_button_text'); ?></a>
  </div>
</div>

<?php get_footer(); ?>
