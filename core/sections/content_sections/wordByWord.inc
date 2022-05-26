
<?php

/*

@todo:  break out SVG duotone filters into their own file, and maybe
        provide a function for accessing them. This would be in the
        event that we want to use them for other components as well.
*/

function sec_wordByWord(
  $image_info,
  $section_classes=null,
  $content_classes=null,
  $extras=null
) {

  global $section_title;

$title_classes = get_extras_value('title_classes', $extras);


//  Check if a bg image was specified, and
//    set up both the markup and the section class for it.
global $bg_image;

if (get_extras_value('bg-image-url', $extras)) {
  $section_classes .= ' has-image';
}

$image_url = $image_info['url'];
$image_alt = $image_info['alt'];

return <<<TMP

    <div class="section sec-wordByWord $section_classes">
      <div class="image-container">

      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="Playground__svg" width="800" height="449"><defs>

      <filter id="filter" x="-10%" y="-10%" width="120%" height="120%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feColorMatrix type="matrix" values="1 0 0 0 0
      1 0 0 0 0
      1 0 0 0 0
      0 0 0 1 0" in="SourceGraphic" result="colormatrix"></feColorMatrix><feComponentTransfer in="colormatrix" result="componentTransfer"><feFuncR type="table" tableValues="0.58 0.88"></feFuncR><feFuncG type="table" tableValues="0.09 0.66"></feFuncG><feFuncB type="table" tableValues="0.16 0.66"></feFuncB><feFuncA type="table" tableValues="0 1"></feFuncA></feComponentTransfer><feBlend mode="normal" in="componentTransfer" in2="SourceGraphic" result="blend"></feBlend></filter>

      </defs><g><image x="0%" y="0%" width="100%" height="100%" preserveAspectRatio="xMidYMid meet" xlink:href="$image_url" filter="url(#filter)" class="image image--filtered"></image></g></svg>


      </div>
      <div class="section-content $content_classes">
TMP;
}

function end_sec_wordByWord($extras = false) {
  return '</div></div>';
}
