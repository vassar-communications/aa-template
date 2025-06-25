<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Clubs Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/solum-andrew-aavc-alum-001.jpg"
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
    'Andrew Solum ’89',
    '/alums/assets/img/alums-community/aavc/board/solum-andrew-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short brown hair, a black jacket, and a blue and white striped shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Clubs Committee Chair and Alum Recognition Committee Member</li>
    <li>(he/him/his)</li>
    <li>United Kingdom</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Vice Chair, AAVC Clubs Committee, 2021–present; member, Club Admissions Committee, 2020–present; President, Vassar Club of the United Kingdom, 2014–present; committee member, AAVC Clubs Committee, 2016–2021; Vice President, Vassar Club of the United Kingdom, 2005–2014, member, Vassar Club of the United Kingdom/Vassar Club of London, 1990–2010.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Director, Kellanco Associates Ltd., 2015–present; Director, Travel Industry Associates Ltd., 1998–2015; member, British Airways International Advisory Board, 2011–2019; member, Young Vic Gala Committee 2007–2010; volunteer, FareShare (tackling food waste) 2019–present; volunteer, Flying Start 2012; Advisor to the UK Houses of Parliament 2009–2016; Professional Services supplied to the aviation sector: British Airways, Air New Zealand, BA CityFlyer, Air Berlin, Silverjet, United Airlines; Professional Services supplied to the hospitality industry: Westin Hotels & Resorts, Shangri-la Hotels & Resorts; Professional Services supplied to: Amlin Corporate Insurance, Liberum Capital Inc., Global Crossing, United Grand Lodge of England, B. Braun Medical Industries Snd. Bhd. (Malaysia); Mayfair Capital Management; Chartered Institute of Marketing, Royal & Sun Alliance Investment Management; <span class="inline-block">?Whatif!</span> Innovation; Regus Serviced Offices (now IWG); ZBI Europe, ABC Executive Travel; Judge, Business Travel World Awards 2007–2009; Travel Manager, Inmarsat 1993–1998; Press: <em>BBC</em>, <em>BBC World</em>, <em>The Financial Times</em>, <em>The Daily Telegraph</em>, <em>The Times of London</em>, <em>Business Traveller</em>, <em>Business Travel World</em>.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
