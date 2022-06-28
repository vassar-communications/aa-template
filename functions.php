

<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');
include($project_paths['main_project_root'].'/core/template-parts/tmpfooteralumni.inc');

/* THIS NEEDS TO BE INTEGRATED */

function word_cycler($word_selector_id) {

  $speed = 1600;

    $list = '
    "New York",
    "Egypt",
    "Nigeria",
    "Maryland",
    "Puerto Rico",
    "Jamaica",
    "California",
    "Ecuador",
    "India",
    "Ohio",
    "Japan"
  ';

    return <<<TMP
<style>
@keyframes word-fade {
  0% { opacity: 0; }
  5% { opacity: 0; }
  50% { opacity: 1; }
  95% { opacity: 0; }
  100% { opacity: 0; }
}

#$word_selector_id {
  animation-name: word-fade;
  animation-duration: {$speed}ms;
  animation-iteration-count: infinite;
}

</style>

<script>
$(document).ready(function () {

  var arr = [$list];

  // run through the array forever
  (function recurse(counter) {
      var color = arr[counter];
      $('#$word_selector_id').delay('$speed').html(color);
      // delete the value to save memory
      delete arr[counter];
      // add the value at the end of the array
      arr.push(color);

//      $('#$word_selector_id').toggleClass('bob1').toggleClass('bob2');

      // run it again for the next number
      setTimeout(function() {
          recurse(counter + 1);
      }, $speed);
  // start it for the first number.
  })(0);

});
</script>

TMP;

}



function vassar_is_awesome($classes) {
    $our_qualities = '<ul><li>unafraid to question</li><li>a story of strength and substance</li><li>belonging and thriving</li><li>small but mighty</li><li>courage of conviction</li><li>a remarkable sense of place</li></ul>';

    return <<<TMP
<div class="awesome_ticker $classes">
  <div id="div1">
$our_qualities
  </div>
  <div id="div2">
$our_qualities
  </div>
</div>
TMP;

}




function flipcard_stat(
    $title,
    $value,
    $reverse_content,
    $class=null,
    $css=null
) {


    if($css) { $css = sprintf('style="%s"', $css); }

    return <<<TMP
<div class="flip-card $class" $css>
  <div class="card-content">
    <div class="card__face card__face--front">
      <p class="flipcard__title"><strong>$title</strong></p>
      <p class="flipcard__value">$value</p>
    </div>
    <div class="card__face card__face--back">
      $reverse_content
    </div>
  </div>
</div>
TMP;

}




/* END */

/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');


/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/stat.inc');
include($project_paths['main_project_root'].'/core/items/iconItem.inc');
include($project_paths['main_project_root'].'/core/items/icon-cardButton.inc');
include($project_paths['main_project_root'].'/core/items/icon-statItem.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText.inc');
include($project_paths['main_project_root'].'/core/items/imageCard.inc');
include($project_paths['main_project_root'].'/core/items/imageCard_modal.inc');


include($project_paths['main_project_root'].'/core/sections/content_sections/fancy-stats.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/nice-quotes.inc');


/* Sections */

include($project_paths['main_project_root'].'/core/partials/section-title.inc');
include($project_paths['main_project_root'].'/core/partials/bg-image-tag.inc');

include($project_paths['main_project_root'].'/core/template-parts/alums-topLevelNav.inc');
include($project_paths['main_project_root'].'/core/template-parts/admission-topLevelNav.inc');

include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video_adv.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageTextMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/vassarMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/hamburgerNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/breadcrumbNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/toplinksNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/relatedTopics.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/event-listing.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/buffer.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wordByWord.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/columns.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/introContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fullBleedImageColumn.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/interiorPage-masthead.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/regularContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wideContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle-masthead.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/news-carousel.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/alums-carousel.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/inTheMedia-carousel.inc');

include($project_paths['main_project_root'].'/core/modules/thumbnail-text-ticker.inc');







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







/*  SECTION TAGS
    ============ */


/**
 * [breadcrumb_nav description]
 * @todo Make this dynamic.
 * @param  boolean $extras               [description]
 * @return [type]         [description]
 */




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


function show_code() {
    echo <<<TMP
<details>
<summary style="font-size: 1rem">Template code</summary>
  <pre>
TMP;

    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $temp_code = file_get_contents($rootDir . $_SERVER['PHP_SELF']);
    $temp_code = explode('<!-- %'.'%% -->', $temp_code);

    echo htmlentities($temp_code[1]);

    echo '</pre></details>';

}


function clean_up_variable($variable) {
    $variable = str_replace('$page_title = "', '', $variable);
    $variable = str_replace('$page_docs = "', '', $variable);
    $variable = str_replace(';', '', $variable);
    $variable = str_replace('"', '', $variable);
    return $variable;
}

function get_page_info_from_array($page_contents) {
    // problem with array_search() is that it doesn't do partial string matches
    $page_title = implode('', (preg_grep('/^\$page_title\s.*/', $page_contents)));
    $page_title = clean_up_variable($page_title);

    $page_docs = implode('', (preg_grep('/^\$page_docs\s.*/', $page_contents)));
    $page_docs = clean_up_variable($page_docs);

    $page_info['title'] = $page_title;
    $page_info['docs'] = $page_docs;

    return $page_info;
}

function get_current_page_name() {
    $current_page_name = $_SERVER['PHP_SELF'];
    $path_parts = pathinfo($current_page_name);
    $current_page_name = $path_parts['dirname'];
    $current_page_name = explode('/', $current_page_name);
    $current_page_name = end($current_page_name);

    return $current_page_name;
}
