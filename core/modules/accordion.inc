<?php

function accordion($id, $classes=null) {
return <<<TMP
  <div class="accordion accordion-flush mb-4" id="$id">
TMP;
}

function end_accordion() {
  return '</div>';
}


function accordion_item($parent_id, $title, $classes=null, $p_classes=null) {

$item_id = createSlug($title);
$item_id = $parent_id.'-'.$item_id;
$collapse_token = $parent_id.'-collapse-'.$item_id;

return <<<TMP
<div class="accordion-item">
    <div class="accordion-header" id="$item_id">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#$collapse_token" aria-expanded="false" aria-controls="$collapse_token">
            $title
        </button>
    </div>
    <div id="$collapse_token" class="accordion-collapse collapse" aria-labelledby="$item_id" data-bs-parent="#$parent_id">
        <div class="accordion-body">
TMP;

}

function end_accordion_item() {
return <<<TMP
  </div>
</div>
</div>
TMP;

}
