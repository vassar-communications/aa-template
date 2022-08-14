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

$file_type = get_extras_value( 'file_type', $extras );
$file_size = get_extras_value( 'file_size', $extras );

$file_type_icon = ( $file_type == 'pdf') ? '<i class="fa-solid fa-file"></i>' : '';

$file_type_ext = ( $file_type == 'pdf') ? '<span class="file-type-label">'.$file_type.'</span>' : '';
$file_size_info = ( $file_size ) ? '<span class="file-size-label">'.$file_size.'</span>' : '';

$icon_markup = <<<TMP
  <a href="$link_url" class="btn btn-link link--cta xarrow $link_classes" $link_css>
  $file_type_icon
  <span>$link_text $file_type_ext $file_size_info</span>
  <i class="fa-solid fa-arrow-right"></i>
  </a>
TMP;

  return $icon_markup;
}

?>
