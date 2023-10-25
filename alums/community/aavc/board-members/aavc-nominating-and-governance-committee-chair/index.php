<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Nominating and Governance Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/green-anne-aavc-alum-001.jpg"
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
    'Anne Green ’93',
    '/alums/assets/img/alums-community/aavc/board/green-anne-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with wavy grey-black hair pulled back from their face, a dark blue jacket over a red shirt, and a red beaded necklace smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Chair, Communications Advisory Committee Member and Ad Hoc Diversity, Equity and Inclusion Committee Member</li>
    <li>(she/her/hers)</li>
    <li>New Jersey</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Director, AAVC Board of Directors, 2018–present; member, AAVC Nominating and Governance Committee, 2018–present; member, AAVC Communications Advisory Committee, 2018–present; mentor, Sophomore Career Connections, 2018–2020; volunteer consultant to Vassar senior staff regarding communications issues, Fall 2017; volunteer, Career Advisor Program, 1994–2006.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Principal & Managing Director, G&S Business Communications, 2018–present; Steering Committee member, Friends of the QueensWay, 2016–present; board member and current Chair, LifeWay Network, 2015–present; board member, PR Council, 2017–2019; Executive Committee member, Public Relations Global Network, 2016–2018; President & CEO, CooperKatz & Company, Inc., 2011–2018; Vice President, Senior Vice President/General Manager, and COO, CooperKatz & Company, Inc., 1996–2011; associate, Burson-Marsteller, 1993–1996.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
