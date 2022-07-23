
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Aid Calculators";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_hasColumns(
    'Calculate your cost',
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(''); ?>

<h3>MyinTuition Cost Estimator</h3>
<p>Use our MyinTuition Cost Estimator to quickly estimate your eligibility for need-based financial aid from Vassar. This estimator often takes 5 minutes or less.</p>
<a href="#"  class="fix px-0 btn btn-link">Launch Calculator<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>

<h3>Net Price Calculator</h3>
<p>For a more detailed estimate of your family contribution and financial aid award, use our Net Price Calculator.</p>
<a href="#"  class="fix px-0 btn btn-link">Launch Calculator<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
