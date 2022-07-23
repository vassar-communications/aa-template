
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

// $page_title = "Explore Poughkeepsie & The Hudson Valley";
$page_title = "Explore Local";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left supertitle">Explore</b>
   <!--<b class="slide-from-right">Poughkeepsie & The Hudson Valley</b>-->
   <b class="slide-from-right">Local</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $admission_img_path.'explore/hudson/Mid-Huson_Bridge_10_JGa.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-explore-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php echo masthead_interiorPage(
    'The Hudson Valley',
    'Vassar is located in Poughkeepsie, NY, a historic city in the scenic Hudson Valley. The greater Poughkeepsie area is home to about 100,000 people and offers an array of opportunities for our students to explore, including a vibrant arts scene, beautiful hiking trails, and a wealth of historic sites.',
    $admission_img_path.'explore/hudson/0206-19-11-kwe-rowing-vassar-vb-4395.jpg');
?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_wideContent(
    'Local [CHANGE] Features',
    '<p>Vassar is [CHANGE THIS] surrounded by ...</p>',
    'theme-charcoal has-bg quad-pattern bg-dark',
    ''
); ?>


<?php echo admissionExplorehudsonCarousel(); ?>

<?php echo end_sec_wideContent(); ?>


<?php echo sec_wordByWord_fixed(
    null,
    'animate-when-content-appears space-around-image',
    null
); ?>

<p>“One of the nicest areas in Poughkeepsie to stroll, shop, and get a bite to eat is the Vassar College area.”</p>
<div class="quote-attribution">Robyn Taylor, <em>101.5 WPDH</em></div>
<?php echo end_sec_wordByWord_fixed(); ?>


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
