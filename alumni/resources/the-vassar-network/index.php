
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"The Vassar Network",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/vassar-network/0036-22-06-kr-reunion-vassar-0148.jpg"
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
    'The Vassar community is Global, Connected, and Powerful.',
    $alumni_img_path.'alumni-resources/vassar-network/0039-22-06-cs-reunion-vassar-403.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p class="intro-text">Whether you’re looking to reconnect with old friends, network with others in your field, seek or post job and internship opportunities, or benefit from the guidance and advice of others, the Vassar family is here for you. Get and stay connected using the tools below.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Join VassarNet',
    $alumni_img_path.'alumni-resources/vassar-network/0036-22-06-kr-reunion-vassar-0120.jpg',
    'theme-dark-burgundy has-bg quad-pattern',
    ''
); ?>
<p>Sign up for VassarNet, our online platform for professional networking and connections. Take a few minutes to complete your VassarNet profile and make yourself available as a resource for the Vassar community.</p>

<p>Within the platform, you can answer questions a student or alum may have that’s within your field of expertise or expand your own network by connecting with one of the thousands of other alumni.</p>

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
    'Leadership Directories',
    'image',
    'icon-on-left theme-white-border'
); ?>

<ul class="linked-list">
    <li><a class="tbd" href="#">Vassar Clubs</a></li>
    <li><a class="tbd" href="#">Affinity Groups </a></li>
    <li><a class="tbd" href="#">Class by Year</a></li>
</ul>


<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Social Media Directories',
    'people-group',
    'icon-on-left theme-white-border'
); ?>

<ul class="linked-list">
    <li><a href="https://www.vassar.edu/social-media">Vassar Social Media Directory</a></li>
    <li><a href="https://www.vassar.edu/social-media-alumni">Vassar Clubs</a></li>
    <li><a href="https://www.vassar.edu/social-media-alumni">Affinity Groups </a></li>
    <li><a href="https://www.vassar.edu/social-media/class-by-year">Class by Year</a></li>
</ul>

<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Alumni Directory',
    'address-book',
    'icon-on-left theme-white-border'
); ?>
<ul class="linked-list">
    <li><a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">The Alumni Directory</a></li>
</ul>
<?php echo end_item_iconItem(); ?>

<?php echo end_sec_regularContent(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-alumni-benefits.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-career-support.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
