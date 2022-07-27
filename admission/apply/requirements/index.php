
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"First-Year Applicants",
  "page_classes":"alive",
  "feature_image":"/admission/assets/images/apply/first-year/0046_16_04_KR_0008.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Students sitting on the veranda outside of the Bridge for Laboratory Sciences building studying.']
); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Information for First-Year Applicants',
    '/admission/assets/images/apply/first-year/0134-17-09-kr-fw-campus-vassar-7798.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text mb-5">Everything you need to know to apply.</p>

    <?php echo deadlines('Early Decision Application deadlines'); ?>

      <?php echo deadlines_item('Early Decision Round 1', 'November 15'); ?>
      <?php echo deadlines_item('Early Decision Round 2', 'January 1'); ?>

    <?php echo end_deadlines(); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'First-Year Application Requirements',
    'mw-inner-1',
    'checklist'
); ?>
<ul class="style-checklist theme-cream">
    <li>Common Application or Coalition application</li>
    <li>$65 application fee or fee waiver
    <li>Early Decision Agreement (Early Decision Applicants ONLY)
    <li>School Report and High School Transcript: To be completed and sent by your school counselor. Available for online completion or download through Common Application.
    <li>Teacher Evaluations
    <li>Mid-year Grade Report Vassar requests each applicant’s most recent grade report to be sent by the school counselor.
    <li>For Early Decision I and II, Vassar requires a first quarter/trimester grade report, which should be sent as soon as it becomes available.
    <li>For Regular Decision, a mid-year report with first term grades is required when available, typically by February 1.
    <li>Students admitted during Early Decision I or II will also be asked to provide their first term grades as soon as they become available.
    <li>TOEFL/IELTS/DET: If English is neither your first language nor the primary language of instruction in secondary schools you have attended for the last three years.
    </li>
</ul>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Optional Application Materials',
    'theme-extralightgray',
    ''
); ?>
<p>The following are not required for your application. for more information click the links below</p>

<?php echo item_iconItem(
  'Standardized Tests',
  'clipboard',
  'icon-on-left theme-white-border'
); ?>
  <p>Vassar does not require students to submit the SAT or ACT </p>


  <?php echo cta_link(
    '',
    'Read Vassar’s standardized test policy'
  ); ?>


<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
  'Your Space',
  'face-smile',
  'icon-on-left theme-white-border'
); ?>
  <p>This is a chance for you to show the admission committee something else about yourself. It is your space, so if you choose to complete it, send something that is a reflection of you! Past applicants have submitted poetry, craft projects, photography, short stories, videos, and more.</p>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
  'Interviews',
  'people-arrows-left-right',
  'icon-on-left theme-white-border'
); ?>
  <p>Though not required, you may want to connect with a Vassar student or alum to learn more. These interviews are informational, not evaluative.</p>

  <?php echo cta_link(
      '/admission/apply/requirements/interviews',
      'Learn more about interviews at Vassar'
  ); ?>


<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem(
  'Music, Art, and Dance Portfolios',
  'star',
  'icon-on-left theme-white-border'
); ?>
  <p>An optional opportunity for first-year applicants to share a well-developed talent or accomplishment in music, art, or dance</p>

  <?php echo cta_link(
    '/admission/apply/requirements/arts',
      'Learn more about arts portfolio submissions'
  ); ?>


<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>



<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-how-to-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php echo site_footer(); ?>
