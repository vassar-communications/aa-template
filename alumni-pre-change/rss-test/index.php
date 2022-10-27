<?php

// CONVERT DATE TO 12-HOUR FORMAT

function format_date( $date ) {
  $final_date = date_format( date_create( $date ), "H:i");
  $final_date .= ' ' . str_replace( 'm', '.m.', date_format( date_create( $date ), "a") );
  return $final_date;
}


function start_and_end_times($start_date, $end_date) {

  // Some events have a start and end date.
  // Some events have the same date, but different start and end times.
  // Some events have only a start date.
  //
  // Typically, it's the same date, just
  // different times of day.
  //
  // In the Connect feed, both values are provided. The ones
  // without an end date have an end date that is identical
  // to the start date.
  //
  // That makes this first part easy.

  if( $start_date != $end_date ) {
    // okay, so there's an end date

    // But this could mean two things:
    // - the event occurs on the same day, with a start and end time
    // - the event begins on one day and ends on another day.
    // I need to know which one this is.

    $start_day = date_format( date_create( $start_date ), "M d, Y");
    $end_day = date_format( date_create( $end_date ), "M d, Y");

    if( $start_day != $end_day ) {
      // it's a multi-day. So rather than just showing the
      // times (3:00 - 5:00), the dates need to be shown as well.

      $start_day = date_format( date_create( $start_date ), "M d, Y H:i");
      $start_day_meridiem = str_replace( 'm', '.m.', date_format( date_create( $start_date ), "a") );

      $end_day = date_format( date_create( $end_date ), "M d, Y H:i");
      $end_day_meridiem = str_replace( 'm', '.m.', date_format( date_create( $start_date ), "a") );

      return $start_day . ' ' . $start_day_meridiem . ' to ' . $end_day . ' ' . $end_day_meridiem;
    }
    else {
      // it has to be a day with two different times.
      // I want just the times, not the dates, since the
      // format I want to use is 1:00 - 4:00

      $time_start = format_date( $start_date );
      $time_end = format_date( $end_date );

      return $time_start . '–' . $time_end;
    }
  }
  else {
    // no end date

    return format_date( $start_date );
  }
}


// echo date_stuff('10/7/2022 11:00:00 AM', '12/18/2022 11:00:00 AM');


// require_once( getcwd().'/simplepie-master/autoloader.php' );



function connect_events_feed( $feed_url ) {
  // We'll process this feed with all of the default options.
  $feed = new SimplePie();

  $feed->set_cache_location( getcwd().'/cache/' );

  // Set the feed to process.
  $feed->set_feed_url('https://connect.vassar.edu/controls/cms_v2/components/rss/rss.aspx?sid=1654&gid=2&calcid=8471&page_id=5161');

  // Run SimplePie.
  $feed->init();

  // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
  $feed->handle_content_type();


  foreach ($feed->get_items() as $item) {

  //  echo $item->get_permalink() . '<br>';
  //  echo $item->get_title() . '<br>';
  //  echo $item->get_description() . '<br>';

  // The RSS feed does include EventDate and endEventDate tags
  // but they're not standard components of RSS


    $image = (array) $item->get_enclosure();
  //  echo $image['link'];

  //  echo '<img src="thumbnail.php?file=' . $image[0]->getAttribute('src') . '&maxw=300&maxh=300" border="0" /><br>';

  //  echo $item->get_date('j F Y | g:i a') . '<br><hr>';

  $eventDate = $item->get_item_tags('', 'EventDate');
  $eventDate = $eventDate[0]['data'];

  $endEventDate = $item->get_item_tags('', 'EndEventDate');
  $endEventDate = $endEventDate[0]['data'];

  $times = start_and_end_times( $eventDate, $endEventDate );

  // print_r($eventDate);

  echo <<<TMP
  <div class="event" id="vassar-club-of-san-diego-midsummer-happy-hour">
    <div class="calendar">
  <!--    <div class="event__month">Aug</div>
      <div class="event__day">03</div> -->
    </div>
    <div class="event__image-container"><img class="event__image" src="{$image['link']}"></div>
    <div class="event__content-container">
    <a class="stretched-link" href="{$item->get_permalink()}">  <h3 class="event__title">{$item->get_title()}</h3></a>

      <div class="event__time">
        <i class="fa-regular fa-clock"></i> <span>$times</span>
      </div>

      <div class="event__summary">
        <p>{$item->get_description()}</p>
      </div>
    </div>
  </div>
  <hr>
  TMP;
  }
}

?>
