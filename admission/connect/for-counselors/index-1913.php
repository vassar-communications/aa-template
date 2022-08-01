
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "For Counselors",
  "feature_image": "/admission/assets/images/connect/0153-19-11-kr-major-palooza-vassar-0004-crop.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);



?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Information for High School Counselors',
    '/admission/assets/images/connect/0112-21-10-kr-bell-ringing-vassar-0033.jpg',
    'image-is-first theme-cream section-large-title',
    '',
    ['img_alt_text' => 'Students ringing the bell atop Vassar College Main Building']
); ?>
<div class="animate-when-content-appears animation-slide-up">
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
    Required application materials, including transcripts and letters of recommendation, may be submitted through email, fax, or mail. For faster processing, submission of documents electronically is preferred. Optional supplemental items can be uploaded through the applicant status portal, available after your application has been submitted and processed. Financial Aid documents should be submitted to Student Financial Services through Institutional Documentation Service (IDOC).
</p>
<p>
<p>Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
    Fax: <a href="fax:1-845-437-7063">(845) 437-7063</a>

</p>

<h3>Join the Counselor Mailing List</h3>
<p>
    Sign up to receive updates from the Vassar Office of Admission.</p>

<p class="hey-im-broken">
    Embed Mailing List Sign-up form</p>




<?php echo end_sec_regularContent(); ?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
