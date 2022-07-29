
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
    <p class="intro-text">A conversation with one of our alumni or student interviewers is an excellent way for you to learn more about Vassar and for us to learn more about you.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
  'Information & Deadlines',
  'section-class'
); ?>


  <?php echo deadlines('Interview Request Deadlines'); ?>
    <?php echo deadlines_item('Early Decision Round 1', 'November 15, 2022'); ?>
    <?php echo deadlines_item('Early Decision Round 2', 'January 1, 2023'); ?>
    <?php echo deadlines_item('Regular Decision', 'January 7, 2023'); ?>
  <?php echo end_deadlines(); ?>


  <p class="mt-5">We accept interview requests from current domestic first-year applicants. Interviews take place from October through early March and are informational rather than evaluative. Please note, not all students will be able to meet with an interviewer as we do not have the capacity to honor all requests. If you are not extended an interview, rest assured that it will not negatively impact your application to Vassar. Your interview request will only be processed once the Office of Admission confirms we have received your application.</p>

  <p><strong>The Interview Request Form for Fall 2023 applicants will become available in mid-October.</strong></p>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_regularContent(
        null,
    'theme-cream'

); ?>

<?php echo info_card(
    'Note for International Applicants',
    '',
    'fa-globe'
); ?>

<p>Given the limited availability of alumnae and student interviewers internationally, our office will reach out to you if we are able to extend an interview. We do not accept requests for interviews from students residing overseas.</p>

<?php echo end_info_card(); ?>

<?php echo end_sec_regularContent(); ?>

<?php /*  PAGE CONTENT === */ ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
