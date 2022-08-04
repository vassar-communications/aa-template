<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC President and AAVC Trustee",
  "page_classes":"",
  "feature_image":"/assets/images/placerholders/placeholder-banner.png"
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
    'Monica Vachher ’77',
    '/alumni/assets/img/alumni-community/aavc/board/vachher-monica-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    ''
); ?>

  <ul class="clean-list-with-borders">
    <li>(she/her/hers)</li>
    <li>Pennsylvania</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>AAVC Vice President, 2021–2022; AAVC Trustee, 2021–present; member, AAVC Ad Hoc Diversity, Equity, and Inclusion Committee, 2019–2021; member, Alumnae/i Recognition Committee, 2013–2021; director, AAVC, 2016-2020; chair, Nominating and Governance Committee, 2016–2020; member, Nominating and Governance Committee, 2014–2016; notewriter, Annual Fund, 2012–2018; Trustee, Vassar College (chair of Budget and Finance, Academic Affairs, and Investor Relations Committees; member of Executive Committee and Presidential Search Committee), 1996–2008; interviewer/chair, Alumnae/i Admissions Program Chicago, 1990–1998; Vassar enthusiast since 1973.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Co-founder, Higher Education Advisors, 2009–present; financial executive and securities lawyer at UBS Securities, Bear Stearns, Financial Security Assurance (FSA), Kutak Rock & Campbell, and the Astor Group Ltd., 1981-present; board member of institutions focused on education and international development, including CARE, IES Abroad, the Free Library of Philadelphia, the University of Pennsylvania Press, the International House at the University of Chicago, and the Latin School of Chicago; board member of CMG, Washington DC; founding member of the U.S. Committee for the United Nations High Commissioner for Refugees (UNHCR); and appointed by President Clinton to serve on the board of the Central Asian-American Enterprise Fund.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
