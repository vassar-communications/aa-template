
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alumni Benefits",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Alumni Benefits',
    '/assets/images/placeholders/placeholder-square.png',
    'image-is-first theme-cream',
    'placeholder'
); ?>
<p class="intro-text placeholder">NEED INTRO TEXT ON THIS PAGE</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Alumni Benefits',
    'theme-burgundy',
    '',
); ?>
<p>In addition to VassarConnects—an online community in which alumni can connect with each other and with the college through its <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">Alumni Directory</a> and <a href="http://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=61">other services</a>, the following benefits are also available:</p>

<?php echo item_iconItem(
    'Library',
    'book',
    'icon-on-left theme-white-border'
); ?>
<p>Once you obtain your Vassar alumni ID card, you will have to register for library privileges and get your card validated at the library circulation desk. Check library hours and/or download .pdf application for guest borrowing privileges.</p>

<?php echo cta_link(
    '#',
    'Library Website'
); ?>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Fitness Center',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Use of the facilities is subject to various rules with which you should familiarize yourself prior to your visit, including advanced registration of any guest you intend to bring to the fitness center. Please consult the athletics website for the latest information, as rules and policies are subject to change.</p>

<?php echo cta_link(
    '#',
    'Athletics Website'
); ?>
<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Vassar Alumni ID Card',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Vassar alumni ID cards provide alumni with access to the college's library and fitness center.</p>

<?php echo cta_link(
    '#',
    'Request an Alumni ID'
); ?>
<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Vassar Email Address',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Alumni can obtain a Vassar-branded @alum.vassar.edu email address/account.</p>

<?php echo cta_link(
    '#',
    'Learn more'
); ?>
<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'VassarNet',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Alumni, students, parents, faculty, and friends of Vassar can join to build their network and find Vassar-connected career networking opportunities.</p>

<?php echo cta_link(
    '#',
    'Join Vassarnet'
); ?>
<?php echo end_item_iconItem(); ?>



<?php echo item_iconItem(
    'Grants & Fellowships',
    'image',
    'icon-on-left theme-white-border'
); ?>
<p>Alumni are eligible to apply for a variety of grants and fellowships.</p>

<?php echo cta_link(
    '/alumni/resources/grants-fellowships',
    'Learn more about Grants & Fellowships'
); ?>
<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralumni(); ?>
