
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Explore Outcomes",
  "page_navTitle":"Outcomes",
  "feature_image":"/admission/assets/images/explore/outcomes/Commencement_grads_11_JA_2.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left supertitle">Explore</b>
   <b class="slide-from-right">Outcomes</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Group of graduates in gowns and mortarboards seen from the back',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo interior_page_nav() ?>

<?php echo masthead_interiorPage(
    'Life After Vassar',
    'From day one, you will be part of a community that is committed to supporting your growth and success.',
    '/admission/assets/images/explore/outcomes/2022-cap-toss.jpg',
    null,
    null,
    ['img_alt_text' => 'Cap toss at Vassar College’s 2022 Commenncement ceremony']
  );
?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
    null,
    'theme-charcoal animate-when-content-appears mw-inner-4',
    null,
    null
); ?>

<?php echo animated_statement('Within six months of graduating, 93% of Vassar students are employed, in graduate school, or in a competitive fellowship.'); ?>

<?php echo end_sec_regularContent(); ?>



<?php echo sec_fullBleedImageColumn(
    'Career Development',
    $admission_img_path.'explore/outcomes/110619_160over90_Vassar_4689.jpg',
    'image-is-first theme-burgundy quad-pattern has-bg',
    '',
    ['img_alt_text' => 'A student with dark hair and a mustache sits at a desk in a classroom, next to a giant map of the world.']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Career Development Office helps students and alumni envision—then realize—a meaningful life after Vassar. The CDO assists students in choosing their major, offers resume and cover letter workshops, and provides networking opportunities.</p>
    <?php echo cta_link(
        'https://offices.vassar.edu/careers/',
        'Visit the Career Development Office'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
    'Major Palooza',
    $admission_img_path.'explore/outcomes/0153-19-11-kr-major-palooza-vassar-5360-crop.jpg',
    ' theme-charcoal',
    '',
    [
      'img_alt_text' => 'Three people talk in a crowded room.'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar hosts Major Palooza for sophomores to explore the value and versatility of a liberal arts degree, as well as to network with Vassar’s vast and dedicated alumni. Panels and receptions are available to all.</p>
    <?php echo cta_link(
        'https://major-palooza.vassar.edu/',
        'Visit Major Palooza'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Connections',
    $admission_img_path.'explore/outcomes/0002-18-01-kr-scc-estrella-vassar-0048.jpg',
    'image-is-first theme-extralightgray quad-pattern has-bg',
    '',
    [
      'img_alt_text' => 'A roomful of people wave at the viewer.'
    ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar’s Sophomore Career Connections introduces second-year students to the extraordinary range of career options available to them. Vassar offers an extensive network of alumni and parent mentors as one of our very best career resources.</p>
    <?php echo cta_link(
        'https://www.vassar.edu/sophomore-career-connections',
        'Visit Sophomore Career Connections'
    ); ?>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
  'After Vassar',
  '2',
  '<p class="intro-text">Vassar opens doors. Vassar students have a high rate of acceptance into both law and medical school. Two-thirds of Vassar students ultimately pursue advanced studies.</p>',
  'items-equal-height mw-inner-2 theme-dark-burgundy has-bg quad-pattern',
  'gap-3',
); ?>

  <?php /* echo item_col(); ?>
    <?php echo item_stat(
      'Six months after graduating',
      $after_vassar['six_months_out'],
      '<p class="fs-6">are employed, in school, or pursuing a fellowship/volunteer experience.</p>'
    ); ?>
  <?php echo end_item_col(); */ ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Law school admit rate',
      $after_vassar['law_school_admit_rate']
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Med school admit rate',
      $after_vassar['med_school_admit_rate']
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

<!-- RELATED TOPICS ===  -->

<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'relatedtopics theme-burgundy',
    ''
); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
