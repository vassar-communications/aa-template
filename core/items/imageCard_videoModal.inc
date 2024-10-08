<?php

function item_imageCard_VideoModal(
    $title,
    $text,
    $videourl,
    $channel,
    $mp4url,
    $card_image_info,
    $classes='',
    $extras=null
) {

    $css = get_extras_value('css', $extras, 'style="%s"');
    $heading_level = get_extras_value('hlevel', $extras);
    if (!$heading_level) $heading_level = 3;
    $title_classes = get_extras_value( 'title_classes', $extras );

    if (strpos($classes, 'text-at') === false)
        $classes .= ' text-at-top';
//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
    global $card_title;

    $card_image_url = $card_image_info['url'];
    $card_image_alt = $card_image_info['alt'];

    return <<<TMP

<button type="button" class="card card-full-image video-btn js-video-btn $classes"   data-bs-toggle="modal"  data-src="$videourl" data-video-url="$mp4url" data-channel="$channel" data-bs-target="#videoModal">
  <img src="$card_image_url" class="card-img" alt="$card_image_alt">
  <div class="card-img-overlay">
    <div class="card-img-content">
    <p class="card-button-title">$title</p>
<!--      {$card_title($title, $extras)} -->
<!--      <p class="card-text">$text</p> -->
    </div>
  </div>
</button>

TMP;
}
