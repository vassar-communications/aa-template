
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

<?php echo page_textmasthead(); ?>

<?php echo breadcrumbNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<div class="buffer"></div>
<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
