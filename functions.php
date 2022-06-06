<style>
.active {
  font-weight: bold;
}
::selection {
  background: #afa; /* WebKit/Blink Browsers */
  color: #333;
}
::-moz-selection {
  background: #afa; /* Gecko Browsers */
  color: #333;
}

.pattern-site-nav summary:focus {
  border: none;
}
.pattern-site-nav details pre {
  white-space: pre-wrap;
      background: #2c2c2c;
      color: #afa;
      padding: 2rem;
      margin: 0 2rem 2rem;
      border-radius: 0.4rem;
      border: 1px solid #444;
          box-shadow: inset 0 0.1rem 0.2rem #111;
}
.pattern-site-nav nav {
  position: relative;
  z-index: 40;
}
.pattern-site-nav nav b,
.about-this-pattern {
  display: inline-block;
  padding: 1rem;
}
.about-this-pattern {
  position: absolute;
  top: 0;
  right: 0;
}
.pattern-site-nav nav ul {
  display: none;
  position: absolute;
  background: #fff;
  box-shadow: 0 1rem 1rem rgb(0 60 100 / 20%);
  padding: 0;
}
.pattern-site-nav nav ul li {
  list-style: none;
  display: block;
}
.pattern-site-nav nav ul li a {
  display: block;
  padding: 0.4rem 1rem;
  text-decoration: none;
}
.pattern-site-nav nav ul li a:hover {
  background: #0d6efd;
  color: #fff;
}
.pattern-site-nav nav:hover ul {
  display: block;
}
.pattern-menu {
  width: 20rem;
}

.pattern-site-nav {
  display: none;
  border-bottom: 1px solid #ddd;
}

.pattern-site-nav details[open] {
    background: #333;
    color: #eee;
}

</style>


<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');

include($project_paths['main_project_root'].'/core/template-parts/header.inc');
include($project_paths['main_project_root'].'/core/template-parts/footer.inc');


/* Partials */

include($project_paths['main_project_root'].'/core/partials/bg-image.inc');
include($project_paths['main_project_root'].'/core/partials/card-title.inc');


/* Atoms */

include($project_paths['main_project_root'].'/core/atoms/icon.inc');


/* Items */

include($project_paths['main_project_root'].'/core/items/dropdown.inc');
include($project_paths['main_project_root'].'/core/items/stat.inc');
include($project_paths['main_project_root'].'/core/items/iconItem.inc');
include($project_paths['main_project_root'].'/core/items/icon-statItem.inc');
include($project_paths['main_project_root'].'/core/items/cardWithText.inc');
include($project_paths['main_project_root'].'/core/items/imageCard.inc');


/* Sections */


include($project_paths['main_project_root'].'/core/partials/section-title.inc');


include($project_paths['main_project_root'].'/core/sections/universal_sections/siteHeader_video.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/pageMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/vassarMasthead.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/hamburgerNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/breadcrumbNavigation.inc');
include($project_paths['main_project_root'].'/core/sections/universal_sections/toplinksNavigation.inc');

include($project_paths['main_project_root'].'/core/sections/content_sections/buffer.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/wordByWord.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/columns.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/introContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fullBleedImageColumn.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/regularContent.inc');
include($project_paths['main_project_root'].'/core/sections/content_sections/fixedCenteredTitle.inc');




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

function pattern_nav() {
  global $project_paths;

  $directory = $project_paths['main_project_root'].'/examples';
  $scanned_directory = array_values(array_diff(scandir($directory), array('..', '.', '.DS_Store')));


  echo '<nav><b>Menu</b><ul class="pattern-menu">';

  foreach ($scanned_directory as &$page) {

//    echo $page . '--' . get_current_page_name() . '<br>';

    if($page == get_current_page_name()) {
      $active_class = 'active';
    }
    else $active_class = '';

    $page_contents = file_get_contents($directory.'/'.$page.'/index.php');
    $page_contents = explode(PHP_EOL, $page_contents);
    echo '<li><a class="'.$active_class.'" href="'.$project_paths['public_path'].'/examples/'.$page.'/index.php'.'">';

    $page_info = get_page_info_from_array($page_contents);
    echo $page_info['title'] . '</a></li>';
  }
  unset($item);

  echo '</ul></nav>';
}


function get_docs_link() {
  $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
  $page_contents = file_get_contents($rootDir . $_SERVER['PHP_SELF']);
  $page_contents = explode(PHP_EOL, $page_contents);
  $page_info = get_page_info_from_array($page_contents);
  $docs_link = clean_up_variable($page_info['docs']);
  return '<a class="about-this-pattern" href="'.$docs_link.'">About this pattern</a>';
}


?>



<div class="pattern-site-nav">
  <?php pattern_nav(); ?>

  <?php show_code(); ?>
  <?php echo get_docs_link(); ?>
</div>
