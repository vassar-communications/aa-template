
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Interviews",
  "feature_image":"/admission/assets/images/apply/interviews/0173_13_12_JMa_3487.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    null,
   $admission_img_path.'apply/interviews/0046_16_04_KR_0008.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">A conversation with one of our alumni or student interviewers is an excellent way for you to learn more about Vassar and for us to learn more about you.</h1>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Information & Deadlines',
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'pt-5 flex-equal align-items-start d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<p>We accept interview requests from current domestic first-year applicants. Interviews take place from October through early March and are informational rather than evaluative. Please note, not all students will be able to meet with an interviewer as we do not have the capacity to honor all requests. If you are not extended an interview, rest assured that it will not negatively impact your application to Vassar. Your interview request will only be processed once the Office of Admission confirms we have received your application.</p>

<p><strong>The Interview Request Form for Fall 2023 applicants will become available in mid October</strong></p>
<!--<a href="#" class="fix btn btn-primary arrow">Register Now</a> -->


<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>

<?php echo deadlines('Interview Request Deadlines'); ?>

<?php echo deadlines_item('Early Decision Round 1', 'November 15, 2022'); ?>
<?php echo deadlines_item('Early Decision Round 2', 'January 1, 2023'); ?>
<?php echo deadlines_item('Regular Decision', 'January 7, 2023'); ?>
<?php echo end_deadlines(); ?>


<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
        null,
    'theme-cream'

); ?>
<?php echo item_alert(
    'Note for International Applicants',
    'Given the limited availability of alumnae/i and student interviewers internationally, our office will reach out to you if we are able to extend an interview. We do not accept requests for interviews from students residing overseas.',
    'globe',
    'alert-light alert-accent-gold'
); ?>
<?php echo end_sec_regularContent(); ?>

<?php /*  PAGE CONTENT === */ ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>