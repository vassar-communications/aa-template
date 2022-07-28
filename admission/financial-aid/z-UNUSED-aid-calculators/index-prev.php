
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

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_regularContent(
    'Calculate your cost',
    '',
    ''
); ?>
<p class="text-center placeholder">These calculators help to provide an early indication of what it might cost to attend Vassar</p>

<?php echo item_iconItem(
    'MyinTuition Cost Estimator',
    'calculator',
    'icon-on-left theme-grey-border'
); ?>

<p>Use our MyinTuition Cost Estimator to quickly estimate your eligibility for need-based financial aid from Vassar. This estimator often takes 5 minutes or less.</p>
<a href="https://myintuition.org/quick-college-cost-estimator/"  class="px-0 btn btn-link arrow">Launch MyinTuition Cost Estimator</a>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Net Price Calculator',
    'calculator',
    'icon-on-left theme-white-border'
); ?>

<p>For a more detailed estimate of your family contribution and financial aid award, use our Net Price Calculator.</p>
<a href="https://npc.collegeboard.org/app/vassar"  class="px-0 btn btn-link arrow">Launch Net Price Calculator</a>

<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>



<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
