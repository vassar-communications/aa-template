<?php

function sec_regularContent(
  $title=false,
  $section_classes = false,
  $title_classes=false,
  $extras = false
) {
  global $section_title;


$title_classes = get_extra_value( 'title_classes', $extras );


return <<<TMP
  <div class="section $section_classes">
    <div class="section-content">
    {$section_title( $title, $title_classes )}
TMP;
}

function end_sec_regularContent( $extras = false ) {
  return '</div></div>';
}
