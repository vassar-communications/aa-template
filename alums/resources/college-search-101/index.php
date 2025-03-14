
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

    <p>Offered annually in the fall by the Office of Advancement in association with the Office of Admission, College Search 101 is designed to familiarize Vassar alum families and their high school juniors with the college admission process. This program provides valuable, general information to your family as your college search process begins.</p>
      <p><em>This program will be offered virtually.</em></p>

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


<?php echo sec_regularContent(
    null,
    '',
    '',
    ''
); ?>


<?php /* echo item_alert(
    'Announcement',
    'This year’s College Search 101 program will be offered virtually on Sunday, November 13, 2022. Registration information will be sent via broadcast email in September.',
    'info-circle',
    'alert-light alert-accent-gold'
); */ ?>

<h3>Overview</h3>

<p>Program highlights for registered participants:</p>

<ul>
  <li>Hear from Vassar College admission professionals who will share advice about navigating the college search process, and how to evaluate schools that are right for you.</li>
  <li>Meet current Vassar students for an open discussion about College life (for high school juniors only).</li>
</ul>

<p>Please note: this program provides a broad overview into the college search process from an insider’s perspective. It is not about admission to Vassar; the program is neither a feeder program nor does participation influence admission decisions at the College.</p>




<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-grants.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralums(); ?>
