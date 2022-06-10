
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "In-Person Campus Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<p>We are excited to welcome registered visitors to our campus! To be sure that your time on campus is safe and enjoyable, please carefully review the information on this page prior to your Vassar visit. </p>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0198-19-11-kwe-library-vassar-vb-5415.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
