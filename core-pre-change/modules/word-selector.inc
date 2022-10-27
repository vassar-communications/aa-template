<?php

function word_cycler($word_selector_id, $list) {

    $speed = 2600;

/*    $list = '
    "New York",
    "Egypt",
    "Nigeria",
    "Maryland",
    "Puerto Rico",
    "Jamaica",
    "California",
    "Ecuador",
    "India",
    "Ohio",
    "Japan"
  ';
*/

    return <<<TMP
<style>
@keyframes word-fade {
  0% { opacity: 0; }
  5% { opacity: 0; }
  50% { opacity: 1; }
  95% { opacity: 0; }
  100% { opacity: 0; }
}

#$word_selector_id {
  animation-name: word-fade;
  animation-duration: {$speed}ms;
  animation-iteration-count: infinite;
}

</style>

<script>
$(document).ready(function () {

  var arr = [$list];

  // run through the array forever
  (function recurse(counter) {
      var color = arr[counter];
      $('#$word_selector_id').delay('$speed').html(color);
      // delete the value to save memory
      delete arr[counter];
      // add the value at the end of the array
      arr.push(color);

//      $('#$word_selector_id').toggleClass('bob1').toggleClass('bob2');

      // run it again for the next number
      setTimeout(function() {
          recurse(counter + 1);
      }, $speed);
  // start it for the first number.
  })(0);

});
</script>

TMP;

}
