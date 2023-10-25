<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumnae/i Recognition Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/pullman-amy-aavc-alum-001.jpg"
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
    'Amy Pullman ’71',
    '/alums/assets/img/alums-community/aavc/board/pullman-amy-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short curly gray-brown hair and a white collared shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alumnae/i Recognition Committee Chair</li>
    <li>(she/her/hers)</li>
    <li>Virginia</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Class Agent, Class of 1971, 2017–present; member, Alumnae/i Recognition Committee, 2016–present; President, Class of 1971, 2011–present; volunteer, Career Advisory Network, 2008–present; member, Reunion Steering Committee, 2016–2019; member, AAVC Nominating Committee, 2010–2013; member, Club Admissions Committee, 2007–2009; Reunion Co-Chair, Class of 1971, 2000–2001; President, Class of 1971, 1995–1999; Reunion Chair, Class of 1971, 1995–1996; Vice President, Class of 1971, 1991–1995; President, Class of 1971, 1986–1991; volunteer, Class of 1971, 1982; Vice President, Class of 1971, 1976–1986.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Assistant Clinical Professor of Pediatrics, The George Washington University School of Medicine, 2000–present; pediatrician, Pullman Associates Pediatrics (Panda Pediatrics), 1999–present; staff pediatrician, Sibley Memorial Hospital, 1984–1999.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
