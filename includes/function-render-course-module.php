<?php
function render_course_modules($modules_array) {
  $markup = '';

  foreach($modules_array as $module_id) {

    $image_id = get_post_meta($module_id, 'image', true);
    $image =    wp_get_attachment_url( $image_id, $size = 'full');
    $date =     get_post_meta($module_id, 'date', true);
    $time =     get_post_meta($module_id, 'time', true);
    $headline = get_post_meta($module_id, 'headline', true);
    $content =  get_post($module_id)->post_content;

    $markup .= "
      <div class='u-margin-bottom-big'></div>
      <div class='row' style='margin: 0'>
        <div class='col-1-of-3 icon-container lift'>
          <img src='${image}' class='course-module-icon' />
        </div>
        <div class='col-2-of-3'>
          <div class='module-meta'>
            <h4>{$date}</h4>
            <h5>{$time}</h5>
            <h2>{$headline}</h2>
          </div>
        </div>
      </div>
      <div class='copy-block__outer'>
        <div class='copy-block__inner'>
          <p>{$content}</p>
        </div>
      </div>
      <div class='u-margin-bottom-medium'></div>
    ";
  }
    return $markup;
}
