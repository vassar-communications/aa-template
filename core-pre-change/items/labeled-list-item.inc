<?php
function labeled_list_item(
  $label,
  $value,
  $classes='',
  $icon=''
) {

if($icon !== '')
  $icon_markup = '<i class="'.$icon.'"></i>';
else $icon_markup = '';

return <<<TMP
  <li class=" $classes">
    $icon_markup
    <strong class="item-label">$label<span class="visually-hidden">:</span> </strong>
    <span class="item-value">$value</span>
  </li>
TMP;
}
