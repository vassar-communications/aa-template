<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/bennett-maybelle-taylor-aavc-alum-001.jpg"
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
    'Maybelle Taylor Bennett&nbsp;’70',
    '/alums/assets/img/alums-community/aavc/board/Maybelle-Taylor-Bennett-2025.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Maybelle Taylor Bennett ’70, a person with short, gray hair styled in a bun, wearing round eyeglasses, gold hoop earrings, and a multicolored knitted shawl in shades of red, orange, teal, and brown, standing against a plain light-colored background.']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Trustee and Alum Recognition Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Washington, D.C.</li>
    <li>Term of Service: 2025–2029</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Trustee, Board of Trustees, 2025–present; director, AAVC Board of Directors, 2021–present; member, AAVC Alum Recognition Committee, 2021–present; member, AAVC Career Networking Committee, 2021–2025; class agent, Class of 1970, 2018–2021; member, Club Admission Committee, 1997–2009; notewriter/phoner, Annual Fund, 2005–2006; member, AAVC Nominating Committee, 2002–2005; panelist, 30th Anniversary Celebration of the Africana Studies Program at Vassar, 2001.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Director, Howard University Community Association, 1996–2019; Assistant for Community Relations and Planning, Howard University, 1991–1996; Member Board of Directors, Douglass Community Land Trust, 2020–2024; Pastor, Covenant Christian Community, 2013–2023; Member Board of Directors, D.C. Building Industry Association, 2000–2015; Commissioner and Chair (7 years), Zoning Commission of the District of Columbia, 1982–1998; Member, Leadership Greater Washington, 1991–present; Member, Lambda Alpha Land Economics Society, 1984–present; Director of Research, Coalition on Human Needs, 1984–1990; Director of Research, Working Group for Community Development Reform, 1978–1981.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
