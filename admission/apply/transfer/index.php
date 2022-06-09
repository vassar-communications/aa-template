
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Transfer Applicants";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>

<h3>Information for Transfer Applicants</h3>
<p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. Transfer admission is need-aware and spots are limited.</p>



<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
[insert deadlines card]
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/tmp-related-links.php');?>

<?php echo site_footer(); ?>
