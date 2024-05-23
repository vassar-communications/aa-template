
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
    $admission_img_path.'explore/diversity/1397_Vassar-College_exteriors-campus-life_Oct-2019_JA-crop.jpg',
    '',
    '',
    ['img_alt_text' => 'Evening sunlight shines on four people smiling and laughing in front of Sunset Lake on Vassar Campus.']
  );
?>



<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_hasColumns(
    'The Vassar Community Represents',
    '3',
    null,
    'items-equal-height mw-inner-4 theme-extralightgray animate-when-content-appears animation-group animation-fade-in',
    'gap-3',
    ['css' => '--sequential-animation-item-gap: 0.2s']
); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      $facts['number_of_students'],
      'students from ' . $class_stats['number_of_states'] . ' states and '.$class_stats['number_of_countries'].' countries'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      $class_stats['students_of_color'],
      'students of color'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('animation-item'); ?>
    <?php echo item_stat(
      null,
      $class_stats['1st-gen-students'],
      'students who are the first in their families to attend college'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo sec_fullBleedImageColumn(
    'Resources',
    '/admission/assets/images/explore/diversity/0214-18-05-kr-alana-vassar-6569.jpg',
    'has-bg quad-pattern light-bg-pattern-1',
    '',
    ['img_alt_text' => 'Students assemble in a large, well-lit room']

); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Vassar offers many resources to ensure all students have what they need to thrive. Our student-centered approach includes programs and centers designed to support students in their personal and intellectual development.</p>

    <?php /*
    <ul class="linked-list no-first-border ll-theme-light-on-charcoal">
        <li><a class="ps-0"  href="https://offices.vassar.edu/religious-and-spiritual-life/">The Office of Religious and Spiritual Life and Contemplative Practices </a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/alana/">The Jeh Vincent Johnson ALANA Cultural Center</a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/womens-center/">The Women’s Center</a></li>
        <li><a class="ps-0" href="https://offices.vassar.edu/savp/">The Support, Advocacy, & Violence Prevention Office</a></li>
    </ul>
    */ ?>

    <?php echo cta_link(
        'https://offices.vassar.edu/student-engagement/',
        'Learn more about Student Growth and Engagement '
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_fullBleedImageColumn(
  'Jeh Vincent Johnson ALANA Cultural Center',
  '/admission/assets/images/explore/diversity/0148-17-09-kr-alana-vassar-4978.jpg',
  'image-is-first theme-charcoal has-bg quad-pattern light-bg-pattern-1',
  '',
  [
    'img_alt_text' => 'Four smiling people in front of an outdoor ALANA event with ballons in the background. One person is sipping a drink from a straw and two others are holding cotton candy.',
    'title_level' => '3'
  ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
  <p>The Jeh Vincent Johnson ALANA Cultural Center provides a variety of resources and programs to support students of color, including opportunities for leadership development, intra-cultural and cross-cultural dialogues, lectures, and mentorship.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/alana/',
    'Learn more about the Jeh Vincent Johnson ALANA&nbsp;Cultural&nbsp;Center'
  ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_fullBleedImageColumn(
  'LGBTQ+ Center',
  '/admission/assets/images/explore/diversity/lgbtq-center-vassar-2209-dsw-3007-crop.jpg',
  'theme-burgundy',
  '',
  [
    'img_alt_text' => 'Person on a couch with laptop in a sunlit lounge with books, rainbow flags, posters, chairs and coffee tables.',
    'title_level' => '3'
  ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
  <p>The LGBTQ+ Center enhances the campus life experiences of lesbian, gay, bisexual, transgender, and queer students and their allies.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/lgbtq/',
    'Learn more about the LGBTQ+ Center'
  ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo sec_fullBleedImageColumn(
  'Women’s Center',
  '/admission/assets/images/explore/diversity/0084_14_10_KR_0087-crop.jpg',
  'image-is-first',
  '',
  [
    'img_alt_text' => 'Group of 12 seated people sitting in front of and listening to a seated person speaking and gesticulating with their arms and hands',
    'title_level' => '3'
  ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
  <p>The Women’s Center supports, celebrates, and empowers all individuals who identify as women, and welcomes and engages people of all genders.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/womens-center/',
    'Learn more about the Women’s Center'
  ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo sec_fullBleedImageColumn(
  'First-generation, Low Income (FLI) Program <em>(formerly the Transitions Program)</em>',
  '/admission/assets/images/explore/diversity/0097-22-08-kr-transitions-vassar-0002-crop.jpg',
  'theme-darkcoal has-bg quad-pattern light-bg-pattern-1',
  '',
  [
    'img_alt_text' => 'Three people at the entrance to Vassar College Main Building holding signs that read, Welcome to Vassar and You Belong Here. Two people are wearing face masks and one is not and smiling.',
    'title_level' => '3'
  ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
  <p>FLI is a comprehensive, four-year program for first-generation, low income, and/or undocumented students, focused on building community and creating a sense of belonging.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/transitions/',
    'Learn more about the FLI Program'
  ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
  'Office of Religious and Spiritual Life and Contemplative Practices',
  '/admission/assets/images/explore/diversity/0007-22-03-kr-lama-topgyal-chapel-vassar0008.jpg',
  'image-is-first theme-extralightgray',
  '',
  [
    'img_alt_text' => 'Two people wearing red robes exchange a small glass blue Buddha figurine',
    'title_level' => '3'
  ]
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p><strong>Feeding the Spirit.</strong> The Office of Religious and Spiritual Life and Contemplative Practices oversees, advises, and supports a wide range of religious and civic communities, as well as initiatives that merge Vassar’s campus with the mid-Hudson Valley community. Vassar staff members are always available for pastoral counseling and spiritual guidance, no matter where you are in your spiritual journey.</p>

    <?php echo cta_link(
        'https://offices.vassar.edu/religious-and-spiritual-life/',
        'Learn more about Religious and Spiritual Life'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
  'Office of International Services',
  '/admission/assets/images/explore/diversity/Kaleidoscope-0139_16_11_KR_0002.jpg',
  'theme-charcoal has-bg quad-pattern light-bg-pattern-1',
  '',
  [
    'img_alt_text' => 'People stand in a line while food is served in a large room with flags of different countries',
    'title_level' => '3'
  ]
); ?>

<div class="animate-when-content-appears animation-slide-up">
  <p>The Office of International Services supports international students in adjusting to and embracing a new culture and also works to involve and engage all members of the campus community in events, workshops, and other opportunities to share the wealth of global perspectives and experiences.</p>

  <?php echo cta_link(
    'https://offices.vassar.edu/international-services/',
    'Learn more about the Office of International Services'
  ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_wideContent(
    'Our Philosophy of Engaged Pluralism',
    '<p class="intro-text">Engaged pluralism is rooted in the conviction that collaborating across differences is necessary for social transformation and critical for the well-being of any community and its members. Vassar’s diverse community inspires positive change through open inquiry, deep dives into society’s most difficult challenges, and collaborative problem solving, and we believe it’s our differences that make us stronger.</p>',
    'theme-cream pb-1 hidemark',
    'mw-3 pb-5'
); ?>
<?php echo end_sec_wideContent(); ?>


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
