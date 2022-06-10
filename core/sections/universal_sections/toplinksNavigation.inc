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

<nav class="main-nav animate-when-content-appears animation-fade-in mw-4 mx-auto px-0">
<h6 class="serif nav-guide">In this section</h6>
  <ol class="nav-path">
      <ul class="nav-current-section animation-group animate-when-content-appears animation-fade-in">

TMP;

  return $template;
}


function end_sec_toplinksNav($extras = false) {
  return '     </ul></ol></nav>
';
}


