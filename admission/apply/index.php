
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include_once($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Applying to Vassar",
  "feature_image":"/admission/assets/images/apply/0198-19-11-kwe-library-vassar-vb-5415.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Apply</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Student studying on the lawn in front of Main Building',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>




<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Apply',
    'Vassar’s open curriculum offers the freedom and flexibility to pursue your passions while discovering new interests. As there are no class requirements, you can take the courses you wish and know your classmates have chosen them as well.',
    $admission_img_path.'explore/0084-19-05-ja-kumar-class-vassar-253.jpg');
?>



<?php echo sec_fullBleedImageColumn(
    'How to Apply',
    $admission_img_path.'apply/how-to-apply/110519_160over90_Vassar_0221.jpg',
    'image-is-first theme-charcoal bg-dark quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Learn more about Vassar's application requirements and important deadlines.</p>

    <a href="/admission/apply/how-to-apply/" class="px-0 btn btn-link arrow">Learn more about how to apply to Vassar</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'First-Year applicants',
    $admission_img_path.'apply/0007_16_02_KR_0083.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Everything you need to know about applying to Vassar as an incoming first-year student.</p>

    <a href="/admission/apply/first-year-applicants/" class="px-0 btn btn-link arrow">Learn more about applying as a first-year student</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Transfer Applicants',
    $admission_img_path.'apply/0137_14_11_KR_0003.jpg',
    'image-is-first theme-charcoal bg-dark quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. </p>

    <a href="/admission/apply/transfer/" class="px-0 btn btn-link arrow">Information for transfer applicants</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'International Applicants',
    $admission_img_path.'apply/international/0074_15_08_KR_0122.jpg',
    'theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar is a vibrant community of global citizens</p>

    <a href="/admission/apply/international/" class="px-0 btn btn-link arrow">Information for international applicants</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Need more information about applying?',
    3,
    '<p>Follow the links below or email <a href="mailto:admissions@vassar.edu">admissions@vassar.edu</a>, reach out to your Admission Officer, or ask a current Vassar student at <a href="mailto:askastudent@vassar.edu">askastudent@vassar.edu</a>!</p>',
    'related-topics-section theme-burgundy',
    ''
); ?>


<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-questbridge.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-veterans.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-financial-aid.php');?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
