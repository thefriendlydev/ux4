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

<div class="section intro">
  <div class="container">
    <?= the_field('intro_text'); ?>
  </div>
</div>

<?php
  $clients = new WP_Query( array(
  "posts_per_page" => - 1,
  "post_type" => "client",
  "orderby" => "date",
  "order" => "ASC"
  ) );
?>
<?php if ( $clients->have_posts() ) : ?>

<div class="section clientTiles">
  <div class="container">
    <div class="grid">
      <?php while ( $clients->have_posts() ) : $clients->the_post(); ?>
        <div class="grid-1of1--palm grid-1of3">
          <div class="clientTile">
            <div class="clientTile-top">
              <?php if (get_field('client_logo')) : ?>
                <div>
                  <img class="clientTile-logo" src="<?= the_field('client_logo'); ?>">
                </div>
              <?php else : ?>
                <div class="clientTile-logoText"><?= the_field('client_logo_text'); ?></div>
              <?php endif; ?>

              <div class="clientTile-text"><?= the_field('hero_text'); ?></div>
            </div>
            <?php if (get_field('casestudy')) : ?>
              <div class="clientTile-bottom">
                  <a href="<?php the_permalink(); ?>"><span>Read the case study</span> <i class="icon icon-circle-right-arrow"></i></a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile;  ?>
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
      <div class="grid">
        <?php foreach( $testimonials as $post): // variable must be called $post (IMPORTANT) ?>
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
