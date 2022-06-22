
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "First-Year Applicants";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_textmasthead('theme-dark-burgundy'); ?>
<?php echo breadcrumbNav('theme-verylightgray'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h2 class="display-3">Information for First-Year Applicants</h2>
<p>Everything you need to know to apply </p>
<p class="fix">insert deadlines</p>
<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0084_16_04_KR_0013.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
    null,
    'theme-charcoal',
    'checklist'
); ?>
<h3 class="display-4">First-Year Application Requirements</h3>
<ul>
    <li>Common Application or Coalition application</li>
    <li>$65 application fee or fee waiver
    <li>Early Decision Agreement (Early Decision Applicants ONLY)
    <li>School Report and High School Transcript: To be completed and sent by your school counselor. Available for online completion or download through Common Application.
    <li>Teacher Evaluations
    <li>Mid-year Grade Report Vassar requests each applicant’s most recent grade report to be sent by the school counselor.
    <li>For Early Decision I and II, Vassar requires a first quarter/trimester grade report, which should be sent as soon as it becomes available.
    <li>For Regular Decision, a mid-year report with first term grades is required when available, typically by February 1.
    <li>Students admitted during Early Decision I or II will also be asked to provide their first term grades as soon as they become available.
    <li>TOEFL/IELTS/DET: If English is neither your first language nor the primary language of instruction in secondary schools you have attended for the last three years.
    </li>
</ul>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    null,
    '',
    ''
); ?>
<h3 class="display-4">Optional Application Materials</h3>
<p>The following are not required for your application. for more information click the links below</p>

<h4>Standardized Tests</h4>
<p>Vassar does not require students to submit the SAT or ACT </p>
<a class="fix btn btn-text" href="#">Read Vassar's standardized test policy</a>

<h4>Your Space</h4>
<p>This is a chance for you to show the admission committee something else about yourself. It is your space, so if you choose to complete it, send something that is a reflection of you! Past applicants have submitted poetry, craft projects, photography, short stories, videos, and more.</p>

<h4>Interviews</h4>
<p>Though not required, you may want to connect with a Vassar student or alum to learn more. These interviews are informational, not evaluative.</p>
<a class="btn btn-text" href="/admission/apply/first-year-applicants/interviews">Learn more</a>

<h4>Music, Art, and Dance Portfolios</h4>
<p>An optional opportunity for first-year applicants to share a well-developed talent or accomplishment in music, art, or dance</p>
<a class="btn btn-text" href="/admission/apply/first-year-applicants/arts">Learn more</a>

<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>
<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
