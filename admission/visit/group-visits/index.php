
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

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-verylightgray'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col('equal'); ?>
<h3 class="display-5">Schedule a group visit</h3>
<p>Vassar offers group visits to high school students and community-based organizations to provide information on the academic, residential, and student life experience.</p>

 <p>Group visits can be customized to fit the needs of the group. Presentations can include topics such as choosing a major or writing a college admission essay, or Q&A sessions with current students.
     Group tours can be scheduled Monday through Friday between 9 a.m. and 5 p.m. ET, based on availability. To schedule, email <a href="mailto:admissions@vassar.edu">admissions@vassar.edu</a>.</p>
<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/visit/group/group.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_wideContent(
    'Individual Opportunities',
    'If you are interested in engaging with Vassar individually, we encourage you to sign up for one of our regularly scheduled virtual visit events.',
    'theme-charcoal',
    'mw-4'
); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'In-Person Campus Visits',
    '/admission/visit/in-person',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/0055_15_04_KR_0110.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Learn more about Vassar’s  current opportunities to visit our campus in person.</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Virtual Programs',
    '/admission/visit/virtual-programs',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Experience Vassar today through our virtual tours and special online events.</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>


<?php echo end_sec_wideContent(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
