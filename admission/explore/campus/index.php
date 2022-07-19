
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Campus";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left">Explore</b>
   <b class="slide-from-right">Campus</b>',
    '726094046?h=e82beea31f',
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




<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>
<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

<?php echo masthead_interiorPage(
    'Where Horizons Meet',
    'Vassar’s 1,000-acre campus blends timeless architecture blended with cutting-edge facilities',
    $admission_img_path.'explore/student-life/Vassar_Campus_20190508_KR_5256.jpg');
?>


<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'explore/muslim-prayer-space-1910-nz-201448.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h2 class="display-2 mb-5 border-animate">Diversity & Inclusion</h2>
    <p>We celebrate our differences and our connections and provide resources that are committed to the healthy support of all members of our community.</p>

    <a href="/admission/explore/diversity-inclusion/" class="px-0 btn btn-link arrow">Explore Diversity & Inclusion</a>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    'Where Else But Vassar?',
    '<p>Every Vassar student has their own cherished place on campus. Some of our favorite spaces include:</p>',
    'theme-charcoal has-bg quad-pattern bg-dark',
    ''
); ?>


<?php echo admissionExploreCampusCarousel(); ?>

<?php echo end_sec_wideContent(); ?>


<?php echo sec_wordByWord_fixed(
    null,
    'animate-when-content-appears space-around-image',
    null
); ?>

<p>Vassar’s harmony is the sound of every individual coming together. It’s more than symbolic that there are 65 Steinway pianos on campus.</p>
<!--<div class="quote-attribution">Robyn Taylor, <em>101.5 WPDH</em></div>-->
<?php echo end_sec_wordByWord_fixed(); ?>


<?php /*  PAGE CONTENT === */ ?>

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
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-diversity.php');?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>
