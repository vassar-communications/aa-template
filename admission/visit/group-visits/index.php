
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Group Visits",
  "feature_image": "/admission/assets/images/visit/group/0100-21-10-kr-fw-arboretum-vassar-0270.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/*$page_info = [
  'page_title' => 'Group Visits',
  'feature_image' => $admission_img_path.'visit/group/0100-21-10-kr-fw-arboretum-vassar-0270.jpg'
];
*/
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Large group of students walking into a building']); ?>

<?php echo hamburger_navigation(); ?>

<?php echo interior_page_nav() ?>


<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/group/0098_15_09_KR_0019-flip.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Students sitting in a class listening']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Groups from high schools and community-based organizations can request an on campus or interactive virtual visit specifically for their group to learn more about the academic, residential, and student life experience at Vassar.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent(
    null,
    '',
    '',
    ''
); ?>

<?php echo item_iconItem(
  'Scheduling a Group Visit',
  'people-group',
  'icon-on-left'
); ?>
<p>Group visits are offered to groups of 5 to 30 high school students (with at least one adult chaperone for every 10 students), and can be customized to fit the needs of the group. Visits may include general information about Vassar, presentations about topics such as choosing a major or writing the college essay, or a Q&A session with current students.</p>
<p class="mb-5">Group visits can be scheduled Monday through Friday between 9am and 5pm ET, based on availability. To request an on campus or virtual group visit, please complete the <a href="" class="fix">Group Visit Inquiry Form.</a></p>


<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-class-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
