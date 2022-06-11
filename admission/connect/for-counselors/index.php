
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

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-connect-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo sec_wideContent(
    null,
    null,
    null,
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
<h3 class="display-5 mb-3">Information for High School Counselors</h3>
<p class="mb-3">Vassar was built to advance the notion of what a liberal arts college can be. From day one, we’ve empowered students to explore widely, delve deeply, and investigate every new idea with an open mind. Please don’t hesitate to be in touch as you help your students explore their college options. </p>
<a href="/admission/visit/in-person"  class="px-0 btn btn-link">Learn more<i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>
<?php echo item_col(''); ?>

<img src="https://vassartest.chuckyatsuk.com/img/visit/0042-21-06-kr-reception-vassar-0130.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo end_sec_wideContent(); ?>


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
    Email: admappmaterials@vassar.edu
    Fax: (845) 437-7063

</p>

<h3>Join the Counselor Mailing List</h3>
<p>
    Sign up to receive updates from the Vassar Office of Admission.</p>

<p class="fix">
    Mailing List Sing UP EMBED</p>




<?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
