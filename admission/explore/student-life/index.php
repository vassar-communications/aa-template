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
    'Vassar is a unique, interdisciplinary, dynamic community that celebrates the value of diversity among its students, faculty, and staff. Each individual person on our campus enriches our learning, work, and living on campus.',
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
        'microphone-lines',
        'A vibrant arts scene',
        'https://www.vassar.edu/arts',
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'volleyball',
        'Club and intramural sports',
        'https://www.vassarathletics.com/',
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'users',
        '150+ student organizations',
        'https://vsa.vassar.edu/orgs/',
        'btn-card animation-item'
    ); ?>

    <?php echo item_iconButton(
        'calendar-days',
        'Thousands of campus-wide events',
        'https://www.vassar.edu/news/events',
        'btn-card animation-item'
    ); ?>

</div>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_wideContent(
    null,
    animated_statement(
      'It’s Not Student Housing, It’s Home',
      'mx-auto',
      null,
      ['css' => 'max-width: 40rem']
      ).'<p class="intro-text">Our nine historic residential houses are the heart of Vassar. Residential life is student-led, empowering you to contribute to the vibrant culture of our campus while making lifelong connections with students of all class years, majors, backgrounds, and interests.</p>',
    'theme-charcoal bg-dark quad-pattern has-bg animate-when-content-appears mw-inner-5 px-0 text-center',
    'mt-6'
); ?>

  <?php echo carousel(); ?>

  <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/0055_15_04_KR_0204.jpg', null, 'A photo of a group of people walking out of and around Cushing House'); ?>
      <h3>Cushing House</h3>
      <p>Known for its homey atmosphere and welcoming community, Cushing features the Great Hall—a large open space used for studying and relaxing.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Davison_spring_1104_TT_9233.jpg', null, 'A photo from the center of the residential quad lawn facing a residence house'); ?>
      <h3>Davison House</h3>
      <p>Davison House is one of four Elizabethan-style houses of the residential quadrangle.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Jewett_fall_1010_TT_8514.jpg', null, 'A photo of the exterior of Jewett House facing the front entrance'); ?>
      <h3>Milo Jewett House</h3>
      <p>As the tenth tallest building in Poughkeepsie, the tower of Jewett House provides the best views of campus.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Josselyn_House_spring_1104_TT_9256.jpg', null, 'A photo of the exterior of Josselyn House facing the front entrance'); ?>
      <h3>Olivia Josselyn House</h3>
      <p>The second largest residence hall after Main Building, Josselyn House—or “Joss” as it’s commonly known—is closest to Arlington shops and restaurants adjacent to the campus.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Lathrop_spring_06_TT_03.jpg', null, 'A photo of the exterior of Strong House facing the front entrance'); ?>
      <h3>Lathrop House</h3>
      <p>Lathrop was famous for waging marshmallow wars on neighboring Raymond. Recently, the house fellows brokered a permanent and lasting peace over baked s’mores.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/0036-20-08-kr-campus-vassar-0053.jpg', null, 'Main House'); ?>
      <h3>Main House</h3>
        <p>The first two floors are used for administrative offices while the upper floors constitute Main House and provide accommodations for 351 students.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Strong_summer_06_MLB_02.jpg', null, 'Strong House'); ?>
      <h3>Strong House</h3>
      <p>While Strong House has been labeled as all-women’s housing, it actively welcomes and celebrates our trans*, nonbinary, questioning, agender, and other gender-nonconforming residents and community members.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Noyes_spring_TT_50.jpg', null, 'A photo of the exterior of Noyes House facing the front entrance'); ?>
      <h3>Emma Hartman Noyes House</h3>
      <p>Noyes represents a distinctly modernist departure from the Victorian and Edwardian styles of the other residence halls.</p>
    <?php echo end_carousel_item(); ?>

    <?php echo carousel_item('/admission/assets/images/explore/student-life/res-life-gallery/Campus_Landscape_06_BMR_5.jpg', null, 'Raymond House'); ?>
      <h3>Raymond House</h3>
      <p>One thing Raymond is famous for, aside from the marshmallow wars with Lathrop, is its annual Halloween haunted house.</p>
    <?php echo end_carousel_item(); ?>

  <?php echo end_carousel(); ?>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Dorms',
    $quickfacts_img_path.'THs-0144-15-05-hw-dorm-vassar-vb-3813.jpg',
    'image-is-first theme-cream',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up burgundy-icons">

      <?php echo item_iconItem(
        null,
        'building',
        'icon-on-left'
      ); ?>
          <p>The Town Houses, Terrace Apartments, and South Commons offer apartment-style living accommodations for juniors and seniors.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'heart',
        'icon-on-left'
      ); ?>
          <p>Wellness Corridors provide an option for quiet, substance-free housing within the residential houses.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'fa fa-users the-icon',
        'icon-on-left'
      ); ?>
          <p>The Vassar House Fellows Program has 15 faculty members and their families living alongside students in the residence halls. They serve as academic advisors and as members of the residential community who offer academic perspective and counsel.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Galvanize Your Energy',
    '/admission/assets/images/explore/student-life/110619_160over90_Vassar_7499.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'Athletes stand in a huddle']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>Athletics have always been an important facet of the Vassar experience. In addition to our 23 NCAA Division III varsity teams and four varsity club teams, we offer a robust range of activities for the entire community. Join an intramural team, take a yoga class, hit the gym at the Athletic and Fitness Center, or play a round on Vassar’s on-campus golf course.</p>

    <?php echo cta_link(
        'https://www.vassarathletics.com/',
        'Learn more about Vassar Athletics'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'A Thriving Campus Community',
    '/admission/assets/images/quick-facts/community/Kaleidoscope-0139_16_11_KR_0077.jpg',
    'image-is-first theme-cream',
    '',
    [
      'title_level' => '3',
      'img_alt_text' => 'Students on stage with international flags',
      'css' => '--icon-item-border-color: rgba(0,0,0,0.1)'
    ],
); ?>
  <div class="animate-when-content-appears animation-slide-up burgundy-icons">

      <?php echo item_iconItem(
        null,
        'cookie-bite',
        'icon-on-left'
      ); ?>
          <p>Popular on-campus hangouts include late-night dining at Gordon Commons, the College Center, Sunset Lake, and the Residential Houses’ common spaces.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'users',
        'icon-on-left'
      ); ?>
          <p>Throughout the year, nationally known speakers, writers, and musicians appear on campus.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'masks-theater',
        'icon-on-left'
      ); ?>
          <p>Each weekend, students have the opportunity to attend student music concerts, drama productions, lectures, dance recitals, and athletic events.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'mug-saucer',
        'icon-on-left'
      ); ?>
          <p>Student-run organizations and residential houses plan numerous social activities. These can range from comedy shows, dances, and movies, to study breaks or afternoon tea in the Rose Parlor.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    null,
    'section-class mw-inner-2 p-6',
    ''
); ?>

