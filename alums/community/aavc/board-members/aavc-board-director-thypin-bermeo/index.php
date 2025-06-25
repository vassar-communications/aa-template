<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/Sam-Thypin-Bermeo.jpg"
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
    'Sam Thypin-Bermeo ’11',
    '/alums/assets/img/alums-community/aavc/board/Sam-Thypin-Bermeo.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Sam Thypin-Bermeo ʼ11, a person with short dark hair and glasses smiling and wearing a gray hoodie layered over a dark shirt.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alum Recognition Committee Member and Alumnae House Committee Member</li>
    <li>(he/him/his)</li>
    <li>New York</li>
    <li>Term of Service: 2025–2029</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Correspondent, Class of 2011, 2022–present; mentor, Sophomore Career Connections, 2024; Social Media Coordinator, Vassar Club of South Florida, 2022–2023; Communications Chair, Vassar Club of South Florida, 2021–2023.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Assistant United States Attorney, United States Attorney for the District of New Jersey, 2023–present; Principal, Thypin Bermeo PLLC, 2022–2023; Staff Attorney, Florida Justice Institute, 2020–2022.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
