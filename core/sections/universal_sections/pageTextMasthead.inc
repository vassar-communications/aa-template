

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
function page_textmasthead(
  $section_classes=null,
  $extras = false
) {

  global $page_info;
  $page_title = $page_info['page_title'];

$template = <<<TMP
<div class="textmasthead pb-4 section d-flex flex-column-reverse text-left has-bg quad-pattern $section_classes">
  <h1 class="section__title">$page_title</h1>
</div>

TMP;

  return $template;
}
