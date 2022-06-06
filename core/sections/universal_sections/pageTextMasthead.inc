

<?php

/**
 * page_textmasthead()
 * Generates FullScreen Image Page Masthead
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function page_textmasthead($extras = false) {

  global $page_title;
  global $page_tagline;

$template = <<<TMP
<div class="section section--top-level-masthead">
  <div class="bg-secondary text-secondary px-4 py-5 text-left">
    <div class="section__title">
    <h1 class="section__title__main display-1 display">$page_title</h1>
    <p class="section__title__tagline">$page_tagline</p>
    </div>
  </div>
</div>
TMP;

  return $template;
}

