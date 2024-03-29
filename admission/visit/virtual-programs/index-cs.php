
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

<?php echo page_partialmasthead($admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2033.jpg'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Explore our online resources',
    'There are any number of good reasons why a student might not be able to travel to Vassar, but that shouldn’t stop anyone from experiencing campus. That’s why we want virtual touring to be as easy, free, complete and immersive as possible.',
    $placeholder_img_square);
?>


<?php echo sec_fullBleedImageColumn(
    'Virtual Visit Options',
    $admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2025.jpg',
    'image-is-first theme-cream',
    ''
); ?>

<div class="animate-when-content-appears animation-slide-up">
    <p class="tagline">Virtual Information Sessions</p>
    <p>Learn about academics, student life, the application process, financial aid, and ask your questions about Vassar.</p>

    <p class="tagline">Student Q&A</p>
        <p>Meet current students on Zoom and ask your questions about academics, involvement, and what it’s like to be a Vassar College student.</p>

        <?php echo cta_button(
          'https://apply.vassar.edu/portal/campusvisitcalendar',
          'Register Now'
        ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    null,
    2,
    null,
    'theme-charcoal bg-dark has-bg quad-pattern',
    'd-flex align-items-center'
); ?>



<?php echo item_col(); ?>
<h2 class="display-2">Video Campus Tour</h2>
<p>Students wishing to preview the Vassar campus can watch this 30-minute video tour</p>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link arrow">Watch Video</a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="/assets/images/placeholders/main-placeholder.jpg" />
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
    'More Online Resources',
    3,
    null,
    'theme-cream',
    ''
); ?>


<?php echo item_cardWithText(
    'Self-Guided Virtual Tour',
    'https://www.vassar.edu/tour',
    ['url' => $admission_img_path.'visit/virtual/0091_15_09_KR_0201.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Access an interactive campus tour with 360° views.</p>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Classroom Visits',
    '/admission/visit/class-visits/',
    ['url' => $admission_img_path.'visit/virtual/110519_160over90_Vassar_0348.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Want to experience the virtual Vassar classroom? Check out these pre-recorded classes.</p>

<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo item_cardWithText(
    'Vassar on Demand',
    '/admission/visit/on-demand/',
    ['url' => $admission_img_path.'visit/virtual/Take_Off_MZa.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon'
); ?>

<p>Miss a virtual event or want to see more? Watch past events, presentations, and performances any time!</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>







<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/virtual/Urban_Center_Black_Studies_SPC.jpg',
    'theme-charcoal bg-dark',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
<h2 class="display-2 mb-5 border-animate">Buildings and Belonging</h2>
<p>Buildings and Belonging is a digital tool and self-guided campus tour that celebrates, honors, and remembers the contributions of African-American community members whose presence and contributions have shaped Vassar.</p>

<a class="placeholder px-0 btn btn-link arrow" href="#">Buildings & Belongings Map</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>









<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-hudson-valley.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
