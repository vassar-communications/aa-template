<?php

// I'm including all paths in one variable so they can be
// easily imported into functions if needed


// This is related to Morgan's scraper
// If we're on aa-devspace, pretend the root path is /admission
// not the site root

$project_paths = array(
  'main_project_root' => $_SERVER['DOCUMENT_ROOT'],
  'public_path' => ''
);

if ( strpos( getcwd(), 'aa-devspace.vassarspaces.net' ) ) {
  // on devspace, path needs to change
  $project_paths['public_path'] = '/admission';
  $project_paths['comment'] = 'devspace';
}
else {
  $project_paths['comment'] = 'not devspace';
}

//  These are just to make it easier to specify obvious placeholders
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$alumni_img_path = '/alumni/assets/img/';
$quickfacts_img_path = $admission_img_path.'quick-facts/';
