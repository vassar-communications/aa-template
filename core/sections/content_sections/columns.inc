<?php

function sec_hasColumns(
    $title=null,
    $columns='',
    $intro=null,
    $section_classes=null,
    $content_classes=null,
    $extras=null
) {

    global $section_title;

    if( $columns == '' ) $columns = 2;

    $css = get_extras_value( 'css', $extras, 'style="%s"' );
    $id = get_extras_value( 'id', $extras, 'id="%s"' );

    $intro_markup = false;
    if($intro) {
      $intro_markup = '<div class="section-intro">'.$intro.'</div>';
    }

    $title_classes = get_extras_value( 'title_classes', $extras );
    $title_level = get_extras_value('title_level', $extras);

    //  I'm not sure why I have to do this, since I did specify
    //  a default parameter of 2
    if($title_level == '') $title_level = '2';

//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
    global $bg_image;

    if (get_extras_value('bg-image-url', $extras)) {
        $section_classes .= ' has-image';
    }

    return <<<TMP
  <div $id class="section section-with-columns columns-$columns $section_classes" $css>
    {$section_title( $title, $title_classes, $title_level )}
    {$bg_image($extras)}
    $intro_markup
    <div class="section-content $content_classes">
TMP;
}

function item_col( $col_classes='' ) {
    return <<<TMP
  <div class="g-col column $col_classes">
TMP;
}
function end_item_col() {
    return '</div>';
}

function end_sec_hasColumns( $extra = false ) {
    return '</div></div>';
}
