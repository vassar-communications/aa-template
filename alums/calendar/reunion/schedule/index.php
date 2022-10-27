<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"General Reunion Class Schedule",
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




<?php echo sec_regularContent(); ?>

<p class="intro-text">Be sure to check back for more specific details coming soon, but you can expect…</p>

<div class="schedule">
  <div class="schedule-item">
    <div class="schedule-col-title">
      <h3 class="schedule-item-title">Friday, June 2</h3>
    </div>
    <div class="schedule-col-agenda">
      <ul>
        <li>Alum College Lectures</li>
        <li>Vassar Farm Tours</li>
        <li>Faculty Reception</li>
        <li>All Class Picnic Dinner</li>
        <li>The Mug</li>
        <li>Fireworks!</li>
      </ul>
    </div>
  </div>
  <div class="schedule-item">
    <div class="schedule-col-title">
      <h3 class="schedule-item-title">Saturday, June 3</h3>
    </div>
    <div class="schedule-col-agenda">
      <ul>
        <li>AAVC Spirit of Vassar Award Ceremony</li>
        <li>Hour with the President</li>
        <li>Parade</li>
        <li>Celebrate Vassar</li>
        <li>Alum College Lectures</li>
        <li>Family Fun on the Quad Lawn</li>
        <li>Affinity Receptions and Donor Loyalty Reception</li>
        <li>Tours of the Loeb and Class Trees</li>
        <li>Private Class Dinners</li>
        <li>All Class Dance Party</li>
      </ul>
    </div>
  </div>
  <div class="schedule-item">
    <div class="schedule-col-title">
      <h3 class="schedule-item-title">Sunday, June 4</h3>
    </div>
    <div class="schedule-col-agenda">
      <ul>
        <li>Service of Remembrance</li>
      </ul>
    </div>
  </div>
</div>

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
