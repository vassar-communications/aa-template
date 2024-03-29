<?php

function sec_regularContent(
    $title=null,
    $section_classes=null,
    $content_classes=null,
    $extras=null
) {

    global $section_title;

    $title_classes = get_extras_value('title_classes', $extras);
    $title_level = get_extras_value('title_level', $extras);

    //  I'm not sure why I have to do this, since I did specify
    //  a default parameter of 2
    if($title_level == '') $title_level = '2';

    $css = get_extras_value( 'css', $extras, 'style="%s"' );

//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
    global $bg_image;

    if (get_extras_value('bg-image-url', $extras)) {
        $section_classes .= ' has-image';
    }

    return <<<TMP
    <div class="section $section_classes" $css>
    {$section_title($title, $title_classes, $title_level)}
    {$bg_image($extras)}
    <div class="section-content $content_classes">
    TMP;
}

function end_sec_regularContent($extras = false) {
    return '</div></div>';
}
