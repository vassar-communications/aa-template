<?php

/**
 * breadcrumbNav()
 * Generates breadcrumb
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function breadcrumbNav($extras = false) {
$template = <<<TMP

<nav class="main-nav animate-when-content-appears animation-fade-in pb-0">
  <ol class="nav-path">

TMP;

  return $template;
}


function end_sec_breadcrumbNav($extras = false) {
  return '  </ol></nav>
';
}


