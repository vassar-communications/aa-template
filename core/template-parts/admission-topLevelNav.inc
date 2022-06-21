<?php


function admission_topLevelNav() {
    global $project_paths;
    $template = <<<TMP

<nav class="nav--top">
  <ul>
    <li><a href="">Explore</a></li>
    <li><a href="">Apply</a></li>
    <li><a href="">Visit</a></li>
    <li><a href="">Financial Aid</a></li>
    <li><a href="">Quick Facts</a></li>
    <li><a href="">Connect</a></li>
  </ul>
</nav>

TMP;

    return $template;

}
