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
function breadcrumbNav($section_classes=null,$extras = false) {
$template = <<<TMP

<nav class="section breadcrumb-nav d-flex justify-content-start pl-5 py-2 border-bottom $section_classes" aria-label="breadcrumb">
  <ol class="breadcrumb">

TMP;

  return $template;
}

function end_sec_breadcrumbNav($extras = false) {
  return '  </ol></nav>
';
}


