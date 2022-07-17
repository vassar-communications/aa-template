<?php

function flipcard_stat(
    $title,
    $value,
    $reverse_content,
    $class=null,
    $css=null
) {


    if($css) { $css = sprintf('style="%s"', $css); }

    return <<<TMP
<div class="flip-card $class" $css>
  <div class="card-content">
    <div class="card__face card__face--front">
      <div class="flipcard__title tagline mb-3">$title</div>
      <div class="flipcard__value">$value</div>
    </div>
    <div class="card__face card__face--back">
      $reverse_content
    </div>
  </div>
</div>
TMP;

}