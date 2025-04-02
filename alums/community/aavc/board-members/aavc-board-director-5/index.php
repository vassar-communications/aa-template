<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
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
    'Sheryl Tracy Smikle ’81',
    '/alums/assets/img/alums-community/aavc/board/smikle-sheryl-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short curly gray hair, and a black shirt with colored flowers on it smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>Nominating and Governance Committee Vice Chair and Alumnae House Committee Member</li>
    <li>(she/her/hers)</li>
    <li>Georgia</li>
    <li>Term of Service: 2020–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Class Agent, Class of 1981, 2023–present; Steering Committee member, Vassar Club of Atlanta, 2023–present; Student Life Committee member, African American Alumnae/i of Vassar College (AAAVC), 2023–present; volunteer, Club Admission Committee, 2023–present; committee member, Vassar Club of Atlanta, 2022–present; Director, AAVC Board of Directors, 2020–present; member, AAVC Alumnae House Committee, 2020–present; member, AAVC Nominating and Governance Committee, 2020–present;  Vice President, Class of 1981 Committee, 2017–present; Class Agent, Class of 1981, 2023–2023; member, Campus Investor Responsibility Committee (CIRC), 2017–2021; volunteer, Club Admission Committee, 2013–2016; note-writer/phoner, Vassar Fund, 1996–1997.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Director of Network Training and Facilitation, National CASA/GAL Association for Children, 2025–present; Training Director/Insurance and Business Learning Portfolio Management—Human Resources, AIG, 2017–2024; Volunteer Advisor, Florence Belsky Charitable Foundation, 2017–present; author, <em>Congratulations, You’re a Compliance Officer! Now What?</em>, 2019; Compliance Learning & Communications Leader, GE Capital Americas, 2012–2016; Associate Dean-Baccalaureate Studies/Director, the College of Westchester, 2006–2012; Assistant Director for Disability & Support Services, Vassar College, 2004–2011; professor, SUNY New Paltz, 2003–2004; professor, SUNY Ulster Community College, 2003–2004; Director-Compliance, American Express TRS, 1993–2004; adjunct professor of ESL, Hudson County Community College, 1984–1985; Spanish teacher, NYC Board of Education, 1984–1985.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
