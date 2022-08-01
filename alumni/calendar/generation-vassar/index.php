
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Generation Vassar",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>


<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-makegift.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-fearlessly-consequential.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-support-vassar.php');?>


<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

