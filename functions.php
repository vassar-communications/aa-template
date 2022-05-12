<?php

/*
  VASSAR TEMPLATING SYSTEM

*/


/*  ********** UTILITIES **********
    These are functions to be used within templating functions themselves.
*/

/**
 * get_extra_value()
 *
 * This makes it a little easier to get values defined in an
 * extras array (or not, if no array exists). You'd use it in a
 * template tag function as follows:
 * `$image_col_classes = get_extra_value( 'image_col_classes' );`
 *
 * You can then include $image_col_classes in the template markup, even
 * if you have no idea whether it will ever contain anything. If it ever
 * has a value, that value will be added; if not, it'll be blank.
 *
 * You can also, optionally, wrap an extras tag in text. This is useful
 * for use cases like inline CSS. If an element might or might not have
 * inline CSS, you wouldn't want to have 'style="$the_css"' in your template
 * markup, since a lot of the time, it might just be empty. Better to do the
 * following: just include $the_css in the template markup, and then, in the
 * template function, call get_extra_value() as:
 *
 * `get_extra_value( 'the_css', $extras, 'style="%s"');`
 *
 * That way, the 'style=' part is only added if there actually is styling.
 *
 *
 * @param  string  $extras_key - the key for the extra value in question
 * @param  array  $extras_array - the full array of all extra parameters
 * @param  string $format - an optional format (like 'style="[value here]"') to wrap the value in
 * @return string - the formatted extra
 */
function get_extra_value( $extras_key, $extras_array, $format = false ) {
  if ( array_key_exists( $extras_key, $extras_array ) ) {
      // return $extras_array[ $extras_key ];
      if( !$format ) $format = $extras_array[ $extras_key ];

      return sprintf($format, $extras_array[ $extras_key ]);

  }
  else return false;
}


/*  ********** TEMPLATE FUNCTIONS **********
    These are functions that generate markup for use in template tags. Their purpose is to centralize common markup - section titles, call-to-action links, etc - that would otherwise be hardcoded into multiple places.
*/

/**
 * [$section_title description]
 * @param string $title - the section title
 * @param string $title_classes (optional) - classes that should be applied to the title markup
 * @return string - the rendered markup
 */
$section_title = function ($title, $title_classes=false ) {
  if( $title )
return <<<TMP
<h2 class="section-title $title_classes">$title</h2>
TMP;
};







function site_header( $extra=false ) {

  global $page_title;
  global $page_classes;

$template = <<<TMP
<!doctype html>
<html class="no-js $page_classes" lang="">

<head>
  <meta charset="utf-8">
  <title>$page_title</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="stylesheet" href="https://use.typekit.net/cga8whe.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
TMP;

  return $template;

}


