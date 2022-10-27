<?php

function sec_imageThenContent(
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

        $bg_url = get_extras_value('bg-image-url', $extras);
        $bg_alt = get_extras_value('bg-image-alt', $extras);
        $bg_classes = get_extras_value('bg-image-classes', $extras);
        $bg_css = get_extras_value( 'bg-css', $extras, 'style="%s"' );
    }

    $css = get_extras_value( 'css', $extras, 'style="%s"' );

    return <<<TMP
    <div class="section $section_classes" $css>

      <div class="section-bg-image-container $bg_classes" $bg_css>
        <img class="section-bg-image" src="$bg_url" alt="$bg_alt" />
      </div>


    <div class="section-content $content_classes">
      <div class="section-title-container">
        {$section_title($title, $title_classes)}
      </div>

      $intro

    TMP;
}

function end_sec_ImageThenContent($extras = false) {
    return '</div></div>';
}
