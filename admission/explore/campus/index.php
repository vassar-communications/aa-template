
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Explore Campus",
  "page_navTitle": "Campus",
  "feature_image": "/admission/assets/images/explore/student-life/Vassar_Campus_20190508_KR_5256.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo sec_fixedCenteredTitle_masthead_vid(
    '<b class="slide-from-left supertitle">Explore</b>
   <b class="slide-from-right">Campus</b>',
    '726094046?h=e82beea31f',
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

<?php echo interior_page_nav() ?>

<?php echo masthead_interiorPage(
    'Where Horizons Meet',
    'Vassar’s 1,000-acre campus blends timeless architecture with cutting-edge facilities.',
    '/admission/assets/images/explore/campus/Vassar_Campus_20190508_KR_5256.jpg',
    '',
    '',
    ['img_alt_text' => 'Students gather on the lawn in front of the library on a sunny day']
  );
?>


<?php echo sec_fullBleedImageColumn(
    null,
    '/admission/assets/images/explore/campus/Vassar_Postcards_20210904_KR_0122-copy.jpg',
    'image-is-first theme-dark-burgundy quad-pattern has-bg gold-icons',
    '',
    ['img_alt_text' => 'A view of Gordon Commons, a large brick building with white columns']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text placeholder">On Vassar’s 1,000-acre campus, students have access to:</p>

    <div class="icon-items-list vertically-center-icon">
      <?php echo item_iconItem(
        null,
        'archway',
        'icon-on-left'
      ); ?>
          <p>Timeless architecture blended with cutting-edge facilities.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'tree',
        'icon-on-left'
      ); ?>
          <p>Spaces that inspire bold thinking as well as an appreciation for natural beauty.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'people-roof',
        'icon-on-left'
      ); ?>
          <p>A safe and inclusive environment where, no matter who you are, together we can become more.</p>
      <?php echo end_item_iconItem(); ?>
    </div>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_wideContent(
    'Where Else But Vassar?',
    '<p class="intro-text">Every Vassar student has their own cherished place on campus. Some of our favorite spaces include:</p>',
    'theme-charcoal has-bg quad-pattern bg-dark section--edge-to-edge',
    ''
); ?>


<?php //echo admissionExploreCampusCarousel(); ?>




<?php echo carousel('mt-6'); ?>
  <?php echo carousel_item("/admission/assets/images/explore/campus/slideshow/0198-19-11-kwe-library-vassar-vb-5472.jpg", null, 'Students read in a spacious library reading room with a large stained-glass window behind them'); ?>
    <h3 class="h3">The Libraries</h3>
    <p>With more than 1 million volumes, the Vassar libraries hold one of the largest liberal arts collections in the country. In the Thompson Memorial Library, sit and study in the main reading room beneath the stunning Cornaro stained glass window as the sun streams through.</p>
  <?php echo end_carousel_item(); ?>

  <?php echo carousel_item("/admission/assets/images/explore/campus/slideshow/0114-19-05-ja-fllac-vassar-046.jpg", null, 'Students admire artwork in the Frances Lehman Loeb Art Center'); ?>
        <h3 class="h3">The Frances Lehman Loeb Art Center</h3>
      <p>Founded in 1864 as the Vassar College Art Gallery, the center is one of the only nationally known museums on a college campus. Today it is home to 21,000 works including by Rembrandt, Pablo Picasso, Georgia O’Keeffe, and Francis Bacon.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item("/admission/assets/images/explore/campus/slideshow/0085-21-08-kr-summer-vassar-0056.jpg", null, "A large, modern stone and glass building"); ?>
      <h3 class="h3">The Bridge for Laboratory Sciences</h3>
      <p>Designed as a bridge across the Fonteyn Kill wetland, our environmentally friendly, dynamic STEM facility comprises a network of interdisciplinary laboratories that connects the integrated sciences with humanities. The state-of-the-art building was the first in the U.S. to use so much of a special, innovative type of bird-friendly glass, with a coating visible to birds but almost invisible to humans.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item("/admission/assets/images/explore/campus/slideshow/0056-21-06-kr-campus-vassar-0006.jpg", null, "A stone campus path leading through a small park surrounded by trees"); ?>
          <h3 class="h3">The Shakespeare Garden</h3>
      <p>The second oldest garden in the United States, this tranquil space is appreciated by the Vassar community and visitors alike.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item("/admission/assets/images/explore/campus/slideshow/0075_16_07_KR_0132.jpg", null, "A faculty member and student stand in the woods looking up at a tree trunk"); ?>
        <h3 class="h3">The Vassar Farm and Ecological Preserve</h3>
        <p>This 500-acre green space comprises a multitude of habitats including streams, wetlands, ponds, forest, and old fields populated by a diversity of flora and fauna. This is an invaluable resource for Vassar faculty and students conducting scientific research.</p>
    <?php echo end_carousel_item(); ?>

<?php echo end_carousel(); ?>









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
