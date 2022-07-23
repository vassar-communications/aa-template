<?php


//  Provided a path to a page (/admission/apply), this returns all the
//  variables for that page: title, classes, etc
function get_page_vars($short_filepath) {
  global $project_paths;

  $full_filepath = $project_paths['main_project_root'].$short_filepath.'/index.php';
  $page_contents = file_get_contents($full_filepath);

  // so uh, yeah, this gets ugly.
  $page_contents = explode('/*  PAGE INFO ============ */', $page_contents);
  $page_contents = explode('/*  ---------------------- */', $page_contents[1]);

  eval($page_contents[0]);

  // this might not be the best way of doing it, but
  // I need these vars and I'm not sure how else to get
  // them given our setup and process. Maybe explode the
  // page info block and turn that into an associative array?

  // Probably a better approach would have been Jekyll-style
  // front matter. This isn't user-facing code, though,
  // so I'm a little more inclined towards methods I'd otherwise avoid

  $page_vars['page_title'] = $page_title;
  $page_vars['page_link'] = $short_filepath;
  return $page_vars;
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

  // if a path isn't specified, figure out where we are
  if(!$nav_file_path) {

   // we don't want the directory we're in, we want the directory
   // above that; the main parent section, like Apply or Visit.
   // local_nav() needs a path like '/admission/apply/'. To get that:
   // 1. get the full path to the current working directory
   // 2. strip out the root
   // 3. use dirname to grab the parent directory

   // And here we are
   $nav_file_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(getcwd(), 1));
  }

  //  Next: we need to load the file that lists all the other
  //  subsections in this parent section.
  $nav_file_path_full = $project_paths['main_project_root'].$nav_file_path.'/_nav.txt';

  // load the file
  $local_nav_file = file_get_contents($nav_file_path_full);

  // iterate over each line
  $local_pages = explode(PHP_EOL, $local_nav_file);
//  print_r($local_pages);

  $nav_markup = '';

  foreach ($local_pages as &$page) {
    // construct the path to the page
    $path = $project_paths['main_project_root'].$nav_file_path.'/'.$page;
    $here = getcwd();

    // so does the path match the page we're already on?
    if( $path == $here ) $class = 'current-item';
    else $class = null;

    $page = trim($page);

    $page_vars = get_page_vars('/admission/apply/'.$page);
    $page_title = $page_vars['page_title'];
    $item_link = $page_vars['page_link'];

    $nav_markup .= nav_item($item_link, $page_title, $class);


  }
  unset($page);

  return '<nav class="local-section-nav"><ul class="nav">
'.$nav_markup.'</ul></nav>';
}


function breadcrumb() {

  // Well, here's our path.
  $current_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(getcwd(), 1));

//  return $current_path;

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

  foreach ($path_in_pieces as &$item) {
    $path .= $item.'/';
    $item_info = get_page_vars($path);
    $title = $item_info['page_title'];

    $breadcrumb_markup .= crumb_item($path, $title);
  }
  unset($item);

  return $breadcrumb_markup.'</ol>';
}
