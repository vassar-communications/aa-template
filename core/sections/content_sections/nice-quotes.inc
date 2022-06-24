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
<style>
.quotes-carousel {
  height: 20vh;
}
  .quotes-carousel .carousel-cell {
    width: 100%;
    min-height: 10vh;
    margin-right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .quotes-carousel .split-words-content p {
    line-height: 1.16;
  }

  .carousel.is-fullscreen .carousel-cell {
    height: 100%;
  }

  .quotes-carousel span {
    display: inline-block;
    margin-right: 0.23em;
    font-size: 3.6rem !important;
    color: var(--color-vassar-burgundy);
  }

  .quotes-carousel .split-words-content {
      max-width: 60em;
      padding: 1em;
  }

  .quotes-carousel .flickity-page-dots {
    display: none;
  }

  .the-quote-ticker .section-intro-text {
    font-variation-settings: "wght" 340 !important;
    font-family: var(--bs-font-sans-serif) !important;
    line-height: 1.16 !important;
    font-size: 1.8rem !important;
    font-weight: 100 !important;
    text-align: center;
    color: #666;
  }

  </style>

<h3 class="small-header mt-5 mb-5">Vassar Is</h3>

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
