<?php

function presentation_item(
  $title,
  $location,
  $time,
  $classes='',
  $title_tag_level = '4',
  $extras=null
) {


  $id_modifier = get_extras_value('id_modifier', $extras);
  $alternate_id = get_extras_value('alternate_id', $extras);

  if( $alternate_id ) $item_id = $alternate_id;
  else $item_id = createSlug($title);

return <<<TMP
<div class="presentation-item $classes" id="$item_id$id_modifier">
<h$title_tag_level class="presentation-title">$title</h$title_tag_level>

  <div class="presentation-meta-container">
    <div class="event__time">
      <i class="fa-regular fa-clock"></i> <span class="presentation-meta-item">$time</span>
    </div>
    <p class="presentation-location presentation-meta-item">$location</p>
  </div>
TMP;

}

function end_presentation_item() {
  return '</div>';
}


function presentation_content($classes='') {
  return '<div class="presentation-content ' . $classes . '">';
}

function end_presentation_content() {
  return '</div>';
}



function presentation_member_list(
  $title='Panelists',
  $classes='',
  $title_tag_level='5'
) {

return <<<TMP
<div class="pres-members $classes">
  <h$title_tag_level class="presentation-subheading">$title</h$title_tag_level>
  <div class="pres-member-list">
TMP;
}

function end_presentation_member_list() {
  return '</div></div>';
}


function presentation_member(
  $name,
  $bio_link,
  $title,
  $image='',
  $image_alt='',
  $title_tag_level='6'
) {
  $image_markup = '<span></span>';
  if($image) {
    $classes = 'has-image';
    $image_markup = '<div class="pres-member__image"><img src="'.$image.'" alt="'.$image_alt.'" /></div>';
  }
  else {
    $classes = 'no-image';
  }

return <<<TMP
<div class="pres-member $classes">
  $image_markup
  <div class="pres-member__info">
      <h$title_tag_level class="pres-member__name">
        <a href="$bio_link">$name</a></h$title_tag_level>
      <p class="pres-member__title">$title</p>
  </div>
</div>
TMP;

}
