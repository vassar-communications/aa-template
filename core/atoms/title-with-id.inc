<?php


// format should be XXX-XXX-XXXX
// and this can be changed via parameter
function heading_with_anchor_id(
  $heading_text,
  $heading_level = '2',
  $classes = null,
  $extras = null
) {

  $heading_id_slug = createSlug( $heading_text );
  $heading_id = ' id="' . $heading_id_slug . '"';

  $classes = get_extras_value( 'classes', $extras );

  $heading_markup = <<<TMP
    <h$heading_level class="$classes" $heading_id>$heading_text</h$heading_level>
  TMP;

  return $heading_markup;
}

?>
