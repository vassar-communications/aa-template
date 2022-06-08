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

<nav class="breadcrumb-nav p-5 $section_classes" aria-label="breadcrumb">
  <ol class="breadcrumb pt-5 mb-0">

TMP;

  return $template;
}

function end_sec_breadcrumbNav($extras = false) {
  return '  </ol></nav>
';
}


