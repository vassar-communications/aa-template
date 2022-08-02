<?php



/*  Item
    ==== */



function item_dropdown(
  $title,
  $classes=null,
  $extras=null
) {

  $css = get_extras_value('css', $extras, 'style="%s"');

$title_classes = get_extras_value( 'title_classes', $extras );

//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
global $bg_image;

if (get_extras_value('bg-image-url', $extras)) {
  $section_classes .= ' has-image';
}

return <<<TMP
<details class="animated-dropdown item-dropdown $classes">
    <summary><span class="dropdown-title">$title</span></summary>
    <div class="dropdown__content">
TMP;
}


function end_item_dropdown($extras=null) {
  return <<<TMP
    </div>
  </details>
TMP;
}
