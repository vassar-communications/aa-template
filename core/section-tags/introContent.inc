<?php


function sec_introContent($classes = false, $extras = false) {
$template = <<<TMP
<div class="section section--intro $classes">
  <div class="section-content">
  <p class="intro-text">
TMP;
  return $template;
}

function end_sec_introContent( $extras = false ) {
  return '</p></div></div>';
}
