<?php

/*
since the design is based on the fullBleedImageColumn design, this function just wraps that function. Difference is that in this case, the title and intro
are required parameters.
*/

function masthead_interiorPage(
  $title,
  $intro,
  $image,
  $section_classes = false,
  $content_classes = false,
  $extras = false
  ) {

  $mastheadMarkup = sec_fullBleedImageColumn(
    null,
    $image,
    'mb-5 page-title-section masthead--interiorPage '.$section_classes,
    'mw-100 '.$content_classes,
    $extras
  );

$mastheadMarkup .= <<<TMP
  <div class="animate-when-content-appears animation-slide-up">
    <h2 class="masthead-title display-2 text-center has-accent-border">$title</h2>
    <p class="section-intro text-center mt-6">$intro</p>
  </div>
TMP;

$mastheadMarkup .=  end_sec_fullBleedImageColumn();

  return $mastheadMarkup;
}
