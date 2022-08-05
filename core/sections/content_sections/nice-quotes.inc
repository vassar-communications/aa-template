<?php

/**
 * sec_buffer()
 * Spacefiller section for testing scroll-in animations
 *
 * @see https://codepen.io/csilverman/pen/popMVyL
 * @link https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.q3v10639vhm8
 * @param  boolean $extras - Reserved for future use
 * @return string - The rendered HTML markup
 */
function niceQuotes( $extras = false ) {
return <<<TMP
<h3 class="fancy-heading tagline text-center">Vassar Is</h3>

  <div class="quotes-carousel" data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 2000, "cellAlign": "center", "contain": true, "prevNextButtons": false }'>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>unafraid to question</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>a story of strength and substance</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>belonging and thriving</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>small but mighty</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>courage of conviction</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>a remarkable sense of place</p>
      </div>
    </div>
  </div>
TMP;

}
