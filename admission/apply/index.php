
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

<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg'); ?>



<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-apply-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(

); ?>
<h3>How to Apply</h3>
<p>Learn more about Vassar's application requirements and important deadlines.</p>
<a class="px-0 btn btn-link">Learn more about applying <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
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
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>


<?php echo item_col(

); ?>
<h3>First-Year applicants</h3>
<p>Everything you need to know about applying to Vassar as an incoming first-year student.</p>
<a class="px-0 btn btn-link">Learn more<i class="fa-solid fa-angle-right"></i></a>


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
<h3>Transfer Applicants.</h3>
<p>Students who have earned a high school diploma or GED and have enrolled at a college or university are welcome to apply as a transfer applicant. </p>
<a class="px-0 btn btn-link">Learn more about transfer applications <i class="fa-solid fa-angle-right"></i></a>


<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    null,
    null,
    'mw-2'
); ?>


<h3>Need more information about applying?</h3>
<p>Follow the links below or email admissions@vassar.edu, reach out to your Admission Officer, or ask a current Vassar student at askastudent@vassar.edu!</p>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
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
<div class="btn btn-secondary"><i class="fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Information for Veterans',
    '/admission/apply/veterans',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/0073-21-06-kr-summer-vassar-0165.jpg', 'alt' => 'veterans' ],
    'mb-4',
    ['hlevel' => 4]
); ?>
<div class="btn btn-secondary"><i class="fa-solid fa-angle-right"></i></div>
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
<div class="btn btn-secondary"><i class="fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo site_footer(); ?>
