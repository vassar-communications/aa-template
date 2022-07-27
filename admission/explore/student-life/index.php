<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Explore Student Life",
  "page_navTitle": "Student Life",
  "feature_image": "explore/student-life/Vassar_Campus_20190508_KR_5256.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/*
$page_info = [
  'page_title' => 'Explore Student Life', 'feature_image' => $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg'
];
*/


?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<div class="slide-from-left">
      <b class="supertitle">Explore</b>
      <div>Student</div>
    </div>
   <b class="slide-from-right">Life</b>',
    '726007009?h=91eec5d256',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>

<?php echo interior_page_nav(); ?>

<?php echo masthead_interiorPage(
    'Find Your Spark',
    'Vassar is a unique, interdisciplinary, dynamic community that celebrates the value of diversity among its students, faculty, and staff. Each individual person on our campus wonderfully enriches our learning, work, and living on campus.',
    $admission_img_path.'explore/student-life/0055-16-05-kr-spring-vassar-0094.jpg',
    null,
    null,
    ['img_alt_text' => 'Students relax in a hammock on one of the quads']
  );
?>



<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_wideContent(
        'Extracurricular activities include',
        '',
        'theme-dark-burgundy',
); ?>

<div class="grid cols-4 animation-group animation-zoom-in animate-when-content-appears" style="--bs-gap: 1rem">

    <?php echo item_iconButton(
        'image',
        'nine a capella singing groups',
        null,
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'image',
        'the Barefoot Fireflies fire-juggling club',
        null,
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'image',
        'hundreds of student organizations',
        null,
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'image',
        'thousands of campus-wide events',
        null,
        'btn-card animation-item'
    ); ?>

</div>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_wideContent(
    null,
    animated_statement('It’s Not Student Housing, It’s Home').'<p class="intro-text">Our nine historic residential houses are the heart of Vassar. You won’t find a Greek system on campus—a fact we celebrate—and 97% of students choose to live on campus.</p>',
    'theme-charcoal bg-dark quad-pattern has-bg animate-when-content-appears mw-inner-5 px-0 text-center',
    'mt-6'
); ?>

  <?php echo carousel(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/0055_15_04_KR_0204.jpg'); ?>
      <p>Cushing House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Davison_spring_1104_TT_9233.jpg'); ?>
      <p>Davison House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Jewett_fall_1010_TT_8514.jpg'); ?>
      <p>Jewett House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Josselyn_House_spring_1104_TT_9256.jpg'); ?>
      <p>Josselyn House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Lathrop_spring_06_TT_03.jpg'); ?>
      <p>Lathrop House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/0036-20-08-kr-campus-vassar-0053.jpg'); ?>
      <p>Main Building</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Noyes_spring_TT_50.jpg'); ?>
      <p>Noyes House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Campus_Landscape_06_BMR_5.jpg'); ?>
      <p>Raymond House</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Strong_summer_06_MLB_02.jpg'); ?>
      <p>Strong House</p>
    <?php echo end_carousel_item(); ?>

  <?php echo end_carousel(); ?>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Galvanize Your Energy',
    '/admission/assets/images/explore/student-life/110619_160over90_Vassar_7499.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Athletes stand in a huddle']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Athletics have always been an important facet of the Vassar experience. In addition to our 27 Varsity sports, athletes of all levels have the opportunity to join an intramural team, take a yoga class, or use Vassar’s on-campus golf course. Among many offerings, club sports include Ultimate Frisbee, Quidditch, Figure Skating, and others.</p>

    <?php echo cta_link(
        'https://www.vassarathletics.com/',
        'Learn more about Vassar Athletics'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Part of a Bigger Whole',
    '/admission/assets/images/explore/student-life/Poughkeepsie_night_DSC_8551.jpg',
    '',
    '',
    ['img_alt_text' => 'Downtown Poughkeepsie in early evening, with the Mid-Hudson Bridge illuminated in the background']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Vassar community engages with Poughkeepsie and the wider Hudson River Valley region on multiple levels. Students participate in community-based learning assignments and volunteering opportunities. Reciprocally, Vassar welcomes our neighbors to engage in campus events and explore our facilities.</p>

    <?php echo cta_link(
        'https://vassargoodneighbors.wordpress.com/',
        'Learn more about Vassar’s Good Neighbors Partnerships'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_hasColumns(
    'More in This Section',
    3,
    null,
    'relatedtopics theme-burgundy',
    ''
); ?>

<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-diversity.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
