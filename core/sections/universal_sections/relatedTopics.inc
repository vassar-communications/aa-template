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
<div class="section theme-cream pb-1">
    <div class="section-content mw-100">
        <h3>Related Topics</h3>
    </div>
</div>

<div class="section section-with-columns columns-3 theme-cream pt-1 $section_classes">
<div class="section-content text-left theme-white">


TMP;

    return $template;
}

function end_sec_relatedTopics($extras = false) {
    return ' </div></div>
';
}
