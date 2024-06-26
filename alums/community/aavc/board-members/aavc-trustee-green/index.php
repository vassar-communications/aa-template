<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Trustee",
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
    <li>AAVC Trustee, Nominating and Governance Committe Member, Communications Advisory Committee Member, and Ad Hoc Diversity, Equity, and Inclusion Committee Member</li>
    <li>(she/her/hers)</li>
    <li>New Jersey</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, Board of Trustees, 2024–present; member, AAVC Nominating and Governance Committee, 2024–present; member, AAVC Ad Hoc Diversity, Equity, & Inclusion Committee, 2020–present; director, AAVC Board of Directors, 2018–present; chair, AAVC Nominating and Governance Committee, 2020–2024 and member, 2018–2020; member, AAVC Communications Advisory Committee, 2018–2024; mentor, Sophomore Career Connections, 2018–2020; volunteer consultant to Vassar senior staff regarding communications issues, Fall 2017; volunteer, Career Advisor Program, 1994–2006.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Chief Executive Officer & Principal, G&S Business Communications, 2024–present; Principal & Managing Director, G&S Business Communications, 2018–2024; Steering Committee member, Friends of the QueensWay, 2016–present; board member and past Chair, LifeWay Network, 2015–2023; board member, PR Council, 2017–2019; Executive Committee member, Public Relations Global Network, 2016–2018; President & CEO, CooperKatz & Company, Inc., 2011–2018; Vice President, Senior Vice President, General Manager, and President & COO, CooperKatz & Company, Inc., 1996–2011; associate, Burson-Marsteller, 1993–1996.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
