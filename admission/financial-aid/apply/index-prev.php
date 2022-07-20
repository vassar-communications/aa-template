
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Applying for Aid";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    '',
    $admission_img_path.'financial-aid/apply-aid.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
  <p class="intro-text">Applying for financial aid can be daunting, but we’re here to help you through each step.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_hasColumns(
    'Apply for Financial Aid',
    '3',
    '<p class="intro-text">To be considered for financial aid, you must complete the following items by the advertised deadlines:</p>',
    'items-equal-height theme-dark-burgundy',
    'gap-3'
); ?>

  <?php echo item_col(); ?>

    <div class="card plain-text-card text-dark">
    <h3>FAFSA</h3>
    <p>The FAFSA must be completed to determine eligibility for all sources of federal financial aid.</p>

    <ul class="labeled-list">
      <?php echo labeled_list_item('Vassar code', '002895'); ?>
      <?php echo labeled_list_item('Available after', 'October 1st'); ?>
      <?php echo labeled_list_item('Applies to', 'U.S. Citizens and Permanent Residents only'); ?>
    </ul>

     <p>Once completed, review the Student Aid Report (SAR) sent to you by the Department of Education for accuracy. If necessary, correct any errors and resubmit.</p>
    <a href="https://studentaid.gov/h/apply-for-aid/fafsa"  class="px-0 btn btn-link arrow text-start text-dark">Visit FAFSA.ORG</a>
    </div>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <div class="card plain-text-card text-dark">
    <h3>CSS Profile</h3>
    <p>The CSS Profile is required to determine eligibility for Vassar scholarship aid.</p>

    <ul class="labeled-list">
      <?php echo labeled_list_item('Vassar code', '2956'); ?>
      <?php echo labeled_list_item('Available after', 'October 1st'); ?>
      <?php echo labeled_list_item('Applies to', 'All students, domestic and international'); ?>
    </ul>

     <p>If parents are separated/divorced, both parents will each complete their own CSS Profile application</p>

    <a href="https://cssprofile.collegeboard.org/"  class="px-0 btn btn-link arrow text-start text-dark">Visit CSS Profile</a>
    </div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <div class="card plain-text-card text-dark">
    <h3>College Board IDOC</h3>
    <p>This is a service to submit requested documentation as part of the aid application.</p>
    <ul>
     <li>Available late October/early November; must complete CSS Profile first</li>
     <li>IDOC will email instructions once you become eligible for service</li>
     <li>Write your name and IDOC ID number on all documents</li>
     <li>Retain a copy of all documents you submit</li>
    </ul>
    <a href="https://pages.collegeboard.org/idoc"  class="px-0 btn btn-link arrow text-start text-dark">Visit Collegeboard IDOC</a>
    </div>

  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo sec_regularContent(
    'Financial Aid Application Checklists',
    'theme-cream',
    '',
    ''
); ?>

<p class="text-center mb-5">For detailed information regarding application requirements and deadlines, please select the appropriate checklist below.</p>

<ul class="linked-list">
 <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/prospective-us-2223.pdf">U.S. Citizen or Permanent Resident</a></li>
 <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/prospective-canadian-2223.pdf">Canadian Citizen</a></li>
 <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/prospective-intl-us-2223.pdf">International Student (inside US)</a></li>
 <li><a href="https://offices.vassar.edu/student-financial-services/wp-content/uploads/sites/57/2021/09/prospective-intl-2223.pdf">International Student (outside US)</a></li>
</ul>


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
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
