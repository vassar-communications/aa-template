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

<nav class="main-nav animate-when-content-appears animation-fade-in">
<h5 class="supertitle">In this section</h5>
  <ol class="nav-path">
      <ul class="nav-current-section animation-group animate-when-content-appears animation-fade-in">

TMP;

  return $template;
}


function end_sec_toplinksNav($extras = false) {
  return '     </ul></ol></nav>
';
}


