<?php function icon(
  $icon
) {
$icon_markup = <<<TMP
<i class="fa fa-$icon"></i>
TMP;

  return $icon_markup;
}

?>
