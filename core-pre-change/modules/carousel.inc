<?php

function carousel(
  $classes=null,
  $id=null
) {

    return <<<TMP
<div class="featureImage-text-ticker media-carousel fade-nonselected full $classes" id="$id">
TMP;
}


function carousel_item(
  $image,
  $classes=null,
  $alt_text=null) {

    return <<<TMP
    <div class="carousel-cell $classes">
      <div class="carousel-cell-content">
        <div class="image-container">
          <img src="$image" alt="$alt_text" />
        </div>
         <div class="figcaption pt-4 listen">
TMP;
}

function end_carousel_item() {
return <<<TMP
  </div>
</div>
</div>
TMP;
}


function end_carousel() {
  return '</div>';
}
