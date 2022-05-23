<?php

function item_imageCard(
  $title=false,
  $text,
  $card_link_url,
  $card_image_info,
  $classes=null,
  $extras=null
) {

  $css = get_extras_value('css', $extras, 'style="%s"');
  $heading_level = get_extras_value('hlevel', $extras);
  if (!$heading_level) $heading_level = 3;
$title_classes = get_extras_value( 'title_classes', $extras );

//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
global $card_title;

$card_image_url = $card_image_info['url'];
$card_image_alt = $card_image_info['alt'];

return <<<TMP
<a class="card $classes" $css href="$card_link_url">
  <img src="$card_image_url" class="card-img" alt="$card_image_alt">
  <div class="card-img-overlay">
    {$card_title($title, $extras)}
    <p class="card-text">$text</p>
  </div>
</a>
TMP;
}