<?php echo item_cardWithText(
        'Dining',
        'https://vassar.cafebonappetit.com/',
        ['url' => $quickfacts_img_path.'0195-19-11-kwe-gordon-vassar-1644.jpg', 'alt' => 'Students sit at a table in the large common area of Gordon Commons' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>All students are on an all-you-care-to-eat meal plan, providing unlimited access to the main dining hall from 7 a.m. to 1 a.m., as well as expanded options at Express, the Bridge Café, the Retreat, a food truck, and cook-your-own ingredients.</p>
    <?php echo end_item_cardWithText('Learn more about campus dining'); ?>
<?php echo end_sec_regularContent(); ?>

<?php /* echo sec_fullBleedImageColumn(
    'Part of a Bigger Whole',
    '/admission/assets/images/explore/student-life/0068_15_07_BL_7549.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'An adult helps a child fingerpaint']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p>The Vassar community engages with Poughkeepsie and the wider Hudson River Valley region on multiple levels. Students participate in community-based learning assignments and volunteering opportunities. Reciprocally, Vassar welcomes our neighbors to engage in campus events and explore our campus.</p>

    <?php echo cta_link(
        'https://offices.vassar.edu/civic-engagement/',
        'Learn more about Vassar’s Community Partners'
    ); ?>

</div>
<?php echo end_sec_fullBleedImageColumn(); */ ?>



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
