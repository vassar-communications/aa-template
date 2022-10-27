<?php

/*
 * This is intended for scenarios like the "Within six months of graduating" section on https://vassar-staging.benaustin.com/admission/explore/outcomes/
 *
 * This is not a standalone section; it would be embedded in the content of a parent section.
 *
 * Naming: I'm using "split-words-container" since that class invokes the JS to divide and animate the words.
 */

function animated_statement(
  $statement,
  $classes=null,
  $p_classes=null,
  $extras=null
) {

    $css = get_extras_value( 'css', $extras, 'style="%s"' );

    return <<<TMP
<div class="split-words-container animated-statement $classes" $css>
  <div class="split-words-content">
    <p class="statement-text $p_classes">$statement</p>
  </div>
</div>
TMP;

}
