
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Explore Beyond Campus",
  "page_navTitle":"Beyond Campus",
  "feature_image":"/admission/assets/images/explore/hudson/Mid-Huson_Bridge_10_JGa.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">
      <div class="supertitle">Explore</div>
      <div>Beyond</div>
    </b>
   <!--<b class="slide-from-right">Poughkeepsie & The Hudson Valley</b>-->
   <b class="slide-from-right">Campus</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Mid-Hudson bridge across the Hudson River',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php echo masthead_interiorPage(
    'The Hudson Valley',
    'Vassar is located in Poughkeepsie, NY, a historic city in the scenic Hudson Valley. The greater Poughkeepsie area is home to about 100,000 people and offers an array of opportunities for our students to explore, including a vibrant arts scene, beautiful hiking trails, and a wealth of historic sites.',
    $admission_img_path.'explore/hudson/0206-19-11-kwe-rowing-vassar-vb-4395.jpg',
    null,
    null,
    ['img_alt_text' => 'A group of students row on the Hudson River early in the morning']
  );
?>



<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_wideContent(
    'Explore Our Surroundings',
    '<p class="intro-text">Vassar’s location offers something for everyone—whether you’re interested in attending vibrant community events, sampling excellent food, enjoying the outdoors, or visiting unique local stores and museums.</p>',
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
<div class="quote-attribution">Robyn Taylor, DJ, <em>101.5 WPDH</em></div>
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
