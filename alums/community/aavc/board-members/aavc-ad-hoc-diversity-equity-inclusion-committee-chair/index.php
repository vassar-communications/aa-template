<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Ad Hoc Diversity, Equity and Inclusion Committee Chair",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg"
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
    'Delia Cheung Hom ’00',
    '/alums/assets/img/alums-community/aavc/board/hom-delia-cheung-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Delia Cheung Hom ’00']
); ?>

  <ul class="clean-list-with-borders">
    <li>Ad Hoc Diversity, Equity and Inclusion Committee Chair and Nominating and Governance Member</li>
    <li>(she/her/hers)</li>
    <li>Massachusetts</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Alumnae House Committee, 2020–present; director, AAVC Board of Directors, 2018–present; member, AAVC Nominating and Governance Committee, 2018–present; member, AAVC Ad Hoc Student and Young Alumnae/i Engagement Committee, 2018–present; presenter, Alumnae/i College, Reunion 2017; volunteer, Admission Phoner Program, 2014; volunteer, Admissions Activities, 2014; member, Lei Ceremony Planning Committee, Asian Pacific Alumnae/i of Vassar College (APAVC), 2009–2011; Chair, Asian Pacific Alumnae/i of Vassar College, 2003–2011; Webmaster, Asian Pacific Alumnae/i of Vassar College, 2006–2011; volunteer, Club Admission Committee, 2009–2010; volunteer, Career Advisor Program, 2004–2006; Co-President, Asian Pacific Alumnae/i of Vassar College, 2002–2003.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Vice President, Zervas Elementary School Parent Teacher Organization, 2019–present; co-founder, Asian American Women’s Political Initiative, State House Fellowship Program, 2009–present; Director, Asian American Center, Northeastern University, 2006–2019; member of the board of directors, Asian Sisters Participating in Reaching Excellence, 2009–2010; associate, The Partnership’s Early Career Associates Program, 2008.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
