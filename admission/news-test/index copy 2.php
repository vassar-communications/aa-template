<?php

// https://stackoverflow.com/questions/2087103/how-to-get-innerhtml-of-domnode
function DOMinnerHTML(DOMNode $element) {
    $innerHTML = "";
    $children  = $element->childNodes;

    foreach ($children as $child) {
      $innerHTML .= $element->ownerDocument->saveHTML($child);
    }
    return $innerHTML;
}

$html = file_get_contents('http://www.vassar.edu/');

$dom = new DOMDocument();

// The Vassar homepage markup isn't valid, so if we
// don't suppress warnings, we get a sea of errors
libxml_use_internal_errors(true);

$dom->preserveWhiteSpace = false;
$dom->loadHTML($html);

libxml_clear_errors();

$finder = new DomXPath($dom);
$classname="view-display-id-top_5_news_block";
$nodes = $finder->query("//*[contains(@class, '$classname')]");

for ($i = 0; $i < $nodes->length; $i++) {
  $el = $nodes->item($i);
  $inner_html = DOMinnerHTML($el);

  $article = new DOMDocument();
  $article->loadHTML( $inner_html );

  $title = $article->getElementsByTagName('h2');
  for ($i = 0; $i < $title->length; $i++) {
    $title_markup = $title->item($i);
    echo DOMinnerHTML($title_markup) . '<br>';
  }
}

$imageTags = $nodes->getElementsByTagName('img');

foreach($imageTags as $tag) {
    echo $tag->getAttribute('src');
}



 ?>
