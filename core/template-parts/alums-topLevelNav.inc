<?php


function alums_topLevelNav() {
    global $project_paths;
    $template = <<<TMP

<ul>
  <li><a href="">Give Back</a></li>
  <li><a href="">Calendar</a></li>
  <li><a href="">Our Community</a></li>
  <li><a href="">Resources</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Log In</a></li>
</ul>

TMP;

    return $template;

}
