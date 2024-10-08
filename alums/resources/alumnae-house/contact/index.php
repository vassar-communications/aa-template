<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Contact Alumnae House",
  "page_classes":""
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


<?php echo sec_regularContent('Contact Information','','',); ?>

<p><strong>Alumnae House, the Inn at Vassar College</strong><br/>
    161 College Avenue<br/>
    Poughkeepsie, NY 12603</p>

<p><strong>Guest Room Reservations and General Information</strong><br/>
Contact Guest Services<br/>
<?php echo phone_number('845-437-7100'); ?><br/>
    <a href="mailto:alumnaehouse@vassar.edu">alumnaehouse@vassar.edu</a></p>

<p><strong>Event Space Planning and Manager</strong><br/>
Contact Martha Barry, Alumnae House Manager<br/>
<?php echo phone_number('845-437-7150'); ?><br/>
    <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a></p>

<p><strong>Catering</strong><br/>
    Brasserie 292, Main Course, and Twisted Soul are the approved caterers for Alumnae House. Their contact information is listed below.</p>

<p>Please confirm that the caterer you select is available to service your event.</p>

<p>If alcohol will be served, the caterer must obtain a temporary liquor license. Applications must be submitted to the state 21 days prior to your event.</p>

<p><strong>Brasserie 292</strong><br/>
<?php echo phone_number('845-473-0292'); ?><br/>
    <a href="https://www.brasserie292.com/">Visit Brasserie 292’s website</a>.</p>

<p><strong>Main Course</strong><br/>
<?php echo phone_number('845-255-2600'); ?><br/>
    <a href="https://www.maincoursecatering.com/">Visit Main Course’s website</a>.</p>

<p><strong>Twisted Soul</strong><br/>
<?php echo phone_number('845-454-2770'); ?><br/>
    <a href="https://www.twistedsoulconcepts.com/">Visit Twisted Soul’s website</a>.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
