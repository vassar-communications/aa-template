
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Visit Campus";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_masthead('https://vassartest.chuckyatsuk.com/img/visit/0069-19-05-kr-spring-vassar-4632.jpg'); ?>

<?php echo breadcrumbNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_wideContent(
    null,
    null,
    null,
    'mw-4'
); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col('equal'); ?>
<h3 class="display-5 mb-3">Visit the Vassar Campus In Person </h3>
<p class="mb-3">Get to know our vibrant community first-hand and learn more about the Vassar experience.</p>
<a href="/admission/visit/in-person"  class="px-0 btn btn-link">Learn more<i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>
<?php echo item_col('equal'); ?>

<img src="https://vassartest.chuckyatsuk.com/img/visit/0042-21-06-kr-reception-vassar-0130.jpg" />
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

<img src="https://vassartest.chuckyatsuk.com/img/visit/0191-19-10-ali-library-drone-vassar-vb-2015.jpg" />
<?php echo end_item_col(); ?>



<?php echo item_col('equal'); ?>
<h3 class="display-5 mb-3">Explore Our Virtual Opportunities</h3>
<p class="mb-3">Vassar offers a wide array of opportunities to virtually explore the Vassar campus and to connect with our community. </p>
<a href="/admission/visit/virtual-programs"  class="px-0 btn btn-link">Learn more<i class="circle fa-solid fa-angle-right"></i></a>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo end_sec_wideContent(); ?>


<?php echo sec_wideContent(
    'Need more information about visiting?',
    'Follow the links below or email admission@vassar.edu, or ask a current Vassar student at askastudent@vassar.edu!',
    'theme-cream',
    'mw-4'
); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'animate-when-content-appears animation-slide-up',
    'flex-equal align-items-center d-flex flex-column-reverse flex-md-row'
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Group Visit Info',
    '/admission/visit/group-visits',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/0055_15_04_KR_0110.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Want to schedule a group visit? Interactive virtual visits can be scheduled.</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Register',
    'https://apply.vassar.edu/portal/campusvisitcalendar',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/Vassar_Campus_20190423_KR_9440.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Reigster for all on-campus tours and virtual events</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>


<?php echo end_sec_wideContent(); ?>


<?php echo sec_regularContent(
    'Stay in Touch',
    'theme-dark-burgundy',
    'text-center',
    ''
); ?>
<p>Join our mailing list to stay up to date with all things Vassar and get access to special events throughout the year.</p>
<a href="https://apply.vassar.edu/register/requestinfo" class="btn btn-light">Join the List</a>


<?php echo end_sec_regularContent(); ?>



<?php echo site_footer(); ?>
