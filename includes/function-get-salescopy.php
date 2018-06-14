<?php
  function getSalescopy($post_id) {
    $headline = get_post_meta($post_id, 'headline', true);
    $date = get_post_meta($post_id, 'date', true);
    $time = get_post_meta($post_id, 'time', true);
    $image_id = get_post_meta($post_id, 'image', true);
    $image_url = wp_get_attachment_image_src($image_id, 'full')[0];
    // print_r($image_url);

    $content_post = get_post($post_id);
    $content = $content_post->post_content;

    $response = array(
      'headline' => $headline,
      'content' => $content,
      'date' => $date,
      'time' => $time,
      'image'=> $image_url
    );

    return $response;
  }
?>
