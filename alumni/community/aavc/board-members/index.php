<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Board Members",
  "page_classes":"",
  "feature_image":"/assets/images/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_regularContent(
    'Board of Directors',
    '',
    ''
); ?>

<p>The Alumni Association of Vassar College (AAVC) Board of Directors is a group of dedicated volunteers that serves the college and more than 40,000 alumni at the highest level. The Board manages the affairs of the AAVC, working closely with the college's Associate Vice President for Alumni Engagement and Executive Director of the AAVC, and meets regularly in October, February, and in June at Reunion. Most of the Board’s work, however, is accomplished by hard-working committees comprised of directors, volunteers, observers, and staff leads.</p>

<p>Current standing committees are devoted to these AAVC priorities: Alumnae House, Alumnae/i Recognition, Career Networking, Clubs, Class Engagement, Communications, Nominations and Governance, and the Vassar Fund. The Board regularly examines programming and policy to ensure that the AAVC meets the varied needs of its diverse, worldwide constituents and advances the interests and mission of Vassar in relevant and substantive ways. Six AAVC directors also serve as Vassar College trustees. Additionally, observers from the AAAVC and the college student leadership attend the AAVC board and committee meetings.</p>

<p>A call for nominations to the Board is held each year in the fall, with elections occurring in June, at Reunion. The board encourages nominations of individuals who have high levels of professional achievement as well as experience serving the college, and who reflect the diverse backgrounds of our over 40,000 constituents.</p>

<?php echo end_sec_regularContent(); ?>

<?php echo sec_wideContent(
    null,
    '',
    'theme-cream',
    ''
); ?>

<?php echo sec_hasColumns(
    'Current AAVC Board Members',
    4,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/tmp/sample-bio.php');?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>
<?php echo end_sec_wideContent(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-groups.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-notable-alumni.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-news.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

