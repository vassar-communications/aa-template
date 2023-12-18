
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
function hamburger_navigation($classes=false, $extras = false) {
    $local_info = local_info();
$template = <<<TMP

<div class="hamburger-navigation $classes">
   <button class="hamburger-navigation-openBtn shadow btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">Menu <span class="pl-2 fa-solid fa-bars"></button>
</div>
<div class="offcanvas offcanvas-top h-100 pt-1 main-menu-panel theme-dark-burgundy" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
   <!--
      <div class="offcanvas-header d-flex justify-content-between mt-4"></div>
      -->
   <div class="offcanvas-body megamenu-site-nav">
      <div class="vassar-masthead-offcanvas">
         <a href="https://www.vassar.edu">
            <svg aria-labelledby="vassar-title" role="img" width="350" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2002 396">
               <title id="vassar-title">Vassar</title>
               <path d="M379 32a104 104 0 0 1 22-17l-1-6-56 1-69-1-1 6c7 3 16 8 22 16 6 9 13 21 13 43 0 31-14 74-44 136l-49 108h-1c-20-49-44-101-67-153l-30-69c-7-19-12-34-13-46 3-18 18-30 35-35l-1-6-71 1L1 9l-1 7c22 6 41 31 55 58a4241 4241 0 0 1 142 322h7l23-63 53-117c33-73 56-122 72-148 9-14 17-26 27-36zM493 0l-7 1-24 64-52 116c-31 69-56 122-74 152-8 14-16 24-25 33-9 8-15 13-22 16l1 6 51-1 74 1v-6c-7-3-16-7-22-15-8-9-14-20-14-41 0-20 8-49 20-78l73-1 78 1 22 54c7 18 13 34 13 47-2 17-18 28-34 33v6l67-1 38 1c-4-13-89-209-116-271L493 0zm-21 232l-67-1 19-44 50-111h1l67 154c-21 2-45 2-70 2zM819 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-49-63l-17 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110zM2000 378a60 60 0 0 1-10 1c-19-5-53-27-78-53-33-36-68-84-89-122 41-16 79-51 79-102 0-32-13-54-37-71-28-18-61-22-106-22l-87 1-76-1-1 6c8 1 19 4 26 8a57 57 0 0 1 22 23c7 12 10 29 11 55l2 100v24l-2 69c-1 28-4 47-14 62l-1 1c-12 18-39 19-54 2-9-10-17-22-24-35A3434 3434 0 0 1 1419 0l-7 1-24 64-52 116c-31 69-55 122-73 152-9 14-16 24-26 33-8 8-15 13-21 16v6l51-1 74 1 1-6c-8-3-16-7-23-15-7-9-14-20-14-41 0-20 9-49 21-78l72-1 78 1 23 54c6 18 12 34 13 47-3 17-19 28-35 33l1 6 67-1h132l89 1v-7c-12-2-25-6-37-15-14-12-23-26-25-57-2-26-3-57-3-86v-15l71 2c27 50 55 96 88 134 14 16 27 26 42 35s33 12 53 12a176 176 0 0 0 47-7zm-602-146l-66-1 18-44 50-111h2l66 154c-21 2-45 2-70 2zm392-35c-32 0-67-3-89-8v-11c0-52 1-110 6-154a265 265 0 0 1 40-3c31 2 55 9 76 28 17 16 27 38 27 65 0 33-10 62-36 82l-24 1zM1113 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-48-63l-18 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110z"></path>
               </image>
            </svg>
         </a>
      </div>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-times"></button>

      <div class="megamenu-container">
        <div class="megamenu-cols-container row top-mini-menu-area">
            <div class="col-6 col-md-7">
              <ul class="secondary_menu d-md-flex">

  <li class="level-1 fearlessly-consequential">
    <a href="https://campaign.vassar.edu/">Fearlessly<br>Consequential</a>
  </li>

                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/campuslife">Students</a>
                </li>
                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/families">Families</a>
                </li>
                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/alums"> Alums </a>
                </li>
                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/human-resources">Employees</a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-5 d-md-flex">
              <ul class="secondary_menu d-md-flex">
                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/admission/apply">Apply</a>
                </li>
                <li class="secondary_menu-item">
                  <a href="https://www.vassar.edu/visit">Visit</a>
                </li>
                <li class="secondary_menu-item">
                  <a href="https://give.vassar.edu/">Give</a>
                </li>
              </ul>
            </div>
        </div>

         <div class="megamenu-cols-container row align-items-start">
            <div class="col-md-7">

<!-- start nav -->
{$local_info['local-nav']}
<!-- end nav -->
            </div>

            <div class="col-md-5 quick-links-col mt-5 mt-md-0 px-4 px-md-2">
               <div class="">
                  <h6 class="tagline mb-3 knockedout" style="color: #d2b6ba;">Vassar</h6>
                  <ul class="linked-list">
                     <li><a href="https://www.vassar.edu/about">About</a></li>
                     <li><a href="https://www.vassar.edu/academics">Academics</a></li>
                     <li><a href="https://www.vassar.edu/admission">Admission</a></li>
                     <li><a href="https://www.vassar.edu/campuslife">Campus Life</a></li>
                     <li><a href="https://www.vassarathletics.com/">Athletics</a></li>
                     <li><a href="https://www.vassar.edu/arts">Arts</a></li>
                     <li><a href="https://www.vassar.edu/sustainability">Sustainability</a></li>
                     <li><a href="https://www.vassar.edu/news">News</a></li>
                  </ul>
               </div>

               <form action="https://www.vassar.edu/search/" class="g-Search__form mt-4" method="get">
                 <div class="input-group mb-3">
                    <input class="g-Search__field form-control" id="g-Search__field" name="q" placeholder="Search" type="search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="icon icon-search g-Search__submit" name="submit" tabindex="0" type="submit" id="button-addon2">
                      <svg aria-labelledby="search-title" fill="#fff" role="img" viewBox="0 0 32 32" width="16" height="16">
                        <title id="search-title">Search button</title>
                        <path d="M31 27.2l-7.6-6.4c-.8-.7-1.6-1-2.3-1 1.8-2.1 2.9-4.8 2.9-7.8 0-6.6-5.4-12-12-12s-12 5.4-12 12 5.4 12 12 12c3 0 5.7-1.1 7.8-2.9 0 .7.3 1.5 1 2.3l6.4 7.6c1.1 1.2 2.9 1.3 4 .2s1-2.9-.2-4zm-19-7.2c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z"></path>
                      </svg>
                    </button>
                  </div>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>


TMP;

  return $template;
}
