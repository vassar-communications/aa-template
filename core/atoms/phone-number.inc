<?php


// format should be XXX-XXX-XXXX
// and this can be changed via parameter
function phone_number(
  $number,
  $classes = null,
  $format = null,
  $extras = null
) {

// $classes = get_extras_value( 'classes', $extras, 'class="%s"' );
$classes = get_extras_value( 'classes', $extras );

$number = explode( '-', $number );
$area_code = $number[0];
$first_part = $number[1];
$second_part = $number[2];

$final_number = $area_code.$first_part.$second_part;

$format_us = <<<FORMAT_US
($area_code) $first_part-$second_part
FORMAT_US;

$phone_markup = <<<TMP
  <a href="tel:$final_number" class="$classes">$format_us</a>
TMP;

  return $phone_markup;
}

?>
