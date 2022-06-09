
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
<?php echo breadcrumbNav('theme-charcoal'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/apply/0084_16_04_KR_0013.jpg'); ?>



<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3 class="display-5 pb-3">How to Apply</h3>
<p class="pb-3">Learn more about Vassar's application requirements and important deadlines.</p>
<a href="/admission/apply/how-to-apply"  class="px-0 btn btn-link">Learn more about applying <i class="circle fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/apply/how/110519_160over90_Vassar_0221.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>


<?php echo item_col('equal'); ?>
<h3 class="display-5 pb-3">First-Year applicants</h3>
<p class="pb-3">Everything you need to know about applying to Vassar as an incoming first-year student.</p>
<a href="/admission/apply/first-year-applicants"  class="px-0 btn btn-link">Learn more<i class="circle fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>


<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/apply/0007_16_02_KR_0083.jpg" />
<?php echo end_item_col(); ?>




<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>

<h3 class="display-5 pb-3">Transfer Applicants.</h3>
<p class="pb-3">Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. </p>
<a href="/admission/apply/transfer" class="px-0 btn btn-link">Learn more about transfer applications  <i class="circle fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col('equal'); ?>
<img src="https://vassartest.chuckyatsuk.com/img/apply/0137_14_11_KR_0003.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_wideContent(
    null,
    null,
    'theme-cream pb-1',
    'mw-4'
); ?>


<h3 class="display-5">Need more information about applying?</h3>
<p>Follow the links below or email admissions@vassar.edu, reach out to your Admission Officer, or ask a current Vassar student at askastudent@vassar.edu!</p>


<?php echo end_sec_wideContent(); ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-cream pt-1',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'International Applicants',
    '/admission/apply/international',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="btn btn-secondary"><i class="fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'QuestBridge Students',
    '/admission/apply/questbridge',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg', 'alt' => 'questbridge' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Information for Veterans',
    '/admission/apply/veterans',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/apply/veterans/0071-19-05-ss2-posse-vassar-0645.jpg', 'alt' => 'veterans' ],
    'mb-4',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Financial Aid Information',
    '/admission/apply/financial-aid',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg', 'alt' => 'financial aid' ],
    'mb-4',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
