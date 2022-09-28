

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
function factsTicker( $extras = false ) {
return <<<TMP

<style>
/* Normally, when carousels are clicked, they pause indefinitely.
This blocks click events (but not hover events). */
.quotes-carousel {
    position: relative;
}
.quotes-carousel:after {
    position: absolute;
    content: '';
    width: 120%;
    height: 120%;
    top: -10%;
    left: -10%;
    z-index: 1000;
}
</style>


<h3 class="fancy-heading tagline text-center">The Class of 2025</h3>

  <div class="quotes-carousel" data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 3000, "cellAlign": "center", "contain": true, "prevNextButtons": false }'>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>has 44 students from high schools abroad</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>is 13.9% international students, including dual citizens</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>is from 22 countries</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>speaks 42 languages</p>
      </div>
    </div>

    <div class="carousel-cell split-words-container">
      <div class="split-words-content">
        <p>is from 41 states</p>
      </div>
    </div>

  </div>
TMP;

}
