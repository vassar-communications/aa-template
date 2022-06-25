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

<nav class="section">
      <ul class="nav nav-pills">

TMP;

  return $template;
}


function end_sec_toplinksNav($extras = false) {
  return '     </ul></nav>
';
}


