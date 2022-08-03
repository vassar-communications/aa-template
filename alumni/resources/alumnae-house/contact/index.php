<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Contact Alumnae House",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text placeholder">The quintessential meeting place for Vassar College alumnae/i throughout the last century</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent('Contact Information','','',); ?>

<p><strong>Alumnae House, the Inn at Vassar College</strong><br/>
    161 College Avenue<br/>
    Poughkeepsie, NY 12603</p>

<p><strong>Guest Room Reservations and General Information</strong><br/>
Contact Guest Services<br/>
(845) 437-7100<br/>
    <a href="mailto:alumnaehouse@vassar.edu">alumnaehouse@vassar.edu</a></p>

<p><strong>Event Space Planning and Manager</strong><br/>
Contact Martha Barry, Alumnae House Manager<br/>
(845) 437-7150<br/>
    <a href="mailto:mabarry@vassar.edu">mabarry@vassar.edu</a></p>

<p><strong>Catering</strong><br/>
    Brasserie 292, Main Course and Twisted Soul are the approved caterers for Alumnae House. Their contact information is listed below.</p>

<p>Please verify that the caterer you select is available to servicecater your event and that they confirms this with you.

<p>If alcohol will be served, the caterer must obtain a temporary liquor license. Applications must be submitted to the state 21 days prior to your event.</p>

<p><strong>Brasserie 292</strong><br/>
(845) 473-0292<br/>
    <a href="mailto:...">Email</a></p>

<p><strong>Main Course</strong><br/>
(845) 255-2600<br/>
    Email</p>

<p><strong>Twisted Soul</strong><br/>
(845) 454-2770<br/>
    <a href="mailto:..."> Email</a></p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

