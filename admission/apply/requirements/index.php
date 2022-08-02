
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

    <?php echo deadlines('Application Deadlines'); ?>
      <?php echo deadlines_item('Early Decision I', $deadlines['early-decision-1']); ?>
      <?php echo deadlines_item('Early Decision II', $deadlines['early-decision-2']); ?>
      <?php echo deadlines_item('Regular Decision', $deadlines['regular-decision']); ?>
    <?php echo end_deadlines(); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'First-Year Application Requirements',
    'mw-inner-1',
    'checklist'
); ?>
<ul class="style-checklist theme-cream">

    <li><?php echo central_link('common-app', 'Common Application'); ?> or <?php echo central_link('coalition-app', 'Coalition Application'); ?></li>
    <li>$65 application fee or a fee waiver
    <li>Early Decision Agreement (Early Decision Applicants ONLY)
    <li>School Report and High School Transcript: To be completed and sent by your school counselor. Available for online completion or download through <?php echo central_link('common-app', 'Common Application'); ?>.
    <li>Teacher Evaluations
    <li>Mid-year Grade Report: Vassar requests each applicant’s most recent grade report to be sent by the school counselor.
    <li>For Early Decision I and II: Vassar requires a first quarter/trimester grade report, which should be sent as soon as it becomes available.
    <li>For Regular Decision: A mid-year report with first-term grades is required when available, typically by February 1.
    <li>Students admitted during Early Decision I or II will also be asked to provide their first-term grades as soon as they become available.
    <li><a href="/admission/apply/international/">TOEFL/IELTS/DETM</a>: If English is neither your first language nor the primary language of instruction in secondary schools you have attended for the last three years.
    </li>
</ul>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Optional Application Materials',
    'theme-extralightgray',
    ''
); ?>
<p>The following items are not required for your application, but you may wish to review this information anyway.</p>

<?php echo item_iconItem(
  'Standardized Tests',
  'clipboard',
  'icon-on-left theme-white-border'
); ?>
<p>Vassar does not require students to submit the SAT or ACT for the 2022–2023 admission cycle. Applicants can declare whether or not they wish to include testing with their application by logging in to the applicant status portal and completing the test optional form; the deadlines to do so are:</p>
<ul>
    <li>Early Decision I: <strong><?php echo $deadlines['early-decision-1']; ?>
</strong></li>
    <li>Spring Transfer: <strong>November 22</strong></li>
    <li>Regular Decision and Early Decision II: <strong><?php echo     $deadlines['early-decision-2']; ?></strong></li>
    <li>Fall Transfer: <strong><?php echo $deadlines['fall-transfer']; ?></strong></li>
</ul>


<p class="py-4">For students who wish to submit their scores: the latest acceptable test dates are November for Early Decision I applicants and December for Regular Decision and Early Decision II applicants. Vassar will accept self-reported SAT and ACT scores from applicants.

  <?php echo info_card('Note', null, 'info'); ?>
  <p>Enrolling students who choose to self-report testing will be required to provide official score reports in the spring. Vassar reserves the right to revoke an offer of admission if an applicant’s self-reported scores do not align with those in their official score report.</p>
  <?php echo end_info_card(); ?>


  <?php accordion('policies'); ?>

    <?php echo accordion_item('policies', 'SAT');?>
<p>In assessing SAT scores, Vassar uses the highest individual subscores of the SAT from multiple test dates to create a superscore. Should students choose to submit the SAT, Vassar does not require the optional essay or the SAT II Subject Tests (see below).</p>
    <?php echo end_accordion_item();?>

    <?php echo accordion_item('policies', 'SAT II Subject Tests (Optional)');?>
<p>SAT Subject Tests are&nbsp;<strong>not required</strong>, and students opting not to send Subject Tests will not be penalized. However, SAT Subject Tests will be considered if submitted as part of a testing profile. Subject Tests may enhance an applicant’s credentials, particularly for applicants from non-traditional school backgrounds (homeschooled, non-graded schools, etc.). Note that a strong score on an SAT Subject Test is also one way to fulfill Vassar’s&nbsp;<a href="https://catalogue.vassar.edu/content.php?catoid=38&amp;navoid=6763#foreign_language_proficiency">Foreign Language Proficiency requirement</a>.</p>
    <?php echo end_accordion_item();?>

    <?php echo accordion_item('policies', 'ACT');?>
<p>In assessing ACT scores, Vassar uses the highest score for each section test (subscore) from all test dates to recalculate a new composite score.</p>
<p>Applicants choosing to submit the ACT are not required&nbsp;to submit the optional writing test.</p>
    <?php echo end_accordion_item();?>

  <?php end_accordion(); ?>


  <?php // echo cta_link('','Read Vassar’s standardized test policy'); ?>


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
  <p>An optional opportunity for first-year applicants to share a well-developed talent or accomplishment in music, art, or dance.</p>

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
