<?php



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

return <<<TMP
<details class="schedule-item $classes" $css>
  <summary>
    <span class="schedule-item__time">$time</span>
    <span class="schedule-item__title">$title</span>
  </summary>
  <div class="schedule-item__content">
$formatted_location
TMP;
}


function end_schedule_item_dropdown($extras=null) {
  return <<<TMP
  </div>
</details>
TMP;
}
