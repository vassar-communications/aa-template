
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Group Visits";
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


<?php /*  PAGE CONTENT === */ ?>
<?php echo sec_wideContent(
    null,
    null,
    null,
    'mw-4'
); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3 class="display-5">Schedule a group visit</h3>
<p>Vassar offers group visits to high school students and community-based organizations to provide information on the academic, residential, and student life experience.</p>

 <p>Group visits can be customized to fit the needs of the group. Presentations can include topics such as choosing a major or writing a college admission essay, or Q&A sessions with current students.
 Group tours can be scheduled Monday through Friday between 9 a.m. and 5 p.m. ET, based on availability. To schedule, email admissions@vassar.edu.</p>
<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/placeholder.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
