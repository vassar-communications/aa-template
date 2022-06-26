<style>
.pattern-site-nav {
    display: none;
}
</style>


<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Advancement";
$page_classes = "advancement-demo";
/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<!--
<script src="https://unpkg.com/flickity@2.2/dist/flickity.pkgd.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
-->

<script>

/*
$( document ).ready(function() {
  $('.quotes-carousel').flickity({
    // options
//    cellAlign: 'center',
  //  contain: true,
    // fade: true
  });
});
*/
</script>

<style>

/* external css: flickity.css, flickity-fade.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #222;
}

.carousel-cell {
  width: 100%;
  min-height: 100vh;
  margin-right: 10px;
  /* center images in cells with flexbox */
  display: flex;
  align-items: center;
  justify-content: center;
}

.split-words-content p {
  line-height: 1.16;
}

.carousel.is-fullscreen .carousel-cell {
  height: 100%;
}

.carousel-cell-image {
  display: block;
  max-height: 100%;
}

span {
  display: inline-block;
  margin-right: 0.23em;
}

.split-words-content {
    max-width: 60em;
    padding: 1em;
}
em {
  font-style: italic;
}

</style>

<div class="quotes-carousel" data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 6000, "cellAlign": "center", "contain": true }'>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>“...at Vassar, I was able to pursue a writing career, with a dedicated thesis class...while completing an Economics degree—that was a huge gift that definitely shaped my path after Vassar.” —Arushi&nbsp;Raina&nbsp;’14</p>
    </div>
  </div>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>“I got my spirit back at Vassar.” —&nbsp;Brenda&nbsp;Feigen&nbsp;’66</p>
    </div>
  </div>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>“...the more you’re away from Vassar, the more you miss it.” —&nbsp;Livia&nbsp;Bartels&nbsp;’20</p>
    </div>
  </div>

</div>






<?php echo site_footer(); ?>
