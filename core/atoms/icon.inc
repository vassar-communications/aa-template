<?php

function get_icon(
  $icon_name,
  $icon_class=null,
  $icon_extras=null
) {

$icon_css = get_extras_value( 'css', $icon_extras, 'style="%s"' );
$icon_markup = <<<TMP
<i class="icon fa fa-$icon_name $icon_class" $icon_css></i>
TMP;

  return $icon_markup;
}

function icon(
  $icon_name,
  $icon_class=null,
  $icon_extras=null
) {
  echo get_icon($icon_name);
}

?>
