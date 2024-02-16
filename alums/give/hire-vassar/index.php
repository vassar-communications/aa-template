<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Hire Vassar",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-give/hire/hire.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'A large tree with orange leaves above a walkway with a bench next to it on the Vassar Campus.']); ?>

<?php echo interior_page_nav() ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-give/hire/0006-19-01-kr-scc-career-clusters-vassar-0522.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A person with short dark hair, glasses, and a purple button-down shirt, wearing a name tag that says Seiji, sits in a chair in a classroom talking.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-3 mb-4">Add Vassar Talent to Your Team</h1>
    <p class="mb-3">Vassar students and alums are great candidates for internships and positions at all levels within your organization. Keep Vassar in mind when considering your next professional vacancy.</p>
    <a href="https://offices.vassar.edu/career-education/info/employers/" class="px-0 btn btn-link mt-5 arrow">Information for Employers</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    '/alums/assets/img/alums-give/hire/hire-vassar-52632404398_32dd113963_o.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'Four people standing in a room in casual clothing with their arms around one another smile at the viewer.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-3 mb-4">Post a Job on VassarNet</h1>
    <p class="mb-3">VassarNet opens doors for students and alums alike, connecting them to a powerful online resource to build meaningful professional relationships and find opportunities.</p>
    <a href="https://vassarnet.vassar.edu/" class="btn btn-link px-0 mt-5 arrow">Launch VassarNet</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-mentor.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
