
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Transfer Applicants";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>

<h3>Information for Transfer Applicants</h3>
<p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. Transfer admission is need-aware and spots are limited.</p>


<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>
[insert deadlines card]
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
    null,
    'theme-charcoal',
    ''
); ?>

<h2>Transfer Application Checklist</h2>
<ul>
    <li><a href="https://www.commonapp.org/">Common Application</a> and $65 application fee or fee waiver request</li>
    <li>Transcripts from all high schools attended</li>
    <li>Transcripts from all colleges attended</li>
    <li><a href="https://www.vassar.edu/sites/default/files/2021-06/Transfer%20College%20Report_BLANK.pdf">Transfer College Report</a> To be completed by someone at your current institution with access to your academic and disciplinary record</li>
    <li><a href="https://www.vassar.edu/sites/default/files/2021-06/TR%20Academic%20Evaluation.pdf">Transfer Academic Evaluation</a> with a letter of recommendation from a college instructor. You may submit an additional recommendation from a second college instructor, high school counselor or teacher, or employer.</li>
    <li>Transfer Mid-Term Grade Report if you are currently enrolled in college</li>
    <li>(Optional) <a class="fix" href="#">Standardized Testing</a>: We will accept the ACT and the SAT</li>
    <li> <a class="fix" href="#">TOEFL/IELTS/DET</a>: Required if English is neither your first language nor the primary language of instruction for the last three years of your education</li>
</ul>
<?php echo end_sec_regularContent(); ?>
<?php echo sec_regularContent(
    null,
    null,
    ''
); ?>
<h3>Transfer Eligibility</h3>
<p>Students may apply for transfer as early as the first term of the first year of college. Upon enrolling to Vassar as a transfer, you must complete the equivalent of at least four full-time semesters to graduate.</p>
<hr/>
<h3>Transfer Decision Notification</h3>
<p>Transfer applicants for the spring semester are notified of their admission decision in mid-December; applicants for the fall are notified in early May. Admitted transfer applicants are expected to respond and enroll within two weeks of notification.</p>
<hr/>
<h3>Transfer Financial Aid</h3>
<p>Although Vassar meets the full demonstrated need of all admitted students who apply for financial aid at the time of their admission application, limited financial resources are designated for transfer students, and the applicant pool is highly competitive. International transfer students are not eligible for financial aid.</p>
<hr/>
<h3>Transfer of Credit</h3>
<p>Vassar offers transfer credit for courses in the liberal arts and sciences which are the approximate equivalent in content, methodology, and rigor to courses listed in the <a href="https://catalogue.vassar.edu/">Vassar Catalog</a></p>
<p>We do not award transfer credit for:</p>
<ul>
    <li>Physical education (excluding dance)</li>
    <li>Pre-professional or vocational hours</li>
    <li>Any course less than 2 semester hours</li>
    <li>Distance learning credits</li>
</ul>

<hr/>

<h3>Exploring Transfer</h3>
<p>For more than 35 years, <a href="https://offices.vassar.edu/exploring-transfer/">Exploring Transfer</a> has brought students from select community colleges to Vassar’s campus for an intensive five-week period during the summer. </p>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
