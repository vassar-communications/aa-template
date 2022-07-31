
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Grants & Fellowships",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Grants & Fellowships',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<p class="intro-text">Highlighted below are a few of the grants and fellowships available to Vassar alumni. For more information on these and <a href="https://fellowships.vassar.edu/fellowships/graduates/index.html">other grants and fellowships</a>, contact the <a href="https://fellowships.vassar.edu/">Office for Fellowships and Pre-Health Advising</a>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Time Out Grant',
    '/assets/images/placeholders/placeholder-square.png',
    'theme-dark-burgundy has-bg quad-pattern',
    ''
); ?>
<p>Over 30 years ago, a generous anonymous alumna established the Time Out Grant to fund projects near and dear to the hearts of fellow alumni. Vassar alumni who have reached their 40th birthday by June 30, 2022, and wish to make a career change, or take time out to pursue a long- held dream, are eligible to apply for this grant. <strong>You must be willing to take a full year off from your current endeavors and devote yourself full- time to your project.</strong> </p>

<?php echo cta_link(
    'https://www.vassar.edu/alums/services/grants/timeout',
    'Learn more about the Time Out Grant'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Grants & Fellowships',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<p class="intro-text">Highlighted below are a few of the grants and fellowships available to Vassar alumnae/i. For more information on these and other grants and fellowships, contact the Office for Fellowships and Pre-Health Advising.</p>

<?php echo cta_link(
    'https://www.vassar.edu/alums/services/grants/timeout',
    'Learn more about the Time Out Grant'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-career-support.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-alumni-benefits.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
