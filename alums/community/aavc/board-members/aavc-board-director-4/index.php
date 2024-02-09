<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/reid-chip-aavc-alum-001.jpg"
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
    'Chip Reid ’77',
    '/alums/assets/img/alums-community/aavc/board/reid-chip-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short straight brown hair, black suit jacket, blue patterned tie, and white shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Member and Communications Advisory Committee Member</li>
    <li>(he/him/his)</li>
    <li>Washington, DC</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Panelist, Democracy and the Fourth Estate, NYC Donor Recognition Event, December 2018; moderator, The Presidency, the Press, and Accountability, Vassar Club of DC, January 2017; Vassar College Commencement Speaker, May 2011; Class Agent, Class of 1977, 2002–2003; 2013–2014.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>National correspondent, CBS News, 2011–2021; Chief White House Correspondent, CBS News, 2009–2011; Capitol Hill Correspondent, CBS News, 2007–2009; Capitol Hill Correspondent, NBC News, 2003–2007; correspondent, NBC News (Los Angeles), 2000–2003; correspondent, NBC News (Washington, DC), 1996–2000; reporter, WJLA-TV (ABC News), 1994–1996; reporter/producer, WTTG-TV (Fox News), 1990–1993; field producer, ABC News, 1988–1989; general counsel, Biden for President, 1987; associate, Kirkpatrick & Lockhart (D.C. law firm), 1986–1987; counsel, U.S. Senate Judiciary Committee, (Ranking Democrat Senator Joe Biden), 1982–1986.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
