
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"College Search 101",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/college-search/0038-22-06-cs-reunion-vassar-081.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'A detailed view of the top of the central tower of Thompson Library on Vassar Campus, a large, stone building with stained-glass windows and classical architecture.']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'College Search 101 for Vassar Families',
    $alums_img_path.'alums-resources/college-search/0036-22-06-kr-reunion-vassar-0040.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Two people walking in front of Rockefeller Hall, a large red brick building with many windows on the Vassar campus.']
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <p>College Search 101 (CS101) moves from the fall to the spring semester! Save the date for this academic year’s program:</p>
    <p><strong>Sunday, February 1, 2026, beginning at 1:00 p.m. Eastern Time.</strong></p>
    <p>Offered by Advancement’s Office of Engagement and co-facilitated by college guidance professionals Mari Oropeza ’99 and Juan Acosta ’02, CS101 is designed to familiarize Vassar alum families and their high school juniors with the college admission process. This webinar provides valuable, general information to your family as your college search process begins.</p>

  <?php /*hiding until needed  

    <p><em>This program is being offered virtually. Register by Wednesday, October 30 to receive the webinar link(s).</em></p>   
    <p>Sunday, November 3, 2024<br />11:00 a.m.–3:15 p.m. ET</p>
    <?php echo cta_link(
    'https://connect.vassar.edu/s/1654/22/events.aspx?sid=1654&gid=2&pgid=7823&content_id=7295',
    'Registration for College Search 101 is Open!'
); ?>
 end of hiding*/?>  

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-grants.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralums(); ?>
