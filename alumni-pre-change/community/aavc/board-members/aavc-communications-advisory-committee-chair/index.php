<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Communications Advisory Committee Chair",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/Justin_Hergianto-removebg-aavc-alum-001.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Justin Hergianto ’04',
    '/alumni/assets/img/alumni-community/aavc/board/Justin_Hergianto-removebg-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Justin Hergianto']
); ?>

  <ul class="clean-list-with-borders">
    <li>Communications Advisory Committee Chair and Career Networking Committee Member</li>
    <li>(he/him/his)</li>
    <li>New York</li>
    <li>Term of Service: 2021–2025</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Director, AAVC Board of Directors, 2019–present, member, AAVC Communications Advisory Committee, 2018–present; volunteer, Admission Activities, 2012–present; volunteer, Admission Phoner Program, 2010–present; volunteer, Club Admission Committee, 2004–present; volunteer, Career Advisor Program, 2019; career panel/event participant, Career Program, 2017; mentor, Sophomore Career Connections, 2017; volunteer, Career Advisory Network, 2006–2012.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Vice president of growth marketing, PointsBet, 2020–present; vice president of media strategy, Americas, DAZN, January 2019–2020; head of strategy, DAZN, 2018–2019; senior director, Digital &amp; Print Marketing, ESPN, 2014–2018; vice president, Integrated Marketing, MTV, 2011–2014; associate marketing director, <em>Sports Illustrated</em>, 2006–2011; account executive, Carat USA, 2005–2006.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
