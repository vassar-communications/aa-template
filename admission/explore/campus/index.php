
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Campus";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead(); ?>

<?php echo breadcrumbNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>
<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-dark-burgundy',
    ''
); ?>
<p>Where Horizons Meet</p>

<?php echo end_sec_wordByWord(); ?>


<div class="buffer"></div>
<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
