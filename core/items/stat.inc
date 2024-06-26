<?php

function format_stat($stat_figure) {
  $stat_figure = str_ireplace('%', '<span class="stat-unit">%</span>', $stat_figure);

  $stat_figure = str_ireplace('$', '<span class="stat-unit">$</span>', $stat_figure);

  $stat_figure = str_ireplace(':', '<span class="delimiter-colon">:</span>', $stat_figure);

  return $stat_figure;
}

function item_stat(
  $stat_label,
  $stat_figure,
  $stat_description=null,
  $classes=null,
  $extras=null
) {

  $css = get_extras_value('css', $extras, 'style="%s"');
  $heading_level = get_extras_value('hlevel', $extras);

  if( get_extras_value( 'format_number', $extras ) )
    $stat_figure = number_format($stat_figure);

  if( get_extras_value( 'unit', $extras ) )
    $stat_figure = get_extras_value( 'unit', $extras ) . $stat_figure;

  if($stat_description)
    $stat_description = sprintf('<p>%s</p>', $stat_description);


  if (!$heading_level) $heading_level = 3;
$title_classes = get_extras_value( 'title_classes', $extras );

  $stat_figure = format_stat($stat_figure);


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
