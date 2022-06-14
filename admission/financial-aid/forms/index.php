
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Forms & Resources";
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
<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>


<p class="">
 Here you will find all the forms and resources you’ll need to successfully apply for financial aid.</p>

<h2>Forms</h2>
<ul>
 <li><a href="#" class="fix">Business/Farm Supplement</a></li>
 <li><a href="#" class="fix">Certification of Finances</a></li>
 <li><a href="#" class="fix">Federal Verification Worksheet: Dependent</a></li>
 <li><a href="#" class="fix">Federal Verification Worksheet: Independent</a></li>
 <li><a href="#" class="fix">International Business/Farm Supplement</a></li>
 <li><a href="#" class="fix">Noncustodial Parent Waiver Petition</a></li>
 <li><a href="#" class="fix">Non-Tax Filer Statement - Parent</a></li>
 <li><a href="#" class="fix">Non-Tax Filer Statement - Student</a></li>
</ul>

<h2>Resources</h2>
<ul>
 <li><a href="#" class="fix">Cash Course (Financial Literacy)</a></li>
 <li><a href="#" class="fix">Understanding your Financial Aid Letter</a></li>
 <li><a href="#" class="fix">Guidelines for Computer Purchases</a></li>
</ul>

<p><strong>FAFSA</strong><br/>
Vassar FAFSA Code 002895<br/>
 Free Application for Federal Student Aid (FAFSA)</p>

<p><strong>PROFILE</strong><br/>
Vassar PROFILE Code 2956<br/>
CSS / Financial Aid PROFILE</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Questions about Financial Aid?',
    'theme-dark-burgundy',
    'text-center',
    ''
); ?>
<p>Email <a href="mailto:finaid@vassar.edu">finaid@vassar.edu</a> or visit <a href="https://offices.vassar.edu/student-financial-services/">Student Financial Services</a>.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
