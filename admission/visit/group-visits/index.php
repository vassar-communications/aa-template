
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Group Visits",
  "feature_image": "/admission/assets/images/visit/group/adlov-admissions-vq-vassar-0911-lrr-8500.jpg"
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

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'A group of people walk towards the Thompson Memorial Library, a stone building with large glass windows, on a fall day.']); ?>

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
    <p class="intro-text">Groups from high schools and non-profit college access organizations can request a campus visit specifically for their group to learn more about the academic, residential, and student life experience at Vassar.</p>
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
<p>Group visits are open to groups of up to 50 students (with at least one adult chaperone for every 10 students) from high schools and non-profit college access organizations. Visits generally include an information session and a campus tour. To request a visit for your organization, please complete the <a href="https://apply.vassar.edu/portal/group-visit">Group Visit Request Form.</a></p>

<?php echo cta_link(
    'https://apply.vassar.edu/portal/group-visit',
    'Request a Group Visit',
    'mt-2'
); ?>

<?php echo end_item_iconItem(); ?>


<?php echo end_sec_regularContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-class-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
