
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Generation Vassar",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/generation-vassar/Vassar_Library_Timelapse_Set02_20210114_KR_0233.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Exterior shot of Thompson Library at night on Vassar campus']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Rising to the Challenge',
    '/alums/assets/img/alums-calendar/generation-vassar/1917-Field_Day_1917-VC ARCHIVE.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Historical black and white photo of two people sprinting across the finish line, hands in the air']
); ?>


<p>Generation Vassar is a month-long Vassar Fund participation challenge in February that encourages friendly competition between classes in each decade. The class with the highest percentage of donors is crowned that decade’s champion. Your support at any level can affect the value of your degree, have a big impact on current students, help influence major donors and foundations, and keep tuition costs down.</p>
<p>Join thousands of alums spanning nine generations who accept the Generation Vassar Challenge!</p>


<?php echo cta_link(
    'http://www.vassar.edu/genvc',
    'Visit Generation Vassar'
); ?>


<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo relatedTopics(); ?>


<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-support-vassar.php');?>


<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
