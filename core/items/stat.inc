<?php

function item_stat(
  $stat_label,
  $stat_figure,
  $stat_description=null,
  $classes=null,
  $extras=null
) {

  $css = get_extras_value('css', $extras, 'style="%s"');
  $heading_level = get_extras_value('hlevel', $extras);

  if($stat_description)
    $stat_description = sprintf('<div>%s</div>', $stat_description);


  if (!$heading_level) $heading_level = 3;
$title_classes = get_extras_value( 'title_classes', $extras );


//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
global $bg_image;

if (get_extras_value('bg-image-url', $extras)) {
  $section_classes .= ' has-image';
}

return <<<TMP
<div class="stat-item $classes" $css>
    <h$heading_level class="stat-label">$stat_label</h$heading_level>
    <div class="stat-value">$stat_figure</div>
    $stat_description
  </div>
TMP;
}
