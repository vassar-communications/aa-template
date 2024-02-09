<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Career Networking Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/tellez-carlos-hernandez-aavc-alum-001.jpg"
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
    'Carlos Hernandez Tellez ’14',
    '/alums/assets/img/alums-community/aavc/board/tellez-carlos-hernandez-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with wavy black hair, a mustache, and a light gray jacket over a black shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Career Networking Committee Chair and Ad Hoc Diversity, Equity, and Inclusion Committee Member</li>
    <li>Brazil</li>
    <li>Term of Service: 2022–2027</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Chair, Club Admission Committee, 2018–present; member, Club Admission Committee, 2017–2018.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>UX Research Manager @ Growth, Nubank, March 2022–present; member, Anti-Racism, Diversity, Equity and Inclusion (ARDEI) Steering Group of the UWC International Board, 2021–present; Chair of the National Committee, UWC Brazil, 2020–present; Design Mentor, adplist.org, 2020–2021; São Paulo Community Garden, 2020; Field Researcher, Laboratorio de Educação, 2019; Senior Service Designer & Researcher, Fjord, Part of Accenture Interactive, 2017–2019; Project Associate, PLANE—SITE, 2016–2017; Design Research Fellow, Harvard University, 2015; board member, Poughkeepsie Farm Project, 2011–2014; Student Docent & Multimedia Assistant, Frances Lehman Loeb Art Center, 2011–2014; Latin American and Caribbean Laboratory Intern, Columbia University Graduate School of Architecture, Planning & Preservation, 2012; Development Intern, Urban Design Forum, 2012; Design Research Intern, Interboro Partners, 2013; Community Fellow, Poughkeepsie Farm Project, 2011; Diver and Underwater Photographer, LPCUWC Marine Research Unit, 2008–2010; Project Coordinator, Playground People, 2010.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
