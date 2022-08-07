<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"AAVC Board Director",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/ames-katrine-cage-aavc-alum-001.jpg"
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
    'Katrine “Cage” Ames ’69',
    '/alumni/assets/img/alumni-community/aavc/board/ames-katrine-cage-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Katrine “Cage” Ames']
); ?>

  <ul class="clean-list-with-borders">
    <li>Vassar Fund Committee Member and Class Engagement Committee Member</li>
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
<p>Member, Alumnae/i Recognition Committee, 2020–present; member, Class of 1969 Committee, 2020–present; Class Agent, Class of 1969, 2019–present; Reunion Co-Chair, Class of 1969, 2015–2019; Class Agent, Class of 1969, 2015; Reunion Gift Chair, Class of 1969, 2013–2014; Class Fund Co-Chair, Class of 1969, 2009–2013; reunion volunteer (created bulletin and surveys), Class of 1969, 2005–2009; Correspondent, Class of 1969, 1975–1979.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Freelance writer and editor, various publications, 2008–present; Program Editor, Spring for Music: Festival of North American Orchestra, 2010–2014; freelance writer and editor, Metropolitan Opera, 2010; writer, PBS documentary A Musical Odyssey in St. Petersburg, 2009; freelance editor, This Old House, 2009; Features Director, Condé Nast House & Garden, 1996–2007; on-air music commentator, National Public Radio’s Performance Today, 1990–2002; researcher, reporter, writer, and eventually Senior Editor, Newsweek, 1970–1996.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
