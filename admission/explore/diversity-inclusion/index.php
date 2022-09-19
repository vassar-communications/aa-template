
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Explore Diversity & Inclusion",
  "page_navTitle": "Diversity & Inclusion",
  "feature_image":"/admission/assets/images/explore/diversity/0009_17_02_KR_0055.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);

?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left"><div class="supertitle">Explore</div> <div>Diversity</div></b>
   <b class="slide-from-right">& Inclusion</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Students sit together at an event in Skinner Hall, a large room with stained-glass windows',
        'css' => '
        --cover-overlay-color: rgba(0,0,0,0.4);
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav(); ?>

<?php echo masthead_interiorPage(
    'Together We Become More',
    'Our differences strengthen our community and offer us the opportunity to connect with all kinds of people.',
    $admission_img_path.'explore/diversity/0203_17_04_KR_0097-2x3-crop.jpg',
    '',
    '',
    ['img_alt_text' => 'Three students toss colorful Holi powder in the air.']
  );
?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_hasColumns(
    'The Class of 2025 Represents',
    '3',
    null,
    'items-equal-height mw-inner-4 theme-extralightgray animate-when-content-appears animation-group animation-fade-in',
    'gap-3',
    ['css' => '--sequential-animation-item-gap: 0.2s']
); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      '2,500',
      'students from all 50 states and 79 countries'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      '35%',
      'students of color'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      '14%',
      'students who are the first in their families to attend college'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_fullBleedImageColumn(
    'Services',
    '/admission/assets/images/explore/diversity/0214-18-05-kr-alana-vassar-6569.jpg',
    'image-is-first theme-charcoal has-bg quad-pattern light-bg-pattern-1',
    '',
    ['img_alt_text' => 'Students assemble in a large, well-lit room']

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar offers many resources to ensure all students have what they need to thrive. Our student-centered approach includes programs and centers designed to support students in their personal and intellectual development.</p>
    <ul class="linked-list no-first-border ll-theme-light-on-charcoal">
        <li><a class="ps-0"  href="https://offices.vassar.edu/religious-and-spiritual-life/">The Office of Religious and Spiritual Life and Contemplative Practices </a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/alana/">The Jeh Vincent Johnson ALANA Cultural Center</a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/womens-center/">The Women’s Center</a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/savp/">The Support, Advocacy, & Violence Prevention Office</a></li>
    </ul>

    <?php echo cta_link(
        'https://offices.vassar.edu/student-engagement/',
        'Learn more about Student Growth and Engagement '
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




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
