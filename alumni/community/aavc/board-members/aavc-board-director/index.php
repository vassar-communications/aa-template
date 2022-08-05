<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/becker-gail-aavc-alum-001.jpg"
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
    'Gail Becker ’64',
    '/alumni/assets/img/alumni-community/aavc/board/becker-gail-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Gail Becker ’64']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Board Director</li>
    <li>(she/her/hers)</li>
    <li>New Jersey</li>
    <li>Term of Service: 2022–2026</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Alumnae/i Recognition Committee, 2021–present; Nominating Committee chair, Class of 1964, 2019–present; President, Class of 1964, 2014–2019; chair, Class of 1964 Landmark Reunion Gift Committee, 2011–2014; chair, Class of 1964 Class Fund, 2009–2011; class agent, Class of 1964, 1997–2019; member, Class of 1964 Reunion Gift Committee, 2009–2009, 2001–2004, 1998–1999; notewriter/phoner, Phonathon, 2005–2008; member, Ad Hoc Vassar Club of Louisville, 1991–2019; member, Vassar Club of Washington, DC, 1968–1990; volunteer, Vassar Book Sale, 1969–1990.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Museum and Nonprofit Consultant, 2008–present; Founding Director, Brightside Foundation, 2014–2016; Executive Director, Louisville Science Center, 1991–2008; Exhibits Development and Production Chief, U.S. Information Agency, 1987–1991; Exhibits Project Officer, U.S. Information Agency, 1968–1987; Architecture–USA Exhibit Guide in U.S.S.R., 1965; Board of Directors: Louisville Public Media, 2013–2020; Louisville Downtown Development District, 2007–2010; (Louisville) Arts and Cultural Attractions Council, 1998–2008; American Association of Museums, 1994–1997; Kentucky Science and Technology Council, 1994–2008; (Louisville) Main Street Association, 1994–2009; Association of Science–Technology Centers, 1993–2007 (President 2000–2002); Honors: Ambassador of Science Literacy, 2017; Honorable Order of Kentucky Colonels, 2000; Federal Design Achievement Award, 1984, 1987–1990, 1998; U.S. Information Agency Special Achievement Award, 1988.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
