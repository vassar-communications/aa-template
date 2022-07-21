<?php

function item_iconItem(
  $title=false,
  $icon,
  $classes=null,
  $extras=null
) {

global $project_paths;
  $custom_styling = '';
  $css = get_extras_value('css', $extras, 'style="%s"');
  $heading_level = get_extras_value('hlevel', $extras);
  if (!$heading_level) $heading_level = 3;

  $custom_glyph = get_extras_value('glyph', $extras);
  $custom_glyph_name = get_extras_value('glyph-name', $extras);

  if ($custom_glyph) {
    $classes .= ' custom-icon-'.$custom_glyph_name;
    $custom_styling = <<<TMP

<style type="text/css">
.custom-icon-$custom_glyph_name .the-icon:before {
  content: '$custom_glyph';
}
</style>
TMP;
  }

  if($title) {
    $title_markup = <<<TMP
    <h$heading_level class="icon-item__title">$title</h$heading_level>
TMP;
  }
  else $title_markup = null;

return <<<TMP
<div class="icon-item $classes" $css>
$custom_styling
  <div class="icon-container">
    <i class="fa fa-$icon the-icon"></i>
  </div>
  <div class="icon-item__text">
  $title_markup
TMP;
}


function end_item_iconItem($extras=null) {
  return <<<TMP
    </div>
  </div>
TMP;
}
