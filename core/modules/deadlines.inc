<?php

/*
Add option for icon next to title
 */

function deadlines($title, $icon=null, $description='', $classes=null) {

  if($description !== '')
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
  <li class="deadline-item list-group-item">  <span class="deadlines-text">$deadlines_text</span>
    <span class="deadlines-date">$deadlines_date</span>
    $deadlines_desc
</li>

TMP;
}
