<style>

img {
  width: 100%;
}
.img-box {
  width: 30%;
}
.appears-on {
  width: 20%;
}
</style>

<?php

$file = file_get_contents(getcwd() . '/alt.csv');

$lines = explode(PHP_EOL, $file);

$final_markup = '<table><tr><td class="img-box">';

foreach ($lines as &$line) {



  $line = explode(',', $line);
  if($line[0] == '') {
    $final_markup .= '<a href="https://vassar-staging.benaustin.com'.$line[1].'">'.$line[1].'</a><br>';
  }
  else {
    // end image item, start new image item
    $final_markup .= '</td><td>ALT TEXT GOES HERE</td></tr><tr><td class="img-box"><img src="https://vassar-staging.benaustin.com/'.$line[0].'"></td><td class="appears-on">[] <a href="https://vassar-staging.benaustin.com'.$line[1].'">'.$line[1].'</a><br>';
  }

}
unset($item);

$final_markup .= '</table>';

echo $final_markup;

// print_r($lines);

?>
