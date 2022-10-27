<?php

function invitation_style_card(
  $title,
  $date,
  $image_info = null,
  $classes = '',
//  $expandable_label = 'More',
  $extras = null
) {

/*
  $dropdown_start = '';
  if( $expandable_label ) {
    $dropdown_start = '<details><summary>' . $expandable_label . '</summary>';
  }
*/

  if( $image_info ) {
    $classes .= ' slide-has-image';
$image_markup = <<<TMP
<div class="image-container">
  <img src="{$image_info['img_url']}" alt="{$image_info['img_alt_text']}" />
</div>
TMP;
  }
else $image_markup = '';

return <<<TMP
<div class="carousel-cell triptych-card dropdown-card column-layout $classes">
  <div class="content">
    $image_markup
    <div class="event-details">
      <h2 class="dropdown-title">
        <div class="supertitle">$date</div>
        <div class="title">$title</div>
      </h2>

TMP;
}


function end_invitation_style_card() {
  return '</div></div></div>';
}
