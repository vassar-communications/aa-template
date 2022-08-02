
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
.cols-6 .section-content {
  grid-template-columns: repeat(6, 1fr);
}
.span-1 {
  grid-column: span 2;
}
.span-2 {
  grid-column: span 3;
}


@media (max-width: 600px) {
    .cols-6 .section-content {
        grid-template-columns: 1fr;
    }

}
</style>



<?php echo sec_hasColumns(
    'Admission Results',
    '2',
    '<p><i class="fa-solid fa-file-pdf me-2"></i> <a href="https://www.vassar.edu/sites/default/files/2022-01/2025-profile.pdf">Full Class of 2025 Data Set (PDF)</a></p>',
    'items-equal-height mw-inner-4 theme-extralightgray cols-6 animate-when-content-appears animation-group animation-fade-in pb-3',
    'gap-3'
); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      'Applications reviewed',
      '10,884',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      'Admitted (20% of applicants)',
      '2,198',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Matriculated',
      '679',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Female',
      '61.6%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Male',
      '38.4%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    '',
    '2',
    '',
    'mw-inner-2 pt-0 theme-extralightgray',
    'gap-3',
    ['title_level' => '3']
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Mean GPA, unweighted',
      '3.9',
      '<p>on a 4.0 unweighted scale</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Languages Spoken',
      '43'
    ); ?>
  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Financial Aid & Background',
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

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      '13%',
'<p>first generation to college</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      '',
      '3%',
      '<p>Vassar legacy (parent)</p>'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    'High School Type',
    '2',
    null,
    'items-equal-height mw-inner-2 theme-cream animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Public',
      '66.7%',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Private',
      '24%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Religious',
      '9.1%',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Homeschool',
      '0.1%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    'Racial/Ethnic Diversity',
    '3',
    '<p>US Citizens & Permanent Residents Only. (Categories do not add up to 100% because the total reflects all categories selected by a student.)</p>',
    'items-equal-height mw-inner-3 theme-burgundy has-bg quad-pattern animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Identifying as students of color',
      '38%',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Asian/Pacific Islander',
      '21%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'African American/Black',
      '8%',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Latinx',
      '13%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Native American',
      '1%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'White',
      '67%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    'International Students',
    '3',
    '',
    'items-equal-height mw-inner-3 theme-extralightgray animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'International Citizens',
      '5.7%',
''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Dual Citizens',
      '8.2%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Students holding non-US citizenship',
      '13.9%',
''
    ); ?>
  <?php echo end_item_col(); ?>
<?php echo end_sec_hasColumns(); ?>






<?php echo sec_hasColumns(
    'Geographical Representation',
    '2',
    '<p>The Class of 2025 includes students from '.$class_stats['number_of_states'].' states, Washington, D.C., Puerto Rico, and '.$class_stats['number_of_countries'].' countries: Bangladesh, Brazil, Canada, China, Ecuador, Egypt, Greece, India, Israel, Jamaica, Japan, Mexico, Nepal, Netherlands, Nigeria, South Africa, Taiwan, Thailand, Ukraine, United Arab Emirates, United Kingdom, and Vietnam.</p>',
    'mw-inner-1 theme-extralightgray',
    ''
); ?>

<?php echo item_col(); ?>
  <?php echo item_stat(
    'Students from high schools abroad',
    '44',
''
  ); ?>
<?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  <h3>Top States</h3>
  <ol class="column-count-2">
  	<li>New York</li>
  	<li>California</li>
  	<li>Massachusetts</li>
  	<li>New Jersey</li>
  	<li>Connecticut</li>
  	<li>Pennsylvania</li>
  	<li>Florida<br>Texas</li>
  	<li>Maryland</li>
  	<li>Illinois<br>Washington</li>
  </ol>

  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    'Test Optional',
    '2',
    '<p>Vassar does not require students to submit the SAT or ACT for the 2020–2021, 2021–2022, and 2022–2023 admission cycles.</p>'

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
<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
