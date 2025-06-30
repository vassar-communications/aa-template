<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/neuwirth-michael-aavc-alum.jpg"
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
    'Michael Neuwirth ’89',
    '/alums/assets/img/alums-community/aavc/board/neuwirth-michael-aavc-alum.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with close-shaven hair, beard, and mustache, wearing glasses, smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Member and Alumnae House Committee Member</li>
    <li>(he/him/his)</li>
    <li>New York</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Class Engagement Committee, 2022–present; President, Class of 1989, 2019–present; Class Agent, Class of 1989, 2017–2020; volunteer, Club Admission Committee, 2002–2013.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Corporate Communications & Public Relations Consultant, Neuwirth Communications, LLC, 2020–present; angel investor, 2020–present; Chief Communications Officer, American Sustainable Business Network, 2021–2022; Public Relations & External Communications Lead, Danone, 2005–2020; Senior Vice President, Ruder Finn, 2003–2005; Director of Corporate Communications, Acirca, Inc, 2001–2003; Public Relations Manager, Danone, 1994–2001; Senior Account Executive, Porter Novelli, 1990–1994.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
