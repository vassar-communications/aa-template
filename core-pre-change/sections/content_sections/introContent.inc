<?php


function sec_introContent(
  $title=false,
  $section_classes = false,
  $title_classes=false,
  $extras = false
) {

  global $section_title;
$title_classes = get_extras_value('title_classes', $extras);

//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
global $bg_image;

if (get_extras_value('bg-image-url', $extras)) {
  $section_classes .= ' has-image';
}

$template = <<<TMP
<div class="section section--intro $classes">
    {$section_title($title, $title_classes)}
    {$bg_image($extras)}
  <div class="section-content">
  <p class="intro-text">
TMP;
  return $template;
}

function end_sec_introContent( $extras = false ) {
  return '</p></div></div>';
}
