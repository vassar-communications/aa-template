<?php

/**
 * page_partialmasthead()
 * Generates Partial Image Page Masthead
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 * @todo - Currently, the image displayed is a background image,
 * not a markup image. I'm including the image for accessibility
 * purposes (alt text FTW), and hiding it via CSS. At some point, the image
 * should probably be the standard HTML image, not a CSS background.
 *
 * Perhaps. But not today.
 */
function page_partialmasthead($cover_url, $extras = false) {

    global $page_info;

    $page_title = $page_info['page_title'];
    $image_alt_text = get_extras_value('image_alt_text', $extras);

    $page_supertitle = '';
    if( array_key_exists( 'page_supertitle', $page_info ) ) {
      $page_supertitle = $page_info['page_supertitle'];
      $page_supertitle = '<div class="supertitle">'.$page_supertitle.'</div>';
    }

    $template = <<<TMP
<div class="section section--top-level-masthead partial-masthead" style="--bg-image: url($cover_url);">
  <div class="title-container d-flex flex-column-reverse">
    <div class="section__title">

    <h1 class="section__title__main display-1">
    $page_supertitle
    $page_title</h1>
    </div>
  </div>
  <div class="section-bg">
    <img src="$cover_url" alt="$image_alt_text" />
  </div>
</div>
TMP;

    return $template;
}
