<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Vice President and AAVC Trustee",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/forman-tyrone-aavc-alum-001.jpg"
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
    'Tyrone Forman ’92',
    '/alums/assets/img/alums-community/aavc/board/forman-tyrone-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with closely cropped dark gray hair, a mustache and goatee, with a black checkered shirt smiles at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Vice President and AAVC Trustee</li>
    <li>(he/him/his)</li>
    <li>Illinois</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>AAVC Trustee, 2021–present; chair, AAVC Ad Hoc Diversity, Equity and Inclusion Committee, 2020–2022; director, AAVC Board of Directors, 2018–present; member, AAVC Nominating and Governance Committee, 2018–present; member, AAVC Career Networking Committee, 2018–2020; presenter, Alumnae/i College, Reunion 2017; member, African American Alumnae/i of Vassar College (AAAVC), 2005–present; member, Vassar Club of Chicago, 2003–2008; volunteer, Career Advisor Program, 1995–2006; class agent, Class of 1992, 1993-1997.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Professor, University of Illinois at Chicago, 2014–present; member, State of Illinois’ Traffic and Pedestrian Stop Data Use and Collection Task Force, 2020-present; member, Anti-racism Taskforce, Board of Trustees of Phillips Academy, 2020-present; board Vice Chair, Independent Voters of Illinois-Independent Precinct Organizations, 2019-present; board member, Chicago Community Trust Foundation’s African American Legacy Fund, 2018-present; board member, Institute for the Recruitment of Teachers, Phillips Andover Academy, 2015–present; editorial board member, Sociological Methodology, 2019–present; editorial board member, Journal of Health and Social Behavior, 2014–2018; member, Visiting Advisory Board for Diversity & Equity, Vanderbilt University, 2016–2018; Associate Chancellor and Vice Provost, University of Illinois at Chicago, 2014–2017; Chair, Recruitment and Admissions Committee, Urban Serving Universities/Association of Public Land Grant Universities Biomedical Research Workforce Action Group, 2015–2016; Associate Professor, Emory University, 2008–2014; Director, James Weldon Johnson Institute for the Study of Race & Difference, Emory University, 2012–2014; fellow, Center for Advanced Study in the Behavioral Sciences, Stanford University, 2011–2012; Visiting Associate Professor, Duke University, 2010–2011; book review editor, DuBois Review: Social Science Research on Race, 2009–2014; editorial board member, Social Problems, 2008–2013; Associate Professor, University of Illinois at Chicago, 2004–2008; fellow, Research Institute of Comparative Studies in Race and Ethnicity, Stanford University, 2003–2004; Assistant Professor, University of Illinois at Chicago, 2000–2004.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
