<?php

function sec_wideContent(
    $title=null,
    $intro=null,
    $section_classes=null,
    $content_classes=null,
    $extras=null
) {

    global $section_title;

    $title_classes = get_extras_value('title_classes', $extras);


//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
    global $bg_image;

    if (get_extras_value('bg-image-url', $extras)) {
        $section_classes .= ' has-image';
    }

    $wrapped_intro = '';
    if ($intro !== null) {
      $section_classes .= ' has-intro';

      $wrapped_intro = '<div class="section-intro">'.$intro.'</div>';

    }

    return <<<TMP
    <div class="section section--wide-content $section_classes">
    {$section_title($title, $title_classes)}
    {$bg_image($extras)}
    $wrapped_intro
    <div class="section-content $content_classes">
    TMP;
}

function end_sec_wideContent($extras = false) {
    return '</div></div>';
}
