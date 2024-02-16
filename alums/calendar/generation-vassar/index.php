
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

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Vassar College Thompson Library, a large gothic-style building with arched windows, and detailed masonry, lit up in bright red at night, with lush green trees and well-manicured lawns in front.']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Rising to the Challenge',
    '/alums/assets/img/alums-calendar/generation-vassar/1917-Field_Day_1917-VC ARCHIVE.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Historical black and white photo of two people wearing white sweatshirts with 1918 and 1919 imprinted on them, sprinting across the finish line of a dirt track with their hands in the air, while crowds of people seated at the sides of the track watch and cheer.']
); ?>


<p>An important tradition, Generation Vassar invites alums, students, parents, and employees to help raise funds for critical areas of the College through the Vassar Fund. This one-week, fun-filled community participation challenge contributes to the Vassar Fund, enhancing the education and experience of every student by supporting financial aid, career education programming, faculty research, and more. Your support at any level can affect the value of your degree, have a big impact on current students, help influence major donors and foundations, and keep tuition costs down.</p>
<p>Join thousands of alums, students, parents, and employees spanning the generations who accept the Generation Vassar Challenge!</p>


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
