<?php


//  Provided a path to a page (/admission/apply), this returns all the
//  variables for that page: title, classes, etc
function get_page_vars($full_filepath) {

/*
  //  HACK - FIX THIS LATER
  if($full_filepath == '/') {
    $page_vars['page_title'] = 'Home';
    $page_vars['page_link'] = '/';
    return $page_vars;
  }
  if($full_filepath == '/admission/') {
    $page_vars['page_title'] = 'Admission';
    $page_vars['page_link'] = '/admission/';
    return $page_vars;
  }
*/

  global $project_paths;

//  $full_filepath = $project_paths['main_project_root'].$short_filepath.'/index.php';
  $page_contents = file_get_contents($full_filepath.'/index.php');

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
  $page_vars['page_link'] = str_replace($_SERVER['DOCUMENT_ROOT'], '', $full_filepath);

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
      $current_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', getcwd());
    }
    else {
      $current_path = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(getcwd(), 1));
    }

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
    $item_info = get_page_vars($_SERVER['DOCUMENT_ROOT'].$path);
    $title = $item_info['page_title'];

    $breadcrumb_markup .= crumb_item($path, $title);
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
