
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

<?php echo page_textmasthead('theme-verylightgray'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_wideContent(
    '',
    '',
    '',
    'mw-4'
); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(''); ?>


<p>Applying for financial aid can be daunting, but we’re here to help you through each step. If you have any questions, contact finaid@vassar.edu or visit Student Financial Services.</p>
<a href="https://offices.vassar.edu/student-financial-services/"  class="px-0 btn btn-link">Visit Student Financial Services<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>


<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo end_sec_wideContent(); ?>

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
<a href="https://studentaid.gov/h/apply-for-aid/fafsa"  class="px-0 btn btn-link">Visit FAFSA.ORG<i class="circle fa-solid fa-link"></i></a>
<hr/>
<h3>CSS Profile</h3>
<p>The CSS Profile is required to determine eligibility for Vassar scholarship aid.</p>
<ul>
 <li>Vassar code: 2956</li>
 <li>Applies to all students, domestic and international</li>
 <li>Available after October 1st</li>
 <li>If parents are separated/divorced, both parents will each complete their own CSS Profile application</li>
</ul>
<a href="https://cssprofile.collegeboard.org/"  class="px-0 btn btn-link">Visit CSS Profile<i class="circle fa-solid fa-link"></i></a>
<hr/>
<h3>College Board IDOC</h3>
<p>This is a service to submit requested documentation as part of the aid application.</p>
<ul>
 <li>Available late October/early November; must complete CSS Profile first</li>
 <li>IDOC will email instructions once you become eligible for service</li>
 <li>Write your name and IDOC ID number on all documents</li>
 <li>Retain a copy of all documents you submit</li>
</ul>
<a href="https://pages.collegeboard.org/idoc"  class="px-0 btn btn-link">Visit Collegeboard IDOC<i class="circle fa-solid fa-link"></i></a>

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

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
