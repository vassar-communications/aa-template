<?php

$bg_image_tag = function ($extras) {

  if (get_extras_value('bg-image-url', $extras)) {
    return <<<TMP
      <img class="section-bg-image" src="$bg_url" alt="$bg_alt" />
  TMP;
  }
  else return false;
};
