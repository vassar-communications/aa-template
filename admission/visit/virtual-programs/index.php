
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = [
  'page_title' => 'Virtual Programs',
  'feature_image' => $admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2033.jpg'
];

/* === */


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Explore our online resources',
    'There are any number of good reasons why a student might not be able to travel to Vassar, but that shouldn’t stop anyone from experiencing campus. That’s why we want virtual touring to be as easy, free, complete and immersive as possible.',
    $admission_img_path.'visit/virtual/Vassar_Campus_20190416_KR_6122.jpg'
);?>

<?php echo sec_fullBleedImageColumn(
    'Virtual Visit Options',
    $admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2025.jpg',
    'image-is-first theme-cream section-large-title',
    ''
); ?>

<div class="animate-when-content-appears animation-slide-up ">
    <p class="tagline  mb-2">Virtual Information Sessions</p>

      <p>Learn about academics, student life, the application process, financial aid, and ask your questions about Vassar.</p>
    <p class="tagline  mb-2">Student Q&As</p>
        <p>Meet current students on Zoom and ask your questions about academics, involvement, and what it’s like to be a Vassar College student.</p>

        <?php echo cta_button(
          'https://apply.vassar.edu/portal/campusvisitcalendar',
          'Register Now'
        ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Video Campus Tour',
    2,
    null,
    'theme-dark-burgundy section-large-title',
    'd-flex align-items-center'
); ?>



<?php echo item_col(); ?>
<p>Students wishing to preview the Vassar campus can watch this 30-minute video tour</p>
<a href="https://apply.vassar.edu/portal/campusvisitcalendar"  class="px-0 btn btn-link arrow">Watch Video</a>
<?php echo end_item_col(); ?>

<?php echo item_col(); ?>
<img src="/admission/assets/images/visit/virtual/tour-video-still.jpg" alt="changealttext" />
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
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Access an interactive campus tour with 360° views.</p>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Classroom Visits',
    '/admission/visit/class-visits/',
    ['url' => $admission_img_path.'visit/virtual/110519_160over90_Vassar_0348.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Want to experience the virtual Vassar classroom? Check out these pre-recorded classes.</p>

<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo item_cardWithText(
    'Vassar on Demand',
    '/admission/visit/on-demand/',
    ['url' => $admission_img_path.'visit/virtual/Take_Off_MZa.jpg', 'alt' => 'replacealttext' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Miss a virtual event or want to see more? Watch past events, presentations, and performances any time!</p>

<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>







<?php echo sec_fullBleedImageColumn(
    'Buildings and Belonging',
    $admission_img_path.'visit/virtual/Urban_Center_Black_Studies_SPC.jpg',
    'theme-charcoal bg-dark quad-pattern has-bg section-large-title',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
<p>Buildings and Belonging is a digital tool and self-guided campus tour that celebrates, honors, and remembers the contributions of African-American community members whose presence and contributions have shaped Vassar.</p>

<?php echo cta_link(
  'https://www.vassar.edu/buildings-and-belonging',
  'Buildings & Belongings Map'
); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>









<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-hudson-valley.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>
