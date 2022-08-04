
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"College Events",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    'Upcoming College Events',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    ''
); ?>
<p>View events and activities happening on the Vassar campus.</p>

<?php echo cta_link(
    'http://vassar.edu/news/events',
    'View events calendar'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>


<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-news.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

