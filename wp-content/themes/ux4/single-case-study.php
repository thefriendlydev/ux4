<?php get_header(); ?>

<div class="section hero">
  <div class="bgImage" style="background-image: url(<?= the_field('hero_background_image'); ?>)">
    <div class="blueOverlay">
      <div class="container">
        <div class="u-table">
          <div class="heroContent">
            <div class="heroLogo"><img src="<?= the_field('hero_logo'); ?>"></div>
            <div class="heroText u-semiBold"><?= the_field('hero_text'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">Intro text</div>
  <?= the_field('intro_text'); ?>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">Project Type</div>
  <?php $project_types = get_field('project_type'); ?>
  <?php foreach( $project_types as $project_type ): ?>
    <?php echo $project_type->name; ?>
  <?php endforeach; ?>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">Services</div>
  <?php $services = get_field('services');

  if( $services ): ?>
      <ul>
      <?php foreach( $services as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <li>
              <div class="u-semiBold"><?php the_title(); ?></div>
              <div><?= the_field('service_description'); ?></div>
          </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
</div>


<div class="u-bottom15">
  <div class="u-semiBold">Objectives</div>
  <?php if( have_rows('objectives') ): ?>
    <?php while( have_rows('objectives') ): the_row(); ?>
      <div><?= the_sub_field('objective_text'); ?></div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">Challenges</div>
  <?php if( have_rows('challenges') ): ?>
    <?php while( have_rows('challenges') ): the_row(); ?>
      <div><?= the_sub_field('challenge_text'); ?></div>
      <?php if( get_sub_field('challenge_image') ): ?>
        <div><img src="<?= the_sub_field('challenge_image'); ?>"></div>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">Solutions</div>
  <?php if( have_rows('solutions') ): ?>
    <?php while( have_rows('solutions') ): the_row(); ?>
      <div><?= the_sub_field('solution_text'); ?></div>
      <?php if( get_sub_field('solution_image') ): ?>
        <div><img src="<?= the_sub_field('solution_image'); ?>"></div>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<div class="u-bottom15">
  <div class="u-semiBold">NDA Warning</div>
  <?php if( get_field('nda_text') ): ?>
    <?= the_field('nda_text'); ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
