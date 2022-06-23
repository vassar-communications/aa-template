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

</style>

<div class="quotes-carousel" data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 6000, "cellAlign": "center", "contain": true }'>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
    </div>
  </div>

  <div class="carousel-cell split-words-container">
    <div class="split-words-content">
      <p>Lorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a 1st-century BC text by the Roman statesman and philosopher Cicero, with words altered, added, and removed to make it nonsensical and improper Latin.</p>
    </div>
  </div>

</div>






<?php echo site_footer(); ?>
