
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

<?php echo page_masthead('https://ucf31374040979be1e9e841681ab.previews.dropboxusercontent.com/p/thumb/ABgXh4iP7SoNdVI8x2Pt1lFa0dU86IE1MOjxfarNHEZqNjPhhOOUUQSijuXrI3wdnj2CUZYo4oiZ9RzW3KgTj734KFUzg-L-PRfe1cQgy7qH4C74RbHvHSgOYk9fX0_--nPqd8BW9fszwq01Zq8F-7ALeojlM1zDkbHkWWcyHPZVqpIVE_7PTlhsUbZ7aUzmxUNA33ThHz-DEYG0IhJ8X9qEKPFnvDtoxQogzpSNWR1PL-WrWdnrj-ovBeOmuzF9K-q1pbMG7iIMsgroI1ei5GVw_zq8fo-1FNzkO1hzCKxofkclNuc5mUIWI2XduFHeATQrq21HFWf3JGNb2S5hsoOUo_EkUK_2JpKFRB0iKlqDqpkg6do4tHvLihZvCR77Lemdnl0TKBBB-VlJpL4xSVG9D9R73tVKxCCVXDKM8kjGT89dTS-5PXoXo8HHIOFol-Y/p.jpeg'); ?>


<?php echo breadcrumbNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-dark-burgundy',
    ''
); ?>
<p>The Hudson Valley</p>

<?php echo end_sec_wordByWord(); ?>


<div class="buffer"></div>
<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
