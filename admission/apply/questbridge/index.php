
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "QuestBridge Students";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo breadcrumbNav('theme-verylightgray'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_fullBleedImageColumn(
    null,
    '/assets/images/placeholders/main-placeholder.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">QuestBridge</h2>
    <p>Vassar is a partner with QuestBridge, a program dedicated to providing higher educational opportunities to exceptional, high-achieving students from low-income communities to support their success.</p>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="px-0 btn btn-link arrow">Visit Questbridge.org</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'More about QuestBridge',
    null,
    '',
    ''
); ?>


<p>Vassar College has been a proud QuestBridge partner college since 2007.</p>

<p> If you are planning to forward your QuestBridge application to Vassar, please complete the Vassar College Selection Form for QuestBridge Applicants and the Vassar QuestBridge Writing Supplement.</p>

<p>At this time, the Vassar QuestBridge Supplement is available only to those students who have submitted their QuestBridge applications to Vassar.</p>

<p>Once you submit your QuestBridge application, you may access the Vassar QuestBridge Writing Supplement through your Application Status Page.</p>

<p>Information on how to access your Application Status Page will be emailed to you once we process your application (this may take one to three weeks).


</p>
<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
