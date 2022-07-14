<?php

/**
* [breadcrumb_nav description]
* @todo Make this dynamic.
* @param  boolean $extras               [description]
* @return [type]         [description]
*/




function masthead_fancyVideoBackground($title, $video, $extras) {

$template = <<<TMP

<!-- https://stackoverflow.com/questions/24579785/force-iframe-youtube-video-to-center-fit-and-full-cover-the-screen-in-the-backgr -->

<div class="video-header is-loading">

    <div class="title-cover">
        <h1 class="display-1">
            <span class="slice slice-1">Admission</span>
            <span class="slice slice-2">Admission</span>
        </h1>
        <div class="cover-content">
            <a href="" class="btn btn-lg btn-primary">Apply!!!</a>
            <a href="" class="btn btn-lg btn-primary">Request Info</a>
        </div>
    </div>

    <div class="video-background">
        <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/675479542?h=3f69ff4c7f?h=360eb5ffb8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
    </div>
</div>
TMP;

}