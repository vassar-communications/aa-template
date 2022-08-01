
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Financial Aid",
  "page_classes":"alive",
  "feature_image":"/admission/assets/images/financial-aid/0141-15-10-kr-fall-campus-vassar-0003.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Late fall afternoon in front of Thompson Library on Vassar Campus and the sun is shining through the trees.']); ?>

<?php echo interior_page_nav() ?>


<?php echo sec_fullBleedImageColumn(
    'Financial Aid',
    '/admission/assets/images/financial-aid/0050_14_05_JA_1874.jpg',
    'image-is-first theme-cream',
    null,
    ['img_alt_text' => 'Students graduating outside and throwing their caps in the air.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Through a generous financial aid program, Vassar meets 100% of the full demonstrated need of all admitted students for all four years. Financial aid is awarded exclusively on the basis of need as determined by the Free Application for Federal Student Aid (FAFSA) and the College Scholarship Service (CSS) Profile.</p>

    <?php echo cta_link(
      '/admission/financial-aid/',
      'Learn more and apply for aid'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php /*  PAGE CONTENT === */ ?>

<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-calculators.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
