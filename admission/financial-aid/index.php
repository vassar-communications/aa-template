
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Financial Aid",
  "page_classes":"",
  "feature_image":"/admission/assets/images/financial-aid/0141-15-10-kr-fall-campus-vassar-0003.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Financial</b>
   <b class="slide-from-right">Aid</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'The front of Thompson Library on the Vassar College campus.',
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
    'More than 60% of Vassar Students Receive Financial Aid.',
    'Through a generous financial aid program, Vassar meets 100% of the full demonstrated need of all admitted students for all four years. Financial aid is awarded exclusively on the basis of need as determined by the Free Application for Federal Student Aid (FAFSA) and the College Scholarship Service (CSS) Profile.',
    $admission_img_path.'financial-aid/0013-22-04-kr-noyes-vassar-0040.jpg',
    null,
    null,
    ['img_alt_text' => 'Four students lie on a blanket spread on the grass']
  );
?>




<?php echo sec_wideContent(
    null,
    null,
    'theme-burgundy animate-when-content-appears text-center',
    'mw-4'
); ?>


<?php echo animated_statement('Applying for financial aid does not limit—or impact—an applicant’s chances of admission.', 'mb-4'); ?>

<p class="position-center" style="max-width: 80ch">Admission decisions are made without regard to any student’s financial situation. Vassar is committed to making education accessible to all eligible students.</p>

<?php echo cta_link(
  'https://offices.vassar.edu/student-financial-services/',
  'Learn more at Student Financial Services'
); ?>


<?php echo end_sec_wideContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Applying for Aid',
    $admission_img_path.'financial-aid/0085_16_04_KR_0008.jpg',
    'image-is-first theme-cream has-bg',
    '',
    ['img_alt_text' => 'A person reading a book sitting cross-legged on a marble bench next to a tree']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Learn more about the steps required to apply for need-based financial aid.</p>

    <?php echo cta_link(
      '/admission/financial-aid/apply/',
      'Learn more about applying for aid'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Types of Aid',
    $admission_img_path.'financial-aid/types/0025-21-04-kr-spring-vassar-0012.jpg',
    'theme-charcoal bg-dark has-bg quad-pattern',
    null,
    ['img_alt_text' => 'A student sits in a tree on a sunny day playing a guitar']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Financial aid awards typically include grants and scholarships, loans, and campus jobs. </p>

    <?php echo cta_link(
      '/admission/financial-aid/types-of-aid/',
      'Learn more about types of aid'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Tuition & Fees',
    $admission_img_path.'financial-aid/0198-19-11-kwe-library-vassar-vb-5394.jpg',
    'image-is-first theme-extralightgray',
    '',
    ['img_alt_text' => 'Students sitting at a student table in the libary']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">View a breakdown of Vassar’s tuition, housing, and dining costs, and other fees.</p>

    <?php echo cta_link(
      '/admission/financial-aid/tuition/',
      'Learn more about tuition & fees'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_wideContent(
    null,
    null,
    'theme-cream',
    'mw-4'
); ?>

  <div class="card plain-text-card text-center mw-1 mx-auto shadow-lg">
    <h2>Aid Calculators</h2>
    <p>Calculate your cost</p>

    <?php echo cta_link(
      '/admission/financial-aid/forms/#calculate-your-cost',
      'Go to Calculators'
    ); ?>
  </div>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
