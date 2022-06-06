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

.offcanvas {
  z-index:9999;
}
</style>
<div class="hamburger-navigation">



  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
     <span class="fa-solid fa-bars">
     </span>
     </button>

</div>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>
TMP;

  return $template;
}
