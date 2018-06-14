<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
  <body <?php body_class(); ?>>
      <div class="header">
        <a href="/">
          <div class="header__logo">Leading Beyond Ego</div>
        </a>

        <a href="#learn-more" class="header__enroll button" id="nav-enroll">Learn More</a>

      </div>

      <div class="modal" id="learn-more">
        <div class="modal-container"style="background-image: url(<?php echo wp_get_attachment_image_src(7, 'full')[0];  ?>);">
        <?php $result = getSalescopy(212); ?>
          <h4 class="center white"><?php echo $result['headline'];?></h4>

          <div class="u-margin-bottom-medium"></div>

          <p><?php echo do_shortcode('[mc4wp_form id="214"]');?></p>



          <a href="#modal-close" class="modal-close">&times;</a>
        </div>
      </div>
