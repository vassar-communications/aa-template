<?php

function item_iconButton(
    $icon,
    $label,
    $link,
    $classes=null,
    $extras=null
) {

    global $project_paths;

    $css = get_extras_value('css', $extras, 'style="%s"');
    $heading_level = get_extras_value('hlevel', $extras);
    if (!$heading_level) $heading_level = 3;

    return <<<TMP

<a class="icon-card $classes" href="$link">
  <i class="fa fa-$icon the-icon"></i>

  <div class="icon-content">$label</div>
</a>


TMP;
}
