
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Forms & Resources",
  "feature_image":"/admission/assets/images/financial-aid/forms/0177_16_09_KR_0072.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

/* === */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Two people walking toward a Rockefeller Hall on Vassar Campus']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'financial-aid/forms/0145-15-05-hw-campus-vassar-vb-3467-crop.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Student laying on lawn reading in front of Thompson Library on Vassar Campus']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">On this page, you will find information about Vassar’s financial aid calculators, links to important financial aid forms, and additional resources that may be helpful as you learn more about applying for aid.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
    'Calculate Your Cost',
    2,
    null,
    'mw-inner-2 theme-extralightgray',
    '',
    ['id' => 'calculate-your-cost']

); ?>

  <?php echo item_col(''); ?>

  <h3>MyinTuition Cost Estimator</h3>
  <p>Use our MyinTuition Cost Estimator to quickly estimate your eligibility for need-based financial aid from Vassar. This estimator often takes 5 minutes or less.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/student-financial-services/calculator/quick-estimator/',
    'Launch Calculator'
  ); ?>

  <?php echo end_item_col(); ?>

  <?php echo item_col(''); ?>

  <h3>Net Price Calculator</h3>
  <p>For a more detailed estimate of your family contribution and financial aid award, use our Net Price Calculator.</p>

  <?php echo cta_link(
    'https://npc.collegeboard.org/app/vassar',
    'Launch Calculator'
  ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>

<?php echo item_iconItem(
    'Aid Applications',
    'coins',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://studentaid.gov/h/apply-for-aid/fafsa">FAFSA (Vassar FAFSA Code 002895)</a></li>
    <li><a href="https://cssprofile.collegeboard.org/">CSS / Financial Aid PROFILE (Vassar PROFILE Code 2956)</a></li>
</ul>
<?php echo end_item_iconItem(); ?>
<?php echo item_iconItem(
    'Forms',
    'file-pen',
    'icon-on-left theme-white-border'
); ?>

<ul class="linked-list">
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425BusinessFarmSupplement.pdf">Business/Farm Supplement (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425-Certification-of-Finances.pdf">Certification of Finances (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425VerificationStatementDependentStudent.pdf">Federal Verification Worksheet: Dependent (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425VerificationStatementIndependentStudent.pdf">Federal Verification Worksheet: Independent (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425IntlBusinessSupplement.pdf">International Business/Farm Supplement (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/CSSProfileWaiverRequestNCP_Fillable.pdf">Noncustodial Parent Waiver Petition (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425ParentNonFilerStatement.pdf">Non-Tax Filer Statement: Parent (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2023/10/2425StudentNonFilerStatement.pdf">Non-Tax Filer Statement: Student (PDF)</a></li>
</ul>
<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Resources',
    'book',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://www.cashcourse.org/">Cash Course (Financial Literacy)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/docs/vassar-fin-aid-award-guide.pdf">A Guide to Your Financial Aid Offer (PDF)</a></li>
    <li><a href="https://offices.vassar.edu/student-financial-services/financial-aid/forms/computer/">Guidelines for Computer Purchases</a></li>
</ul>
<?php echo end_item_iconItem(); ?>



<?php echo end_sec_regularContent(); ?>

<?php echo sec_wideContent(
    'Questions about Financial Aid?',
    '<p>Email <a href="mailto:finaid@vassar.edu">finaid@vassar.edu</a> or visit Student Financial Services.</p>
',
    'theme-charcoal has-bg quad-pattern bg-dark',
    'text-center'
); ?>

<a href="https://offices.vassar.edu/student-financial-services/" class="mt-5 btn btn-light">Visit Student Financial Services</a>
<?php echo end_sec_wideContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
