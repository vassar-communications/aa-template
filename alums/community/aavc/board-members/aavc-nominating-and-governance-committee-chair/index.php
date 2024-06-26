<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Nominating and Governance Committee Chair",
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
    ['img_alt_text' => 'A person with long straight brown hair and a gray coat smiles at the camera']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Chair</li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Board, 2023–present; member, AAVC Nominating and Governance Committee, 2023–2024;  Vice Chair, Alumnae House Committee, 2022–present and member, 2019–2022; Program Chair, Vassar Club of the Hudson Valley, 2022 and Vice President, 2020–2022; member, Advisory Council for the Consortium on Forced Migration, Vassar College, 2018–2020;  Chair, Wisconsin Alumni Admissions Program, 2008–2016 and member, 2006–2008; note-writer/phoner, Class of 1984, 1997–1998.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Vice President, General Counsel, and Corporate Secretary, Johnson Outdoors Inc., February 2001–December 2016 (ret.). Director, Hudson Valley Credit Union since 2022 and member of the Finance and Compensation & Benefit Committees since 2023; Chair, Governance & Nominating Committee and Board Secretary, 2022–2023; pro bono immigration law attorney, My Sister’s Place, since 2022; trustee and Chair of the Finance Committee, Poughkeepsie Day School 2019–2020; Refugee Resettlement Coordinator, Greater Newburgh Interfaith Council, 2016–2018.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
