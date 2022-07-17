
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "For Counselors";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-2">Information for High School Counselors</h1>
    <p>Vassar was built to advance the notion of what a liberal arts college can be. From day one, we’ve empowered students to explore widely, delve deeply, and investigate every new idea with an open mind. Please don’t hesitate to be in touch as you help your students explore their college options. </p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent(
    null,
    null,
    null,
); ?>

<h3>Submitting Application Materials</h3>
<p>
    Required application materials, including transcripts and letters of recommendation, may be submitted through email, fax, or mail. For faster processing, submission of documents electronically is preferred. Optional supplemental items can be uploaded through the applicant status portal, available after your application has been submitted and processed. Financial Aid documents should be submitted to Student Financial Services through IDOC.
</p>
<p>
<p>Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
    Fax: (845) 437-7063

</p>

<h3>Join the Counselor Mailing List</h3>
<p>
    Sign up to receive updates from the Vassar Office of Admission.</p>

<p class="fix">
    Embed Mailing List Sign-up form</p>




<?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
