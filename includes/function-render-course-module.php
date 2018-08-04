<?php
function render_course_modules($modules_array) {

  foreach($modules_array as $module_id) {
    if( get_post_status( $module_id ) == 'publish' ) {

    $image_id =   get_post_meta($module_id, 'image', true);
    $image =      wp_get_attachment_url( $image_id, $size = 'full');
    $module_tag = get_post_meta($module_id, 'module-tag', true);
    $date =       get_post_meta($module_id, 'date', true);
    $time =       get_post_meta($module_id, 'time', true);
    $headline =   get_post_meta($module_id, 'headline', true);
    $content =    get_post($module_id)->post_content;

    $markup .= "
      <div class='u-margin-bottom-big'></div>
      <div class='row module-pullup' style='margin: 0'>
        <div class='col-1-of-3 icon-container lift'>
          <img src='${image}' class='course-module-icon' />
        </div>
        <div class='col-2-of-3'>
          <div class='module-meta'>
            <h4>${module_tag}</h4>
            <h2>{$headline}</h2>
            <h5>{$date}</h5>
            <h5>{$time}</h5>
          </div>
        </div>
      </div>
      <div class='copy-block__outer'>
        <div class='copy-block__inner'>";
          if( ! $date ) {
            $markup .= "<p class='module-pullup'>{$content}</p>";
          } else {
            $markup .= "<p>{$content}</p>";
          }
        $markup .= "
        </div>
      </div>
    ";

    }
  }
    return $markup;
}
