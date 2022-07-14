
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

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

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
    'https://vassartest.chuckyatsuk.com/img/visit/group/group.jpg',
    'image-is-first theme-charcoal',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">Vassar offers group visits to high school students and community-based organizations to provide information on the academic, residential, and student life experience.</h1>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    'theme-cream',
    '',
    ''
); ?>

<h4 class="display-4 mb-4 placeholder">Schedule a group visit</h4>
<p>Group visits can be customized to fit the needs of the group. Presentations can include topics such as choosing a major or writing a college admission essay, or Q&A sessions with current students.</p>

<p>Group tours can be scheduled Monday through Friday between 9 a.m. and 5 p.m. ET, based on availability. To schedule, email <a href="mailto:admissions@vassar.edu">admissions@vassar.edu</a>.</p>

<h4 class="display-4 mb-4 placeholder">Individual Opportunities</h4>
<p>If you are interested in engaging with Vassar individually, we encourage you to sign up for one of our regularly scheduled virtual visit events.</p>
<ul>
    <li>In-Person Campus Visits</li>
    <li>Virtual Programs</li>
</ul>


<?php echo end_sec_regularContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-class-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>