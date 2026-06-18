<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Bylaws",
  "page_classes":"",
  "feature_image":"/assets/images/placerholders/placeholder-banner.png"
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


<?php echo sec_regularContent(
    'Alumnae/i Association of Vassar&nbsp;College&nbsp;Bylaws',
    null,
    '',
    ''
); ?>


<p>The following changes to the 2024 AAVC bylaws have been approved by the AAVC Board, to be ratified by voice vote at the Annual Meeting of the AAVC at Reunion on June 6, 2026. Be sure to set your tracking setting to “All Markup” after opening the Word document. Contact Patricia Lamark at <a href="mailto:plamark@vassar.edu">plamark@vassar.edu</a> if you need assistance.</p>
<p>Please choose the version you wish to view:</p>
<ul>
<li><a href="/alums/assets/doc/2024-Bylaws-with-recent-amendments-Word-document-download.docx">2024 Bylaws with recent amendments (edited, Word document download)</a></li>
<li><a href="/alums/assets/doc/Proposed-2026-Bylaws-clean-Word-document-download.docx">Proposed 2026 Bylaws (clean, Word document download)</a></li>

<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>