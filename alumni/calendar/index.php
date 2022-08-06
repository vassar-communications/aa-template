<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Calendar",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */

$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<!--

Make sure functions convert straight quotes to curly

-->

<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Calendar</b>',
    '727857392?h=9586cb06fa',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>

<?php echo interior_page_nav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo masthead_interiorPage(
    'You’re Invited',
    'Vassar alumni always have a way to stay connected. Join us for college and program reunions, special alumni events, expertly planned travel programs, and more.',
    $alumni_img_path.'alumni-calendar/Reunion_Saturday_190608_CS-V815-319.jpg
  ',
  null,
  null,
  ['img_alt_text' => 'Students researching plants in a lab']
);
?>

<?php echo sec_regularContent(
  'Get Involved',
  'theme-burgundy contains-carousel'
); ?>

<div class="invitation-style-carousel">

  <?php echo invitation_style_card(
    'Reunion 2023',
    'June 2–4',
      '',
      ''
  ); ?>
  <p>Believe it or not, we are getting ready to kick off the planning and fundraising for Reunion 2023! We will be welcoming classes with graduation years ending in 3 and 8, along with the Class of 2016, from June 2–4, 2023. The 50th Reunion Class of 1973 is invited to arrive a day earlier on June 1. 50th Reunion class survey coming soon. Check back here for updates as the planning gets underway!</p>
  <?php echo end_invitation_style_card(); ?>



  <?php echo invitation_style_card(
    'Future Reunions',
    '',
      '',
      'white-border white-container'
  ); ?>
  <p class="intro-text text-center">May 31–June 2, 2024<br />
June 6–8, 2025</p>

<p>If you have any questions, please contact us at <a href="mailto:reunion@vassar.edu">reunion@vassar.edu</a> or <?php phone_number('800-443-8196'); ?> (choose option 5).</p>
  <?php echo end_invitation_style_card(); ?>




  <?php echo invitation_style_card(
    'Families Weekend',
    'September 30–October 2',
    [
      'img_url' => 'https://www.vassar.edu/sites/default/files/2021-10/0099-21-10-kr-fw-welcome-vassar-0010.jpg',
      'img_alt_text' => 'alt text'
    ],
      ''
  ); ?>
    <p>Believe it or not, we are getting ready to kick off the planning and fundraising for Reunion 2023!</p>

<?php echo cta_link(
  'https://www.vassar.edu/families/events/weekend',
  'More Details',
  'burgundy-cta-link'
); ?>


  <?php echo end_invitation_style_card(); ?>






  <?php /* echo invitation_style_card(
    'Reunion 2023',
    'June 2–4',
    null,
    'big-text white-border theme-cream'
  ); ?>
  <p>Believe it or not, we are getting ready to kick off the planning and fundraising for Reunion 2023!</p>
  <?php echo end_invitation_style_card(); */ ?>

</div>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_wideContent(
    'Upcoming Events',
    null,
    'theme-extralightgray'
); ?>


<?php echo event_listing(); ?>
  <?php echo event_item(
    'Vassar Club of Ohio Visits the Columbus Zoo',
    'Aug',
    '03',
    '11:00 a.m.',
    'The Vassar Club of Ohio is offering three opportunities to visit the Columbus Zoo this fall. On each date, the club will provide admission for 10 guests. Guests will enter together, then are free to tour the Zoo on their own.',
    'https://connect.vassar.edu/s/1654/images/content_images/columbuszooentrance_SQUARE_637883798332743658.jpg'
  ); ?>

  <?php echo event_item(
    'Vassar Club of San Diego Midsummer Happy Hour',
    'Aug',
    '03',
    '5:30 p.m. to 7:30 p.m.',
    'A fun evening of drinks and hors d’oeuvres and provocative conversation with San Diego-based Vassar alums at the exclusive University Club atop Symphony Towers in downtown San Diego.',
    'https://connect.vassar.edu/s/1654/images/content_images/university_club_SQUARE_637927101169043313.jpg'
  ); ?>


  <?php echo event_item(
    'Vassar Club of Chicago Summer Happy Hour!',
    'Aug',
    '11',
    '6:00 p.m.',
    'Join us for a summer happy hour and get to know fellow Chicago-area Vassar alums over a drink!',
    'https://connect.vassar.edu/s/1654/images/content_images/vcchicagosheffieldscoverphotogardensquare_637949414639185294.jpg'
  ); ?>

  <?php echo event_item(
    'VCNY Second Annual Afternoon Picnic with Vassar Friends Old and New!',
    'Aug',
    '27',
    '12:00 p.m.',
    'Mark your calendars and break out the picnic blankets! After a successful launch last year, we are back in Fort Greene for our second annual VCNY picnic!',
    'https://connect.vassar.edu/s/1654/images/content_images/fort_greene_park_SQUARE_637944407651509591.jpg'
  ); ?>

  <?php echo event_item(
    'VC Colorado Annual Barbecue for Alumni and Current Students',
    'Aug',
    '28',
    '5:00 p.m.',
    'The annual barbecue for alumni and current students is back! Please join us August 28th at 5pm MDT. The host will supply the main course. Please bring a salad, side dish or dessert. The whole family is welcome.',
    'https://connect.vassar.edu/s/1654/images/content_images/bbq_picsquare_637946886154821482.jpg'
  ); ?>

  <?php echo event_item(
    'VCNY and Bowery Boys Walks Tour of Brooklyn Heights and DUMBO',
    'Sep',
    '24',
    '2:00 p.m.–4:00 p.m.',
    'Join the Vassar Club of New York as we once again team up with the Bowery Boys Walks for a historical walking tour of the neighborhoods of Brooklyn Heights and DUMBO.',
    'https://connect.vassar.edu/s/1654/images/content_images/brooklyn__the_dumbo_SQUARE_637937496981328624.jpg'
  ); ?>

<?php echo end_event_listing(); ?>



<?php echo end_sec_wideContent(); ?>



<?php echo sec_fullBleedImageColumn(
  'Reunions',
  'https://www.vassar.edu/sites/default/files/2021-06/20-reunion-1906-bl-vassar-4706-cropped.jpg',
  ''
); ?>

<p>Vassar and the Alumnae/i Association (AAVC) are thrilled about the return to in-person Reunions and can’t wait to welcome you and your classmates back to campus.</p>

<?php echo cta_link(
    '/reunion/',
    'Learn more'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo site_footeralumni(); ?>
