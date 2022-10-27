<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/hayashi-seiji-aavc-alum-001.jpg"
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
    'Seiji Hayashi ’91',
    '/alums/assets/img/alums-community/aavc/board/hayashi-seiji-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Seiji Hayashi, AAVC Trustee']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alumnae/i Recognition Committee Member and Career Networking Committee Member</li>
    <li>(he/him/his)</li>
    <li>Maryland</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Board of Directors, 2019–present; member, Alumnae/i Recognition Committee, 2019–present; member, Career Networking Committee, 2019–present; admissions interviewer, Club Admissions Committee, 2008–present; mentor, Sophomore Career Connections, January 2019 and 2020; career panel/event participant, Career Program, 2017.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Chief Transformation Officer and Medical Director, Mary’s Center, 2019–present; family physician, Mary’s Center, 2009–present; Acting Director and Director of Medicine, The Human Diagnosis Project, 2017–2019; Executive Vice President for Transformation and Innovation, Unity Health Care, Inc., 2015–2017; Chief Medical Officer, HRSA Bureau of Primary Health Care, U.S. Department of Health and Human Services, 2009–2015; Assistant Professor, George Washington University School of Public Health and Health Services, 2003–2009; staff physician, Unity Health Care, 2001–2009; Assistant Professor, Georgetown University, 2002–2005; Fellow, Commonwealth Fund/Harvard University Fellowship in Minority Health Policy, 2000–2001.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
