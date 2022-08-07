<?php

function contact_card(
    $name,
    $title,
    $contact_info,
    $extras=null
) {

  $heading = get_extras_value('title_level', $extras, 'h%s');

  if( $heading == null )
    $heading = 'h4';

  $icon_format = '<i class="fa fa-%s me-1"></i>';
  $email_format = '<a href="mailto:%1$s">%1$s</a>';


$final_contact_list_markup = '';

  // run through contact info and generate list
  foreach ($contact_info as $key => $value) {

    if( $value !== '') {

          if( $key == 'phone') {
            $icon = 'phone';
            $phone_markup = phone_number($value);
            $icon_markup = sprintf($icon_format, $icon);

      $final_contact_list_markup .= <<<TMP
      <li>$icon_markup $phone_markup</li>
      TMP;

          }

          if( $key == 'email') {
            $icon = 'envelope';
            $icon_markup = sprintf($icon_format, $icon);
            $email_link = sprintf($email_format, $value);

      $final_contact_list_markup .= <<<TMP
      <li>$icon_markup $email_link</li>
      TMP;
          }

      } // end if
      else $final_contact_list_markup .= '';
  }

    return <<<TMP
    <div class="staff-contact">
        <$heading class="contact-name">$name</$heading>
        <p class="contact-title">$title</p>
        <ul class="clean-list-with-borders contact-links">
          $final_contact_list_markup
        </ul>

TMP;

}

function end_contact_card() {
  return '</div>';
}
