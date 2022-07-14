

<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

/* Template Parts */

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');
include($project_paths['main_project_root'].'/core/template-parts/tmpfooteralumni.inc');

<<<<<<< Updated upstream
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


=======
include($project_paths['main_project_root'].'/core/template-parts/alums-topLevelNav.inc');
include($project_paths['main_project_root'].'/core/template-parts/admission-topLevelNav.inc');
>>>>>>> Stashed changes



/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');
include($project_paths['main_project_root'].'/core/partials/section-title.inc');
include($project_paths['main_project_root'].'/core/partials/bg-image-tag.inc');

/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/stat.inc');
include($project_paths['main_project_root'].'/core/items/alert.inc');
include($project_paths['main_project_root'].'/core/items/iconItem.inc');
include($project_paths['main_project_root'].'/core/items/icon-cardButton.inc');
include($project_paths['main_project_root'].'/core/items/icon-statItem.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText.inc');
include($project_paths['main_project_root'].'/core/items/imageCard.inc');
include($project_paths['main_project_root'].'/core/items/imageCard_modal.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fancy-stats.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/nice-quotes.inc');


/* Sections */


include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video_adv.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageTextMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/vassarMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/hamburgerNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/breadcrumbNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/toplinksNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/relatedTopics.inc');


include($project_paths['main_project_root'].'/core/sections/content_sections/masthead-image-partial.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/event-listing.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/buffer.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wordByWord.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wordByWord-fixed.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/columns.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/introContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fullBleedImageColumn.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/interiorPage-masthead.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/regularContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wideContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle-masthead.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle-masthead_vid.inc');
<<<<<<< Updated upstream
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle-masthead_vid-give.inc');


=======
>>>>>>> Stashed changes
include($project_paths['main_project_root'].'/core/sections/content_sections/news-carousel.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/alums-carousel.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/inTheMedia-carousel.inc');


/* Modules */

include($project_paths['main_project_root'].'/core/modules/thumbnail-text-ticker.inc');
include($project_paths['main_project_root'].'/core/modules/word-selector.inc');
include($project_paths['main_project_root'].'/core/modules/flipcard-stat.inc');
include($project_paths['main_project_root'].'/core/modules/vassar-is-awesome.inc');


/* VASSAR TEMPLATING SYSTEM  */


/*  ********** UTILITIES **********
    These are functions to be used within templating functions themselves.
*/

include($project_paths['main_project_root'].'/core/review/extra-value.inc');


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

include($project_paths['main_project_root'].'/core/review/fancy-video.inc');
include($project_paths['main_project_root'].'/core/review/show-code.inc');
include($project_paths['main_project_root'].'/core/review/clean-up.inc');
include($project_paths['main_project_root'].'/core/review/page-info.inc');
include($project_paths['main_project_root'].'/core/review/current-page.inc');