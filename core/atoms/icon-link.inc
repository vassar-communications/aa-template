<?php

function icon_link(
  $link_text,
  $link_url,
  $icon,
  $link_classes = null,
  $extras = null
) {

if($link_url == '')
  $link_classes .= 'hey-im-broken';

$link_css = get_extras_value( 'css', $extras, 'style="%s"' );

$icon_fore = '';
$icon_aft = '';



$icon_markup = <<<TMP
  <a href="$link_url" class="icon-link $link_classes" $link_css><i class="$icon"></i> $link_text</a>
TMP;

  return $icon_markup;
}

?>
