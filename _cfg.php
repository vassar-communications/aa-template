<?php

// I'm including all paths in one variable so they can be
// easily imported into functions if needed
$project_paths = array(
  'main_project_root' => $_SERVER['DOCUMENT_ROOT'],
  'public_path' => ''
);

//  These are just to make it easier to specify obvious placeholders
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$quickfacts_img_path = $admission_img_path.'quick-facts/';
