<?php

function flipcard_stat(
    $title,
    $value,
    $reverse_content,
    $class=null,
    $link=null,
    $css=null,
    $facecard_subtext=null
) {

  $facecard_st_markup = '';

    if($css) { $css = sprintf('style="%s"', $css); }
    if($facecard_subtext) {
      $facecard_st_markup = sprintf('<div class="flipcard__subtext">%s</div>', $facecard_subtext);
    }

    $link_start = null;
    $link_end = null;

    if($link) {
      $link_start = sprintf('<a class="stretched-link" href="%s">', $link);
      $link_end = '</a>';
    }

    return <<<TMP
<div tabindex="0" class="flip-card $class" $css>
  <div class="card-content">
    <div class="card__face card__face--front">
      <div class="flipcard__title tagline mb-3">$title</div>
      <div class="flipcard__value">$value</div>
      $facecard_st_markup
    </div>
    <div class="card__face card__face--back">
      $reverse_content
    </div>
  </div>
</div>
TMP;

}
