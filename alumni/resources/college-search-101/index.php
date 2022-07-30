
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */


$page_info = '{
  "page_title":"College Search 101",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-resources-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/nav-elements/alumni-resources-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/alumni/resources/college-search/0036-22-06-kr-reunion-vassar-0040.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">College Search 101 for Vassar Families</h1>
    <p>Offered annually by the Office of Advancement in association with the Office of Admission, College Search 101 is designed to familiarize Vassar alumnae/i parents and their high school juniors with the college admission process. This program provides valuable, general information to your family as your college search process begins.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    '',
    '',
    ''
); ?>


<?php echo item_alert(
    'Announcement',
    'Dates for the Fall 2022 program have not yet been determined. Please check back in Summer 2022.',
    'info-circle',
    'alert-light alert-accent-gold'
); ?>

<h4 class="display-4 mb-4">Overview</h4>
<p>Here are some of the program highlights registered participants may expect during the session:</p>

<ul>
    <li>Meet with Vassar College admissions professionals who will share advice about what to look for in a college, and where to start.</li>
    <li>Attend valuable information sessions on financial aid and college athletics.</li>
    <li>High school juniors will meet with current Vassar students for an open discussion about college life.</li>
</ul>




<p>This program provides a broad overview into the college search process from an insider's perspective. It is not about admission to Vassar; the program is neither a feeder program nor does participation influence admission decisions at the college.</p>

<p>Due to space limitations and our desire to accommodate the most appropriate audience, participation in program activities is limited to the alumna/us and their high school junior, and one additional adult guest.</p>


<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-grants.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-alumni-benefits.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>

