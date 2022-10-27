<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Vice President and AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/farkas-brian-aavc-alum-001.jpg"
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
    'Brian Farkas ’10',
    '/alums/assets/img/alums-community/aavc/board/farkas-brian-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Brian Farkas, AAVC Vice President and AAVC Trustee']
); ?>

  <ul class="clean-list-with-borders">
    <li>(he/him/his)</li>
    <li>New York</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Vice President, AAVC Board, 2018–present; AAVC Trustee, Board of Trustees, 2018–present; campaign co-chair, 2021–present; interim chair, AAVC Clubs Committee, 2021–present; chair, Clubs and Regional Networks Committee, 2016–2018; President, Vassar Club of New York, 2014–2018; mentor, Sophomore Career Connections, 2015–2018; member, Nominating Committee, 2014–2017; board member, Vassar Club of New York, 2011–present; member, Annual Fund Council, 2013–present; co-chair, Class of 2010 Fund, 2010–present; interviewer/college fair representative, Alumnae/i Admissions Program, 2011–present; member, Campaign Committee for the Vassar 150: World Changing Campaign, 2011–14.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Attorney, Arent Fox Schiff (formerly Arent Fox LLP), 2020–present; Adjunct Professor of Law, Brooklyn Law School, 2014–present; Adjunct Professor, City University of New York, 2015–present; Judicial Law Clerk, U.S. District for the Southern District of New York, 2019–2020; Attorney, Goetz Fitzpatrick LLP, 2013–2018; volunteer mediator, New York State Court System, 2012–present.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
