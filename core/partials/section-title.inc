<?php

/**
 * [$section_title description]
 * @param string $title - the section title
 * @param string $title_classes (optional) - classes that should be applied to the title markup
 * @return string - the rendered markup
 */
$section_title = function ($title, $title_classes=false) {
  if($title)
return <<<TMP
<h2 class="section-title $title_classes">$title</h2>
TMP;
};
