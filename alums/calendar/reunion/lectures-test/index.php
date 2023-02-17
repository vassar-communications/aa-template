<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Lectures",
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

<p class="intro-text">[intro content goes here]</p>

<h3 class="schedule-item__heading">Friday, June 2</h3>

<div class="presentation-item">
  <h3>Ageless Aging: Resilience, Cognitive Health and Mindfulness</h3>
  <p>Join us for an interactive experience that will teach you strategies for effective coping, the benefits of mindfulness for your cognitive health, and how to practice mindfulness in minutes in real life.</p>
  <div class="pres-members">
    <h4>Panelists <!-- this title should be configurable: they might not always be panelists. I think the title is important because it provides context, especially for screen readers, of what the subsequent content is --></h4>
    <div class="pres-member">
      <div class="pres-member__image">
        <img src="https://www.vassar.edu/sites/default/files/2021-06/mitugade_72.jpg" alt="" />
      </div>
      <div class="pres-member__info">
          <h5 class="pres-member__name">
            <a href="https://www.vassar.edu/faculty/mitugade">Michele Tugade ’95</a></h5>
          <p class="pres-member__title">William R. Kenan, Jr. Endowed Chair and Professor of Psychological Science at Vassar College</p>
      </div>
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
