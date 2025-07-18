<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Quick Facts",
  "feature_image":"/admission/assets/images/quick-facts/0198-19-11-kwe-library-vassar-vb-5394.jpg"
}';
/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<style>

@media (min-width: 50em) {
  .cols-6 .section-content {
    grid-template-columns: repeat(6, 1fr);
  }
  .span-1 {
    grid-column: span 2;
  }
  .span-2 {
    grid-column: span 3;
  }
  .span-6 {
    grid-column: span 6;
  }
}

@media (max-width: 600px) {
    .cols-6 .section-content {
        grid-template-columns: 1fr;
    }

}
</style>





<?php echo sec_fixedCenteredTitle_masthead(
    '<b class="slide-from-left">Quick&nbsp;</b>
   <b class="slide-from-right">Facts</b>',
    null,
    'theme-verylightgray reveal-image',
    'mw-4',
    ['bg-image-url' => $page_info['feature_image'],
        'bg-image-alt' => 'Students work in a reading room of the Thompson Memorial Library',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      /* --section-title-faded-color: #444; */
      --bs-gap: 1rem;
      ']
); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo masthead_interiorPage(
    'Here’s what you need to know.',
    'We know you have questions. On this page, you’ll find fast facts about academics, campus life, and the Vassar community.',
    '/admission/assets/images/quick-facts/1065_Vassar College_exteriors_campus life_Oct 2019_JA.jpg',
    null,
    null,
    ['img_alt_text' => 'Two students share a bike on one of the campus paths']
);
?>



  <?php echo sec_regularContent(
      'Academic Quick Facts',
      'animate-when-content-appears gold-icons mw-inner-4 theme-charcoal has-bg section-bg-image-top',
      '',
      [
      'bg-image-url' => $admission_img_path.'quick-facts/Class-room-HW_26A9303.jpg',
      'bg-image-alt' => 'Students sitting in a classroom',
      'css' => '--icon-item-border-color: rgba(255,255,255,0.1)'
    ]
  ); ?>

    <div class="icon-items-list mw-1 mt-5 mx-auto">
      <?php echo item_iconItem(
        null,
        'graduation-cap',
        'icon-on-left'
      ); ?>
          <p>Vassar’s open curriculum offers the freedom and flexibility to pursue your passions while discovering new interests. There are no general education requirements, so you can take the courses that most interest you and know your classmates have chosen them as well.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'screwdriver-wrench',
        'icon-on-left'
      ); ?>
      <p>Vassar offers 50 majors, 65 correlates (minors), and 3 dual-degree programs.</p>

      <?php echo cta_link(
        '/admission/explore/academics/',
        'View our majors and correlates',
        'center-object mt-4 d-flex'
      ); ?>

      <?php echo end_item_iconItem(); ?>
    </div>

  <?php echo end_sec_regularContent(); ?>









