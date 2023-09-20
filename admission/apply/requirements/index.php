
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
    '/admission/assets/images/apply/first-year/0149-19-11-kr-chemistry-vassar-4650.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A photo taken from the side, showing a student sitting in a classroom with other students, looking straight ahead.']
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
<h3 class="mb-4">Application Checklist</h3>
    <li><?php echo central_link('common-app', 'Common Application'); ?> or <?php echo central_link('coalition-app', 'Coalition Application'); ?></li>
    <li>$65 application fee or a fee waiver</li>
    <li>Early Decision Agreement (Early Decision Applicants ONLY)</li>
    <li>School Report and High School Transcript: To be completed and sent by your school counselor. Available for online completion or download through <?php echo central_link('common-app', 'Common Application'); ?>.</li>
    <li>A Teacher Evaluation</li>
    <li>Mid-year Report: Your school counselor or another school official must submit your mid-year grades to us. Early Decision applicants must submit a fall progress report and will be asked to provide their first-term grades as soon as they become available.</li>
    <li><a href="/admission/apply/international/">TOEFL/IELTS/Duolingo</a>: If English is neither your first language nor the primary language of instruction in secondary schools you have attended for the last three years.
    </li>
</ul>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Optional Application Materials',
    'theme-extralightgray',
    ''
); ?>

<?php echo item_iconItem(
  'Standardized Tests',
  'clipboard',
  'icon-on-left theme-white-border'
); ?>
<p>Vassar does not require applicants to submit SAT or ACT scores. Applicants can declare whether or not they wish to include testing with their application by logging in to the applicant status portal and completing the test optional form; the deadlines to do so are:</p>
<ul>
    <li>Early Decision I: <strong>November 22</strong></li>
    <li>Spring Transfer: <strong>November 22</strong></li>
    <li>Regular Decision and Early Decision II: <strong>January 8</strong></li>
    <li>Fall Transfer: <strong>April 1</strong></li>
</ul>


<p class="py-4">For students who wish to submit their scores: the latest acceptable test dates are November for Early Decision I applicants and December for Regular Decision and Early Decision II applicants. Vassar will accept self-reported SAT and ACT scores; we superscore, which means we will look at your highest section scores if you’ve taken a test more than once.

  <?php echo info_card('Note', null, 'info'); ?>
  <p>Enrolling students who choose to self-report testing will be required to provide official score reports in the spring. Vassar reserves the right to revoke an offer of admission if an applicant’s self-reported scores do not align with those in their official score report.</p>
  <?php echo end_info_card(); ?>




<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
  'Your Space',
  'face-smile',
  'icon-on-left theme-white-border'
); ?>
<p>Your Space is your opportunity to allow the Committee on Admission to learn something about you that you have not addressed in another section of the application.  For example, in the past, applicants have shared poetry, short stories, cartoons, digital images of art projects, photography, and collages, and/or links to videos, and short films. It is your space, so if you choose to complete it, send something that is a reflection of you! <strong>Your Space is entirely optional.</strong></p>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
  'Informational Interviews',
  'comments',
  'icon-on-left theme-white-border'
); ?>
  <p>After applying, you may request an informational interview with an alumnus to learn more about the Vassar experience. These interviews are not evaluative and are not a required part of the application process.</p>

  <?php echo cta_link(
      '/admission/apply/requirements/interviews',
      'Learn more about interviews&nbsp;at&nbsp;Vassar',
      'mt-2'
  ); ?>


<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem(
  'Music, Art, and Dance Portfolios',
  'star',
  'icon-on-left theme-white-border'
); ?>
  <p>If you have a well-developed talent or significant accomplishment in music, art, or dance, you may submit a portfolio to be evaluated by our faculty.</p>

  <?php echo cta_link(
    '/admission/apply/requirements/arts',
      'Learn more about arts portfolio&nbsp;submissions',
      'mt-2'
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
