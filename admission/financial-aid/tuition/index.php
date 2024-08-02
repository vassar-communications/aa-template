
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Tuition & Fees",
  "page_classes":"",
  "feature_image":"/admission/assets/images/financial-aid/tuition/Vassar_Reception_20210601_KR_0173.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'A building, hanging flowers, and trees on Vassar Campus']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'financial-aid/tuition/1930_Class_Tree_08_TT_1.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Looking up the trunk of a tree with brightly colored autumn leaves']
); ?>
<div class="animate-when-content-appears animation-slide-up">
   <p class="intro-text">Around two thirds of Vassar students receive financial aid and the average Vassar scholarship award is $51,508. We are committed to making a Vassar education affordable by meeting 100% of the demonstrated financial need of all admitted students.</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    '2024–2025 Tuition and Fees Overview',
    '3',
    '',
    'mw-inner-4 theme-extralightgray',
    'gap-3 items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Tuition',
      $facts[$current_school_year]['adm_tuition'],
      null,
      /* 'For the ' . $current_school_year . ' school year', */
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => '$'
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Housing and Dining',
      $facts[$current_school_year]['adm_room_and_board'],
      null,
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => '$'
      ]
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Fees',
      $facts[$current_school_year]['adm_fees'],
      null,
      'stat-value-small',
      [
        'format_number' => true,
        'unit' => '$'
      ]
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php /* */ ?>



<?php echo sec_regularContent(
    null,
    'pt-0 text-center theme-extralightgray',
    '',
    ''
); ?>

<?php echo item_alert(
    null,
    '<p>Students should anticipate budgeting $2,250 for books, supplies, personal expenses, and transportation to and from the campus. Additional information can be found on the Student Financial Services website.</p>',
    'info-circle',
    ' text-start alert-light alert-accent-gold'
); ?>

<a href="https://offices.vassar.edu/student-financial-services/" class="btn btn-primary arrow">Visit Student Financial Services</a>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'Housing and Dining',
    $admission_img_path.'financial-aid/tuition/Cushing-Dorm_Room_Series_Seven_12_HW_6.jpg',
    'image-is-first theme-charcoal',
    '',
    ['img_alt_text' => 'Student on the floor of their dorm room reading a book']); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Students living on campus are required to participate in a <a href="http://vassar.cafebonappetit.com">college board plan</a> (also known as the meal plan). For more information about housing, visit the <a  href="https://offices.vassar.edu/residential-life/">Office of Residential Life</a>.</p>

    <?php echo cta_link(
      'https://offices.vassar.edu/residential-life/',
      'Visit the Office of Residential Life'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Student Activity Fee',
    $admission_img_path.'financial-aid/tuition/0024-18-03-kr-wvkr-vassar-3474.jpg',
    'theme-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Student on air in front of  the microphone at Vassar’s radio station WVKR']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Payment of this fee is required of all matriculated students. Student activity fees comprise the budget of the Vassar Student Association (student government) and provide funding for more than 100 student organizations and campus events.</p>

    <?php echo cta_link(
      'http://vsa.vassar.edu/',
      'Explore Student Orgs'
    ); ?>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Student Health Insurance',
    $admission_img_path.'financial-aid/tuition/0105_14_11_TT_2826.jpg',
    'image-is-first theme-extralightgray',
    '',
    ['img_alt_text' => 'Student riding away on a bicycle on Vassar Campus with Fall foliage']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>All students are required to have health insurance. Health insurance is available through the College, or you may request a waiver if you already have coverage.</p>

    <?php echo cta_link(
      'https://offices.vassar.edu/student-financial-services/',
      'Visit Student Financial Services'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>






<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-types-of-aid.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-forms.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
