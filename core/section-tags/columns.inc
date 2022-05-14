<?php

function sec_hasColumns(
  $title='',
  $columns='',
  $section_classes='',
  $content_classes='',
  $extras=''
) {

  global $section_title;

  if( $columns == '' ) $columns = 2;

  $css = get_extra_value( 'css', $extras, 'style="%s"' );


$title_classes = get_extra_value( 'title_classes', $extras );


return <<<TMP
  <div class="section section-with-columns columns-$columns $section_classes" $css>
    {$section_title( $title, $title_classes )}
    <div class="section-content $content_classes">
TMP;
}

function item_col( $col_classes='' ) {
  return <<<TMP
  <div class="column $col_classes">';
TMP;
}
function end_item_col() {
  return '</div>';
}

function end_sec_hasColumns( $extra = false ) {
  return '</div></div>';
}
