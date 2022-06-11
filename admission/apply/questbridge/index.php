
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

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h1 class="mb-3">QuestBridge</h1>
<p class="mb-3">Vassar is a partner with QuestBridge, a program dedicated to providing higher educational opportunities to exceptional, high-achieving students from low-income communities to support their success.</p>
<a href="https://www.questbridge.org/"  class="px-0 btn btn-link">Visit Questbridge.org<i class="circle fa-solid fa-link"></i></a>
<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>



<h2 class="mb-3">QuestBridge More Information</h2>
<p>Vassar College has been a proud QuestBridge partner college since 2007.</p>

<p> If you are planning to forward your QuestBridge application to Vassar, please complete the Vassar College Selection Form for QuestBridge Applicants and the Vassar QuestBridge Writing Supplement.</p>

<p>At this time, the Vassar QuestBridge Supplement is available only to those students who have submitted their QuestBridge applications to Vassar.</p>

<p>Once you submit your QuestBridge application, you may access the Vassar QuestBridge Writing Supplement through your Application Status Page.</p>

<p>Information on how to access your Application Status Page will be emailed to you once we process your application (this may take one to three weeks).


</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
