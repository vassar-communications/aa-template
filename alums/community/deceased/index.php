<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Deceased Classmates",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/alum-groups/Vassar_Reunion_2206_CS-417.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Class of 1972 Vassar Reunion Event']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    '',
    'theme-white pt-0',
    ''
); ?>

<p>This list contains people that Vassar has verified as being deceased. If you wish to report that a classmate is deceased, please <a href="mailto:advancement@vassar.edu">email us at advancement@vassar.edu</a>, and include the person’s full name, class year, date of death, an obituary or online obituary link, and any information about next of kin.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    '',
    'theme-white pt-0',
    'mw-5'
); ?>

<!-- Start Dynamic Content -->
<link href="https://s.vassar.edu/alums_data/dist/alums-data-min.css" rel="stylesheet">
<div id="necrology-layout-dummy"></div>
<script src="https://s.vassar.edu/alums_data/dist/alums-data-min.js"></script>
<!-- End Dynamic Content -->


<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
