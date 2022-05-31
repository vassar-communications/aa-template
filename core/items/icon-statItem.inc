<?php

function item_statIcon(
  $title=false,
  $icon,
  $classes=null,
  $extras=null
) {

global $project_paths;

  $css = get_extras_value('css', $extras, 'style="%s"');
  $heading_level = get_extras_value('hlevel', $extras);
  if (!$heading_level) $heading_level = 3;

return <<<TMP
<div class="icon-item $classes" $css>
  <div class="icon-container">
    <i class="fa fa-$icon the-icon"></i>
  </div>
  <div class="icon-item__text">
    <h$heading_level class="icon-item__title">$title</h$heading_level>
TMP;
}


function end_item_statIcon($extras=null) {
  return <<<TMP
    </div>
  </div>
TMP;
}
