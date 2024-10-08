<?php

// $page_info = get_page_vars(getcwd());


function how_deep_are_we() {
  $classes = '';
  $the_path = ltrim( get_base_path( 'path_to_current_doc_from_web_dir' ), '/'
);
  $the_levels = count( explode( '/', $the_path ) );
  if ( $the_levels > 3 )
    $classes .= ' deep-page';
  $classes .= ' levels-down-' . $the_levels;

  return $classes;
}

/**
 * site_header()
 * Generates the header for a page: doctype, head, and opening body tag. Required on every page.
 * @param array $extras (optional) - Reserved for future usage
 * @return string - The header markup
 */


function site_header($extras=false) {

  global $project_paths;
  global $page_info;

$where_it_is = $project_paths['comment'];

$comment = <<<TMP
<!-- Site is $where_it_is -->
TMP;




$page_title = $page_info['page_title'];

$page_title_path = make_page_title();  //get_value_if_exists('page_title', $page_info);

$page_classes = get_value_if_exists('page_classes', $page_info);
$feature_image = get_value_if_exists('feature_image', $page_info);
$page_description = get_value_if_exists('page_description', $page_info);

$page_classes .= how_deep_are_we();

$page_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//  $social_card_data = [
//    'image' => $page_info['feature_image']
//  ];


//  Here's where we're generating the OG stuff.
//  How that works:
//    figure out what page we're on
//    grab all of its variables
//    run them through socialcard() to generate OG markup
//    insert that markup into the template below


//  This is the page the header is being called on.

// $vars = get_page_vars(getcwd());


    $alerts_markup = file_get_contents( $project_paths['main_project_root'] . '/core/template-parts/alerts.inc' );


    $template = <<<TMP
<!doctype html>
<html class="no-js $page_classes" lang="en">

<head>
  <meta charset="utf-8">
  <title>$page_title_path</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

$alerts_markup


<!--
  <meta property="og:title" content="$page_title">
  <meta property="twitter:title" content="$page_title">
  <meta name="twitter:site" content="@vassar">
  <meta name="twitter:creator" content="@vassar">
  <meta property="og:type" content="">
  <meta property="og:description" content="$page_description">
  <meta property="twitter:description" content="$page_description">
  <meta property="og:url" content="https://www.vassar.edu/">
<meta name="twitter:card" content="summary_large_image" />
  <meta property="og:image" content="https://www.vassar.edu/">
<meta property="twitter:image" content="https://www.vassar.edu/">
-->


$comment

  <link rel="icon" href="{$project_paths['public_path']}/favicon.ico" sizes="any">

  <link rel="stylesheet" href="https://use.typekit.net/cga8whe.css">

  <!-- analytics -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0];var j=d.createElement(s);var dl=l!='dataLayer'?'&l='+l:'';j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+'';j.async=true;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WCS4M7');</script>

  <noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCS4M7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- end analytics -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://player.vimeo.com/api/player.js"></script>

  <script src="{$project_paths['public_path']}/assets/js/libraries/flickity.js"></script>

  <script src="{$project_paths['public_path']}/assets/js/libraries/flickity-fade.js"></script>


  <link rel="stylesheet" href="{$project_paths['public_path']}/assets/icons/fontawesome-free-6.1.1-web/css/all.min.css">


  <link rel="stylesheet" href="{$project_paths['public_path']}/assets/css/style.css">

  <meta name="theme-color" content="#951829">
</head>

<body>
TMP;

    return $template;

}
