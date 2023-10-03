<?php
/* */
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"50th Reunion Preview of Class Schedule",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/reunion/Vassar_Reunion_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_regularContent(
  null,
  'pt-0'
); ?>

<p class="intro-text">50th Reunion Schedule Preview for 1974</p>
<p>Check back for updates in January 2024</p>
<p>Use one of these links to go directly to the activities for that day:</p>
<ul class="linked-list">
  <li><a href="#thursday">Thursday, May 30</a></li>
  <li><a href="#friday">Friday, May 31</a></li>
  <li><a href="#saturday">Saturday, June 1</a></li>
  <li><a href="#sunday">Sunday, June 2</a></li>
</ul>


  <h3 id="thursday" class="schedule-item__heading">Thursday, May 30</h3>

  <?php echo schedule_item_dropdown(
    '4 p.m.–11 p.m.',
    'Davison House opens for arrival and dorm check in',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '6 p.m.–9:30 p.m.',
    'Casual Buffet Dinner',
    'Davison Tent',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '9:30 p.m.–11:30 p.m.',
    '1974 Hospitality lounge',
    'Davison multipurpose room',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="friday" class="schedule-item__heading">Friday, May 31</h3>

  <?php echo schedule_item_dropdown(
    '10:30 a.m.',
    'Class-dedicated Tour of the brand new Inn and Institute',
    'Meet outside of Davison',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '12 p.m.',
    'Lunch and class activity',
    'Alumnae House',
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '2 p.m.',
    'College-sponsored Lectures and Tours',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '3:30 p.m.',
    'College-sponsored Lectures and Tours',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '6:30 p.m.',
    'Reception',
    'Bridge Building Terrace'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '7 p.m.',
    'Dinner',
    'Bridge Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    'Fireworks over Sunset Lake',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9:30 p.m.',
    '“The Group”',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '9:30 p.m.–11:30 p.m.',
    '1974 Hospitality lounge',
    'Davison multipurpose room'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="saturday" class="schedule-item__heading">Saturday, June 1</h3>


  <?php echo schedule_item_dropdown(
    '9:30 a.m.',
    'Hour with the President',
    'The Chapel'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:30 a.m.',
    'Parade of Classes Line-Up'
  ); ?>
  <p>Line up for Parade of Classes (line starts with 1954 at the chapel along the path and road, ending with 2019). Look for your class banner along the parade route. Golf carts will be available.</p>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '10:45 a.m.',
    'Parade of Classes',
    null,
    null,
    ['noContent' => true]
  ); ?>


  <?php echo schedule_item_dropdown(
    '11:30 a.m.',
    'Celebrate Vassar',
    'Noyes Circle Tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '12:30 p.m.',
    'Class Memorial Service',
    'Class Tree (located in front of Swift Hall)'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '1 p.m.',
    'Lunch/Class Meeting',
    'Frances Fergusson Quadrangle Tent (sunken lawn)'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <?php echo schedule_item_dropdown(
    '2:30 p.m.',
    'College-sponsored Lectures and Tours',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '4 p.m.',
    'College-sponsored Lectures and Tours',
    null,
    null,
    ['noContent' => true]
  ); ?>

  <?php echo schedule_item_dropdown(
    '6:45 p.m.',
    'Reception',
    'Rose Parlor, Main Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '7:15 p.m.',
    'Dinner',
    'Villard Room, Main Building'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.',
    '1974 Hospitality lounge',
    'Davison multipurpose room'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>

  <?php echo schedule_item_dropdown(
    '10 p.m.',
    'All-class Dance Party',
    'Noyes Circle Tent'
  ); ?>
  <?php echo end_schedule_item_dropdown(); ?>


  <h3 id="sunday" class="schedule-item__heading">Sunday, June 2</h3>

    <?php echo schedule_item_dropdown(
      '10 a.m.',
      'Service of Remembrance',
      'The Chapel'
    ); ?>
    <?php echo end_schedule_item_dropdown(); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
