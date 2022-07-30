<?php

function sec_fixedCenteredTitle_masthead_vid(
    $title=null,
    $video=null,
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


    <div class="section min-xvh-100 masthead-video-background sec-fixedCenteredTitleMasthead is-loading $section_classes" $css>
        <button id="play_pause" class="videoplayer_button" aria-label="pause/play background video" title="pause/play background video">
            <span id="pause_button" class="videoplayer_icon videoplayer_icon_pause" aria-hidden="true"><i class="fa fa-solid fa-pause"></i></span>
            <span id="play_button" class="videoplayer_icon videoplayer_icon_play" aria-hidden="true"><i class="fa fa-solid fa-play"></i></span></span>
            <span class="videoplayer_icon_label">Pause/Play this video</span>
        </button>
      <div class="section-bg-image-container $bg_classes" $bg_css>
        <div class="position-fixed w-100 xvh-100 d-flex justify-content-center align-items-center section-title-container">

          {$section_title($title, $title_classes)}
        </div>






        <div class="video-background">
          <iframe id="main-video" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/$video&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
        </div>


      </div>


    <div class="section-content $content_classes">

TMP;
}

function end_sec_fixedCenteredTitle_masthead_vid($extras = false) {
    return '</div></div>';
}
