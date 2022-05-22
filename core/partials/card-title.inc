<?php

$card_title = function ($title, $extras) {

  if ($title) {
    $heading_level = get_extras_value('hlevel', $extras);
    if (!$heading_level) $heading_level = 3;

    return <<<TMP
    <h$heading_level class="card-title">$title</h$heading_level>
  TMP;
  }
  else return false;
};
