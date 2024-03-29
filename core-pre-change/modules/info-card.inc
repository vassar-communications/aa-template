<?php
function info_card(
  $title='',
  $classes='',
  $type=''
) {

if ($title !== '')
  $classes .= ' has-title ';
  $title = '<h3 class="card-title">'.$title.'</h3>';

if (($type == '') || ($type == 'info')) {
  $icon = 'fa-solid fa-info-circle';
  $classes .= 'alert-accent-gold';
}
else if ($type == 'alert') {
  $icon = 'fa-solid fa-triangle-exclamation';
  $classes .= 'red-alert';
}
else {
  $icon = $type;
  $classes .= 'alert-accent-gold';
}

return <<<TMP
  <div class="info-card alert p-4 shadow mb-5 $classes">
    <div class="alert-header"><i class="the-icon fa $icon"></i>$title</div>
TMP;

}


function end_info_card() {
  return '</div>';
}
