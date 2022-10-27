<?php


function alums_topLevelNav() {
    global $project_paths;
    $template = <<<TMP

<nav class="nav--top nav p-4 text-uppercase justify-content-center animation-zoom-in animate-when-content-appears animation-group">
   <a class="nav-link animation-item" href="/alumni/give/">Give Back</a>
   <a class="nav-link animation-item" href="/alumni/calendar/">Calendar</a>
   <a class="nav-link animation-item" href="/alumni/community/">Our Community</a>
   <a class="nav-link animation-item" href="/alumni/resources/">Resources</a>
   <a class="nav-link animation-item" href="/alumni/contact/">Contact</a>
</nav>

TMP;

    return $template;

}
