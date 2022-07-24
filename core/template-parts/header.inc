<?php

/**
 * site_header()
 * Generates the header for a page: doctype, head, and opening body tag. Required on every page.
 * @param array $extras (optional) - Reserved for future usage
 * @return string - The header markup
 */
function site_header($extras=false) {

    global $project_paths;
    global $page_title;
    global $page_classes;


//  Here's where we're generating the OG stuff.
//  How that works:
//    figure out what page we're on
//    grab all of its variables
//    run them through socialcard() to generate OG markup
//    insert that markup into the template below


//  This is the page the header is being called on.

$vars = get_page_vars(getcwd());
print_r($vars['page_info']);

    $template = <<<TMP
<!doctype html>
<html class="no-js $page_classes" lang="">

<head>
  <meta charset="utf-8">
  <title>$page_title</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

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

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
TMP;

    return $template;

}
