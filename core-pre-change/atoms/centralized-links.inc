<?php

function central_link(
  $link_key,
  $link_text,
  $link_classes = null,
  $extras = null
) {

$linkbase = array(
  'common-app' => 'https://apply.commonapp.org/login?ma=278',
  'coalition-app' => 'https://app.scoir.com/app/signup/1100230'
);

$link_url = $linkbase[$link_key];

$link_markup = <<<TMP
  <a href="$link_url" class="$link_classes">$link_text</a>
TMP;

  return $link_markup;
}

?>
