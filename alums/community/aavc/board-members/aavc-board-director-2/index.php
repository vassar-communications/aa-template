<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/alisa-swire.jpg"
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
    'Alisa Swire ’84',
    '/alums/assets/img/alums-community/aavc/board/alisa-swire.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Alisa Swire ’84']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Board Director</li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li>Term of Service: 2023–2027</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Vice-chair, Alumnae House Committee, 2022–present, and member, 2019–2022; Club Admission Committee chair, 2008–16, and member, 2006–present; program chair, Vassar Club of the Hudson Valley, 2022 and vice president, 2020–2022; member, Advisory Council for the Consortium on Forced Migration, Vassar College, 2018–2020; notewriter or phoner, Class of 1984, 1997–1998.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Board of Directors, Board Secretary and Chair of the Governance and Nominations Committee, Hudson Valley Credit Union, 2022–present;  Pro Bono Attorney, My Sister’s Place, 2022; Legal Advisor and Director, Conversations Unbound, 2017–2020; Director and Chair of the Finance Committee, Poughkeepsie Day School, 2019–20; Refugee Resettlement Coordinator, Greater Newburgh Interfaith Council, 2016–18; Vice President, General Counsel and Corporate Secretary, Johnson Outdoors Inc., 2001–2016; Director, Mergers & Acquisitions, Walmart International, Wal-Mart Stores Inc, 1999–2001; Director, Corporate Development, Case Corporation, 1996–1999; Senior Tax Counsel, Case Corporation, 1994–1996; lecturer, Golden Gate University, 1992–1994; associate, corporate tax, Shearman & Sterling LLP, 1988–1992.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
