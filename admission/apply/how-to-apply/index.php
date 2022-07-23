
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "How to Apply";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Applying to Vassar',
    $admission_img_path.'apply/how-to-apply/110519_160over90_Vassar_0221.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">

<p class="intro-text">Everything you need to know to apply [REVIEW THIS] An overview of all the ways to apply to Vassar.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'First Year Applicants',
    null,
    '',
    ''
); ?>

  <p>First-year applicants may submit in any one of the following ways:</p>
    <ul>
    <li>Common application</li>
    <li>Coalition application</li>
    <li>QuestBridge application</li>
    </ul>

    <?php echo cta_link(
      '/admission/apply/first-year-applicants',
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
  <p>Supplemental materials, can be uploaded through the application status portal, which is available after an application has been submitted and processed.</p>
  <p><strong>To submit documents:</strong><br/>
      Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
      Fax: (845) 437-7063</p>
  <p>Financial Aid documents should be submitted to Student Financial Services through IDOC.</p>
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
    <p>Students applying to Vassar during the 2020–21, 2021–22, and 2022–23 admission cycles may choose whether or not to submit SAT/ACT scores.</p>
  <?php echo end_info_card(); ?>

<?php echo end_sec_regularContent(); ?>




<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-first-year.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
