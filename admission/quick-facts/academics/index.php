
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_supertitle":"Quick Facts",
  "page_title":"Academics",
  "feature_image":"/admission/assets/images/quick-facts/academics/0066-19-05-kr-afrs-syedullah-vassar-4017.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'A professor speaks to a class of students']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>





<?php echo sec_hasColumns(
    'Academics at Vassar',
    '2',
    null,
    'items-equal-height mw-inner-1 theme-extralightgray',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average class size',
      '17',
      'Many of our upper-level classes have fewer than 10 students.'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  <?php echo item_stat(
    'Student: Faculty ratio',
    '8:1',
    'All classes are taught by professors, not teaching assistants or graduate student instructors.'
  ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_regularContent(
    'Most Popular Majors',
    'animate-when-content-appears gold-icons mw-inner-4 theme-charcoal has-bg section-bg-image-top',
    '',
    [
      'title_level' => '3',
    'bg-image-url' => $admission_img_path.'quick-facts/Class-room-HW_26A9303.jpg',
    'bg-image-alt' => 'Students sitting in a classroom',
    'css' => '--icon-item-border-color: rgba(255,255,255,0.1)'
  ]
); ?>

  <?php echo animated_statement('English · Political Science · Psychological Science · Economics · Biology', 'text-center'); ?>

  <div class="icon-items-list mw-1 mt-5 mx-auto">
    <?php echo item_iconItem(
      null,
      'graduation-cap',
      'icon-on-left'
    ); ?>
        <p>Vassar does not have a core curriculum, so students are able to complete a double major within four years.</p>
    <?php echo end_item_iconItem(); ?>

    <?php echo item_iconItem(
      null,
      'screwdriver-wrench',
      'icon-on-left'
    ); ?>
        <p>Some students create their own majors, combining disciplines of particular personal interest. A large number of our students complete a major and a correlate sequence (minor), sometimes in academically disparate fields.</p>
    <?php echo end_item_iconItem(); ?>
  </div>

  <?php echo cta_link(
    '/admission/explore/academics/',
    'See all our majors and minors',
    'center-object mt-4'
  ); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_hasColumns(
    'Credit',
    '3',
    '<p class="intro-text">Vassar awards credit for scores of 4 or 5 on the AP exams and for scores of 5, 6, or 7 on IB Higher Level exams. A maximum of 2 units of pre-matriculation examination-based credits will be awarded.</p>',
    'items-equal-height mw-inner-2 theme-cream',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'AP score',
      '4, 5'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'IB Higher Level score',
      '5–7'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Max credits awarded',
      '2',
      'units'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    'Learning in the Community',
    '2',
    null,
    null,
    'gap-3 items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Internships',
        'https://offices.vassar.edu/community-engaged-learning/',
          ['url' => '/admission/assets/images/quick-facts/academics/0212-17-07-kr-ursi-frogs-vassar-0026.jpg',
          'alt' => 'Student and professor in a lab of terrariums' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>Internship opportunities—what we call Community-Engaged Learning—are available in Poughkeepsie, Albany, and New York City. Nearly 70% of Vassar students participate in community-engaged learning for credit at some point during their Vassar careers.</p>
    <?php echo end_item_cardWithText('Learn more'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Study Abroad',
        'https://offices.vassar.edu/international-programs/',
          ['url' => '/admission/assets/images/quick-facts/academics/fotino-bryan-morocco-abroad-fba-70251.jpg',
          'alt' => 'Students stand in front of a Moroccan building decorated with mosaic tiles' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>Vassar students (usually juniors) may study abroad for one semester or a full academic year. About 45% of our students participate in our study-away programs prior to graduation.</p>
    <?php echo end_item_cardWithText('Learn more about studying away '); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_hasColumns(
  'After Vassar',
  '3',
  '<p class="intro-text">Vassar opens doors. Vassar students have a high rate of acceptance into both law and medical school. Two-thirds of Vassar students ultimately pursue advanced studies.</p>',
  'items-equal-height mw-inner-3 theme-dark-burgundy has-bg quad-pattern',
  'gap-3',
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Six months after graduating',
      '96%',
      'are employed, in school, or pursuing a fellowship/volunteer experience.'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Law school admit rate',
      '90%',
      'including Yale, Stanford, NYU, Univ. of Chicago, and Univ. of Pennsylvania.'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Med school admit rate',
      '85%',
      'including Vanderbilt, Columbia, Dartmouth, and Harvard.'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    null,
    '2',
    null,
    'pt-0 items-equal-height mw-inner-5 theme-dark-burgundy has-bg quad-pattern',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Pre-Law',
        'https://offices.vassar.edu/careers/graduate-and-law/law-school/',
        ['url' => '/admission/assets/images/quick-facts/academics/0100_16_09_KR_0090.jpg',
        'alt' => 'Graduate in audience with dramatic lighting' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken'
    ); ?>
        <p>Pre-law Advising is handled by the Office of Career Development, also with faculty support. Both encourage students to come to their offices to discuss any questions they have with respect to pre-law studies and the law school application process.</p>
    <?php echo end_item_cardWithText('Learn more'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Pre-Med',
        'https://offices.vassar.edu/pre-health-advising/',
        ['url' => '/admission/assets/images/quick-facts/academics/0014-19-04-kr-chemistry-vassar-4556.jpg',
        'alt' => 'A student wearing goggles looks at a test tube' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken'
    ); ?>
        <p>The Office for Fellowships and Pre-Health Advising provides guidance and assistance to students planning to pursue careers in medicine and other careers in the health professions.</p>
    <?php echo end_item_cardWithText('Learn more'); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
