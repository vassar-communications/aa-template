<?php

function item_iconButton(
    $icon,
    $label,
    $link=null,
    $classes=null,
    $extras=null
) {

    global $project_paths;

    $css = get_extras_value('css', $extras, 'style="%s"');
    $heading_level = get_extras_value('hlevel', $extras);
    if (!$heading_level) $heading_level = 3;

    $link_attr = '';
    $btn_tag = 'div';

    if( $link ) {
      $btn_tag = 'a';
      $link_attr = 'href="'.$link.'"';
    }

    return <<<TMP

<$btn_tag class="icon-card $classes" $link_attr>
  <i class="fa fa-$icon the-icon"></i>

  <div class="icon-content">$label</div>
</$btn_tag>


TMP;
}
