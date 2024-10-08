<?php

$bg_image = function ($extras) {

  if (get_extras_value('bg-image-url', $extras)) {

    $bg_url = get_extras_value('bg-image-url', $extras);
    $bg_alt = get_extras_value('bg-image-alt', $extras);
    $bg_classes = get_extras_value('bg-image-classes', $extras);
    $bg_css = get_extras_value( 'bg-css', $extras, 'style="%s"' );

    return <<<TMP
    <div class="section-bg-image-container $bg_classes" $bg_css>
      <img class="section-bg-image" src="$bg_url" alt="$bg_alt" />
    </div>
  TMP;
  }
  else return false;
};
