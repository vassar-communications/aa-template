

<?php

/*
//  These are just to make it easier to specify obvious placeholders
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$quickfacts_img_path = $admission_img_path.'quick-facts/';
*/
include_once($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

include($project_paths['main_project_root'].'/core/review/slugify.inc');

/* Template Parts */

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');
include($project_paths['main_project_root'].'/core/template-parts/local-nav.inc');
include($project_paths['main_project_root'].'/core/template-parts/tmpfooteralumni.inc');

include($project_paths['main_project_root'].'/core/template-parts/admission-topLevelNav.inc');
include($project_paths['main_project_root'].'/core/template-parts/alums-topLevelNav.inc');

/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');
include($project_paths['main_project_root'].'/core/partials/section-title.inc');
include($project_paths['main_project_root'].'/core/partials/bg-image-tag.inc');

/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-link.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-button.inc');
include($project_paths['main_project_root'].'/core/atoms/phone-number.inc');
include($project_paths['main_project_root'].'/core/atoms/centralized-links.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/stat.inc');
include($project_paths['main_project_root'].'/core/items/alert.inc');
include($project_paths['main_project_root'].'/core/items/iconItem.inc');
include($project_paths['main_project_root'].'/core/items/icon-cardButton.inc');
include($project_paths['main_project_root'].'/core/items/icon-statItem.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText_videoModal.inc');
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







//  Provided a path to a page (/admission/apply), this returns all the
//  variables for that page: title, classes, etc
function get_page_vars($full_filepath) {

  /*
  //  HACK - FIX THIS LATER

  // these are pages that don't currently have info
  // so avoid them
  $bad_paths = [
    $_SERVER['DOCUMENT_ROOT'],
    $_SERVER['DOCUMENT_ROOT'].'/'
  ];

  if( !in_array( $full_filepath, $bad_paths ) ) {

    // bring in all the system-wide variables we might need
    include( $_SERVER['DOCUMENT_ROOT'].'/_cfg.php' );

    if($full_filepath == $_SERVER['DOCUMENT_ROOT'].'/admission/') {
      $page_info['page_title'] = 'Admission';
      $page_info['page_link'] = '/admission/';
      return $page_info;
    }
    */


    global $project_paths;

  //  $full_filepath = $project_paths['main_project_root'].$short_filepath.'/index.php';
    $page_contents = file_get_contents($full_filepath.'/index.php');

/*
    if( !$page_contents ) {
      echo 'filepath = '. $full_filepath.'/index.php' . '<br>';
      echo 'current root is '. $_SERVER['DOCUMENT_ROOT'] . '<br>';
      echo 'getcwd() is '. getcwd() . '<br>';
      echo '$_SERVER["DOCUMENT_ROOT"]. __DIR__" = '.$_SERVER['DOCUMENT_ROOT']. __DIR__ . '<br>';
      echo 'DIR = '.__DIR__;
      return false;
    }
*/

    // so uh, yeah, this gets ugly.

    $page_contents = explode('/* PAGE INFO === */', $page_contents);


// echo $page_contents[1];


    $page_contents = explode('/* === */', $page_contents[1]);

$page_info = $page_contents[0];

$page_info = str_replace('$page_info = ', '', $page_info);
$page_info = str_replace("'{", '{', $page_info);
$page_info = str_replace("}';", "}", $page_info);

$page_info = json_decode($page_info, true);

// eval($page_contents[0]);

    // This might not be the best way of doing it, but
    // I need these vars and I'm not sure how else to get
    // them given our setup and process. Maybe explode the
    // page info block and turn that into an associative array?

    // Probably a better approach would have been Jekyll-style
    // front matter. This isn't user-facing code, though,
    // so I'm a little more inclined towards methods I'd otherwise avoid

  //  $page_vars['page_title'] = $page_title;
  //  $page_vars['page_link'] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $full_filepath);

  //  $page_vars['page_info'] = $page_info;

    $page_info['page_link'] = str_replace(get_base_path(), '', $full_filepath);

    return $page_info;
//  }
//  else return false;
}






//  Wraps data in markup, returns a nav item.
//  Pretty simple.
function nav_item($link, $title, $classes='') {
  $nav_item_tmp = <<<TMP
<li class="nav-item $classes"><a class="nav-link" href="$link">$title</a></li>
TMP;
    return $nav_item_tmp;
}

//  Wraps data in markup, returns a breadcrumb item.
function crumb_item($link, $title, $classes='') {
$breadcrumb_item_tmp = <<<TMP
<li class="breadcrumb-item $classes"><a class="breadcrumb-link" href="$link">$title</a></li>
TMP;
    return $breadcrumb_item_tmp;
}






//  This generates navigation that lists the other pages in
//  whatever subsection you're in, or a list of pages for a
//  specific directory. If no path is provided, it'll generate
//  nav for the current subsection.

function local_nav($nav_file_path = null) {
  // bring in our paths from _cfg
  global $project_paths;

  // We need to load the file that lists all the other
  // subsections in this parent section.
  //
  // if a specific _nav file isn't specified, figure out where we are
  // and which _nav file to use.
  if(!$nav_file_path) {

    // So now we need to know whether the current page
    //  is the parent index page for a whole subsection (like apply/index.php),
    //  in which case the _nav file we need is in the same directory - or whether the current page is a child index page (/how-to-apply/index.php)
    //  in which case the _nav file is in the directory above us.

    //  It's pretty simple: just see if there's a _nav file in our directory
    //  and if not, check the directory above.

    if (file_exists(getcwd().'/_nav.txt')) {
      $the_path_where_the_subsections_are = getcwd();
      $nav_file_path = getcwd().'/_nav.txt';
    }
    else {
      // okay, so we don't want the directory we're in, we want the directory
      // above that.
      // local_nav() needs a path like '/admission/apply/'. To get that:
      // 1. get the full path to the current working directory
      // 2. strip out the root
      // 3. use dirname to grab the parent directory
      $the_path_where_the_subsections_are = dirname(getcwd(), 1);
      $nav_file_path = dirname(getcwd(), 1).'/_nav.txt';
    }
  }

  // load the file
  $local_nav_file = file_get_contents($nav_file_path);

  // iterate over each line
  $local_pages = explode(PHP_EOL, $local_nav_file);
//  print_r($local_pages);

  $nav_markup = '';

  foreach ($local_pages as &$page) {

    $here = getcwd();

    $each_subsections_path = $the_path_where_the_subsections_are.'/'.$page;

    $here = trim($here);

    // so does the path match the page we're already on?
    if( $each_subsections_path == $here ) {
    $class = 'current-item';
 }
else {
    $class = null;
}
//    echo $path . ' - ' . $here . '<br>';

    $each_subsections_path = trim($each_subsections_path);
    $page_vars = get_page_vars($each_subsections_path);

    if(get_value_if_exists('page_navTitle', $page_vars, true))
      $page_title = $page_vars['page_navTitle'];
    else
      $page_title = $page_vars['page_title'];
    $item_link = $page_vars['page_link'];

    $nav_markup .= nav_item($item_link, $page_title, $class);


  }
  unset($page);

  return '<nav class="local-section-nav"><ul class="nav">
'.$nav_markup.'</ul></nav>';
}


function breadcrumb() {

  //  How the breadcrumb works:
  //  - If a section has children, it should appear in the breadcrumb
  //  - If a section has no children (it's an endpoint page) it should
  //  not appear in the breadcrumb, since it already appears in the subnav.
  //
  //  A quick way to determine whether or not a section should appear in
  //  the breadcrumb is whether or not it has a _nav.txt file. Endpoint
  //  pages have no _nav.txt, because they have no subsections.

    if (file_exists(getcwd().'/_nav.txt')) {
//      $current_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', getcwd());
      $current_path = get_base_path('path_to_current_doc_from_web_dir');
    }
    else {
      $current_path = dirname(get_base_path('path_to_current_doc_from_web_dir'), 1);
    }

  // - Home link is simple. That's vassar.edu.
  // - Site link is also simple. That's whatever is right
  // off the root.
  // - The last item in the breadcrumb trail should always be
  // the second-to-last item in the path. We're not showing the
  // current page we're on in the breadcrumb trail, since that's
  // indicated in the subnav.
  //
  // Sooo...

  $path_in_pieces = explode('/', $current_path);
  $path = '';

  $breadcrumb_markup = '<ol class="breadcrumb">';
  $crumb_level = 1;

  foreach ($path_in_pieces as &$item) {
    if($item == '') {
      $path = '/';
      $title = 'Home';
    }
    else {
      $path .= $item.'/';
      $item_info = get_page_vars($_SERVER['DOCUMENT_ROOT'].$path);

      $title = $item_info['page_title'];
    }
    $breadcrumb_markup .= crumb_item($path, $title, 'level-'.$crumb_level);
    $crumb_level++;
  }
  unset($item);

  return $breadcrumb_markup.'</ol>';
}

function interior_page_nav() {
  return '<div class="section main-site-nav">'.
  breadcrumb().
  local_nav().
  '</div>';
}

function get_value_if_exists($key, $array, $boolean=false) {
    if ($boolean)
      $return_val = false;
    else if (!$boolean)
      $return_val = '';
    if (array_key_exists( $key, $array ) )
      return $array[$key];
    else return $return_val;
}

function make_page_title() {
  // get where we are, and figure out everything in-between
  $current_path = get_base_path('path_to_current_doc_from_web_dir');
//  echo $current_path;

  $path_in_pieces = explode('/', $current_path);
//  $title_trail = '';
  $path = '';

  $item_count = count( $path_in_pieces );

  foreach ($path_in_pieces as &$item) {
    if($item == '') {
      $path = '/';
      $page_title = 'Vassar College';
    }
    else {
      $path .= $item.'/';
      $item_info = get_page_vars($_SERVER['DOCUMENT_ROOT'].$path);

      $page_title = $item_info['page_title'];
    }
    $title_trail[] = $page_title;
  }

//  print_r( array_reverse( $title_trail ) );
  $title_trail = array_reverse( $title_trail );
  $final_trail = '';

  $item_counter = 0;
  $item_delimiter = ' ← ';
  foreach ( $title_trail as &$item ) {
    $final_trail .= $item . $item_delimiter;
    $item_counter++;

    if( ( $item_counter + 1 ) == $item_count ) {
      $item_delimiter = ' ';
    }
  }
  return $final_trail;
}
