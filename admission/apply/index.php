
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Applying to Vassar";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    'Apply',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/apply/0084_16_04_KR_0013.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>



<?php echo breadcrumbNav(''); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Placeholder',
    'Placeholder Vassar’s open curriculum allows you the freedom and flexibility to pursue your passions while discovering new interests. With no core classes or distribution requirements, you can choose to take the courses that most interest you and know that your classmates are fully engaged.',
    'https://vassartest.chuckyatsuk.com/img/explore/0084-19-05-ja-kumar-class-vassar-253.jpg');
?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/apply/how/110519_160over90_Vassar_0221.jpg',
    'image-is-first theme-charcoal bg-dark',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">How to Apply</h2>
    <p>Learn more about Vassar's application requirements and important deadlines.</p>

    <a href="/admission/apply/how-to-apply/" class="px-0 btn btn-link arrow">Learn more about how to apply to Vassar</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/apply/0007_16_02_KR_0083.jpg',
    'theme-charcoal bg-dark',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">First-Year applicants</h2>
    <p>Everything you need to know about applying to Vassar as an incoming first-year student.</p>

    <a href="/admission/apply/how-to-apply/" class="px-0 btn btn-link arrow">Learn more about applying as a first-year student</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/apply/0137_14_11_KR_0003.jpg',
    'image-is-first theme-charcoal bg-dark',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Transfer Applicants</h2>
    <p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. </p>

    <a href="/admission/apply/how-to-apply/" class="px-0 btn btn-link arrow">Learn more about applying to Vassar as a transfer student</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_hasColumns(
    'Need more information about applying?',
    4,
    '<p>Follow the links below or email admissions@vassar.edu, reach out to your Admission Officer, or ask a current Vassar student at askastudent@vassar.edu!</p>',
    'related-topics-section theme-burgundy',
    ''
); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php echo end_item_col(); ?>

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
