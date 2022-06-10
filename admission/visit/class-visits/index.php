
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Class Visits";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_textmasthead('theme-cream'); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>
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
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3>Vassar believes in building a vibrant community of global citizens. </h3>
<p>Vassar students come from more than 79 countries around the world and international students make up more than 10% of our community.</p>
<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>

<img src="https://uc307bcb8b4bc4928b12a097531a.previews.dropboxusercontent.com/p/thumb/ABj5UGPuafkNHI_MQW9_R6M0OJ8lrpWnN_Lc6RkZr4ai19gxyT5VOLwJ1JWYS6BgN5KiEaGXedaj36GsI8EYv0j4v7TADYUGnqBcXIPovL6w_0nWg3FWORhNxkb5KFYbdqPSM_RLKhmMO6Nc9BqehrUE89aCsI4JP4G-WVGjYjcqOI-FHS_wGwg1D1mPxFFbEj_TC1LauowxgZproQBtCN3e8ykXSmmqxCf_KfJCULLgMafd3VTMNMbWAJlhLNAYzNvAU-LdT5twbjKFM2xGSuH53hwYfwNcjO3F4ralOWLzdERDPu3hpduER6Z6GpJPACO1GDqGUbugsTgLNkZiPJNzSUki-OrB1tZNj2xaZJgwURYZLy8_0wzPXDOhcQf27MQ/p.jpeg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
