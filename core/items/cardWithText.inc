<?php

function item_cardWithText(
    $title=false,
    $card_link_url,
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
<div class="card $classes" $css>
<a href="$card_link_url" class="stretched-link"></a>
  <img src="$card_image_url" class="card-img-top" alt="$card_image_alt">
  <div class="card-body">
    {$card_title($title, $extras)}
    <div class="card-text">

TMP;

}

function end_item_cardWithText( $card_link_text=false,$extras=null) {
    return <<<TMP
  <div class="cta-icon-label btn btn-link">$card_link_text</div>
    </div>
  </div>
</div>
TMP;
}
