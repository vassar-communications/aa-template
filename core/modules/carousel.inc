<?php

function carousel(
  $classes=null,
  $id=null
) {

    return <<<TMP
<div class="featureImage-text-ticker media-carousel fade-nonselected full" id="gallery">
TMP;
}


function carousel_item(
  $image,
  $classes=null) {

    return <<<TMP
    <div class="carousel-cell $classes">
      <div class="carousel-cell-content">
        <div class="image-container">
          <img src="$image" />
        </div>
         <div class="figcaption pt-5">
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
