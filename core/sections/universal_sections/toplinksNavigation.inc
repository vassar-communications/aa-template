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

<nav class="toplinks main-nav section text-center justify-content-start d-flex pl-5 py-3">
  <ol class="nav-path p-0 m-0">
      <ul class="nav-current-section mt-0 pt-0">

TMP;

  return $template;
}


function end_sec_toplinksNav($extras = false) {
  return '     </ul></ol></nav>
';
}


