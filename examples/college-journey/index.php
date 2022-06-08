<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Your college journey begins here.";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<!--<div class="buffer"></div>-->

<?php echo sec_siteHeader_video(); ?>
  <a href="" class="btn btn-lg btn-primary">Apply</a>
  <a href="" class="btn btn-lg btn-primary">Request Info</a>
<?php echo end_sec_siteHeader_video(); ?>

<!-- site masthead goes here -->

<!-- animated pullquote goes here -->
<?php echo sec_wordByWord(
  null,
  'animate-when-content-appears space-around-image theme-cream',
  null,
  ['intro-line' => 'A Vassar education opens minds and doors.']
); ?>

  <p>Each year, Vassar aims to enroll the most interesting, talented, and diverse first-year class possible.</p>

<?php echo end_sec_wordByWord(); ?>



<?php echo sec_fixedCenteredTitle(
  '<b class="slide-from-left">Your college journey</b>
   <b class="slide-from-right nice-big-serif">begins here.</b>',
   '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
  'sec-fixedCenteredTitle card-array',
  null,
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652372167945-0c711b065450?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80',
    'bg-image-alt' => 'alt text',
    'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.2);
      '
    ]

); ?>

<div class="layout-masonry animation-group">

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0014-19-04-kr-chemistry-vassar-4578.jpg', 'alt' => 'asdfasdfds' ],
  'animation-item masonry-item',
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0020_15_03_KR_0022.jpg', 'alt' => 'asdfasdfds' ],
  'animation-item masonry-item',
  ['hlevel' => 4]
); ?>

<?php echo item_imageCard(
  'Card title',
  'texrtwatartr',
  'apple.com',
  ['url' => '0055-16-05-kr-spring-vassar-0011.jpg', 'alt' => 'asdfasdfds' ],
  'animation-item masonry-item',
  ['hlevel' => 4]
); ?>

</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>



<!-- stats -->

<?php echo sec_fixedCenteredTitle(
  '<b class="slide-from-left">This is</b>
   <b class="slide-from-right">Vassar.</b>',
   '<p class="section-intro-text">

Vassar is from everywhere. World-class educations are built on world-wide communities. Our students come from 44 states and 17 countries. Nearly one in ten come from foreign countries; nearly half will visit them while at Vassar. Over half of Vassar students receive financial aid.

   </p>',
  'sec-fixedCenteredTitle theme-burgundy',
  'mw-4',
    ['bg-image-url' => 'journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
    'bg-image-alt' => 'alt text',
    'css' => '
      --section-title-size: 14vw;
      --section-title-faded-opacity: 0.1;
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>

<div class="xlayout-masonry animation-group loose-grid stat-grid">
  <!--<div class="grid-sizer"></div>-->

  <?php echo item_statIcon(
    '2,435',
    'students',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '340',
    'faculty',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '$54K',
    'average aid award',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '51',
    'majors',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '8:1',
    'students to faculty',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '27',
    'varsity teams',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '170',
    'student orgs',
    'car',
    'animation-item masonry-item'
  ); ?>

</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- end stats -->





<!-- fav places -->

<?php echo sec_fixedCenteredTitle(
  '<b class="slide-from-left">Our favorite</b>
   <b class="slide-from-right">places.</b>',
   '<p class="section-intro-text">

Vassar is extremely proud of our 1,000-acre campus. There are buildings that showcase classic architecture blended seamlessly with modern, cutting-edge facilities.

   </p>',
  'sec-fixedCenteredTitle theme-charcoal',
  'mw-4',
    ['bg-image-url' => 'journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
    'bg-image-alt' => 'alt text',
    'css' => '
      --section-title-size: 14vw;
      --section-title-faded-opacity: 0.1;
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>

<div class="xlayout-masonry animation-group loose-grid stat-grid">
  <!--<div class="grid-sizer"></div>-->

  <?php echo item_statIcon(
    '2,435',
    'students',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '340',
    'faculty',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '$54K',
    'average aid award',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '51',
    'majors',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '8:1',
    'students to faculty',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '27',
    'varsity teams',
    'car',
    'animation-item masonry-item'
  ); ?>

  <?php echo item_statIcon(
    '170',
    'student orgs',
    'car',
    'animation-item masonry-item'
  ); ?>

</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- fav places -->





<div class="buffer"></div>

<?php echo site_footer(); ?>
