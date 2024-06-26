<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg"
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
    'Maybelle Taylor Bennett&nbsp;’70',
    '/alums/assets/img/alums-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person wearing a purple head covering, glasses, and a purple scarf smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alum Recognition Committee Member and Career Networking Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Washington, D.C.</li>
    <li>Term of Service: 2021–2025</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Class agent, Class of 1970, 2018–present; member, Club Admission Committee, 1997–2009; notewriter/phoner, Annual Fund, 2005–2006; member, AAVC Nominating Committee, 2002–2005; panelist, 30th Anniversary Celebration of the Africana Studies Program at Vassar, 2001.

</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Director, Howard University Community Association, Howard University, 1996–2019; member, Board of Directors, Douglass Community Land Trust, 2020–present; pastor, Covenant Christian Community 2013–present; assistant for community relations and planning, Howard University, 1991–1996; commissioner and chair, Zoning Commission of the District of Columbia, 1982–1998; member, Leadership Washington, 1991–present; member, Lambda Alpha Land Economics Society, 1984–present; member of the Board of Directors of the D.C. Building Industry Association, 2000–2015; director of research, Coalition on Human Needs, 1984–1990; director of research, Working Group for Community Development Reform, 1978–1981.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
