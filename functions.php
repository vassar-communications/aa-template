

<?php

//  These are just to make it easier to specify obvious placeholders
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$quickfacts_img_path = $admission_img_path.'quick-facts/';

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

include($project_paths['main_project_root'].'/core/review/slugify.inc');

/* Template Parts */

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');
include($project_paths['main_project_root'].'/core/template-parts/local-nav.inc');
include($project_paths['main_project_root'].'/core/template-parts/tmpfooteralumni.inc');

include($project_paths['main_project_root'].'/core/template-parts/alums-topLevelNav.inc');
include($project_paths['main_project_root'].'/core/template-parts/admission-topLevelNav.inc');



/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');
include($project_paths['main_project_root'].'/core/partials/section-title.inc');
include($project_paths['main_project_root'].'/core/partials/bg-image-tag.inc');

/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-link.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-button.inc');

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
include($project_paths['main_project_root'].'/core/items/imageCard_videoModal.inc');
include($project_paths['main_project_root'].'/core/items/modal-standardVideo.inc');

include($project_paths['main_project_root'].'/core/items/labeled-list-item.inc');

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
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-admission-home-news.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-alumni-home-spotlight.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-alumni-home-media.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-admission-explore-hudson.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-admission-explore-campus.inc');


/* Modules */

include($project_paths['main_project_root'].'/core/modules/thumbnail-text-ticker.inc');

include($project_paths['main_project_root'].'/core/modules/animated-statement.inc');
include($project_paths['main_project_root'].'/core/modules/carousel.inc');

include($project_paths['main_project_root'].'/core/modules/accordion.inc');

include($project_paths['main_project_root'].'/core/modules/deadlines.inc');

include($project_paths['main_project_root'].'/core/modules/word-selector.inc');
include($project_paths['main_project_root'].'/core/items/flipcard-stat.inc');
include($project_paths['main_project_root'].'/core/modules/vassar-is-awesome.inc');
include($project_paths['main_project_root'].'/core/modules/info-card.inc');


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
