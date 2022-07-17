
<?php

/*

@todo:  break out SVG duotone filters into their own file, and maybe
        provide a function for accessing them. This would be in the
        event that we want to use them for other components as well.
*/

function sec_wordByWord_fixed(
  $image_info=null,
  $section_classes=null,
  $content_classes=null,
  $extras=null
) {

  global $section_title;

  $section_classes .= ' fixed-quote';

$intro_line = get_extras_value('intro-line', $extras, '<span class="intro-line">%s</span>');


/*
if ($image_info !== null) {
  $section_classes .= ' has-image';
  $image_url = $image_info['url'];
  $image_alt = $image_info['alt'];
$image_markup = <<<IMGTMP
  <div class="image-container">

  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="Playground__svg" width="800" height="449"><defs>

  <filter id="filter" x="-10%" y="-10%" width="120%" height="120%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
    <feColorMatrix type="matrix" values="0 0 1 0 0
              0 0 1 0 0
              0 0 1 0 0
              0 0 0 1 0" in="SourceGraphic" result="colormatrix"/>
    <feComponentTransfer in="colormatrix" result="componentTransfer">
          <feFuncR type="table" tableValues="0.6 0.99"/>
      <feFuncG type="table" tableValues="0.07 1"/>
      <feFuncB type="table" tableValues="0.18 0.8"/>
      <feFuncA type="table" tableValues="0 1"/>
      </feComponentTransfer>
    <feBlend mode="normal" in="componentTransfer" in2="SourceGraphic" result="blend"/>
  </filter>

  </defs><g><image x="0%" y="0%" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" xlink:href="$image_url" filter="url(#filter)" class="image image--filtered"></image></g></svg>
  </div>
IMGTMP;

}
else {
  $image_markup = '';
  $section_classes .= ' no-image';
}
*/


return <<<TMP
    <div class="section sec-wordByWord $section_classes">
    <div class="clip-frame">
      <div class="section-content $content_classes">$intro_line
TMP;
}

function end_sec_wordByWord_fixed($extras = false) {
  return '</div></div></div>';
}
