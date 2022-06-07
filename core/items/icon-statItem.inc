<?php

function item_statIcon(
  $value,
  $label,
  $icon,
  $classes=null,
  $extras=null
) {

global $project_paths;

  $css = get_extras_value('css', $extras, 'style="%s"');

return <<<TMP
<div class="stat-item $classes" $css>
  <div class="stat-icon">
    <i class="fa fa-$icon the-icon"></i>
  </div>
  <div class="stat-content">
    <b class="stat-value">$value</b>
    <b class="stat-label">$label</b>
  </div>
</div>
TMP;
}
