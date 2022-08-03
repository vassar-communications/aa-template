<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Reunions",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-calendar/reunion/Vassar_Reunion_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Welcome Back',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Saturday_190608_CS-V815-310.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p>Vassar and the Alumnae/i Association (AAVC) are thrilled about the return to in person Reunions and can’t wait to welcome you and your classmates back to campus. This page will be updated periodically to provide the latest information about Reunion, which happens on campus in early June every year. Reunion registration opens in early April.</p>
<p>If you have questions, don’t hesitate to write to: <a href="mailto:reunion@vassar.edu">reunion@vassar.edu</a> or call <a href="tel:800-443-8196">800-443-8196</a>.</p>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'See General Reunion Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_Parade_180609_KR_8754.jpg',
    'theme-burgundy',
    ''
); ?>
<p>Click here to view the full schedule for the upcoming reunion weekend.</p>
<?php echo cta_link(
    '#',
    'See the schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'See 50th Reunion Class Schedule',
    $alumni_img_path.'alumni-calendar/reunion/Reunion_1806_CS_073.jpg',
    'image-is-first',
    ''
); ?>
<p>This year's 50th reunion programming will include the class of 1972. Click here to view a list of 50th reunion class programs.</p>
<?php echo cta_link(
    '#',
    'See the schedule'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

