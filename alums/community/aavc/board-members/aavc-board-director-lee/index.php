<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/Kevin-Lee.jpg"
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
    'Kevin Lee ’14',
    '/alums/assets/img/alums-community/aavc/board/Kevin-Lee.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Kevin Lee ’14, a person with short, neatly styled dark hair wearing a suit jacket, light blue dress shirt, and red and blue striped tie, smiling in a brightly lit indoor setting with a blurred background.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Career Networking Committee Member and Clubs Committee Member</li>
    <li>(he/him/his)</li>
    <li>California</li>
    <li>Term of Service: 2025–2029</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Off-board committee member, AAVC Clubs Committee, 2024–present; Chair of Steering Committee, Vassar Club of San Diego, 2021–present; Committee Member, Class of 2014, 2018–present and Treasurer,  2014–2018; Volunteer, Club Admission Committee, 2017–2024.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Environmental Health & Sustainability Manager, Dr. Bronner’s, 2023–present; Environmental Impact & Compliance Specialist, Dr. Bronner’s, 2019–2023; Green Business Associate, San Francisco Department of the Environment (SF Environment), 2017–2019; Sustainability Fellow, VOX Global, 2016; Research Assistant, The Field Museum, 2015; U.S. Department of Energy Research Assistant, Argonne National Laboratory, 2014; U.S. Department of Energy (Environmental Protection Division) Research Assistant, Brookhaven National Laboratory, 2014; Environmental Biology Research Assistant, Vassar College, 2012–2014; Biology Teaching Assistant, Vassar College, 2013; National Science Foundation (NSF) – REU Research Intern, Fordham University, 2013.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
