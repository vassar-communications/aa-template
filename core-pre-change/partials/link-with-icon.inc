<?php

/**
 * [$section_title description]
 * @param string $title - the section title
 * @param string $title_classes (optional) - classes that should be applied to the title markup
 * @return string - the rendered markup
 */
$link_with_icon = function ($icon_url, $text, $link, $classes=false) {
  if($title)
return <<<TMP

<a class="Media link-with-icon icon-sm" href="https://www.vassar.edu">
<svg class="Media-figure" aria-labelledby="fb" role="img" viewBox="0 0 180 180" width="16" height="16"><title id="fb">Facebook</title><path d="M180 180V0H0v180h180z" fill="#3B5998"></path><path d="M124.2 180v-69.7h23.4l3.5-27h-26.8V65.7c0-8 2.2-13.2 13.5-13.2H152V28.3c-2.5-.3-11-1-21-1-20.6 0-35 12.6-35 35.8v20H72.8v27.3h23.5V180h28z" fill="#fff"></path></svg>  

  <span class="Media-body">Lorem Ipsum is simply dummy text</span>
</a>

TMP;
};
