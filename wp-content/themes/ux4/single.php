<?php get_header(); ?>
<div class="section postImage">
  <div class="container">
    <div class="content">
      <img src="<?= the_field('blog_featured_image'); ?>">
    </div>
  </div>
</div>

<div class="section postContent">
  <div class="container container--narrow">
    <div class="content">
      <div class="postContent-title"><?php the_title(); ?></div>
      <?php the_field('blog_content'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>