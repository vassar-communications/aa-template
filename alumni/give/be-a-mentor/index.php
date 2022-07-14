
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Be a Mentor";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-give-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-give-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row mb-5 pb-5'
); ?>

<?php echo item_col('equal animate-when-content-appears animation-slide-up'); ?>

<h2 class="pb-3 h2">Being a mentor is an extraordinary opportunity to develop positive relationships with students and help them navigate their future personally and/or professionally.</h2>

<div class="alert alert-light shadow mw-2">
    <h6 class="strong">Ready to Mentor?</h6>
    <p>Fill out the Volunteer Interest Form to learn more about mentoring opportunities!</p>
    <a href="#" class="px-0 btn btn-link arrow">Vassar Volunteer Interest Form<i class="px-3  fa-solid fa-arrow-up-right-from-square"></i></a><br/>

</div>

<?php echo end_item_col(); ?>

<?php echo item_col('animate-when-content-appears animation-slide-up equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/alumni/resources/Sunset_Lake_15_TT_1519.jpg" />

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-be-a-mentor.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

