<?php


function admission_topLevelNav() {
    global $project_paths;
    $template = <<<TMP

<nav class="nav--top animation-zoom-in animate-when-content-appears animation-group">
  <ul>
    <li class="animation-item"><a href="">Explore</a></li>
    <li class="animation-item"><a href="">Apply</a></li>
    <li class="animation-item"><a href="">Visit</a></li>
    <li class="animation-item"><a href="">Financial Aid</a></li>
    <li class="animation-item"><a href="">Quick Facts</a></li>
    <li class="animation-item"><a href="">Connect</a></li>
  </ul>
</nav>

TMP;

    return $template;

}
