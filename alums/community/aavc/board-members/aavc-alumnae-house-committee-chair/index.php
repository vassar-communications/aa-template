<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumnae House Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/estrada-james-aavc-alum-001.jpg"
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
    'James Estrada ’13',
    '/alums/assets/img/alums-community/aavc/board/estrada-james-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short black hair, a mustache and beard, arms crossed, a gray jacket, and a black shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alumnae House Committee Chair and Vassar Fund Committee Member</li>
    <li>(he/him/his)</li>
    <li>Michigan</li>
    <li>Term of Service: 2021–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Chair, AAVC Alumnae House Committee, 2022–present; member, AAVC Vassar Fund Committee, 2022–present; director, AAVC Board of Directors, 2021–present; member, Latino/a Alumnae/i of Vassar College (LAVC), 2016–present; volunteer, Admissions Activities, 2015–present; member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2021–2024; member, Club Admission Committee, 2013–2023; member, AAVC Alumnae House Committee, 2021–2022; member, Alumnae/i Club Programming Committee, 2016–2018; volunteer, Admission Phoner Program, 2015–present.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Associate Director, Latinx Innovation, Planned Parenthood Federation of America, August 2022–present; Director of Innovation, The Sound, February 2022–June 2022; operations manager–medically tailored meals, Relish Works, 2021–2022; innovation project lead–design strategy, Relish Works, 2018–present; founder & artist, Dreaming Collective, 2015–present; marketing specialist–innovation consulting, Gensler, 2017–2018; Latin America marketing specialist, Gensler, 2015–2017; marketing manager, Studio Hillier, 2014–2015; research assistant, Interboro Partners, 2012; marketing and sales, Adirondack Creamery, 2007–2012.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
