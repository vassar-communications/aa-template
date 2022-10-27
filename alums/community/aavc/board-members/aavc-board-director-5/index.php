<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Board Member",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg"
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
    'Sheryl Smikle ’81',
    '/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Sheryl Smikle ’81']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Board Direction, Nominating and Governance Committee Member, and Alumnae House Committee Member</li>
    <li>(she/her/hers)</li>
    <li>New York</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Vice President, Class of 1981 Committee, 2017–present; member, Campus Investor Responsibility Committee (CIRC), 2016–present; volunteer, Club Admissions Committee, 2013–2016; note writer/phoner, Vassar Fund, 1997.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Sr. Learning Partner / Training Director-Human Resources, AIG, 2017–present; Volunteer Advisor, Florence Belsky Charitable Foundation, 2017–present; author, Congratulations, You’re A Compliance Officer! Now What?, 2019; Compliance Learning & Communications Leader, GE Capital Americas, 2012–2016; Associate Dean-Baccalaureate Studies/Director, The College of Westchester, 2006–2012; Assistant Director for Disability & Support Services, Vassar College, 2004–2011; professor, SUNY at New Paltz, 2003–2004; professor, SUNY Ulster Community College, 2003–2004; Director-Compliance, American Express TRS, 1993–2004; board member, Central Harlem Partnership, 1999; adjunct professor of ESL, Hudson County Community College, 1984–1985; Spanish teacher, NYC Board of Education, 1984–1985.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
