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

<div class="offcanvas offcanvas-top h-100 pt-1 section theme-dark-burgundy" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
  <div class="offcanvas-header d-flex justify-content-between">
  <div class="vassar-masthead-offcanvas">
  <svg aria-labelledby="vassar-title" role="img" width="350" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2002 396"><title id="vassar-title">Vassar</title><path d="M379 32a104 104 0 0 1 22-17l-1-6-56 1-69-1-1 6c7 3 16 8 22 16 6 9 13 21 13 43 0 31-14 74-44 136l-49 108h-1c-20-49-44-101-67-153l-30-69c-7-19-12-34-13-46 3-18 18-30 35-35l-1-6-71 1L1 9l-1 7c22 6 41 31 55 58a4241 4241 0 0 1 142 322h7l23-63 53-117c33-73 56-122 72-148 9-14 17-26 27-36zM493 0l-7 1-24 64-52 116c-31 69-56 122-74 152-8 14-16 24-25 33-9 8-15 13-22 16l1 6 51-1 74 1v-6c-7-3-16-7-22-15-8-9-14-20-14-41 0-20 8-49 20-78l73-1 78 1 22 54c7 18 13 34 13 47-2 17-18 28-34 33v6l67-1 38 1c-4-13-89-209-116-271L493 0zm-21 232l-67-1 19-44 50-111h1l67 154c-21 2-45 2-70 2zM819 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-49-63l-17 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110zM2000 378a60 60 0 0 1-10 1c-19-5-53-27-78-53-33-36-68-84-89-122 41-16 79-51 79-102 0-32-13-54-37-71-28-18-61-22-106-22l-87 1-76-1-1 6c8 1 19 4 26 8a57 57 0 0 1 22 23c7 12 10 29 11 55l2 100v24l-2 69c-1 28-4 47-14 62l-1 1c-12 18-39 19-54 2-9-10-17-22-24-35A3434 3434 0 0 1 1419 0l-7 1-24 64-52 116c-31 69-55 122-73 152-9 14-16 24-26 33-8 8-15 13-21 16v6l51-1 74 1 1-6c-8-3-16-7-23-15-7-9-14-20-14-41 0-20 9-49 21-78l72-1 78 1 23 54c6 18 12 34 13 47-3 17-19 28-35 33l1 6 67-1h132l89 1v-7c-12-2-25-6-37-15-14-12-23-26-25-57-2-26-3-57-3-86v-15l71 2c27 50 55 96 88 134 14 16 27 26 42 35s33 12 53 12a176 176 0 0 0 47-7zm-602-146l-66-1 18-44 50-111h2l66 154c-21 2-45 2-70 2zm392-35c-32 0-67-3-89-8v-11c0-52 1-110 6-154a265 265 0 0 1 40-3c31 2 55 9 76 28 17 16 27 38 27 65 0 33-10 62-36 82l-24 1zM1113 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-48-63l-18 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110z"></path><image alt="Vassar" src="/assets/images/vassar-logo.png" width="402" height="80"></image></svg>
  </div>
  <div><button class="btn btn-light" type="button"  class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">Close <span class="fa-solid fa-times"></button></div>
  </div>
  <div class="offcanvas-body">
    <div class="section">
        <div class="row align-items-start">
            <div class="col">
                <div class="nav-item">
                <a href="https://vassar.edu/academics/" class="display-4">Academics</a>
                </div>
                 <hr/>
                <div class="nav-item d-flex justify-content-between">
                <a class="display-4" href="/admission">Admission</a></a><a href="#admission" class="collapsed display-4" data-bs-toggle="collapse"
                data-bs-target="#admission" aria-expanded="false" aria-controls="collapseOne">+</a> 
                </div>
                    <div id="admission" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body h3 text-left">
                            <div> <a href="/admission/explore/">Explore Vassar</a></div>
                            <div> <a href="/admission/apply/">Apply</a></div>
                            <div> <a href="/admission/visit/">Visit Campus</a></div>
                            <div> <a href="/admission/financial-aid/">Financial Aid</a></div>
                            <div> <a href="/admission/quick-facts/">Quick Facts</a></div>
                            <div> <a href="/admission/connect/">Connect</a></div>
                        </div>
                    </div>
                 <hr/>
                <div class="nav-item">
                <a href="https://vassar.edu/campuslife/" class="display-4">Campus Life</a>
                </div>
                 <hr/>
                <div class="nav-item">
                <a href="https://www.vassarathletics.com/" class="display-4">Athletics</a>
                </div>
                 <hr/>
                <div class="nav-item">
                <a href="https://vassar.edu/arts" class="display-4">Arts</a>
                </div>
                <hr/>
                <div class="nav-item">
                <a href="https://vassar.edu/sustainability" class="display-4">Sustainability</a>
                </div>
            </div>
            <div class="col">
    
            </div>
            <div class="col">
    
            </div>
        </div>
    </div> 
  </div>
</div>
TMP;

  return $template;
}
