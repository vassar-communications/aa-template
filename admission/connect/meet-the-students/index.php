
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{"page_title":"Meet the Students","feature_image":"/admission/assets/images/connect/Raymond-0204-19-11-kwe-raymond-parlor-vassar-vb-2805.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Students visting, reading, and playing piano in a residential common area']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'Ask a Student',
    '/admission/assets/images/connect/res-quad-2105-kr-vassar-0033-crop.jpg',
    'image-is-first theme-cream section-large-title',
    '',
    ['img_alt_text' => 'needalttxt']);
?>
<div class="animate-when-content-appears animation-slide-up">
    <p>There is a lot to learn about Vassar through our many virtual and in-person visit options. If you still have questions about what life is like as a Vassar student, we encourage you to reach out! Email <a href="mailto:askastudent@vassar.edu">askastudent@vassar.edu</a> to connect with a current Vassar student who will answer your questions about life at Vassar. We can’t guarantee which student will respond to your question, but we can guarantee that they will give you an honest answer. So go ahead, ask a student.</p>

    <p><i class="fa-solid fa-envelope"></i><a class="ms-2" href="mailto:askastudent@vassar.edu">askastudent@vassar.edu</a></p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/connect/connect.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
