<?php


function alums_topLevelNav() {
    global $project_paths;
    $template = <<<TMP
<nav class="nav--top animation-zoom-in animate-when-content-appears animation-group">
<ul>
  <li class="animation-item"><a href="">Give Back</a></li>
  <li class="animation-item"><a href="">Calendar</a></li>
  <li class="animation-item"><a href="">Our Community</a></li>
  <li class="animation-item"><a href="">Resources</a></li>
  <li class="animation-item"><a href="">Contact</a></li>
  <li class="animation-item"><a href="">Log In</a></li>
</ul>
</nav>

TMP;

    return $template;

}
