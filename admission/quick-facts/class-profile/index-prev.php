
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_supertitle":"Quick Facts",
  "page_title":"Class of ’27",
  "page_navTitle":"Class Profile",
  "feature_image":"/admission/assets/images/quick-facts/0124_16_10_TT_3100.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'The Thompson Memorial Library and quad on a bright fall day
']); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<style>

</style>



<?php echo sec_imageThenContent(
  'Admission Results',
  null,
  'vh-100 show-image-then-content mw-inner-2 content-scrolls-in',
  'content-classes gap-3',
  [
    'bg-image-url' => '/admission/assets/images/quick-facts/Move-In-Day_-cheer-1808-KR_1780.jpg'
    ]
); ?>

<p><i class="fa-solid fa-file-pdf me-2"></i> <a href="2027-Class-Profile.pdf">Class of 2027 Profile (PDF)</a></p>

<!-- <p class="mb-4"><i class="fa-solid fa-file me-2"></i> <a href="2026-Class-Profile.rtf">Class of 2026 Profile (RTF)</a></p> -->


  <div class="row">

    <?php echo item_col('col-md-6 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'First-Year Class',
        '689',
    ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('col-md-6 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'Applications',
        '12,145',
    ''
      ); ?>
    <?php echo end_item_col(); ?>

  </div>

<?php echo end_sec_imageThenContent(); ?>






<?php /* echo sec_hasColumns(
    'Racial/Ethnic Diversity',
    '3',
    '<p>US Citizens & Permanent Residents Only. (Categories do not add up to 100% because the total reflects all categories selected by a student.)</p>',
    'items-equal-height mw-inner-1 xtheme-burgundy has-bg quad-pattern animate-when-content-appears stats-no-bg animation-group animation-fade-in cols-6',
    'gap-3'
); */ ?>


<?php echo sec_imageThenContent(
  'Racial/Ethnic Diversity',
  '<p>Categories do not add up to 100% because totals reflect all categories selected by an applicant.</p>',
  'show-image-then-content mw-inner-2 content-scrolls-in',
  'content-classes gap-3',
  [
    'bg-image-url' => '/admission/assets/images/quick-facts/Vassar-Class-2108-BL-4581-edit1-crop.jpg'
    ]
); ?>

  <div class="d-grid cols-6 gap-3">

    <?php echo item_col('span-6 theme-burgundy-stats'); ?>
      <p class="stat-item"><strong class="d-md-flex justify-content-center align-items-center gap-2"><span class="fs-2 text-primary">36% </span> self-identify as students of color</strong></p>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'African American/Black',
        '8.3%',
  ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'Asian American/Pacific Islander',
        '18.3%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'Latinx',
        '12.2%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'Native American',
        '1.2%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>


<!--
    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'White',
        '71%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>
-->


  </div>
<?php echo end_sec_imageThenContent(); ?>


<?php echo sec_hasColumns(
    'Financial Aid',
    '2',
    null,
    'items-equal-height mw-inner-2 theme-burgundy animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      $class_stats['students_receiving_finaid'],
'<p>receiving need-based financial aid from Vassar</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      '18%',
      '<p>Pell Grant recipients</p>'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    null,
    'mw-inner-3',
    'content_classes',
    null
); ?>

  <?php echo factsTicker(); ?>

<?php echo end_sec_regularContent(); ?>



<?php /* echo sec_regularContent(
    'Top States',
    'theme-cream mw-inner-3 pb-6',
    'content_classes',
    null
); ?>

<style>

  .states {
    padding-left: 0;
  }

  .states li::before {
    content: counter(inst);
    background: #f00;
    width: 2.2rem;
    height: 2.2rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    font-weight: bold;
    font-variation-settings: "wght" 600;
    color: #fff;
    border-radius: 3rem;
  }

  .states li {
    counter-increment: inst;
    list-style: none;
    display: inline;
    margin-right: 2rem;
    font-size: 2.2rem;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
  }

</style>

  <ol class="states text-center">
  	<li>New York</li>
  	<li>California</li>
  	<li>Massachusetts</li>
  	<li>New Jersey</li>
  	<li>Connecticut</li>
  	<li>Pennsylvania</li>
  	<li>Florida and Texas</li>
  	<li>Maryland</li>
  	<li>Illinois and Washington</li>
  </ol>

<?php echo end_sec_regularContent(); */ ?>



<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