<?php echo sec_hasColumns(
    null,
    '2',
    null,
    'items-equal-height mw-inner-1 theme-extralightgray',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average class size',
      $facts['average_class_size'],
      '<p class="fs-6">Many of our upper-level classes have fewer than 10 students.</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Student: Faculty ratio',
      $facts['student_faculty_ratio'],
      '<p class="fs-6">All classes are taught by professors, not teaching assistants or graduate student instructors.</p>'
    ); ?>
  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Learning in the Community and Beyond',
    '2',
    null,
    null,
    'gap-3 items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Community-Engaged Learning',
        'https://offices.vassar.edu/community-engaged-learning/',
          ['url' => '/admission/assets/images/quick-facts/academics/0212-17-07-kr-ursi-frogs-vassar-0026.jpg',
          'alt' => 'Student and professor in a lab of terrariums' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>Real-world experience can take your education to the next level. Vassar’s Office of Community-Engaged Learning helps students apply their academic knowledge to gain meaningful work experience through internships in the local community, New York City, Albany, and beyond.</p>
    <?php echo end_item_cardWithText('Learn more'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Study Abroad',
        'https://offices.vassar.edu/international-programs/',
          ['url' => '/admission/assets/images/quick-facts/academics/fotino-bryan-morocco-abroad-fba-70251.jpg',
          'alt' => 'Students stand in front of a Moroccan building decorated with mosaic tiles' ],
        'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>Vassar students (usually juniors) may study abroad for one semester or a full academic year. About 45% of our students participate in our study-away programs prior to graduation.</p>
    <?php echo end_item_cardWithText('Learn more about studying away '); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'After Vassar',
    '3',
    null,
    'items-equal-height mw-inner-3 theme-extralightgray',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Six months after graduating',
      $after_vassar['six_months_out'],
      '<p class="fs-6">are employed, in school, or pursuing a fellowship/volunteer experience.</p>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Law school admit rate',
      $after_vassar['law_school_admit_rate']
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Med school admit rate',
      $after_vassar['med_school_admit_rate']
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-6'); ?>
    <?php echo cta_link(
      '/admission/explore/academics/',
      'Learn more about academics at Vassar',
      'center-object mt-4 d-flex'
    ); ?>
  <?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>





<?php echo sec_hasColumns(
    'Community Quick Facts',
    '3',
    '<p class="intro-text">At Vassar, you&#8217;ll be encouraged to collaborate across differences and to celebrate the diversity of backgrounds and experiences that make up our community. Here, your voice will be valued and you will be empowered to make a difference.</p>',
    'items-equal-height mw-inner-3 theme-extralightgray cols-6 animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      'Student body',
      $facts['number_of_students'],
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      'Students of color',
      '37%', // $class_stats['students_of_color'],
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'First Generation Students',
      $class_stats['1st-gen-students'],
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'Pell Grant Eligible',
      '22.4%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'Languages spoken',
      $class_stats['languages_spoken'],
      '<p class="fs-6">by the Class of 2027</p>'
    ); ?>
  <?php echo end_item_col(); ?>


<style>

.cta-full-row {
  grid-column: span 6;
    justify-content: center;
    margin-top: 2rem;
}

</style>

  <?php echo cta_link(
    '/admission/explore/diversity-inclusion/',
    'Learn More About Diversity and Inclusion',
    'cta-full-row'
  ); ?>

<?php echo end_sec_hasColumns(); ?>







<?php echo sec_fullBleedImageColumn(
    'Residential Life',
    $quickfacts_img_path.'Davison-26A5737.jpg',
    'image-is-first theme-cream',
    '',
    ['title_level' => '3','img_alt_text' => 'A student sits on a window sill between large, wood-framed windows, in a well-lit room. The student is looking at the camera.'],
); ?>
  <div class="animate-when-content-appears animation-slide-up burgundy-icons">

      <?php echo item_iconItem(
        null,
        'house-circle-check',
        'icon-on-left align-items-center'
      ); ?>
          <p>Housing is guaranteed for all four years</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'people-roof',
        'icon-on-left align-items-center'
      ); ?>
          <p>97% of students live on campus</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'custom',
        'icon-on-left align-items-center',
        ['glyph' => '\03A3', 'glyph-name' => 'sigma']
      ); ?>
          <p>Vassar does not have fraternities or sororities</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Tech',
    '/admission/assets/images/quick-facts/Raymond-0204-19-11-kwe-raymond-parlor-vassar-vb-2828.jpg',
    'theme-charcoal gold-icons',
    '',
    ['title_level' => '3',
    'img_alt_text' => 'A student sits in a large room working at a laptop'
  ]
); ?>
  <div class="animate-when-content-appears animation-slide-up">
    <div class="icon-items-list">
      <?php echo item_iconItem(
        null,
        'network-wired',
        'icon-on-left'
      ); ?>
          <p>All dorm rooms provide both Ethernet and Wi-Fi access for Macs and Windows PCs.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'desktop',
        'icon-on-left'
      ); ?>
          <p>Computer labs are located in every residence hall, as well as in the Computer Center, library, and College Center.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'wifi',
        'icon-on-left'
      ); ?>
          <p>Wireless internet is available in all buildings and most public spaces on campus.</p>
      <?php echo end_item_iconItem(); ?>


    </div>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>





<?php echo sec_regularContent(
    'Our Campus',
    'section-class mw-inner-2',
    ''
); ?>
<p class="intro-text">Our campus is 1,000 acres and is maintained as an arboretum with over 200 species of trees. The campus includes the <a href="https://www.vassar.edu/farm">Vassar Farm and Ecological Preserve</a>, a nine-hole golf course, Sunset Lake, the Shakespeare Garden, an <a href="https://www.vassar.edu/physics-and-astronomy/astronomy/class-1951-observatory">observatory</a>, and the <a href="https://www.vassar.edu/theloeb">Frances Lehman Loeb Art Center</a>.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    'How’s the Weather?',
    '2',
    '<p class="intro-text text-start">Poughkeepsie weather is close to that of New York City, with four distinct seasons.</p>
    <p class="text-start"> We do get snow, but we are not located in a “snowbelt,” so moderate snow is the norm during the winter. Most students love spring and fall, and it is common to see professors hold classes outside on nice days. While you’ll need a hat, gloves, and scarf in the winter, you’ll be able to wear shorts and t-shirts at other times of the year.</p>',
    'items-equal-height mw-inner-2 theme-extralightgray wide-intro burgundy-icons',
    'gap-3',
    ['title_level' => '3']
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average Winter Temp',
      '35<span class="stat-unit">°F</span><br>
      2<span class="stat-unit">°C</span>',
      '',
      'unflex-stat-values'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average Summer Temp',
      '80<span class="stat-unit">°F</span><br>
      27<span class="stat-unit">°C</span>',
      '',
      'unflex-stat-values'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>

    <?php echo cta_link(
      '/admission/explore/student-life/',
      'Get to know the Vassar Community',
      'center-object mt-4 d-flex'
    ); ?>


  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>






<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
