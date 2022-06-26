
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Hire Vassar";
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
<h3 class="display-5 mb-3">Add Vassar Talent to your Team</h3>
<p class="mb-3">Vassar students and alums are great candidates for internships and multi-level positions within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>
<a href="#"  class="px-0 btn btn-link">Information for Employers <i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/visit/0042-21-06-kr-reception-vassar-0130.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg" />
<?php echo end_item_col(); ?>



<?php echo item_col('equal'); ?>
<h3 class="display-5 mb-3">Post a Job on VassarNet</h3>
<p class="mb-3">Vassar students and alums are great candidates for internships and multi-level positions within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>
<a href="/admission/visit/virtual-programs"  class="px-0 btn btn-link">Launch VassarNet <i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo end_sec_wideContent(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/alumni-give-be-a-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
