<?php

/**
 * toplinksNav()
 * Generates breadcrumb
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function toplinksNav($extras = false) {
$template = <<<TMP

<nav class="section local-nav">
      <ul class="nav nav-pills pb-3">

TMP;

  return $template;
}


function end_sec_toplinksNav($extras = false) {
  return '     </ul></nav>
';
}
