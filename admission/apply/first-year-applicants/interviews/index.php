
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Interviews";
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



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3>A conversation with one of our alumnae/i or student interviewers is an excellent way for you to learn more about Vassar and for us to learn more about you.</h3>

<p>We accept interview requests from current domestic first-year applicants. Interviews take place from October through early March and are informational rather than evaluative. Please note, not all students will be able to meet with an interviewer as we do not have the capacity to honor all requests. If you are not extended an interview, rest assured that it will not negatively impact your application to Vassar. Your interview request will only be processed once the Office of Admission confirms we have received your application.</p>

<a href="#" class="fix px-0 btn btn-link">Learn more about transfer applications  <i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<span class="fix">[insert deadline card]</span>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
    null,
    'theme-charcoal',
    ''
); ?>

<h2 class="mb-4">Note for International Applicants</h2>

<p>Given the limited availability of alumnae/i and student interviewers internationally, our office will reach out to you if we are able to extend an interview. We do not accept requests for interviews from students residing overseas.</p>

<?php echo end_sec_regularContent(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
