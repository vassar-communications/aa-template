






<?php

function event_listing(
  $title=null,
  $classes=null,
  $extras=null
) {

if ( $title ) {
  $title = '<h3 class="event-listing-title">'.$title.'</h3>';
}
else $title = '';

return <<<TMP
<div class="event-listing">
  $title
  <div class="events">
TMP;
}

function end_event_listing() {
  return '</div></div>';
}


function crunch_date( $date ) {
  // Expected date format:
  // 2022-08-03 1400 (August 8, 2022, at 2:00 p.m.)
  // 2022-08-03 1400-1530 (August 8, 2022, from 2:00 p.m. to 3:30 p.m.)

  $date_parts = explode( ' ', $date );

  if( strpos( $date_parts[1], '-' ) ) {
    $time_parts = explode( $date_parts[1], '-' );
  }

  // first, the date
  $the_date = date_create( $date_parts[0] );

  $date = array(
    'month' => date_format($the_date,"M"),
    'day' => date_format($the_date,"d"),
    'time_start' => ''
  );



  echo date('h:i a m/d/Y', strtotime( $date_parts[1] ));
}

function crunch_time( $time ) {

}

function event_item(
  $title,
  $month, // 2022-08-03 1400-1530
  $day,
  $time,
  $description,
  $image,
  $classes=null,
  $p_classes=null
) {

$item_id = createSlug($title);

return <<<TMP
<div class="event" id="$item_id">
  <div class="calendar">
    <div class="event__month">$month</div>
    <div class="event__day">$day</div>
  </div>
  <div class="event__image-container"><img class="event__image" src="$image"/></div>
  <div class="event__content-container">
    <h3 class="event__title">$title</h3>

    <div class="event__time">
      <i class="fa-regular fa-clock"></i> <span>$time</span>
    </div>

    <div class="event__summary">
      <p>$description</p>
    </div>
  </div>
</div>
TMP;

}

function end_event_item() {
return <<<TMP
  </div>
</div>
</div>
TMP;

}
