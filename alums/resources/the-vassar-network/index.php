
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"The Vassar Network",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/vassar-network/0036-22-06-kr-reunion-vassar-0148.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Two people embrace at a crowded event']); ?>

<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'The Vassar community is global, connected, and powerful.',
    $alums_img_path.'alums-resources/vassar-network/0039-22-06-cs-reunion-vassar-403.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Reunion attendee in a procession raising hand in the air and smiling']
); ?>
<p>Whether you’re looking to reconnect with old friends, network with others in your field, seek or post job and internship opportunities, or benefit from the guidance and advice of others, the Vassar family is here for you. Get and stay connected using the tools below.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Join VassarNet',
    $alums_img_path.'alums-resources/vassar-network/0036-22-06-kr-reunion-vassar-0120.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Two people and a networking event listening to someone off screen']
); ?>

<p>Sign up for <a href="https://vassarnet.vassar.edu/">VassarNet</a>, our online platform for professional networking and connections. Take a few minutes to complete your VassarNet profile and tap into the power of the Vassar network.</p>

<p>Within the platform, you can post or apply for job and internship opportunities, answer questions a student or alum may have that are within your field of expertise, or expand your own network by connecting with one of the thousands of other alums.</p>

<?php echo cta_link(
    'https://vassarnet.vassar.edu/',
    'Launch VassarNet'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    'Directories',
    null,
    '',
    ''
); ?>
<p>Stay connected with your fellow alums and foster lasting connections beyond the College’s gate. </p>


<?php echo item_iconItem(
    'Social Media Directories',
    'people-group',
    'icon-on-left theme-white-border'
); ?>

<ul class="linked-list">
    <li><a href="https://www.vassar.edu/social-media">Vassar Social Media Directory</a></li>
    <li><a href="https://www.vassar.edu/social-media-alums#regional-clubs">Vassar Clubs</a></li>
    <li><a href="https://www.vassar.edu/social-media-alums/#affinity-groups">Vassar Multicultural and Affinity Groups</a></li>
</ul>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Alum Directory',
    'address-book',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">The Alum Directory</a></li>
</ul>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-alums-benefits.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-career-support.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
