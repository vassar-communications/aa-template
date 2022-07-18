<?php

/**
 * [$section_title description]
 * @param string $title - the section title
 * @param string $title_classes (optional) - classes that should be applied to the title markup
 * @return string - the rendered markup
 */
$section_title = function ($title, $title_classes=false, $title_level='2') {
  if($title)
return <<<TMP
<h$title_level class="section-title $title_classes">$title</h$title_level>
TMP;
};
