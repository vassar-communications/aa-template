
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Outcomes";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>



<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/explore/outcomes/Commencement_grads_11_JA_2.jpg'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-dark-burgundy',
    ''
); ?>
<p>Life After Vassar</p>

<?php echo end_sec_wordByWord(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'test contentintro',
    'mw-100 contentintro'
); ?>

<?php echo item_col('pt-5'); ?>
<h3 class="display-3 pt-5">Vassar is committed to ensuring our students’ growth and progress from Day 1 to beyond graduation. </h3>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    null,
    'theme-charcoal',
    null,
    null
); ?>

<p>Within six months of graduating, 96% of Vassar students are employed, in graduate school, or in a competitive fellowship.</p>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/outcomes/110619_160over90_Vassar_4689.jpg',
    'image-is-first',
    'mw-100'
); ?>
<h2>Career Development</h2>
<p>The Career Development Office helps students and alumni envision—then realize—a meaningful life after Vassar. The CDO assists students in choosing their major, offers resume and cover letter workshops, and provides networking opportunities. </p>

<a class="px-0 btn btn-link" href="#" role="button">Visit the Career Development Office</a>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/outcomes/0153-19-11-kr-major-palooza-vassar-5360-crop.jpg',
    '',
    'mw-100'
); ?>
<h2>Major Palooza</h2>
<p>Vassar hosts Major Palooza for sophomores to explore the value and versatility of a liberal arts degree, as well as to network with Vassar’s vast and dedicated alumni. Panels and receptions are available to all. </p>

<a class="px-0 btn btn-link" href="#" role="button">Visit the Career Development Office</a>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/explore/outcomes/0002-18-01-kr-scc-estrella-vassar-0048.jpg',
    'image-is-first theme-charcoal',
    'mw-100'
); ?>
<h2>Connections</h2>
<p>Vassar’s Sophomore Career Connections introduces second-year students to the extraordinary range of career options available to them. Vassar offers an extensive network of alumni and parent mentors as one of our very best career resources.</p>

<a class="px-0 btn btn-link" href="#" role="button">Visit the Career Development Office</a>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
