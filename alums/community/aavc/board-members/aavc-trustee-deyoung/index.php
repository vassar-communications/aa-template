<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/deyoung-patrick-aavc-alum-001.jpg"
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
    'Patrick DeYoung ’18',
    '/alums/assets/img/alums-community/aavc/board/deyoung-patrick-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person wearing a gray suit jacket over a blue shirt and a gray patterned tie looks at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Trustee and Vassar Fund Committee Member</li>
    <li>(he/him/his)</li>
    <li>Pennsylvania</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Trustee, Board of Trustees, 2022–present; director, AAVC Board of Directors, 2020–present; member, AAVC Nominating and Governance Committee, 2020–2025; member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2018–2024; member, AAVC Career Networking Committee, 2018–2020; member, AAVC Clubs Committee, 2018–2019.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Outside Buyer, Schnitzer Steel Industries, 2020–present; commercial manager-in-training, Schnitzer Steel Industries, 2019–2020; buyer/purchasing agent, Sims Metal Management, 2018–2019; veteran, Vassar Veterans Posse Program, 2014–2018; section leader (Sergeant), U.S. Army, 2007–2013.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
