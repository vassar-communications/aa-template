
<?php

/* Sometimes the animation isn't visible. What seems to be happening is that the script thinks the Vimeo video has loaded before it actually appears in the embed, so it starts playing the animation.

I'm wondering about embedding the video as an HTML5 video element, and using https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/loadeddata_event - maybe that's more accurate? Or is there a way to do this via the Vimeo API?

https://stackoverflow.com/questions/24579785/force-iframe-youtube-video-to-center-fit-and-full-cover-the-screen-in-the-backgr */


function sec_siteHeader_video_adv(
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

    <div class="advancement-home section video-header is-loading $section_classes">
     <button id="play_pause" class="videoplayer_button" aria-label="pause/play background video" title="pause/play background video">
            <span id="pause_button" class="videoplayer_icon videoplayer_icon_pause" aria-hidden="true"><i class="fa fa-solid fa-pause"></i></span>
            <span id="play_button" class="videoplayer_icon videoplayer_icon_play" aria-hidden="true"><i class="fa fa-solid fa-play"></i></span></span>
            <span class="videoplayer_icon_label">Pause/Play this video</span>
        </button>
      <div class="video-background">
        <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/720224899?h=fd35c1cf91&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
      </div>

      <div class="title-cover">
        <h1 class="display-1">Alumni</h1>
        <div class="cover-content">
TMP;
}
