
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Financial Aid";
$page_classes = "";

/*  ---------------------- */

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
    ['bg-image-url' => $admission_img_path.'financial-aid/0141-15-10-kr-fall-campus-vassar-0003.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>






<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo masthead_interiorPage(
    'More than 60% of Vassar students receive financial aid.',
    'Through a generous financial aid program, Vassar meets 100% of the full demonstrated need of all admitted students for all four years. Financial aid is awarded exclusively on the basis of need as determined by the Free Application for Federal Student Aid (FAFSA) and the CSS Profile.',
    $admission_img_path.'financial-aid/0013-22-04-kr-noyes-vassar-0040.jpg');
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
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Learn more about the steps required to apply for need-based financial aid.</p>

    <?php echo cta_link(
      '/admission/financial-aid/apply',
      'Learn more about applying for aid'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Types of Aid',
    $admission_img_path.'financial-aid/0256-19-10-ja-library-lawn-vassar-vb-066.jpg',
    'theme-charcoal bg-dark has-bg quad-pattern',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Financial aid awards typically include grants and scholarships, loans, and campus jobs. </p>

    <?php echo cta_link(
      'admission/financial-aid/tuition/',
      'Learn more about types of aid'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Tuition & Fees',
    $admission_img_path.'financial-aid/0198-19-11-kwe-library-vassar-vb-5394.jpg',
    'image-is-first theme-extralightgray',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">View a breakdown of Vassar’s tuition, housing and dining costs, and other fees.</p>

    <?php echo cta_link(
      'admission/financial-aid/tuition/',
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


<h2>Aid Calculators</h2>
<p>Calculate your cost</p>
<p>
    <a href="/admission/financial-aid/aid-calculators" class="px-0 btn btn-link arrow">Go to Calculators</a>
</p>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
