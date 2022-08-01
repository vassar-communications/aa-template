<?php

function item_cardWithTextVideoModal(
    $title=false,
    $videourl,
    $channel,
    $card_image_info=false,
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
<button type="button"  data-bs-toggle="modal"  data-src="$videourl" data-channel="$channel"  class="card video-btn js-video-btn $classes"  data-bs-target="#videoModal" $css>
  <img src="$card_image_url" class="card-img-top" alt="$card_image_alt">
  <div class="card-body text-start">
    {$card_title($title, $extras)}
    <div class="card-text">

TMP;

}

function end_item_cardWithTextVideoModal( $card_link_text=false,$extras=null) {
    return <<<TMP

    </div>
  </div>
</button>
TMP;
}
