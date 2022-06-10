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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <link rel="stylesheet" href="/assets/icons/fontawesome-free-6.1.1-web/css/all.min.css">


  <link rel="stylesheet" href="/assets/css/style.css">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
TMP;

    return $template;

}