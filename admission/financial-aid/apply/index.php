
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
    null,
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">Applying for financial aid can be daunting, but we’re here to help you through each step.</h1>
    <p><a>If you have any questions, contact <a href="mailto:finaid@vassar.edu">finaid@vassar.edu</a> or visit Student Financial Services.</p>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="px-0 btn btn-link mt-5 arrow">Visit Student Financial Services</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>



<h2 class="display-5 mb-3">Apply for Financial Aid</h2>
<p>To be considered for financial aid, you must complete the following items by the advertised deadlines:</p>

<h3>FAFSA</h3>
<p>The FAFSA must be completed to determine eligibility for all sources of federal financial aid.</p>
<ul>
 <li>Vassar code: 002895</li>
 <li>Applies only to U.S. Citizens and Permanent Residents</li>
 <li>Available after October 1st</li>
 <li>Once completed, review the Student Aid Report (SAR) sent to you by the Department of Education for accuracy. If necessary, correct any errors and resubmit.</li>
</ul>
<a href="https://studentaid.gov/h/apply-for-aid/fafsa"  class="px-0 btn btn-link arrow">Visit FAFSA.ORG<i class="circle fa-solid fa-link"></i></a>
<hr/>
<h3>CSS Profile</h3>
<p>The CSS Profile is required to determine eligibility for Vassar scholarship aid.</p>
<ul>
 <li>Vassar code: 2956</li>
 <li>Applies to all students, domestic and international</li>
 <li>Available after October 1st</li>
 <li>If parents are separated/divorced, both parents will each complete their own CSS Profile application</li>
</ul>
<a href="https://cssprofile.collegeboard.org/"  class="px-0 btn btn-link arrow">Visit CSS Profile<i class="circle fa-solid fa-link"></i></a>
<hr/>
<h3>College Board IDOC</h3>
<p>This is a service to submit requested documentation as part of the aid application.</p>
<ul>
 <li>Available late October/early November; must complete CSS Profile first</li>
 <li>IDOC will email instructions once you become eligible for service</li>
 <li>Write your name and IDOC ID number on all documents</li>
 <li>Retain a copy of all documents you submit</li>
</ul>
<a href="https://pages.collegeboard.org/idoc"  class="px-0 btn btn-link arrow">Visit Collegeboard IDOC<i class="circle fa-solid fa-link"></i></a>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Financial Aid Application Checklists',
    'theme-charcoal',
    '',
    ''
); ?>

<p>For detailed information regarding application requirements and deadlines, please select the appropriate checklist below.</p>

<ul>
 <li><a href="#" class="fix">U.S. Citizen or Permanent Resident</a></li>
 <li><a href="#" class="fix">Canadian Citizen</a></li>
 <li><a href="#" class="fix">International Student (inside US)</a></li>
 <li><a href="#" class="fix">International Student (outside US)</a></li>
</ul>


<?php echo end_sec_regularContent(); ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-tuition.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>