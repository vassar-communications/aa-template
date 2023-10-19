<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Group Directories",
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
    'theme-white',
    'mw-5'
); ?>

<!-- Start Dynamic Content -->
<link href="https://s.vassar.edu/alums_data/dist/alums-data-min.css" rel="stylesheet">
<div class="cca-page-content cca-page-content-groups">

<div class="cca-data-status">
    <strong class="cca-data-status-label">Data current as of:</strong>
    <div id="cca-data-refreshed-dummy"></div>
</div>

<div class="cca-button-tabs">
    <div id="cca-classes-button-dummy"></div>
    <div id="cca-clubs-button-dummy"></div>
    <div id="cca-affiliates-button-dummy"></div>
</div>

<div id="cca-classes-selector-dummy"></div>
<div id="cca-clubs-selector-dummy"></div>
<div class="cca-section-title" id="cca-classes-text-dummy"></div>
<div class="cca-section-title" id="cca-clubs-text-dummy"></div>
<div class="cca-section-title" id="cca-affiliates-text-dummy"></div>

<div id="cca-table-dummy"></div>

</div>

<script src="https://s.vassar.edu/alums_data/dist/alums-data-min.js"></script>
<!-- End Dynamic Content -->

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
