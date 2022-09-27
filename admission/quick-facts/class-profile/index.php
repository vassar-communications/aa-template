
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_supertitle":"Quick Facts",
  "page_title":"Class of ’25",
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
.cols-6 .section-content,
.cols-6.row {
  grid-template-columns: repeat(6, 1fr);
}
.span-1 {
  grid-column: span 2;
}
.span-2 {
  grid-column: span 3;
}
.span-6 {
  grid-column: span 6;
}


@media (max-width: 600px) {
    .cols-6 .section-content {
        grid-template-columns: 1fr;
    }

}
</style>



<?php echo sec_imageThenContent(
  'Admission Results',
  null,
  'vh-100 show-image-then-content mw-inner-2',
  'content-classes gap-3',
  [
    'bg-image-url' => '/admission/assets/images/quick-facts/Move-In-Day_-cheer-1808-KR_1780.jpg'
    ]
); ?>

<p><i class="fa-solid fa-file-pdf me-2"></i> <a href="https://www.vassar.edu/sites/default/files/2022-01/2025-profile.pdf">Full Class of 2025 Data Set (PDF)</a></p>

<!--
<p><i class="fa-solid fa-file me-2"></i> <a href="2025-profile.rtf">Full Class of 2025 Data Set (RTF)</a></p>
-->


  <div class="row">
    <?php echo item_col('col-md-6 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'Applications',
        '10,884',
    ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('col-md-6 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        'First-Year Class',
        '679',
    ''
      ); ?>
    <?php echo end_item_col(); ?>
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
      '56%',
'<p>receiving need-based financial aid from Vassar</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      '19%',
      '<p>receiving Pell Grant</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php /* echo item_col(); ?>
    <?php echo item_stat(
      '',
      $class_stats['1st-gen-students'],
'<p>first generation to college</p>'
    ); ?>
  <?php echo end_item_col(); */ ?>

  <?php /* echo item_col(); ?>
    <?php echo item_stat(
      '',
      '3%',
      '<p>Vassar legacy (parent)</p>'
    ); ?>
  <?php echo end_item_col(); */ ?>

<?php echo end_sec_hasColumns(); ?>


<style>

.g-col.column {
  position: relative;
}

.circle {
  position: absolute;
  top: 0;
  left: min( calc(50% - ((var(--size) * 0.4rem) / 2), calc(50% - ((var(--size) * 0.4vw) / 2) ) ) );

  width: min( calc(var(--size) * 0.4rem), calc(var(--size) * 0.4vw) );
  height: min( calc(var(--size) * 0.4rem), calc(var(--size) * 0.4vw) ) !important;

  background: rgba(255,0,0,0.4);
  border-radius: 50%;
  z-index: -1;
}

.stats-no-bg .stat-item {
  background: none;
}

</style>

<?php /* echo sec_hasColumns(
    'Racial/Ethnic Diversity',
    '3',
    '<p>US Citizens & Permanent Residents Only. (Categories do not add up to 100% because the total reflects all categories selected by a student.)</p>',
    'items-equal-height mw-inner-1 xtheme-burgundy has-bg quad-pattern animate-when-content-appears stats-no-bg animation-group animation-fade-in cols-6',
    'gap-3'
); */ ?>


<?php echo sec_imageThenContent(
  'Racial/Ethnic Diversity',
  null,
  'show-image-then-content mw-inner-2',
  'content-classes gap-3',
  [
    'bg-image-url' => '/admission/assets/images/quick-facts/Vassar-Class-2108-BL-4581-edit1-crop.jpg'
    ]
); ?>

  <div class="d-grid cols-6 gap-3">
    <?php echo item_col('span-1 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        '<!--<div class="circle" style="--size: 21"></div>-->Asian/Pacific Islander',
        '21%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-1 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        '<!--<div class="circle" style="--size: 8"></div> -->African American/Black',
        '8%',
  ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-1 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        '<!--<div class="circle" style="--size: 67; top: auto; bottom: 0; left: 0"></div>-->White',
        '67%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        '<!--<div class="circle" style="--size: 1"></div> -->Native American',
        '1%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-2 theme-burgundy-stats'); ?>
      <?php echo item_stat(
        '<!--<div class="circle" style="--size: 13"></div> -->Latinx',
        '13%',
        ''
      ); ?>
    <?php echo end_item_col(); ?>

    <?php echo item_col('span-6 theme-burgundy-stats'); ?>

      <p class="stat-item"><strong><?php echo $class_stats['students_of_color']; ?> identify as students of color.</strong></p>
    <?php echo end_item_col(); ?>
  </div>
<?php echo end_sec_imageThenContent(); ?>





<?php echo sec_regularContent(
    null,
    'mw-inner-3',
    'content_classes',
    null
); ?>

  <?php echo factsTicker(); ?>

<?php echo end_sec_regularContent(); ?>





<?php echo sec_regularContent(
    null,
    'pt-0',
    'content_classes',
    null
); ?>

<p>The Class of 2025 includes students from <?php echo $class_stats['number_of_states']; ?> states, Washington, D.C., Puerto Rico, and <?php echo $class_stats['number_of_countries']; ?> countries: Bangladesh, Brazil, Canada, China, Ecuador, Egypt, Greece, India, Israel, Jamaica, Japan, Mexico, Nepal, Netherlands, Nigeria, South Africa, Taiwan, Thailand, Ukraine, United Arab Emirates, United Kingdom, and Vietnam.</p>

<?php echo end_sec_regularContent(); ?>




<?php echo sec_regularContent(
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
  	<li>Florida, Texas</li>
  	<li>Maryland</li>
  	<li>Illinois, Washington</li>
  </ol>

<?php echo end_sec_regularContent(); ?>






<?php /* echo sec_hasColumns(
    'Test Optional',
    '2',
    '<p>Vassar does not require students to submit the SAT or ACT for the 2022–2023 admission cycle.</p>'

. cta_link( '/admission/apply/requirements', 'Learn more' )
    ,
    'mw-inner-1 xpb-0 theme-charcoal',
    ' gap-3'
); ?>

<?php echo item_col(); ?>
  <?php echo item_stat(
    '',
    '50.4%',
    '<p>of the class opted not to submit testing.</p>'
  ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      '49.6%',
      '<p>of the class submitted testing.</p>
      <p><span class="h1">205</span> used SAT scores</p>
      <p><span class="h1">132</span> used ACT scores</p>'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo sec_hasColumns(
    'SAT R',
    '3',
    '',
    'mw-inner-2 pt-0 theme-charcoal',
    ' gap-3',
    ['title_level' => '3']
); ?>

<?php echo item_col(); ?>
  <?php echo item_stat(
    'Average SAT Score',
    '1467',
    ''
  ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average EBRW',
      '731',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average Math',
      '736',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'ACT',
    '1',
    '',
    'mw-inner-2 pt-0 theme-charcoal gap-3',
    '',
    ['title_level' => '3']
); ?>

<?php echo item_col('mx-auto mw-fit-content'); ?>
  <?php echo item_stat(
    'Average ACT Composite',
    '33',
    ''
  ); ?>
  <?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); */ ?>




<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
