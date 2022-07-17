<?php

/**
 * relatedTopics()
 * Generates Related Topics Section
 *
 * @see NOCODEPEN
 * @link NODOCS
 * @param  array $extras (optional) - Reserved for future use
 * @return string $template - The rendered HTML markup
 */
function relatedTopics($section_classes=null,$extras = false) {
    $template = <<<TMP


  <div class="section theme-burgundy section-with-columns columns-3 relatedtopics">
  
  <h2 class="section-title">Related Topics</h2>
    <div class="section-content ">
    
    


TMP;

    return $template;
}

function end_sec_relatedTopics($extras = false) {
    return ' </div></div>
';
}
