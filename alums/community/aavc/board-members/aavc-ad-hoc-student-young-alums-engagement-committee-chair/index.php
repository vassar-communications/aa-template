<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Ad Hoc Student and Young Alumnae/i Engagement Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/winter-ellie-aavc-alum-6332.jpg"
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
    'Ellie Winter ’18',
    '/alums/assets/img/alums-community/aavc/board/winter-ellie-aavc-alum-6332.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Ellie Winter ’18']
); ?>

  <ul class="clean-list-with-borders">
    <li>Ad Hoc Student and Young Alumnae/i Engagement Committee Chair and Ad Hoc Diversity, Equity and Inclusion Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Rhode Island</li>
    <li>Term of Service: 2021–2025</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2018–present; student observer, AAVC Board of Directors, 2017–2018; member, Presidential Search Committee, 2016–2017.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Communications & Outreach, Brown University Department of Africana Studies/Rites and Reason Theatre, 2019–present; media studies educator & grant writer, Making Us Matter, 2020–present; freelance designer, Autipacha Studios, 2019–present; event and administrative coordinator, Ubuntu Pathways, 2018–2019; account coordinator, G&S Business Communications, 2018.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
