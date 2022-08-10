<?php


function admission_topLevelNav() {
    global $project_paths;
    $template = <<<TMP

<nav class="nav--top nav p-4 text-uppercase justify-content-center">
   <a class="nav-link" href="/admission/explore/">Explore</a>
   <a class="nav-link" href="/admission/apply/">Apply</a>
   <a class="nav-link" href="/admission/visit/">Visit</a>
   <a class="nav-link" href="/admission/financial-aid/">Financial Aid</a>
   <a class="nav-link" href="/admission/quick-facts/">Quick Facts</a>
   <a class="nav-link" href="/admission/connect/">Connect</a>
</nav>

TMP;

    return $template;

}
