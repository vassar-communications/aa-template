<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/nixon-natalie-aavc-alum-001.jpg"
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
    'Natalie Nixon ’91',
    '/alums/assets/img/alums-community/aavc/board/nixon-natalie-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Natalie Nixon, AAVC Trustee']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Trustee and Career Networking Committee Chair</li>
    <li>(she/her/hers)</li>
    <li>Pennsylvania</li>
    <li>Term of Service: 2019–2023</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Board, 2016–present; chair, Career Networking Committee, 2018–present; member, Career Networking Committee, 2017–2018; member, Nominations Committee, 2016–2018; presenter & mentor, Sophomore Career Connections, 2017 and 2018; member, Clubs and Regional Networks Committee, 2016–2017; volunteer, Career Advisory Network, 2006–2016; volunteer, Annual Fund (notewriter/phoner), 2011; member, AAAVC Phonathon Program, 2008–2009; volunteer, Club Admission Committee, 1999–2010; volunteer, Career Advisor Program, 1995–2006.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>President &amp; innovation strategist, Figure 8 Thinking, LLC, 2015–present; global speaker, BigSpeak, 2017–present; contributing writer, <em>Inc. Magazine</em>, 2014–present; associate professor &amp; founding director, The Strategic Design MBA Program, Jefferson University, 2001–2017; editor &amp; author, <em>Strategic Design Thinking: Innovation in Products, Services, Experiences and Beyond</em>, 2015; sourcing associate, Mast Industries, 1999–2001; commissioner, The Philadelphia Art Commission, 2017–present; board member, Leadership + Design, 2017–present; member, Advisory Council, Arts &amp; Business Council of Greater Philadelphia, 2014–2017.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
