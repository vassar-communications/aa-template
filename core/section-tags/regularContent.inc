<?php

function sec_regularContent(
  $title=false,
  $section_classes = false,
  $title_classes=false,
  $extras = false
) {

  global $section_title;
  global $bg_image;

$title_classes = get_extras_value('title_classes', $extras);


/*  This is where I check to see if a bg image was specified, and
    set up both the markup and the section class for it.

    Since most if not all sections should be able to have a bg-image,
    this code should be centralized and re-used across all template tags.
*/
if (get_extras_value('bg-image-url', $extras)) {
  $section_classes .= 'has-image';
}

return <<<TMP
    <div class="section $section_classes">
    <div class="section-content">
    {$section_title($title, $title_classes)}
    {$bg_image($extras)}
    TMP;

}

function end_sec_regularContent($extras = false) {
  return '</div></div>';
}
