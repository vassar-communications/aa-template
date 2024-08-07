<?php

function sec_siteHeader_video(
  $title=null,
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

return <<<TMP
  <script src="https://player.vimeo.com/api/player.js"></script>

    <div class="section video-header is-loading $section_classes" id="video-header">
        <button id="play_pause" class="videoplayer_button" aria-label="pause/play background video" title="pause/play background video">
            <span id="pause_button" class="videoplayer_icon videoplayer_icon_pause" aria-hidden="true"><i class="fa fa-solid fa-pause"></i></span>
            <span id="play_button" class="videoplayer_icon videoplayer_icon_play" aria-hidden="true"><i class="fa fa-solid fa-play"></i></span></span>
            <span class="videoplayer_icon_label">Pause/Play this video</span>
        </button>
      <div class="video-background">
        <iframe onload="element = document.getElementById('video-header'); element.classList.remove('is-loading'); element.classList.add('is-loaded');"
        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/709137460?h=3f69ff4c7f?h=360eb5ffb8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
      </div>

      <div class="title-cover">
        <h1 class="display-1">Admission</h1>
        <div class="cover-content d-flex flex-column flex-md-row">
TMP;
}

function end_sec_siteHeader_video($extras = false) {
  return '</div></div></div>';
}
