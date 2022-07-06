<?php

function sec_fixedCenteredTitle_masthead_vid(
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
<style>
.masthead-video-background {
  overflow: hidden;
  width: 100vw;
  height: 100vh;
}
.masthead-video-background iframe {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 100vh;
  transform: translate(-50%, -50%);
}
@media (min-aspect-ratio: 16/9) {
  .video-background iframe {
    /* height = 100 * (9 / 16) = 56.25 */
    height: 56.25vw;
  }
}
@media (max-aspect-ratio: 16/9) {
  .video-background iframe {
    /* width = 100 / (9 / 16) = 177.777777 */
    width: 177.78vh;
  }
}

.sec-fixedCenteredTitleMasthead.show-title .section-title-container {
    background: rgba(0, 0, 0, 0.1);
}

</style>

    <div class="section masthead-video-background sec-fixedCenteredTitleMasthead is-loading $section_classes" $css>

      <div class="section-bg-image-container $bg_classes" $bg_css>
        <div class="section-title-container">
          {$section_title($title, $title_classes)}
        </div>



<iframe title="vimeo-player" src="https://player.vimeo.com/video/726089539?h=002128ec09" width="640" height="360" frameborder="0" allowfullscreen></iframe>



        <div class="video-background">
          <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/726089539?h=002128ec09&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
        </div>


      </div>


    <div class="section-content $content_classes">

TMP;
}

function end_sec_fixedCenteredTitle_masthead_vid($extras = false) {
    return '</div></div>';
}
