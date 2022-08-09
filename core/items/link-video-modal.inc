<?php

function item_link_VideoModal(
    $title,
    $videourl,
    $channel,
    $mp4url='',
    $classes='',
    $extras=null
) {

    $css = get_extras_value('css', $extras, 'style="%s"');
    $icon_markup = get_icon('video', 'me-2');
    return <<<TMP

<button type="button" class="video-btn video-modal-link $classes" data-bs-toggle="modal" data-src="$videourl" data-video-url="$mp4url" data-channel="$channel" data-bs-target="#videoModal">
    $icon_markup $title
</button>

TMP;
}
