
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Financial Aid";
$page_classes = "alive";

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


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>


<?php echo item_col('equal'); ?>
<h1 class="mb-3">Financial Aid</h1>
<p>Through a generous financial aid program, Vassar meets 100% of the full demonstrated need of all admitted students for all four years. Financial aid is awarded exclusively on the basis of need as determined by the Free Application for Federal Student Aid (FAFSA) and the CSS Profile.</p>


<p class="mb-3">
    <a href="/admission/financial-aid/applying-for-aid" class="px-0 btn btn-link">Learn more and apply for aid <i class="circle fa-solid fa-angle-right"></i></a>
</p>


<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/tmp-related-links.php');?>

<?php echo site_footer(); ?>
