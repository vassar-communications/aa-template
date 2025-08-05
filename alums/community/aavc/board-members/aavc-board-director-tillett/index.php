<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/tillett-kerri-aavc-alum.jpg"
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
    'Kerri Tillett ’91',
    '/alums/assets/img/alums-community/aavc/board/tillett-kerri-aavc-alum.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short straight dark hair and glasses wearing a white jacket and black shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>(she/her/hers)</li>
    <li>Nominating and Governance Committee Member</li>
    <li>Massachusetts/North Carolina</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Ad Hoc Diversity, Equity, & Inclusion Committee, 2021–2025.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Associate Vice Chancellor for Equal Opportunity, University of Massachusetts Amherst, 2021–present; Associate Vice President for the Division of Inclusive Excellence, the College of New Jersey, 2011–2021; Equal Employment Opportunity Officer, New Jersey Department of Transportation, 2004–2010;
Practicing attorney, 1996–2004; Law Clerk, District of Columbia Court of Appeals, 1994–1996.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
