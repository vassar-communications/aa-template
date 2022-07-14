<?php

/**
 * page_partialmasthead()
 * Generates Partial Image Page Masthead
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function page_partialmasthead($cover_url, $extras = false) {

    global $page_title;

    $template = <<<TMP
<div class="section section--top-level-masthead partial-masthead" style="--bg-image: url($cover_url);">
  <div class="title-container d-flex flex-column-reverse">
    <div class="section__title">
    <h1 class="section__title__main display-1">$page_title</h1>
    </div>
  </div>
  <div class="section-bg"></div>
</div>
TMP;

    return $template;
}