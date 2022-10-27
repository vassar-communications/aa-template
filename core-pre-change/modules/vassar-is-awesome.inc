<?php
function vassar_is_awesome($classes) {
    $our_qualities = '<ul><li>unafraid to question</li><li>a story of strength and substance</li><li>belonging and thriving</li><li>small but mighty</li><li>courage of conviction</li><li>a remarkable sense of place</li></ul>';

    return <<<TMP
<div class="awesome_ticker $classes">
  <div id="div1">
$our_qualities
  </div>
  <div id="div2">
$our_qualities
  </div>
</div>
TMP;

}
