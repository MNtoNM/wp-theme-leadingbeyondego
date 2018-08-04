<?php
function render_questions($item_array) {
  $markup = '';

  foreach($item_array as $item_id) {
    if( get_post_status( $item_id ) == 'publish' ) {
      $question = get_post_meta($item_id, 'headline', true);
      $answer = get_post($item_id)->post_content;


      $markup .= "<div class='tab blue'>
      <input id='tab-{$item_id}' type='radio' name='faq-accordion'>
      <label for='tab-{$item_id}'>{$question}</label>
      <div class='tab-content'>
      <p>{$answer}</p>
      </div>
      </div>
      ";
    }
  }
return $markup;
}
