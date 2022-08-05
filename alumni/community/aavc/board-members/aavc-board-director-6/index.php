<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/st-john-keith-aavc-alum-001.jpg"
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
    'Keith St John ’81',
    '/alumni/assets/img/alumni-community/aavc/board/st-john-keith-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Keith St John ’81']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Board Director
</li>
    <li>(he/him/his)</li>
    <li>New York</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Co-President, Class of 1981, 2021–present; President, Class of 1981, 2020–2021; committee member, Class of 1981, 1996–2001.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Profile and Search Committee for 10th Bishop of Albany, Episcopal Diocese Of Albany, 2021–present; Director of Ethics, NYS Joint Commission on Public Ethics, 2017–present; Committee on Character & Fitness member, New York State Supreme Court, 2016–present; Deputy Counsel, New York State Senate, 1999–2017; Solo Practitioner, Law Office of Keith C. St John, Esq., 1997–2017; President, Legal Aid Society of Northeastern New York, 1991–2011; Assistant Public Defender, Albany County Government, 1995–1999; Law Guardian, New York State Supreme Court, Appellate Division, Third Department, 1989-1999; Alderman, City of Albany, 1990–1997; Staff Attorney and Clinical Instructor, Albany Law School, 1992–1997; Associate, Walter, Thayer & Mishler, P.C., 1989–1992; Staff Attorney, Legal Aid Society of Northeastern New York, 1985–1989; Legal Intern, Office of the Attorney General of the State of New York, 1983; Legislative Assistant, U.S. House of Representatives, 1982; Account Clerk, County Of Westchester, 1978–1981; Director, City of White Plains, New York, 1978.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
