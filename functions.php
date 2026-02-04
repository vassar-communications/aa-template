

<?php

/* */

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

require_once( $project_paths['main_project_root'].'/core/packages/simplepie-master/autoloader.php' );

include( $project_paths['main_project_root'].'/core/_vars.php' );


/* Template Parts */

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');
// include($project_paths['main_project_root'].'/core/template-parts/local-nav.inc');

// include($project_paths['main_project_root'].'/core/template-parts/tmpfooteralums.inc');
// include($project_paths['main_project_root'].'/core/template-parts/admission-topLevelNav.inc');
// include($project_paths['main_project_root'].'/core/template-parts/alums-topLevelNav.inc');

/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');
include($project_paths['main_project_root'].'/core/partials/section-title.inc');
include($project_paths['main_project_root'].'/core/partials/bg-image-tag.inc');

/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-link.inc');
include($project_paths['main_project_root'].'/core/atoms/icon-link.inc');
include($project_paths['main_project_root'].'/core/atoms/cta-button.inc');
include($project_paths['main_project_root'].'/core/atoms/phone-number.inc');
include($project_paths['main_project_root'].'/core/atoms/title-with-id.inc');
include($project_paths['main_project_root'].'/core/atoms/centralized-links.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/dropdown-schedule.inc');
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

include($project_paths['main_project_root'].'/core/items/link-video-modal.inc');


include($project_paths['main_project_root'].'/core/sections/content_sections/fancy-stats.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/nice-quotes.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/facts-ticker.inc');


include($project_paths['main_project_root'].'/core/sections/content_sections/vassar-home-news.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/imageThenContent.inc');





/* Sections */


include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video_adv.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageTextMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/vassarMasthead.inc');

include($project_paths['main_project_root'].'/core/sections/universal_sections/hamburgerNavigation.inc');

include($project_paths['main_project_root'].'/core/sections/universal_sections/hamburgerNavigation-alums.inc');

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

include($project_paths['main_project_root'].'/core/modules/carousel.inc');


// include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-alums-home-media.inc');

include($project_paths['main_project_root'].'/alums/inc/reunion/carousel-alums-reunions.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-admission-explore-hudson.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/carousel-admission-explore-campus.inc');


/* Modules */

include($project_paths['main_project_root'].'/core/modules/thumbnail-text-ticker.inc');

include($project_paths['main_project_root'].'/core/modules/animated-statement.inc');


include($project_paths['main_project_root'].'/core/modules/accordion.inc');

include($project_paths['main_project_root'].'/core/modules/deadlines.inc');

include($project_paths['main_project_root'].'/core/modules/word-selector.inc');
include($project_paths['main_project_root'].'/core/items/flipcard-stat.inc');

include($project_paths['main_project_root'].'/core/items/contact-card.inc');

include($project_paths['main_project_root'].'/core/modules/vassar-is-awesome.inc');
include($project_paths['main_project_root'].'/core/modules/info-card.inc');

include($project_paths['main_project_root'].'/core/modules/presentation-item.inc');

include($project_paths['main_project_root'].'/core/modules/event-listing.inc');

include($project_paths['main_project_root'].'/core/modules/expandable-card.inc');



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
//
//  If this breaks:
//  - make $link required
//  - put link markup back in template; don't make it conditional
//
function crumb_item($title, $link='', $classes='') {

  $link_markup_start = '<strong>';
  $link_markup_end = '</strong>';

  if( $link ) {
    $link_markup_start = '<a class="breadcrumb-link" href="' . $link . '">';
    $link_markup_end = '</a>';
  }


$breadcrumb_item_tmp = <<<TMP
<li class="breadcrumb-item $classes">$link_markup_start $title $link_markup_end</li>
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

  if( file_exists( $nav_file_path ) ) {
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

      $each_subsections_path = trim($each_subsections_path);
      $page_vars = get_page_vars($each_subsections_path);

      if(get_value_if_exists('page_navTitle', $page_vars, true))
        $page_title = $page_vars['page_navTitle'];
      else
        $page_title = $page_vars['page_title'];
      $item_link = $page_vars['page_link'];

      $nav_markup .= nav_item($project_paths['final_url'].$item_link, $page_title, $class);


    }
    unset($page);

    return '<nav class="local-section-nav"><ul class="nav">
  '.$nav_markup.'</ul></nav>';
  }
  else return false;
}


