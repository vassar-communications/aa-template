
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Virtual Programs",
  "feature_image": "/admission/assets/images/visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2033.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/*
$page_info = [
  'page_title' => 'Virtual Programs',
  'feature_image' => $admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2033.jpg'
];


 */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Aerial view of the residential quad on Vassar Campus']); ?>

<?php echo interior_page_nav() ?>


<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Explore Our Online Resources',
    'There are any number of good reasons why a student might not be able to travel to Vassar, but that shouldn’t stop anyone from experiencing campus. That’s why we want virtual touring to be as easy, free, complete, and immersive as possible.',
    $admission_img_path.'visit/virtual/Vassar_Campus_20190416_KR_6122.jpg',
    null,
    null,
    ['img_alt_text' => ' Student laying on the grass studying on campus']
);?>

<?php echo sec_fullBleedImageColumn(
    'Virtual Visit Options',
    $admission_img_path.'visit/virtual/0191-19-10-ali-quad-drone-vassar-vb-2025.jpg',
    'image-is-first theme-cream section-large-title',
    '',
    ['img_alt_text' => 'Aerial view of the residential quad on Vassar Campus']
); ?>

<div class="animate-when-content-appears animation-slide-up ">
    <p class="tagline  mb-2">Virtual Information Sessions</p>

      <p>Learn about academics, student life, the application process, and financial aid, and ask your questions about Vassar.</p>
    <p class="tagline  mb-2">Student Q&As</p>
        <p>Meet current students on Zoom and ask your questions about academics, involvement, and what it’s like to be a Vassar College student.</p>

        <?php echo cta_button(
          'https://apply.vassar.edu/portal/campusvisitcalendar',
          'Register Now'
        ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Video Campus Tour',
    'theme-dark-burgundy section-large-title mw-inner-2',
    'content-classes'
); ?>

  <p class="text-center mb-5">Preview the Vassar campus in this 30-minute video tour.</p>

  <?php echo item_imageCard_videoModal(
      null,
      null,
      'https://player.vimeo.com/video/531201548',
      'vimeo',
      '',
      ['url' => '/admission/assets/images/visit/virtual/tour-video-still.jpg',
          'alt' => 'Aerial view of a brick campus building, the New England Building'
      ],
      'animation-item grid-item text-at-bottom text-white'
  ); ?>

<?php echo end_sec_regularContent(); ?>























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
    ['url' => $admission_img_path.'visit/virtual/0091_15_09_KR_0201.jpg', 'alt' => 'Students studying at desks in the Thompson Memorial Library' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Access an interactive campus tour with 360° views.</p>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'Classroom Visits',
    '/admission/visit/class-visits/',
    ['url' => $admission_img_path.'visit/virtual/110519_160over90_Vassar_0348.jpg', 'alt' => 'Professor referring to chalk board in front of students' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<p>Want to experience the virtual Vassar classroom? Check out these pre-recorded classes.</p>

<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo item_cardWithText(
    'Vassar on Demand',
    '/admission/visit/on-demand/',
    ['url' => $admission_img_path.'visit/virtual/Take_Off_MZa.jpg', 'alt' => 'Vassar Repertory Dance Theatre company performing on stage' ],
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
    '',
    ['img_alt_text' => 'Historical black and white photo of the Urban Center for Black Studies, Poughkeepsie, NY']
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

<?php
echo item_modal_standardVideo();
?>
