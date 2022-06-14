
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Virtual Programs";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_textmasthead('theme-verylightgray'); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_hasColumns(
    null,
    2,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<h2 class="display-6">Explore our online resources</h2>
<p>There are any number of good reasons why a student might not be able to travel to Vassar, but that shouldn’t stop anyone from experiencing campus. That’s why we want virtual touring to be as easy, free, complete and immersive as possible.</p>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link">Register Now<i class="circle fa-solid fa-angle-right"></i></a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2025.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    'Virtual Visit Options',
    2,
    null,
    '',
    'fix'
); ?>

<?php echo item_col(); ?>
Virtual Information Sessions<br/>
Learn about academics, student life, the application process, financial aid, and ask your questions about Vassar.
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
Student Q&As<br/>
Meet current students on Zoom and ask your questions about academics, involvement, and what it’s like to be a Vassar College student.
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-charcoal',
    ''
); ?>

<?php echo item_col(); ?>
<img src="https://vassartest.chuckyatsuk.com/img/visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2025.jpg" />
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<h2 class="display-6">Video Campus Tour</h2>
<p>Students wishing to preview the Vassar campus can watch this 30-minute video tour:</p>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link">Watch Video<i class="circle fa-solid fa-play"></i></a>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    'More Online Resources',
    3,
    null,
    'theme-dark-burgundy',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Self-Guided Virtual Tour',
    'https://www.vassar.edu/tour',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/virtual/0091_15_09_KR_0201.jpg', 'alt' => 'Virtual Tours' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Click below to access an interactive campus tour with 360° views.</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Classroom Visits',
    '/admission/visit/class-visits',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/virtual/110519_160over90_Vassar_0348.jpg', 'alt' => 'Classroom Visits' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Want to experience the virtual Vassar classroom? Check out these pre-recorded classes.</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Vassar on Demand',
    '/admission/visit/on-demand',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/visit/virtual/Take_Off_MZa.jpg', 'alt' => 'international' ],
    '',
    ['hlevel' => 4]
); ?>
<p>Miss a virtual event or want to see more? Watch past events, presentations, and performances any time!</p>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-angle-right"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/virtual/Urban_Center_Black_Studies_SPC.jpg',
    'theme-charcoal',
    'mw-100'
); ?>
<h2 class="display-6">Buildings and Belonging</h2>
<p>Buildings and Belonging is a digital tool and self-guided campus tour that celebrates, honors, and remembers the contributions of African-American community members whose presence and contributions have shaped Vassar.</p>

<a class="px-0 btn btn-link" href="#" role="button">Buildings & Belongings Map</a>
<?php echo end_sec_fullBleedImageColumn(); ?>










<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-visit.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply-transfer.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/admission-apply.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
