<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');


/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/stat.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText.inc');
include($project_paths['main_project_root'].'/core/items/imageCard.inc');


/* Sections */

include($project_paths['main_project_root'].'/core/partials/section-title.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/buffer.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/columns.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/introContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fullBleedImageColumn.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/regularContent.inc');




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
 * `$image_col_classes = get_extra_value('image_col_classes');`
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
 * `get_extra_value('the_css', $extras, 'style="%s"');`
 *
 * That way, the 'style=' part is only added if there actually is styling.
 *
 *
 * @param  string  $extras_key - the key for the extra value in question
 * @param  array  $extras_array - the full array of all extra parameters
 * @param  string $format - an optional format (like 'style="[value here]"') to wrap the value in
 * @return string - the formatted extra
 */
function get_extras_value($extras_key, $extras_array, $format = false) {
  if ($extras_array && array_key_exists($extras_key, $extras_array)) {
      // return $extras_array[ $extras_key ];
      if(!$format) $format = $extras_array[ $extras_key ];

      return sprintf($format, $extras_array[ $extras_key ]);

  }
  else return false;
}


/*  ********** TEMPLATE FUNCTIONS **********
    These are functions that generate markup for use in template tags. Their purpose is to centralize common markup - section titles, call-to-action links, etc - that would otherwise be hardcoded into multiple places.

    Note: in order to use them, you'll need to declare them as globals in the
    template function first: `global $section_title;`
*/






/*  ********** TEMPLATE TAGS **********
    These are functions that you'd use in a page to generate the actual page markup.

    Index
    -----

    1. Required tags
    2. Section tags
*/



/**
 * [page_masthead description]
 * @param  [type]  $cover_url               [description]
 * @param  boolean $extras                  [description]
 * @return [type]             [description]
 */
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






/*  SECTION TAGS
    ============ */


/**
 * [breadcrumb_nav description]
 * @todo Make this dynamic.
 * @param  boolean $extras               [description]
 * @return [type]         [description]
 */
function breadcrumb_nav($extras = false) {
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






function masthead_fancyVideoBackground($title, $video, $extras) {

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
