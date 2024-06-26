<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/shapiro-heller-an-aavc-alum.jpg"
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
    'Heller An Shapiro ’81',
    '/alums/assets/img/alums-community/aavc/board/shapiro-heller-an-aavc-alum.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short straight gray and black hair and glasses, wearing a sleeveless dark purple shirt, leans against a brick wall, smiling at the viewer.']
); ?>

  <ul class="clean-list-with-borders">
    <li>AAVC Board Director</li>
    <li>(she/her/hers)</li>
    <li>Maryland</li>
    <li>Term of Service: 2024–2028</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Vassar Fund Committee, 2022–present; committee member, Class of 1981, 2021–present; committee member, Class of 1981, 2020–2021; Sophomore Career Connections mentor, 2018; Co-Chair, Class Reunion Gift, 2000–2001; Co-Chair, Class of 1981, 1996–2001; Co-Chair, Class Fund, 1996–2000; AAVC Volunteer Leadership Week trainer, 1992–1993; Second Vice President, Class of 1981, 1991–1996.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Volunteer team leader, Compass Pro Bono, 2023–present; consultant, coach, Heller An Shapiro, 2008–present; volunteer grant review panelist, Maryland State Arts Council 2021, 2023; Executive Director, ArtStream, Inc., 2016–2023; board member, Head of School Search Co-Leader, Barrie School, 2015–2017; consultant, Optica, 2010–2016; Co-Leader, Executive Development Career Workshops, Executive Search Consultant, TransitionGuides, 2007–2016; consultant, Barth Syndrome Foundation, 2010–2012; Board Co-Chair, Kidsave International, 2010–2012; Executive Director, Osteogenesis Imperfecta Foundation, 1997–2007; Board of Directors member, Chair Standards of Excellence Committee, National Health Council, 2003–2007; Associate Director of Affiliate Management, Christmas in April USA/Rebuilding Together, 1997–1998; Deputy Director, State and International Services, VSA, 1995–1997; Director of Affiliate Management and Training, the Foundation Fighting Blindness, 1992–1995; Director of Volunteers, Kennedy Center, 1986–1991 and recipient of 1991 President's Volunteer Action Award; Leadership America, Class of 1993; board member, Chair of Public Issues, Chair National Summit on Trends in Volunteer Leadership Development, Association for Volunteer Administration (AVA), 1991–1993; Founder and Chair, MVP-Arts (Managers of Volunteer Programs in the Arts), 1990–1992.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
