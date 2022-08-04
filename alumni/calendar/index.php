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
    'Join the Fun',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    $admission_img_path.'apply/0196-19-11-kwe-greenhouse-vassar-vb-6440.jpg
',
null,
null,
['img_alt_text' => 'Students researching plants in a lab']
);
?>


<?php echo sec_regularContent(); ?>

carousel goes here

<?php echo end_sec_regularContent(); ?>


<?php echo sec_wideContent(
    'Calendar',
    '<p class="intro-text">intro text goes here</p>',
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


<?php echo end_event_listing(); ?>

<?php echo end_sec_wideContent(); ?>


<?php echo sec_hasColumns(
  'And more',
    '2',
    null,
    'theme-charcoal mw-inner-2'
); ?>

  <?php echo item_col(); ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Secondary event</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Secondary event</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Secondary event</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Secondary event</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  <?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>

<?php echo site_footeralumni(); ?>
