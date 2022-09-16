
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{"page_supertitle":"Quick Facts","page_title":"Community","feature_image":"/admission/assets/images/quick-facts/110619_160over90_Vassar_5564-crop.jpg"}';
/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Two students walking through the Bridge for Laboratory Sciences
']); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<style>
.cols-6 .section-content {
  grid-template-columns: repeat(6, 1fr);
}
.span-1 {
  grid-column: span 2;
}
.span-2 {
  grid-column: span 3;
}


@media (max-width: 600px) {
    .cols-6 .section-content {
        grid-template-columns: 1fr;
    }

}
</style>


<?php echo sec_hasColumns(
    'Our Students',
    '3',
    '<p class="intro-text">At Vassar, you&#8217;ll be encouraged to collaborate across differences and to celebrate the diversity of backgrounds and experiences that make up our community. Here, your voice will be valued and you will be empowered to make a difference.</p>',
    'items-equal-height mw-inner-3 theme-extralightgray cols-6 animate-when-content-appears animation-group animation-fade-in',
    'gap-3'
); ?>

  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'Student body',
      $facts['number_of_students'],
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'Students of color',
      $class_stats['students_of_color'],
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1 animation-item'); ?>
    <?php echo item_stat(
      'First Generation Students',
      '14%',
      ''
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      '',
      $class_stats['attd_public_school'],
      'attended public high schools'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      '',
      $class_stats['attd_private_school'],
      'attended private/parochial schools'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      'Male',
      $class_stats['percentage_male'],
      null
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2 animation-item'); ?>
    <?php echo item_stat(
      'Female',
      $class_stats['percentage_female'],
      null
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'Vassar Life',
    'section-class',
    ''
); ?>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'On Campus',
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
          <p>Student-run organizations and residential houses plan numerous social activities. These can range from comedy shows, dances, movies, study breaks, afternoon tea in the Rose Parlor.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Off Campus',
    '/admission/assets/images/quick-facts/community/Hudson-Line-Courtesy-of-MTA-Metro-North-Railroad---Photo-by-Frank-English_240662ea-c662-4239-2e603bad1ee52568.jpg',
    'theme-charcoal gold-icons',
    '',
    [
      'title_level' => '3',
      'img_alt_text' => 'Metro North train heading south to New York City',
      'css' => '--icon-item-border-color: rgba(255,255,255,0.1)'
    ]
); ?>
  <div class="animate-when-content-appears animation-slide-up">
    <div class="icon-items-list">
      <?php echo item_iconItem(
        null,
        'store',
        'icon-on-left'
      ); ?>
          <p>There are many stores and restaurants within one block from campus, including Billy Bob’s BBQ, The Crafted Kup, Pizzeria Bacio’s, Twisted Soul, and Thai Spice.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'arrow-right-to-city',
        'icon-on-left'
      ); ?>
          <p>New York City is easily accessible by commuter train. Many students choose to visit the City a few times per semester.</p>
      <?php echo end_item_iconItem(); ?>
    </div>
  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_hasColumns(
    null,
    '2',
    null,
    'items-equal-height mw-inner-5 theme-cream',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Dining',
        'https://vassar.cafebonappetit.com/',
        ['url' => $quickfacts_img_path.'0195-19-11-kwe-gordon-vassar-1644.jpg', 'alt' => 'Students sit at a table in the large common area of Gordon Commons' ],
        'card--twoscols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>All students are on an all-you-care-to-eat meal plan, providing unlimited access to the main dining hall from 7 a.m. to 1 a.m., as well as expanded options at Express, the Bridge Café, the Retreat, a food truck, and cook-your-own ingredients.</p>
    <?php echo end_item_cardWithText('Learn more about campus dining'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Student Organizations',
        'https://vsa.vassar.edu/',
        ['url' => $quickfacts_img_path.'0234-17-04-kr-music-event-vassar-0007.jpg', 'alt' => 'Students play music on an outdoor stage' ],
        'card--twsocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link bg-dark'
    ); ?>
        <p>We have over 170 active student organizations, including affinity groups, theater groups, <em>a cappella</em> groups, student government, political organizations, and several student publications. We even have a juggling/circus troupe.</p>
    <?php echo end_item_cardWithText('Learn more about student orgs'); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php
$housing_4_years_title = item_iconItem(
  null,
  'house-circle-check',
  'icon-on-left'
);
$housing_icon_items = '<p>Housing is guaranteed for all four years.</p>';
$icon_items_end = end_item_iconItem();
$housing_no_riffraff_title = item_iconItem(
  null,
  'custom',
  'icon-on-left',
  ['glyph' => '\03A3', 'glyph-name' => 'sigma']
);
$housing_no_riffraff = '<p>Vassar College does not have fraternities or sororities.</p>';

$housing_icon_items =
  $housing_4_years_title
  .$housing_icon_items
  .$icon_items_end
  .$housing_no_riffraff_title
  .$housing_no_riffraff
  .$icon_items_end
;

echo sec_hasColumns(
    'Housing',
    '3',
    '<p class="intro-text">Residential Houses are open to students of all majors and class years, with no themed housing or first-year housing. Students live together regardless of academic or extracurricular interests, which creates active and diverse environments in each of our residence halls.</p>

      <div class="icon-items-list text-left vertically-center-icon mx-auto" style="max-width: 40rem; text-align: left; align-items: center;">
      '.$housing_icon_items.'
      </div>

    ',
    'items-equal-height mw-inner-2 theme-extralightgray wide-intro burgundy-icons',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      null,
      '97%',
      'of Vassar students live on campus'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      null,
      '9',
      'residence halls'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      null,
      '15',
      'faculty House Fellows'
    ); ?>
  <?php echo end_item_col(); ?>

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
        'venus-mars',
        'icon-on-left'
      ); ?>
          <p>While Vassar’s residential houses welcome students of all genders, Strong House actively welcomes and celebrates trans*, nonbinary, questioning, agender, and other gender-nonconforming residents and community members.</p>
      <?php echo end_item_iconItem(); ?>

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

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Tech',
    '/admission/assets/images/quick-facts/community/0058-21-05-kr-spring-vassar-0030.jpg',
    'theme-charcoal gold-icons',
    '',
    ['title_level' => '3',
    'img_alt_text' => 'Student under a tree with a laptop and headphones'
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
    null,
    'section-class mw-inner-2 p-6',
    ''
); ?>
  <?php echo item_cardWithText(
      'House Fellows',
      'https://offices.vassar.edu/dean-of-the-college/house-fellows/',
      ['url' => '/admission/assets/images/quick-facts/community/strong-misc-strong-12-ELSc.jpg', 'alt' => 'Students working on a project in a residential common space' ],
      'card--twocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
  ); ?>
      <p>The Vassar House Fellows Program has 15 faculty members and their families living alongside students in the residence halls. They serve as academic advisors and as members of the residential community who offer academic perspective and counsel.</p>
  <?php echo end_item_cardWithText('Learn more about house fellows'); ?>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_regularContent(
    'Our Campus',
    'section-class mw-inner-2',
    ''
); ?>
<p class="intro-text">Our campus is 1,000 acres and is maintained as an arboretum with over 200 species of trees. The campus includes the <a href="https://www.vassar.edu/farm">Vassar Farm and Ecological Preserve</a>, a nine-hole golf course, Sunset Lake, the Shakespeare Garden, an <a href="https://www.vassar.edu/physicsandastronomy/facilities/observatory.html">observatory</a>, and the <a href="https://www.vassar.edu/theloeb">Frances Lehman Loeb Art Center</a>.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    'How’s the Weather?',
    '2',
    '<p class="intro-text">Poughkeepsie weather is close to that of New York City, with four distinct seasons.</p>
    <p> We do get snow, but we are not located in a “snowbelt,” so moderate snow is the norm during the winter. Most students love spring and fall, and it is common to see professors hold classes outside on nice days. While you’ll need a hat, gloves, and scarf in the winter, you’ll be able to wear shorts and t-shirts at other times of the year.</p>',
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

<!--
  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Right Now – ☀️',
      '82<span class="stat-unit">°F</span><br>
      28<span class="stat-unit">°C</span>'
    ); ?>
  <?php echo end_item_col(); ?>
-->


<?php echo end_sec_hasColumns(); ?>

<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
