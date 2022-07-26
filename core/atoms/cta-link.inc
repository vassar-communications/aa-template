<?php

function cta_link(
  $link_url,
  $link_text = 'Learn more',
  $link_classes = null,
  $extras = null
) {

if($link_url == '')
  $link_classes .= 'hey-im-broken';

$link_css = get_extras_value( 'css', $extras, 'style="%s"' );
$icon_markup = <<<TMP
  <a href="$link_url" class="btn btn-link link--cta arrow $link_classes" $link_css>$link_text</a>
TMP;

  return $icon_markup;
}

?>
