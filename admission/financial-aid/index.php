
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
<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg'); ?>




<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/admission-financialaid-nav.php');?>
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
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
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
<a class="px-0 btn btn-link">Learn more about applying for aid <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
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
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>


<?php echo item_col(

); ?>
<h2>Types of Aid</h2>
<p>Financial aid awards typically include grants and scholarships, loans, and campus jobs. </p>
<a class="px-0 btn btn-link">Learn more about types of aid <i class="fa-solid fa-angle-right"></i></a>


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
<a class="px-0 btn btn-link">Learn more about tuition & fees<i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
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
    <a href="#" class="px-0 btn btn-link">Go to Calculators <i class="fa-solid fa-angle-right"></i></a>
</p>
<?php echo end_sec_wideContent(); ?>

<?php echo site_footer(); ?>
