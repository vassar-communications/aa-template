<?php

/**
 * hamburger_navigation()
 * Generates the Vassar masthead
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function hamburger_navigation($extras = false) {
$template = <<<TMP

<style>
.hamburger-navigation {
    position: absolute;
    top:  1em;
    right: 1em;
    z-index: 22;
}

.offcanvasmain {
  z-index:9999;
}
</style>

<div class="hamburger-navigation">

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">Menu <span class="fa-solid fa-bars"></button>

</div>

<div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
  <div class="offcanvas-header">
    <button class="btn btn-primary" type="button"  class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Close <span class="fa-solid fa-times"></button>
  </div>
  <div class="offcanvas-body">
   <div class="h1">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
   <div class="">
   <a href="">About</a>
   </div>
  </div>
</div>
TMP;

  return $template;
}
