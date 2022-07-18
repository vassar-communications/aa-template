
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Group Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/group/group.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Vassar offers group visits to high school students and community-based organizations to provide information on the academic, residential, and student life experience.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    '',
    '',
    ''
); ?>

<?php echo item_iconItem(
  'Schedule a group visit',
  'people-group',
  'icon-on-left'
); ?>
<p>Group visits can be customized to fit the needs of the group. Presentations can include topics such as choosing a major or writing a college admission essay, or Q&A sessions with current students.</p>
<p class="mb-5">Group tours can be scheduled Monday through Friday between 9 a.m. and 5 p.m. ET, based on availability. To schedule, email <a href="">admissions@vassar.edu</a>.</p>

<?php echo cta_link(
  'mailto:admissions@vassar.edu',
  'Schedule a Group Tour'
); ?>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
  'Individual Opportunities',
  'user',
  'icon-on-left'
); ?>
<p>If you are interested in engaging with Vassar individually, we encourage you to sign up for one of our regularly scheduled virtual visit events.</p>
<ul class="linked-list">
    <li><a href="/admission/visit/in-person/">In-Person Campus Visits</a></li>
    <li><a href="/admission/visit/virtual-programs/">Virtual Programs</a></li>
</ul>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-class-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
