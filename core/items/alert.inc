<?php

function item_alert(
    $title,
    $body,
    $icon,
    $classes=null,
    $extras=null
) {

    global $project_paths;

    return <<<TMP
<div class="alert p-4 shadow mb-5 $classes">
<p><i class="fa-solid fa-$icon"></i> <strong>$title</strong></p>
<p>$body</p>
</div>
TMP;
}