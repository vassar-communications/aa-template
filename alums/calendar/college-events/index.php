
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"College Events",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/college-events/0118_15_12_KR_0065.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Large group of people attending an event in the Vassar Chapel']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    'Upcoming College Events',
    '/alums/assets/img/alums-calendar/college-events/0026-20-02-kr-bourgeois-fllac-vassar-9731.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Two people looking at artwork on a wall']
); ?>
<p>View events and activities happening on the Vassar campus.</p>

<?php echo cta_link(
    'http://vassar.edu/news/events',
    'View events calendar'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>


<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-news.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