function breadcrumb() {

  global $project_paths;


  // final_url is the root. I'd been keeping that relative (/) but
  // Morgan's scraper needs it to be more specific.

  // detect what server we're on. If it's aa-dev, final_url should
  // be https://www.vassar.edu/. If not, it should be relative; otherwise,
  // "Admission" in the breadcrumb trail will link to https://www.vassar.edu/admission, and anyone looking at the site will be going to a page that
  // doesn't exist yet.


  //  How the breadcrumb works:
  //  - If a section has children, it should appear in the breadcrumb
  //  - If a section has no children (it's an endpoint page) it should
  //  not appear in the breadcrumb, since it already appears in the subnav.
  //
  //  A quick way to determine whether or not a section should appear in
  //  the breadcrumb is whether or not it has a _nav.txt file. Endpoint
  //  pages have no _nav.txt, because they have no subsections.



  /*  SIBLINGS */

  $directory = dirname(getcwd(), 1);
  $scanned_directory = array_diff(scandir($directory), array('..', '.', 'index.php'));

  $siblings = false;
  $path_class = '';

  if( count( $scanned_directory ) >= 2 ) {
    $siblings = true;
  }


  /*  CHILREN */

  $directory = getcwd();
  $scanned_directory = array_diff(scandir($directory), array('..', '.', 'index.php'));

  $children = false;
  $path_class = '';
  $item_is_linked = true;

  echo $children;

  if( count( $scanned_directory ) >= 2 ) {
    $children = true;
  }


  /* SECTION HAS ITS OWN SUBNAV */

  if( file_exists ( getcwd().'/_nav.txt' ) ) {
    $has_nav = true;
  }
  else $has_nav = false;


  /* FOLDER SECTION LIVES IN HAS SUBNAV */

  if( file_exists ( dirname( getcwd(), 1) .'/_nav.txt' ) ) {
    $has_sibling_nav = true;
  }
  else $has_sibling_nav = false;


/*
    echo getcwd().'/_nav.txt <br>';
      echo 'c '.$children.'<br>
       hn '.$has_nav.'<br>
        s '.$siblings.'<br>
        sn '.$has_sibling_nav;
*/

// Depending on where and what a section is, it should
// either appear in the breadcrumb trail, and display subnav below,
// or it should *not* appear in the breadcrumb trail because it is subnav.

// This is where we determine how a nav item should bne displayed



    if ( ( $children == true ) && ( $has_nav == true ) ) {
      // if the current section we're on
      // - has children
      // - contains its own _nav.txt file
      //
      // that means it's a parent section, and
      // - it SHOULD appear in the breadcrumb trail
      // - it is displaying subnav
      // - it has that border at the end that connects it to the
      //   subnav box
      //
      //   example: /alums/community/aavc/
      $current_path = get_base_path('path_to_current_doc_from_web_dir');
    }

    else if ( ( $children == true ) && ( $siblings == true ) && ( $has_nav == false ) ) {
      // if the current section we're on
      // - has children
      // - has siblings (it is in a directory with other folders)
      // - does NOT contain its own _nav.txt file
      //
      // that means it's a parent section, but its children are
      // not intended to be displayed in the nav. This is rare; the
      // only section I can think of that's like this is aavc/board-members.
      // - it should NOT be displayed in the breadcrumb trail, because it's
      //   an active subnav item. Its parent should be displayed in the
      //   breadcrumb trail. So $current_path, which is chopped up into
      //   the items in the breadcrumb trail, should start one directory
      //   above it. That means the last item displayed in the breadcrumb
      //   trail will be its parent folder.

      $current_path = dirname(get_base_path('path_to_current_doc_from_web_dir'),1);
    }

    else if ( ( $siblings == true ) && ( $children == false ) && ( $has_sibling_nav == false ) ) {
      // if the current section we're on
      // - does NOT have children
      // - has siblings (it is in a directory with other folders)
      // - does NOT have sibling nav (the folder that contains it does
      //    NOT have a _nav.txt file )
      //
      // that means it's in the lowest level of a section, and that
      // section does not have subnav. So this section we're on
      // won't appear in the subnav box; it'll have to appear as
      // the last item in the breadcrumb trail instead.
      // - Since it's in the breadcrumb trail, we get the full path
      //   that includes the name of this directory, to make sure
      //   that when the path gets chopped up to generate the breadcrumb
      //   trail, this item will appear in it
      // - Since it has no subnav, we don't want that little border at
      //   the end hanging off, since it doesn't connect to anything. So
      //   apply the 'no-subnav' class to get rid of that.
      // - Also, the last item in the breadcrumb trail should not be a link
      //
      // example: /alums/community/aavc/board-members/aavc-president/

      // it could also be any top-level section with no subsections,
      // like Contact.

      $current_path =  get_base_path('path_to_current_doc_from_web_dir');
      $path_class = ' no-subnav';
      $item_is_linked = false;
    }

    // I'm not sure if these are being used.
    else if ( ( $children == false ) && ( $siblings == true ) ) {
      $current_path = dirname(get_base_path('path_to_current_doc_from_web_dir'),1);
    }
    else if ( $siblings == true ) {
      $current_path = dirname(get_base_path('path_to_current_doc_from_web_dir'),1);
    }
    else {
      $current_path = get_base_path('path_to_current_doc_from_web_dir');
      $path_class = ' no-subnav';
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

  $path = '/';

  $breadcrumb_markup = '';
  $crumb_level = 1;

  foreach ($path_in_pieces as &$item) {

    if($item !== '') {
      $path .= $item.'/';
      $item_info = get_page_vars($_SERVER['DOCUMENT_ROOT'].$path);

      $title = $item_info['page_title'];

      $item_link = $project_paths['final_url'].$path;

/*

  What I'm trying to do is make it so that the page you're on
  isn't linked to. Daria asked for this. However, this is
  proving trickier than I thought, and things that should be
  linked aren't. So I'm abandoning this approach for now.

      if ( $item_is_linked !== true ) {
        $item_link = '';
      }

*/



//      echo $crumb_level . ' - ' . $item_link . "<br>";


      // The current page in the breadcrumb should
      // not be linked. So if the item we're on here is the
      // current page, don't link it.

      // $breadcrumb_markup .= crumb_item($project_paths['final_url'].$path, $title, 'level-'.$crumb_level);

      $breadcrumb_markup .= crumb_item( $title, $item_link, 'level-'.$crumb_level );
    }
    $crumb_level++;

  }
  unset($item);

  $home_item = crumb_item('Home', 'https://www.vassar.edu', 'level-1');
  $breadcrumb_markup = $home_item.$breadcrumb_markup;

  return '<ol class="breadcrumb '.$path_class.' ">'.$breadcrumb_markup.'</ol>';
}

function interior_page_nav() {
  return '<div id="top" class="section main-site-nav">'.
  breadcrumb().
  local_nav().
  '</div>';
}

function get_value_if_exists(
  $key,
  $array,
  $boolean=false,
  $return_default=false
) {
  // $return_default is a default value to use if this is false.
    if ($boolean)
      $return_val = false;
    else if (!$boolean)
      $return_val = '';

    if (array_key_exists( $key, $array ) )
      return $array[$key];
    else if ($return_default != false)
      return $return_default;
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


// Both Alums and Admission have parts of their footers that
// are specific to that particular site. Those site-specific features
// are stored in files in that site's /inc folder. Typically, I
// get the file contents with file_get_contents(), put it into the
// $local_info array, and insert it wherever in the footer it's needed.
//
// There might be some instances, however - and I'm thinking of the
// footer highlight, that special box on the right - where I need to
// insert PHP values. In this case, the image in that footer module
// needs the value contained in $project_paths['public_path']. But since
// this is file_get_contents(), it doesn't render the PHP.
//
// Solution: in any of these local files, have [[TAGS]] where dynamic
// content will be inserted.
//
// Format: ['footer' => 'Footer content']
// results in [[FOOTER]] being replaced with 'Footer content'


function replace_tags_with_values( $tag_array, $content ) {
  $final_markup = $content;

  foreach ($tag_array as $tag => $value ) {
    $the_tag = '[[' . $tag . ']]';
    $final_markup = str_replace($the_tag, $value, $final_markup );
  }
  return $final_markup;
}


function local_info() {

  global $project_paths;

  // find the local directory
  // what site are we in?
  $current_site = what_site_are_we_on();

  // and what's the root path?
  $root_path_to_current_site = get_base_path() . '/' . $current_site;

  // so the file with all our local footer info
  // will be right here:
  $footer_info_path = $root_path_to_current_site . '/inc/_footer-info.php';

  // load the variables.
  include( $footer_info_path );

  if( !isset( $address) ) {
    $address = array(
      'address' => '161 College Avenue, Box 14, Poughkeepsie, New York 12603',
      'address_link' => 'https://www.google.com/maps/place/Alumnae+House/@41.6908124,-73.9020119,19.45z/data=!4m8!3m7!1s0x89dd3e5703778887:0xf94de484d4157d23!5m2!4m1!1i2!8m2!3d41.6909832!4d-73.9016665'
    );
  }

//  $local_info['address_markup'] = footer_address_link( $address );

  $local_info['address_markup'] = footer_address_link_v2( $address );

  //  now for the links

  $top_links_markup = '';

  foreach ($top_links as $label => $link ) {
    $top_links_markup .= <<<TMP
			<a href="$link" class="me-3 my-2">$label</a>
TMP;
  }
  $local_info['top_links_markup'] = $top_links_markup;


  //  load the local nav
  $local_info['local-nav'] = file_get_contents( $root_path_to_current_site . '/inc/_main-menu.php' );

  // load the local feature
  $local_footer_highlight = file_get_contents( $root_path_to_current_site . '/inc/_footer-highlight.php' );

  // and make sure the path makes it in

  $tag_array['LOCAL_PATH'] = $project_paths['public_path'];

  $local_footer_highlight = replace_tags_with_values( $tag_array, $local_footer_highlight );

  $local_info['local-footer-highlight'] = $local_footer_highlight;


  // now load optional modules
  $optional_module_path = $root_path_to_current_site . '/inc/_footer-mod-optional.php';
  if( file_exists( $optional_module_path ) ) {
    $local_info['local_footer_opt_module'] = file_get_contents( $optional_module_path );
  }
  else $local_info['local_footer_opt_module'] = '';

  return $local_info;
}



function what_site_are_we_on() {
  $the_path = get_base_path( 'path_to_current_doc_from_web_dir' );
  $the_path = ltrim( $the_path, "/" );
  $the_path = explode( '/',$the_path );
  return $the_path[0];
}

function footer_address_link( $address ) {
  return <<<TMP
  <a href="{$address['address_link']}"><i class="px-1 fa-solid fa-location-dot"></i> {$address['address']}</a>
TMP;
}


function footer_address_link_v2( $address ) {
  return <<<TMP
  <a class="social-icon-link" href="{$address['address_link']}">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
    {$address['address']}</a>
TMP;
}






// given an associative array of titles and URLs, this
// generates nav markup.
//
// Why, you ask? Because the Admission and Alums homepages
// have hardcoded site nav, and it'll make things a bit easier
// for us if they use the same code.

function make_nav_from_array( $nav_array, $site_root ) {
  $nav_markup = '<nav class="nav--top nav p-4 text-uppercase justify-content-center animation-zoom-in animate-when-content-appears animation-group">';

  foreach ($nav_array as $label => $url ) {
    $nav_markup .= '<a class="nav-link animation-item" href="/' . $site_root . '/'.$url.'">' . $label . '</a>';
  }
  $nav_markup .= '</nav>';
  return $nav_markup;
}





/*  RSS STUFF
    =========

    The following functions are specific to that Connect
    service that Alums uses. The basic mechanics, though,
    could be used to parse any RSS feed via SimplePie.

*/

function format_date( $date ) {
  $final_date = date_format( date_create( $date ), "g:i");
  $final_date .= ' ' . str_replace( 'm', '.m.', date_format( date_create( $date ), "a") );
  return $final_date;
}


function start_and_end_times($start_date, $end_date, $desc_format=false) {

  // Some events have a start and end date.
  // Some events have the same date, but different start and end times.
  // Some events have only a start date.
  //
  // Typically, it's the same date, just
  // different times of day.
  //
  // In the Connect feed, both values are provided. The ones
  // without an end date have an end date that is identical
  // to the start date.
  //
  // That makes this first part easy.


  // A note about desc_format: this is a bit of a hack.
  // Here's the problem: event descriptions in the feed have the dates
  // included in each item's description. That's kind of awkward, since
  // we already have them elsewhere. So I need to hide them in the event
  // description. In order to do that, I have to find them first. If
  // $desc_format is true, the date returned is in the format displayed
  // in the description, so I can easily find and replace it.
  //
  // However, there's some accessibility value to having them there, so
  // we're going to keep them - just hide them.


  if( $start_date != $end_date ) {
    // okay, so there's an end date

    // But this could mean two things:
    // - the event occurs on the same day, with a start and end time
    // - the event begins on one day and ends on another day.
    // I need to know which one this is.

    $start_day = date_format( date_create( $start_date ), "M d, Y");
    $end_day = date_format( date_create( $end_date ), "M d, Y");

    if( $start_day != $end_day ) {
      // it's a multi-day. So rather than just showing the
      // times (3:00 - 5:00), the dates need to be shown as well.

      $start_day = date_format( date_create( $start_date ), "M d, Y g:i");
      $start_day_meridiem = str_replace( 'm', '.m.', date_format( date_create( $start_date ), "a") );

      $end_day = date_format( date_create( $end_date ), "M d, Y g:i");
      $end_day_meridiem = str_replace( 'm', '.m.', date_format( date_create( $start_date ), "a") );

      if( $desc_format ) {
        $start_day_df = date_format( date_create( $start_date ), "n/j/Y g:i A");
        $end_day_df = date_format( date_create( $end_date ), "n/j/Y g:i A");
        return "<span>Date:</span> ".$start_day_df.' to '.$end_day_df;
      }
      else return $start_day . ' ' . $start_day_meridiem . ' to ' . $end_day . ' ' . $end_day_meridiem;
    }
    else {
      // it has to be a day with two different times.
      // I want just the times, not the dates, since the
      // format I want to use is 1:00 - 4:00

      $time_start = format_date( $start_date );
      $time_end = format_date( $end_date );

      if( $desc_format ) {
        $the_day_df =
        $start_time_df = date_format( date_create( $start_date ), "n/j/Y g:i A");
        $end_time_df = date_format( date_create( $end_date ), "g:i A");
        return "<span>Date:</span> ".$start_time_df.' to '.$end_time_df;
      }
      else return $time_start . '–' . $time_end;
    }
  }
  else {
    // no end date
    if( $desc_format ) {
        return "<span>Date:</span> ".date_format( date_create( $start_date ), "n/j/Y g:i A");
    }
    else return format_date( $start_date );
  }
}


// echo date_stuff('10/7/2022 11:00:00 AM', '12/18/2022 11:00:00 AM');


// require_once( getcwd().'/simplepie-master/autoloader.php' );

/*
  This function grabs a feed, plugs the data into the event-item
  template, and returns the whole series of marked-up items as
  an array.

  It's worth noting that most of these template functions return
  strings. In this case, I'm returning the feed as an array because
  there are circumstances (like on the homepage) where we don't want
  every item in the feed - we only want to display the most recent
  three items. Returning the feed as an array of items makes that
  a lot easier.
 */
function connect_events_feed( $feed_url ) {
  // We'll process this feed with all of the default options.
  $feed = new SimplePie();

  $final_feed = array();

  $feed->set_cache_location( $_SERVER['DOCUMENT_ROOT'].'/core/_rss_cache/' );
  // Set the feed to process.
  $feed->set_feed_url( $feed_url );

  /*
    I was having a problem earlier where the items were not appearing
    in the order that they did on the site. Figured it out with
    the following:

    foreach ( $feed_items as $item ) {
      echo $item->get_title().'<br>';
      echo $item->get_date('j F Y, g:i a').'<br><hr>';
    }

    So it looks like what's happening is that the pubDate specified
    for each item is different from EventDate. Someone
    in Alums is ordering the events in the order that they actually
    happen, not the order that they were added to the RSS feed.

    That order is reflected in the RSS feed, but when SimplePie gets
    ahold of it, it orders the items according to pubDate, disrupting
    the order on the site. So this next line turns sorting off.
   */
   $feed->enable_order_by_date(false);


  // Run SimplePie.
  $feed->init();

  // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
  $feed->handle_content_type();

// print_r($feed->get_items());

  $feed_items = $feed->get_items();


  foreach ( $feed_items as $item ) {
    $image = (array) $item->get_enclosure();
    $eventDate = $item->get_item_tags('', 'EventDate');
    $eventDate = $eventDate[0]['data'];

    $eventID = createSlug($item->get_title());

    $endEventDate = $item->get_item_tags('', 'EndEventDate');
    $endEventDate = $endEventDate[0]['data'];

    // These are the dates/times that are being displayed.
    $times = start_and_end_times( $eventDate, $endEventDate );


    // But we also need to get the dates and times as they're
    // displayed in the item description, so we can hide them.
    $time_to_hide = start_and_end_times( $eventDate, $endEventDate, true );


    // And speaking of the item description
    $item_desc = $item->get_description();
    $item_desc = str_replace($time_to_hide, '<span class="visually-hidden">'.$time_to_hide.'</span>', $item_desc);

    // now we need to get the month and day

    $event_month = date_format( date_create( $eventDate ), "M" );
    $event_day = date_format( date_create( $eventDate ), "d" );

    $final_feed[] = <<<TMP
    <div class="event" id="$eventID">
      <div class="calendar">
        <div class="event__month">$event_month</div>
        <div class="event__day">$event_day</div>
      </div>
      <div class="event__image-container"><img class="event__image" src="{$image['link']}"></div>
      <div class="event__content-container">
      <a class="stretched-link" href="{$item->get_permalink()}">  <h3 class="event__title">{$item->get_title()}</h3></a>

        <div class="event__time">
          <i class="fa-regular fa-clock"></i> <span>$times</span>
        </div>

        <div class="event__summary">
          <p>$item_desc</p>
        </div>
      </div>
    </div>
    TMP;
  }
  return $final_feed;
}

/*
  This function is where the feed items are actually displayed.
  It grabs a feed, runs it through connect_events_feed(), gets
  back the array of formatted items, and then displays however
  many you want. Default value is null for "all of them".
 */
function display_feed( $feed, $number_of_items = null ) {
  $feed = connect_events_feed( $feed );
  $the_feed = array_slice( $feed, 0, $number_of_items );
  foreach ( $the_feed as $item ) {
    echo $item;
  }
}
