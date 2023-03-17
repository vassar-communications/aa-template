<?php

/* */

/*  Item
    ==== */



function schedule_item_dropdown(
  $time,
  $title,
  $location=null,
  $classes=null,
  $extras=null
) {

$formatted_location = '';
  if($location) {
    $formatted_location = sprintf('<p class="schedule-item__location"><strong>Location:</strong> %s</p>', $location );
  }

  $css = get_extras_value('css', $extras, 'style="%s"');

  if( get_extras_value('noContent', $extras) ) {
    return <<<TMP
    <div class="schedule-item schedule-item--noContent $classes" $css>
      <p class="schedule-item__header">
        <span></span>
        <span class="schedule-item__time">$time</span>
        <span class="schedule-item__title">$title</span>
      </p>
    </div>
    TMP;
  }
  else {
    return <<<TMP
    <details class="schedule-item schedule-item--hasContent $classes" $css>
      <summary class="schedule-item__header">
        <i class="schedule-item__icon fa-solid fa-circle-info"></i>
        <span class="schedule-item__time">$time</span>
        <span class="schedule-item__title"><span>$title</span></span>
      </summary>
      <div class="schedule-item__content">
    $formatted_location
    TMP;
  }
}


function end_schedule_item_dropdown($extras=null) {
  return <<<TMP
  </div>
</details>
TMP;
}
