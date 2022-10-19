
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

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  [
    'image_alt_text' => 'Two people sitting and talking',
    'classes' => 'bg-image-top'
  ]
); ?>

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
<p>Required application materials, including transcripts and letters of recommendation, may be submitted through email, fax, mail, or <a href="https://slate.org/">slate.org</a>. For faster processing, submission of documents electronically is preferred.</p>

<p>Optional supplemental items can be uploaded by the applicant through their Vassar applicant status portal after their application has been submitted and processed. Financial Aid documents should be submitted to the Office of Student Financial Services through the Institutional Documentation Service (IDOC).</p>
<p>Email: <a href="mailto:admappmaterials@vassar.edu">admappmaterials@vassar.edu</a><br/>
    Fax: <a href="fax:1-845-437-7063">(845) 437-7063</a>

</p>
<!--
<h3>Join the Counselor Mailing List</h3>
<p>
    Sign up to receive updates from the Vassar Office of Admission.</p>

<p class="hey-im-broken">
    Embed Mailing List Sign-up form</p>-->




<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    null,
    'theme-cream',
    '',
    ''
); ?>

<?php echo item_iconItem(
    'Resources for Counselors',
    'circle-info',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="/admission/quick-facts/class-profile">Class Profile</a></li>
    <li><a href="/admission/apply/requirements">First-Year Application Requirements</a></li>
    <li><a href="/admission/apply/how-to-apply#selectioncriteria">Selection Criteria</a></li>
    <li><a href="/admission/financial-aid/">Financial Aid</a></li>
    <li><a href="/admission/explore/diversity-inclusion/">Diversity and Inclusion</a></li>
    <li><a href="https://www.vassar.edu/news">Vassar News and Events</a></li>
</ul>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    null,
    1,
    '',
    'related-topics-section theme-dark-burgundy  has-bg quad-pattern mw-inner-1',
    'col-gap-3'
); ?>

<?php echo item_col(); ?>
<?php echo deadlines(
    'Application Deadlines',
    null,
    null,
    'shadow'
); ?>
<?php echo deadlines_item('Early Decision I', $deadlines['early-decision-1']); ?>
<?php echo deadlines_item('Early Decision II', $deadlines['early-decision-2']); ?>
<?php echo deadlines_item('Regular Decision', $deadlines['regular-decision']); ?>
<?php echo deadlines_item('Spring Transfer', $deadlines['spring-transfer']); ?>
<?php echo deadlines_item('Fall Transfer', $deadlines['fall-transfer']);
?>
<?php echo end_deadlines(); ?>
<?php echo end_item_col(); ?>


<?php /* echo item_col(); ?>

  <a href="https://www.vassar.edu/sites/default/files/2021-06/Vassar-Viewbook-2020.pdf"><img loading="lazy" src="https://www.vassar.edu/sites/default/files/2021-06/viewbook-2020.jpg" alt="Cover of Vassar's 2020 Viewbook"></a>
  <p class="card-text"><a href="https://www.vassar.edu/sites/default/files/2021-06/Vassar-Viewbook-2020.pdf">Read our Viewbook</a></p> ?>

    <?php echo end_item_col(); */ ?>


<?php echo end_sec_hasColumns(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
