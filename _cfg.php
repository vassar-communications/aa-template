<?php

// I'm including all paths in one variable so they can be
// easily imported into functions if needed




/*

Problem: I based a lot of this code on the assumption that getcwd() and $_SERVER['DOCUMENT_ROOT'] return the same thing as the root of the server. That, as it turns out, was presumptuous.

That's how it works on my local environment, but on the remote Ben Austin server, getcwd() returned a path that was a lot deeper than $_SERVER['DOCUMENT_ROOT']. So trying to get the base of the web directory by stripping DOCUMENT_ROOT from getcwd() via str_replace meant that the final path still had some weird sub-root stuff in it.

Final decision: on servers where getcwd() and $_SERVER['DOCUMENT_ROOT'] return different root paths, hardcode the root path and use that in place of $_SERVER['DOCUMENT_ROOT'].

*/
function get_base_path($type='document_root') {

  //  which server are we on?

  if( strpos(getcwd(), 'vassar-staging.benaustin.com') ) {
    $root_path = '/nfs/c08/h03/mnt/117884/domains/vassar-staging.benaustin.com/html';
  }

  elseif( strpos(getcwd(), 'vassar-dev.benaustin.com') ) {
      $root_path = '/nfs/c08/h03/mnt/117884/domains/vassar-dev.benaustin.com/html';
  }

  else {
    $root_path = $_SERVER['DOCUMENT_ROOT'];
  }

  if( $type == 'document_root' ) {
    return $root_path;
  }
  if( $type == 'path_to_current_doc_from_web_dir' ) {
    $path = str_replace($root_path, '', getcwd());
    return $path;
  }
}


// This is related to Morgan's scraper
// If we're on aa-devspace, pretend the root path is /admission
// not the site root

// add https://www.vassar.edu/ to final_url when ready to launch

$project_paths = array(
  'main_project_root' => $_SERVER['DOCUMENT_ROOT'],
  'public_path' => '',
  'final_url' => '',
);

$current_site = ltrim( get_base_path( 'path_to_current_doc_from_web_dir' ), '/');
$current_site = explode( '/', $current_site );
$current_site = $current_site[0];



if ( strpos( getcwd(), 'aa-staging.vassarspaces.net' ) ) {
  // on staging, path needs to change
//  $project_paths['public_path'] = 'https://www.vassar.edu/' . $current_site;
  $project_paths['public_path'] = '/' . $current_site; // '/admission/' . $current_site;
  $project_paths['comment'] = 'staging';
//  $project_paths['final_url'] = 'https://www.vassar.edu';

  $project_paths['final_url'] = 'https://aa-staging.vassarspaces.net';


}
else {
  $project_paths['comment'] = 'not devspace';
  $project_paths['final_url'] = '';
}

//  These are just to make it easier to specify obvious placeholders
$placeholder_img_banner = '/assets/images/placeholders/placeholder-banner.png';
$placeholder_img_square = '/assets/images/placeholders/placeholder-square.png';
$placeholder_img_vertical = '/assets/images/placeholders/placeholder-portrait.jpg';
$placeholder_img_wide = '/assets/images/placeholders/placeholder-wide.jpg';

$admission_img_path = '/admission/assets/images/';
$alums_img_path = '/alums/assets/img/';
$alums_img_path = '/alums/assets/img/';


$quickfacts_img_path = $admission_img_path.'quick-facts/';




$news_img_path = '/admission/assets/images/news/';
