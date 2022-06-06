<?php

/**
 * page_masthead()
 * Generates FullScreen Image Page Masthead
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function page_masthead($cover_url, $extras = false) {

  global $page_title;
  global $page_tagline;

$template = <<<TMP
<div class="section section--top-level-masthead" style="--bg-image: url($cover_url);">
  <div class="title-container d-flex flex-column-reverse">
    <div class="section__title">
    <h1 class="section__title__main display-1 display">$page_title</h1>
    <p class="section__title__tagline">$page_tagline</p>
    </div>
  </div>

  <div class="section-bg"></div>
</div>
TMP;

  return $template;
}