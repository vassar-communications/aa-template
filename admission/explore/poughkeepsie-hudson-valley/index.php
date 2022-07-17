
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/*  PAGE INFO ============ */

$page_title = "Explore Poughkeepsie & The Hudson Valley";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Explore</b>
   <b class="slide-from-right">Poughkeepsie & The Hudson Valley</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => 'https://vassartest.chuckyatsuk.com/img/explore/hudson/Mid-Huson_Bridge_10_JGa.jpg',
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
    'https://vassartest.chuckyatsuk.com/img/explore/hudson/0206-19-11-kwe-rowing-vassar-vb-4395.jpg');
?>



<?php /*  PAGE CONTENT === */ ?>



<?php echo sec_wideContent(
    'Placeholder',
    '<p class="section-intro-text">placeholder title</p>',
    'show-image-then-content',
    'mw-4',
    ['bg-image-url' => 'https://images.unsplash.com/photo-1652703747774-558a10faacc2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1776&q=80',
        'bg-image-alt' => 'replacethisalttext',
        'title_classes' => 'animate-when-content-appears animation-zoom-in'
    ]
); ?>

[INSERT CAROUSEL]
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
    'related-topics-section theme-burgundy',
    ''
); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-academics.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-student-life.php');?>
<?php echo end_item_col(); ?>

<?php echo item_col('related-topics-column d-flex'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/explore/explore-campus.php');?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo site_footer(); ?>