
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

<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/financial-aid/0141-15-10-kr-fall-campus-vassar-0003.jpg'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>
<h2>More than 60% of Vassar students receive financial aid.</h2>
<p>Through a generous financial aid program, Vassar meets 100% of the full demonstrated need of all admitted students for all four years. Financial aid is awarded exclusively on the basis of need as determined by the Free Application for Federal Student Aid (FAFSA) and the CSS Profile.</p>
<a class="px-0 btn btn-link">Visit Student Financial Services <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0013-22-04-kr-noyes-vassar-0040.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_wideContent(
    null,
    null,
    'theme-burgundy',
    'mw-4'
); ?>


<h3>Applying for financial aid does not limit—or impact—an applicant’s chances of admission.</h3>
<p>Admission decisions are made without regard to any student’s financial situation. Vassar is committed to making education accessible to all eligible students.</p>
<p>
    <a href="#" class="px-0 btn btn-link">Learn more about financial aid here <i class="fa-solid fa-angle-right"></i></a>
</p>
<?php echo end_sec_wideContent(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>
<h2>Applying for Aid</h2>
<p>Learn more about the steps required to apply for need-based financial aid.</p>
<a href="/admission/financial-aid/apply" class="px-0 btn btn-link">Learn more about applying for aid <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0085_16_04_KR_0008.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-cream',
    ''
); ?>



<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0256-19-10-ja-library-lawn-vassar-vb-066.jpg" />
<?php echo end_item_col(); ?>


<?php echo item_col(

); ?>
<h2>Types of Aid</h2>
<p>Financial aid awards typically include grants and scholarships, loans, and campus jobs. </p>
<a href="/admission/financial-aid/types-of-aid" class="px-0 btn btn-link">Learn more about types of aid <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>
<h2>Tuition & Fees</h2>
<p>View a breakdown of Vassar's tuition, housing and dining costs, and other fees.</p>
<a href="/admission/financial-aid/tuition" class="px-0 btn btn-link">Learn more about tuition & fees<i class="circle fa-solid fa-link"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/0198-19-11-kwe-library-vassar-vb-5394.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_wideContent(
    null,
    null,
    'theme-dark-burgundy',
    'mw-4'
); ?>


<h2>Aid Calculators</h2>
<p>Calculate your cost</p>
<p>
    <a href="/admission/financial-aid/aid-calculators" class="px-0 btn btn-link">Go to Calculators <i class="fa-solid fa-angle-right"></i></a>
</p>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
