
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Meet the Students";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>




<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>





<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
