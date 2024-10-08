<?php

/*
Add option for icon next to title
 */

function deadlines($title, $icon=null, $description='', $classes=null) {

  if($description != false)
    $description = '<p class="card-subtitle">'.$description.'</p>';

    return <<<TMP

    <div class="deadlines card $classes">
      <div class="card-header">
        $title
      </div>
$description
      <ul class="list-group list-group-flush">
TMP;

}

function end_deadlines() {
  return <<<TMP
  </ul>
</div>
TMP;
}

function deadlines_item($deadlines_text, $deadlines_date, $deadlines_desc='') {
  if($deadlines_desc !== '')
    $deadlines_desc = '<p class="deadlines-description">'.$deadlines_desc.'</p>';

  return <<<TMP
  <li class="deadline-item list-group-item">
    <div class="deadlines-text">$deadlines_text</div>
    <div class="deadlines-date">$deadlines_date</div>
    $deadlines_desc
</li>

TMP;
}
