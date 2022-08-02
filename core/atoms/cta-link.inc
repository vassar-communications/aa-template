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
  <a href="$link_url" class="btn btn-link link--cta xarrow $link_classes" $link_css>
  <span>$link_text</span>
  <i class="fa-solid fa-arrow-right"></i>
  </a>
TMP;

  return $icon_markup;
}

?>
