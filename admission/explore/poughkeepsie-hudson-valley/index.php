
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Poughkeepsie & The Hudson Valley";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>



<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/explore/hudson/Mid-Huson_Bridge_10_JGa.jpg'); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-charcoal',
    ''
); ?>
<p>The Hudson Valley</p>

<?php echo end_sec_wordByWord(); ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'test contentintro',
    'mw-100 contentintro'
); ?>

<?php echo item_col('pt-5'); ?>
<h2 class="display-6 pt-5">Vassar is located in Poughkeepsie, NY, a historic city in the scenic Hudson Valley. The greater Poughkeepsie area is home to about 100,000 people and offers an array of opportunities for our students to explore, including a vibrant arts scene, beautiful hiking trails, and a wealth of historic sites.</h2>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/explore/hudson/0206-19-11-kwe-rowing-vassar-vb-4395.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_wideContent(
    'Placeholder',
    '<p class="section-intro-text">placeholder title</p>',
    'show-image-then-content',
    'mw-4',
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
        'bg-image-alt' => 'alt text',
        'title_classes' => 'animate-when-content-appears animation-zoom-in'
    ]
); ?>

[INSERT CAROUSEL]
<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>



<?php echo site_footer(); ?>
