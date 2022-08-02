
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"How to Apply",
  "feature_image":"/admission/assets/images/apply/how-to-apply/0084_16_04_KR_0013-cropped.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  [
    'image_alt_text' => 'A student sits on a blanket in front of Main Building on a sunny day, looking down at some papers.',
    'classes' => 'bg-image-right'
  ]
); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Applying to Vassar',
    $admission_img_path.'apply/how-to-apply/110519_160over90_Vassar_0221.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Two people at a table in conversation']
); ?>
<div class="animate-when-content-appears animation-slide-up">

<p>Whether you’re a first year or transfer applicant, find everything you need to know here about how to apply and what we look for in an applicant.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'First Year Applicants',
    null,
    '',
    ''
); ?>

  <p>First-year applicants may submit in any one of the following ways:</p>
    <ul class="linked-list">
    <li><?php echo central_link('common-app', 'Common application'); ?></li>
    <li><?php echo central_link('coalition-app', 'Coalition application'); ?></li>
    <li><a href="/admission/apply/questbridge/">QuestBridge application</a></li>
    </ul>

    <?php echo cta_link(
      '/admission/apply/requirements',
      'Learn more about First-Year Applications'
    ); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Transfer Applicants',
    'theme-burgundy has-bg quad-pattern',
    '',
    ''
); ?>
  <p>Transfer applicants can apply using the Common application.</p>

  <?php echo cta_link(
    '/admission/apply/transfer',
    'Learn more about Transfer Applications'
  ); ?>


<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Submitting Application Materials',
    'theme-extralightgray',
    '',
    ''
); ?>
  <p>Electronic submission is preferred. Application materials may also be submitted via email, fax, or mail.</p>
  <p>Supplemental materials can be uploaded through the application status portal, which is available after an application has been submitted and processed.</p>
  <p><strong>To submit documents:</strong><br/>
      Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>

      Fax: <?php echo phone_number('845-437-7063'); ?></p>
  <p>Financial Aid documents should be submitted to <a href="https://offices.vassar.edu/student-financial-services/">Student Financial Services</a> through Institutional Documentation Service (IDOC).</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Selection Criteria',
    null,
    '',
    ''
); ?>
  <p>Vassar weighs a number of factors in the admission decision, including:</p>
  <ul>
      <li>Academic performance, as demonstrated in high school</li>
      <li>Personal strengths, motivation, and potential as evidenced in essays, recommendations, and community involvement</li>
  </ul>
  <p>Vassar recommends that prospective applicants applying from high school elect four years of:
  </p>
  <ul>
      <li>English</li>
      <li>Mathematics</li>
      <li>Laboratory science</li>
      <li>History or social science</li>
      <li>Foreign language</li>
  </ul>
  <p>It is also recommended that applicants take a substantial portion of their work in enriched, accelerated, or honors courses or in Advanced Placement or International Baccalaureate programs when these options are available.</p>
  <p>Special attention is given to the academic breadth, depth, and rigor of candidates’ junior and senior year programs.</p>

  <?php echo info_card(
    'Optional SAT/ACT Scores',
    null,
    'info'
  );
  ?>
    <p>Students applying to Vassar during the 2022–23 admission cycle may choose whether or not to submit SAT/ACT scores.</p>
  <?php echo end_info_card(); ?>

<?php echo end_sec_regularContent(); ?>




<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
