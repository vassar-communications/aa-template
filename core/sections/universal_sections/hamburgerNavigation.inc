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

<div class="hamburger-navigation">

<button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">Menu <span class="fa-solid fa-bars"></button>

</div>

<div class="offcanvas offcanvas-top h-100 section theme-charcoal" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
  <div class="offcanvas-header d-flex justify-content-end">
    <button class="btn btn-light" type="button"  class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Close <span class="fa-solid fa-times"></button>
  </div>
  <div class="offcanvas-body">
  
  
  <div class="section">
  <div class="row align-items-start">
    <div class="col">
      <div class="nav-item">
       <a href="/academics/" class="display-3">Academics</a>
      </div>
  <div class="nav-item">
     <a class=" collapsed display-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Admission</a> 
  </div>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body text-left">
          <p>
           Admission Links
          </p>
        </div>
      </div>
        <div class="nav-item">
        <a href="/campuslife/" class="display-3">Campus Life</a>
        </div>
        <div class="nav-item">
        <a href="https://www.vassarathletics.com/" class="display-3">Athletics</a>
        </div>
        <div class="nav-item">
        <a href="/arts" class="display-3">Arts</a>
        </div>
        <div class="nav-item">
        <a href="/sustainability" class="display-3">Sustainability</a>
        </div>
        </div>
    <div class="col">
     hi  One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  
</div> 
  </div>
</div>
TMP;

  return $template;
}
