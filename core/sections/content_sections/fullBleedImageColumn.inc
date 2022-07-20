<?php



/**
 * sec_fullBleedImageColumn()
 * Two-column row with image, where the image takes up 50% of the screen
 *
 * @see https://codepen.io/csilverman/pen/NWXQMWj?editors=1000
 * @link https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.nfn2l8uhdoxl
 * @param  string  $title (optional) - The title of the section
 * @param  string $classes (optional) - Any classes
 * @param  string $css (optional) - Inline CSS (like CSS variables)
 * @param  array $extra - Reserved for future use
 * @return string $template - The rendered HTML markup
 */

function sec_fullBleedImageColumn(
  $title = false,
  $image,
  $section_classes = false,
  $content_classes = false,
  $extras = false
  ) {

  global $section_title;
  $title_classes = get_extras_value('title_classes', $extras);
  $title_level = get_extras_value('title_level', $extras);

  //  I'm not sure why I have to do this, since I did specify
  //  a default parameter of 2
  if($title_level == '') $title_level = '2';

$image_col_classes = get_extras_value( 'image_col_classes', $extras );
$text_col_classes = get_extras_value( 'text_col_classes', $extras );
$image_col_css = get_extras_value( 'image_col_css', $extras, 'style="%s"' );
$text_col_css = get_extras_value( 'text_col_css', $extras, 'style="%s"' );

$template = <<<TMP
<div class="section section--full-bleed-image-column $section_classes">
  <div class="section-content columns mw-100  $content_classes">

    <div class="column col-has-image animate-when-content-appears animation-fade-in $image_col_classes" $image_col_css>
      <div class="full-bleed-image-container">
        <img src="$image" />
      </div>
    </div>


    <div class="column col--text d-flex justify-content-center align-items-center w-100 text_col_classes">
      <div class="section--full-bleed-image-column__content" $text_col_css>
        {$section_title($title, $title_classes, $title_level)}
TMP;

  return $template;
}

/**
 * end_sec_fullBleedImageColumn()
 * @param  array $extra - Reserved for future use
 * @return string - The rendered HTML markup
 */
function end_sec_fullBleedImageColumn( $extra = false ) {
  return '</div></div></div></div>';
}
