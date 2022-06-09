
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
    'theme-cream',
    null
); ?>

<?php echo item_col(); ?>
<h3>A conversation with one of our alumnae/i or student interviewers is an excellent way for you to learn more about Vassar and for us to learn more about you.</h3>
<p>We accept interview requests from current domestic first-year applicants. Interviews take place from October through early March and are informational rather than evaluative. Please note, not all students will be able to meet with an interviewer as we do not have the capacity to honor all requests. If you are not extended an interview, rest assured that it will not negatively impact your application to Vassar. Your interview request will only be processed once the Office of Admission confirms we have received your application.</p>


<?php echo item_iconButton(
    'car',
    'Register Now',
    '/admission/financial-aid/applying-for-aid');
?>

<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://uc47ac64b0907ec3250f531e9267.previews.dropboxusercontent.com/p/thumb/ABgk6BB8TPTISuWhhMjRGjtcjuabB8CeEanttvis03esFA487-BcNlTRErqZD7Bz2anh101QaG_W-ecgfaQOAP2oT2JRMM6Gt57UZEVeex8qvA3ZYrxq5OFIrM-qJyEMk9ZgVqrvbKL7hqnLR9DLrvt0EpiNNmshd8O6OfxGLG-WzV5W7G0vJWHXQIWHPtp7xGcXHuotO4LCmvI1Hj62AqmxCjDxvbtSctEjufI-YLUCF7pswJlRO6xrv3pJR77TmjKZFJATTf_X3RHdCkoUScTYpgjzPrG7_pLsjBlc2ZBC81d4O3l56Y-5QI3zHi0rXVExQaXSgWERDnViOo96E0HnwikiYDQIfYAHzz4xMmiONHwN46BBIyQkNjs4yUws7o4/p.jpeg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