/**
 * vassar_masthead()
 * Generates the Vassar masthead
 *
 * @see https://codepen.io/csilverman/pen/KKZOoQW
 * @link https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.a091marh1u07
 * @param  array $extra - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function vassar_masthead( $extra = false ) {
$template = <<<TMP
<div class="vassar-masthead">
<a href="/" title="Home" rel="home" class="vassar-masthead-link">
          <svg aria-labelledby="vassar-title" role="img" width="350" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2002 396"><title id="vassar-title">Vassar</title><path d="M379 32a104 104 0 0 1 22-17l-1-6-56 1-69-1-1 6c7 3 16 8 22 16 6 9 13 21 13 43 0 31-14 74-44 136l-49 108h-1c-20-49-44-101-67-153l-30-69c-7-19-12-34-13-46 3-18 18-30 35-35l-1-6-71 1L1 9l-1 7c22 6 41 31 55 58a4241 4241 0 0 1 142 322h7l23-63 53-117c33-73 56-122 72-148 9-14 17-26 27-36zM493 0l-7 1-24 64-52 116c-31 69-56 122-74 152-8 14-16 24-25 33-9 8-15 13-22 16l1 6 51-1 74 1v-6c-7-3-16-7-22-15-8-9-14-20-14-41 0-20 8-49 20-78l73-1 78 1 22 54c7 18 13 34 13 47-2 17-18 28-34 33v6l67-1 38 1c-4-13-89-209-116-271L493 0zm-21 232l-67-1 19-44 50-111h1l67 154c-21 2-45 2-70 2zM819 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-49-63l-17 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110zM2000 378a60 60 0 0 1-10 1c-19-5-53-27-78-53-33-36-68-84-89-122 41-16 79-51 79-102 0-32-13-54-37-71-28-18-61-22-106-22l-87 1-76-1-1 6c8 1 19 4 26 8a57 57 0 0 1 22 23c7 12 10 29 11 55l2 100v24l-2 69c-1 28-4 47-14 62l-1 1c-12 18-39 19-54 2-9-10-17-22-24-35A3434 3434 0 0 1 1419 0l-7 1-24 64-52 116c-31 69-55 122-73 152-9 14-16 24-26 33-8 8-15 13-21 16v6l51-1 74 1 1-6c-8-3-16-7-23-15-7-9-14-20-14-41 0-20 9-49 21-78l72-1 78 1 23 54c6 18 12 34 13 47-3 17-19 28-35 33l1 6 67-1h132l89 1v-7c-12-2-25-6-37-15-14-12-23-26-25-57-2-26-3-57-3-86v-15l71 2c27 50 55 96 88 134 14 16 27 26 42 35s33 12 53 12a176 176 0 0 0 47-7zm-602-146l-66-1 18-44 50-111h2l66 154c-21 2-45 2-70 2zm392-35c-32 0-67-3-89-8v-11c0-52 1-110 6-154a265 265 0 0 1 40-3c31 2 55 9 76 28 17 16 27 38 27 65 0 33-10 62-36 82l-24 1zM1113 183c-28-14-54-26-69-42a66 66 0 0 1-19-49c0-44 33-70 68-77 20 3 41 14 61 33a209 209 0 0 1 43 59l7-1c-3-31-5-69-9-89-22-7-56-14-95-14-34 0-64 9-87 28a95 95 0 0 0-34 77c0 31 13 53 29 69 18 20 45 32 75 48s59 31 73 49a54 54 0 0 1 12 34c0 39-33 66-74 73-20-4-43-12-69-33-19-17-38-39-48-63l-18 4c0 1 29 73 41 99 24 2 58 6 85 6 43 0 77-13 98-32 22-19 31-42 31-69 0-57-48-84-101-110z"></path><image alt="Vassar" src="/assets/images/vassar-logo.png" width="402" height="80"></image></svg>
        <span class="sr-only ml-2 d-none">Vassar College</span>
  </a>
</div>
TMP;

  return $template;
}




function page_masthead($cover_url, $extras = false) {

  global $page_title;
  global $page_tagline;

$template = <<<TMP

<div class="section section--top-level-masthead" style="--bg-image: url($cover_url);">
  <div class="title-container d-flex flex-column-reverse">
    <div class="section__title">
    <h1 class="section__title__main display-1">$page_title</h1>
    <p class="section__title__tagline">$page_tagline</p>
    </div>
  </div>

  <div class="section-bg"></div>
</div>
TMP;

  return $template;
}





function site_footer() {

  $template = '
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script src="https://codepen.csilverman.com/js/main.js"></script>
</body>
</html>';

  return $template;

}



/*  SECTION TAGS
    ============ */










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
  $extras = false
  ) {


$image_col_classes = get_extra_value( 'image_col_classes', $extras );
$text_col_classes = get_extra_value( 'text_col_classes', $extras );
$image_col_css = get_extra_value( 'image_col_css', $extras, 'style="%s"' );
$text_col_css = get_extra_value( 'text_col_css', $extras, 'style="%s"' );

$template = <<<TMP
<div class="section section--full-bleed-image-column $section_classes">
  <div class="columns">

        <div class="column col-has-image animate-when-content-appears animation-fade-in $image_col_classes" $image_col_css>
      <div class="full-bleed-image-container">
        <img src="$image" />
      </div>
    </div>


    <div class="column col--text $text_col_classes">
      <div class="section--full-bleed-image-column__content" $text_col_css>
        <h2 class="section-title animate-when-content-appears animation-zoom-in">Title</h2>
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




function sec_regularContent(
  $title=false,
  $section_classes = false,
  $title_classes=false,
  $extra = false
) {
  global $section_title;


$image_col_classes = get_extra_value( 'image_col_classes', $extras );


return <<<TMP
  <div class="section $section_classes">
    <div class="section-content">
    {$section_title( $title, $title_classes )}
TMP;
}

function end_sec( $extra = false ) {
  return '</div></div>';
}



function sec_introContent($classes = false, $extra = false) {
$template = <<<TMP
<div class="section section--intro $classes">
  <div class="section-content">
  <p class="intro-text">
TMP;
  return $template;
}

function end_sec_introContent( $extra = false ) {
  return '</p></div></div>';
}





/**
 * sec_buffer()
 * Spacefiller section for testing scroll-in animations
 *
 * @see https://codepen.io/csilverman/pen/popMVyL
 * @link https://docs.google.com/document/d/10cN3CBi-jaEj5DT_8HQSA3VcsiM2mQ1F2lWxE1yMeSI/edit#heading=h.q3v10639vhm8
 * @param  boolean $extra - Reserved for future use
 * @return string - The rendered HTML markup
 */
function sec_buffer( $extra = false ) {
  return '<div class="buffer"></div>';
}

/**
 * [breadcrumb_nav description]
 * @todo Make this dynamic.
 * @param  boolean $extra               [description]
 * @return [type]         [description]
 */
function breadcrumb_nav( $extra = false) {
$template = <<<TMP
<nav class="main-nav animate-when-content-appears animation-fade-in">
  <ol class="nav-path">
    <li><a href="">Vassar</a></li>
    <li><a href="">Admissions</a></li>
    <li><strong class="nav__current-item">Apply</strong>
      <ul class="nav-current-section animation-group animate-when-content-appears animation-fade-in">
        <li class="animation-item"><a href="">How to Apply</a></li>
        <li class="animation-item"><a href="">1st Year Applicants</a></li>
        <li class="animation-item"><a href="">Transfer Applicants</a></li>
        <li class="animation-item"><a href="">International Applicants</a></li>
        <li class="animation-item"><a href="">Information for Veterans</a></li>
        <li class="animation-item"><a href="">Questbridge Students</a></li>
        <li class="animation-item"><a href="">Financial Aid</a></li>
        <li class="animation-item"><a href="">Application Portal</a></li>
      </ul>
    </li>
  </ol>
</nav>
TMP;
  return $template;
}






function masthead_fancyVideoBackground( $title, $video, $extras ) {

$template = <<<TMP

<!-- https://stackoverflow.com/questions/24579785/force-iframe-youtube-video-to-center-fit-and-full-cover-the-screen-in-the-backgr -->

<div class="video-header is-loading">

  <div class="title-cover">
    <h1 class="display-1">
      <span class="slice slice-1">Admission</span>
      <span class="slice slice-2">Admission</span>
    </h1>
    <div class="cover-content">
      <a href="" class="btn btn-lg btn-primary">Apply</a>
      <a href="" class="btn btn-lg btn-primary">Request Info</a>
    </div>
  </div>

  <div class="video-background">
    <iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" id="main-video" src="https://player.vimeo.com/video/675479542?h=3f69ff4c7f?h=360eb5ffb8&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;background=1&amp;muted=1&amp;autoplay=1&amp;loop=1&amp;byline=0&amp;title=0"  title="This-is-Vassar-Anthem-slide-loop"></iframe>
  </div>
</div>
TMP;

}




?>
