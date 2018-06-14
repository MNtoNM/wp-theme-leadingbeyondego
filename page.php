<?php get_header(); ?>
<div class="u-padding-bottom-large"></div>
<div class="u-padding-bottom-large"></div>
<div class="container">
  <?php while(have_posts()) {
    the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="u-margin-bottom-medium"></div>
    <?php the_content(); ?>
  <?php } ?>

  <?php get_footer(); ?>
</div>
