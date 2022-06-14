
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Tuition & Fees";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_textmasthead('theme-verylightgray'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-financialaid-breadcrumb.php');?>
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
<p>Vassar provides a high-value education and is committed to meeting 100% of the demonstrated financial need of all admitted students.</p>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/tuition/0137_14_11_KR_0003.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_wideContent(
    'Tuition and Fees Overview',
    '<h2>The total cost to attend Vasssar is $78,580</h2>',
    '',
    'mw-4'
); ?>

<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>
<div class="card mb-4">
 <div class="card-body">
  <h6 class="supertitle card-title">Tuition</h6>
  <div class="card-text">
   <div class="display-2">$61,940</div>
   <p>For the 2021–2022 school year the total cost is $78,580</p>
  </div>
 </div>
</div>


<?php echo end_item_col(); ?>
<?php echo item_col(

); ?>
<div class="card mb-4">
 <div class="card-body">
  <h6 class="supertitle card-title">Housing and dining</h6>
  <div class="card-text">
   <div class="display-2">$15,710</div>
   <p>96% of Vassar students live on campus and housing </p>
  </div>
 </div>
</div>



<?php echo end_item_col(); ?>
<?php echo item_col(

); ?>
<div class="card mb-4">
 <div class="card-body">
  <h6 class="supertitle card-title">Fees</h6>
  <div class="card-text">
   <div class="display-2">$930</div>
   <p>Covering Health Insurance and Activity Fees</p>
  </div>
 </div>
</div>



<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    null,
    '',
    ''
); ?>




<p class="fix">
 Students should anticipate budgeting $2,250 for books, supplies, and personal expenses, and transportation to and from the campus. Additional information can be found on the  Student Financial Services website.
</p>
<?php echo end_sec_regularContent(); ?>

<?php echo end_sec_wideContent(); ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>


<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/tuition/Cushing-Dorm_Room_Series_Seven_12_HW_6.jpg" />
<?php echo end_item_col(); ?>


<?php echo item_col(

); ?>

<h2>Room and Board</h2>
<p>Students living on campus are required to participate in a <a href="#">college board plan</a> (also known as the meal plan). For more information about housing, visit the <a href="#">Office of Residential Life</a>.</p>
<a href="#" class="px-0 btn btn-link">Visit the  Office of Residential Life <i class="fa-solid fa-angle-right"></i></a>

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
<h2>Student Activity Fee</h2>
<p>Payment of this fee is required of all matriculated students. Student activity fees comprise the budget of the Vassar Student Association (student government) and provide funding for more than 100 student organizations and campus events.</p>
<a href="#" class="px-0 btn btn-link">Explore Student Orgs <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/tuition/0024-18-03-kr-wvkr-vassar-3474.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>
<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/financial-aid/tuition/0105_14_11_TT_2826.jpg" />
<?php echo end_item_col(); ?>
<?php echo item_col(

); ?>
<h2>Student Health Insurance</h2>
<p>All students are required to have health insurance coverage. See Student Financial Services for more information.</p>
<a href="#" class="px-0 btn btn-link">More information <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>
