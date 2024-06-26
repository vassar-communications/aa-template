<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alum Recognition Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/gamarra-eddie-aavc-alum.jpg"
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
    'Eddie Gamarra ’94',
    '/alums/assets/img/alums-community/aavc/board/gamarra-eddie-aavc-alum.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short dark hair wearing a dark suit jacket and blue button-down shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Alum Recognition Committee Chair</li>
    <li>(he/him/his)</li>
    <li>California</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Alumnae/i Recognition Committee, 2023–2024; board member, Vassar Club of Greater Los Angeles, 2021–2022; member, AAVC Alumnae/i Recognition Committee, 2016–2020; Vice President, Vassar Club of Southern California, 2013–2016 and Co-Chair, 2012–2013; volunteer, Club Admission Committee, 1998–2015; member, AAVC Nominating and Governance Committee, 2009–2012; note-writer/phoner, Class of 1994, 2009–2010, 2007–2008, 2005–2006, and 1996–1997; Director at Large, AAVC Board of Directors, 2004–2008; member, AAVC Vassar Fund Committee, 2005–2007; President, Class of 1994, 1994–1999.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Advisory Board member, Glendale Community College, 2022–present; Vice President, Literary Affairs, Paramount Global Kids & Family and Nickelodeon’s Awesomeness, Paramount, 2019–2024; Vice President, Studio Development, Nickelodeon, 2019–2021; co-head of the book department/Literary Manager/Producer, the Gotham Group, 2004–2019; visiting assistant professor, Emory University, 2002–2003.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
