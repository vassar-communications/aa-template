
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Student Life";
$page_classes = "";

/*  ---------------------- */

?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left supertitle">Explore</b>
   <b class="slide-from-right">Student Life</b>',
    '726007009?h=91eec5d256',
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead_vid(); ?>

<?php echo interior_page_nav() ?>

<?php echo masthead_interiorPage(
    'Find Your Spark',
    '<span class="placeholder">Vassar’s community is full of character, collaboration, and vibrant diversity. People of all perspectives and backgrounds come here to learn, work, and live together in the proud tradition of a residential liberal arts college.</span>',
    $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg');
?>



<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_wideContent(
        'Extracurricular activities include',
        '',
        'theme-dark-burgundy',
);?>





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
<!-- RELATED TOPICS ===  -->

<?php echo sec_wideContent(
    'It’s Not Student Housing, It’s Home',
    'Our nine historic residential houses are the heart of Vassar. You won’t find a Greek system on campus—a fact we celebrate—and 97% of students choose to live on campus. ',
    'theme-charcoal bg-dark quad-pattern has-bg',
);?>

[INSERT IMAGE GALLERY]


<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Galvanize Your Energy',
    $admission_img_path.'placeholder.jpg',
    'image-is-first theme-cream',
    ''
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
    $admission_img_path.'placeholder.jpg',
    '',
    ''
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
