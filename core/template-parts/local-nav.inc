<style>
.yes {
  background: #f00;
}
</style>
<?php



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


function nav_item($link, $title, $classes='') {
  $nav_item_tmp = <<<TMP
<li class="nav-item $classes"><a class="nav-link" href="$link">$title</a></li>
TMP;
    return $nav_item_tmp;
}


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
    if( $path == $here ) $class = 'yes';
    else $class = null;

    $page = trim($page);

    $page_vars = get_page_vars('/admission/apply/'.$page);
    $page_title = $page_vars['page_title'];
    $item_link = $page_vars['page_link'];

    $nav_markup .= nav_item($item_link, $page_title, $class);


  }
  unset($item);

  return '<nav class="section local-nav"><ul class="nav nav-pills pb-3">
'.$nav_markup.'</ul></nav>';
}
