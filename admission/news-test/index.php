<style>

.card {
  padding: 4rem;
  background: #eee;
  margin-bottom: 2rem;
}
img {
  width: 100%;
}

</style>

<?php

// https://stackoverflow.com/questions/7684771/how-to-check-if-a-file-exists-from-a-url

function UR_exists($url){
 $headers=get_headers('https://www.vassar.edu/'.$url);
 return stripos($headers[0],"200 OK")?true:false;
}

function get_the_larger_image( $img_url ) {
  $img_url = str_replace( '/styles/news_square_small/public/', '/', $img_url );
  $img_url = str_replace( '-1x1.', '-16x9.', $img_url );

  if( !UR_exists($img_url) ) {
    // the 16x9 isn't there, but a larger 1x1 might be
    $img_url = str_replace( '-16x9.', '-1x1.', $img_url );
  }
  return $img_url;
}


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

$items = array();

for ($i = 0; $i < $nodes->length; $i++) {

  $el = $nodes->item($i);
  $inner_html = DOMinnerHTML($el);

  $article = new DOMDocument();
  $article->loadHTML( $inner_html );

  $title = $article->getElementsByTagName('h2');
  for ($j = 0; $j < $title->length; $j++) {
    $title_markup = $title->item($j);
    echo DOMinnerHTML($title_markup) . '<br>';
    echo $j;

    $items[$j]['title'] = DOMinnerHTML($title_markup);
  }

  $imageTags = $article->getElementsByTagName('img');
  $k = 0;
  foreach($imageTags as $tag) {
    echo '<strong>' . $k . '</strong>';
    echo $tag->getAttribute('src');
    $items[$k]['image'] = $tag->getAttribute('src');
    $k++;
  }
}

print_r( $items );

foreach($items as $news_item) {
  $title = $news_item['title'];
  $image = get_the_larger_image( $news_item['image'] );

  if( strpos( $image, '-1x1.' ))
    $classes = 'square-image';
  else $classes = '';

  echo <<<TMP
  <div class="card $classes">
    <h2>$title</h2>
    <img src="https://www.vassar.edu/$image" />

  </div>
  TMP;
}



?>
