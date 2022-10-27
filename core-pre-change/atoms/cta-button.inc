<?php

function cta_button(
  $link_url,
  $link_text = 'Learn more',
  $link_classes = null,
  $extras = null
) {

if($link_url == '')
  $link_classes .= 'hey-im-broken';

$link_css = get_extras_value( 'css', $extras, 'style="%s"' );
$icon_markup = <<<TMP

  <a href="$link_url" class="btn btn-primary arrow $link_classes" $link_css>$link_text</a>
TMP;

  return $icon_markup;
}

?>
