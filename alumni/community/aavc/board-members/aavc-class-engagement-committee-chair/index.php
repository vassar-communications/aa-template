<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Class Engagement Committee Chair",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/board/dempsey-alexandria-aavc-alum-001.jpg"
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
    'Alexandria Dempsey ’09',
    '/alumni/assets/img/alumni-community/aavc/board/dempsey-alexandria-aavc-alum-001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Alexandria Dempsey']
); ?>

  <ul class="clean-list-with-borders">
    <li>Class Engagement Committee Chair and Clubs Committee Member</li>
    <li>(she/her/hers)</li>
    <li>California</li>
    <li>Term of Service: 2020–2024</li>
  </ul>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Additional Vassar Volunteer Experience',
    null,
    '',
    ''
); ?>
<p>Member, AAVC Clubs Committee, 2018–present; President, Vassar Club of the Bay Area, 2017–present; President, Class of 2009, 2014–present; Co-President, Vassar Club of the Bay Area, 2016–2017; Co-Chair, Class of 2009 Reunion Committee, 2013–2014; board member, Vassar Club of New York, 2011–2013; member, Club Admissions Committee, 2009–2016.</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_regularContent(
    'Professional/Community Experience',
    'theme-extralightgray',
    '',
    ''
); ?>
<p>Director of Marketing, af&co., 2019–present; Vice President of Marketing & Branding, Puccini Group, 2018–2019; Co-Founder, The Cutting Board, 2017–2018; Founder, Taste with Alexandria, 2016–2017; Brand Manager, Caviar, Inc., 2014–2015; Brand Manager, The Florence Group, 2013–2014; Coordinator of New Business, Scripps Networks, 2011–2013; Office Coordinator, Scripps Networks, 2009–2011.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
