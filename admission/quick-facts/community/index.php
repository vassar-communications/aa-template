
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = [
  'page_supertitle' => "Quick Facts",
  'page_title' => 'Community',
  'feature_image' => $quickfacts_img_path.'110619_160over90_Vassar_5564-crop.jpg'
];

/* === */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image']); ?>

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

</style>



<?php echo sec_hasColumns(
    'Our Students',
    '3',
    '<p class="intro-text">Diverse in every sense of the word, Vassar students practice many different religions and are of different sexual orientations. Our students come from all regions of the United States and 55 foreign countries.</p>',
    'items-equal-height mw-inner-3 theme-extralightgray cols-6',
    'gap-3'
); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Student body',
      '2,450',
      'from all regions of the United States and 55 foreign countries'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Students of color',
      '33%',
      'in recent classes'
    ); ?>
  <?php echo end_item_col('span-1'); ?>

  <?php echo item_col('span-1'); ?>
    <?php echo item_stat(
      'Student organizations',
      '170',
      '<a href="" class="hey-im-broken">See all our orgs</a>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      '',
      '65%',
      'attended public high schools'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      '',
      '35%',
      'attended private/parochial schools'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      'Men',
      '58%',
      'national average for national liberal arts colleges'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col('span-2'); ?>
    <?php echo item_stat(
      'Women',
      '42%',
      'national average for national liberal arts colleges'
    ); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Diversity',
    '3',
    null,
    'items-equal-height mw-inner-4 theme-extralightgray',
    'gap-3',
    ['title_level' => '3']
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Academic diversity',
        '#',
        ['url' => $quickfacts_img_path.'110619_160over90_Vassar_4608.jpg'
, 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
    ); ?>
      <p>Our campus is a mix of students interested in the natural sciences, social sciences, arts and humanities, as well as some interesting combinations of these disciplines.</p>
      <?php echo end_item_cardWithText('See all our majors and minors'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  <?php echo item_cardWithText(
      'Extracurricular diversity',
      '#',
      ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
  ); ?>
    <p>Extracurricular diversity is characteristic of our campus culture. A number of students are varsity athletes; others have an inclination to sing, dance, act, improvise, sculpt, film, paint, write, or otherwise create. Some do it all!</p>
    <?php echo end_item_cardWithText('See all our student organizations'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Political diversity',
        '#',
        ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
    ); ?>
      <p>Politically, our campus is open-minded. Vassar students span the political spectrum. Diversity of opinion is respected, critical thought encouraged, and communication of ideas held as central to a liberal arts education.</p>
      <?php echo end_item_cardWithText('[Related Link]'); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_regularContent(
    'Vassar Life',
    'section-class',
    ''
); ?>
    <p class="intro-text">Vassar is not a commuter campus or a suitcase school, as approximately 90% of students stay on campus every weekend.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    'On Campus',
    $placeholder_img_square,
    'image-is-first theme-cream',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up burgundy-icons">

      <?php echo item_iconItem(
        null,
        'face-smile',
        'icon-on-left'
      ); ?>
          <p>Popular on-campus hangouts include late night dining at Gordon Commons, the College Center, the Food Truck, and Dorm Multi-Purpose Rooms and Parlors.</p>
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
          <p>Each weekend, students have the opportunity to attend <em>a cappella</em> concerts, drama productions, lectures, dance recitals, and athletic events.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'mug-saucer',
        'icon-on-left'
      ); ?>
          <p>Student-run organizations and residence houses plan numerous social activities. These can range from afternoon tea in the Rose Parlor to comedy shows, dances, movies, and study breaks.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Off Campus',
    $placeholder_img_square,
    'theme-charcoal gold-icons',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up">
    <div class="icon-items-list">
      <?php echo item_iconItem(
        null,
        'store',
        'icon-on-left'
      ); ?>
          <p>There are many stores and restaurants within one block from campus, including Billy Bob’s BBQ, Burger Fi, The Crafted Kup, Pizzeria Bacio’s, Twisted Soul and Thai Spice.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'arrow-right-to-city',
        'icon-on-left'
      ); ?>
          <p>Students typically go to New York City one to two weekends per semester.</p>
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
        '[NEED LINK]',
        ['url' => $quickfacts_img_path.'0195-19-11-kwe-gordon-vassar-1644.jpg', 'alt' => 'replacealttext' ],
        'card--twoscols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>All students are on one standardized meal plan, providing unlimited access to the main dining hall from 7 a.m. to 1 a.m., as well as expanded options at Express, the Bridge Café, the Retreat, a food truck, and cook-your-own ingredients.</p>
    <?php echo end_item_cardWithText('Learn more about campus dining'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Student Organizations',
        '[NEED LINK]',
        ['url' => $quickfacts_img_path.'0234-17-04-kr-music-event-vassar-0007.jpg', 'alt' => 'replacealttext' ],
        'card--twsocols slightly-wider-image related-topics card--withParagraph card-has-cta-icon card-is-link xhey-im-broken bg-dark'
    ); ?>
        <p>We have over 170 active student organizations, including theater groups, <em>a cappella</em> groups, student government, political organizations, and several student publications. We even have a juggling/circus troupe.</p>
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
    '<p class="intro-text">There are no special residence halls reserved for freshmen, athletes, specific majors, etc. Students live together regardless of academic/extracurricular interest, which creates active and diverse environments in each of our residence halls.</p>

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
      '98%',
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
    'Dorms',
    $quickfacts_img_path.'THs-0144-15-05-hw-dorm-vassar-vb-3813.jpg',
    'image-is-first theme-cream',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up burgundy-icons">

      <?php echo item_iconItem(
        null,
        'venus-mars',
        'icon-on-left'
      ); ?>
          <p>Eight dorms are coed, and one is for students who have, can, or will identify as female only. The coed residence halls have both men and women living on the same floor.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'building',
        'icon-on-left'
      ); ?>
          <p>The Town Houses, Terrace Apartments, and South Commons offer apartment-style living accommodations for upperclassmen.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'heart',
        'icon-on-left'
      ); ?>
          <p>There are wellness corridors (quiet, substance-free housing) located within each residence hall.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Tech',
    $placeholder_img_square,
    'theme-charcoal gold-icons',
    '',
    ['title_level' => '3']
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
    'section-class mw-inner-3 p-6',
    ''
); ?>
  <?php echo item_cardWithText(
      'House Fellows',
      '[NEED LINK]',
      ['url' => $placeholder_img_wide, 'alt' => 'replacealttext' ],
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
  <p class="intro-text">Our campus is 1,000 acres and is maintained as an arboretum with over 200 species of trees. The campus includes the Vassar Farm and Ecological Preserve, a nine-hole golf course, Sunset Lake, the Shakespeare Garden, an astronomical observatory, and the Frances Lehman Loeb Art Center.</p>
<?php echo end_sec_regularContent(); ?>


<?php echo sec_hasColumns(
    'How’s the weather?',
    '3',
    '<p class="intro-text">Poughkeepsie weather is close to that of New York City, with a temperate climate and four distinct seasons.</p>
    <p> We do get snow, but we are not located in a “snow-belt”, so moderate snow is the norm during the winter. Most students love spring and fall, and it is common to see professors hold classes outside on nice days. While you’ll need a hat, gloves, and scarf in the winter, you’ll be able to wear shorts and t-shirts at other times of the year.</p>',
    'items-equal-height mw-inner-2 theme-extralightgray wide-intro burgundy-icons',
    'gap-3',
    ['title_level' => '3']
); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average Winter Temp',
      '35<span class="stat-unit">°F</span><br>
      2<span class="stat-unit">°C</span>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Average Summer Temp',
      '80<span class="stat-unit">°F</span><br>
      27<span class="stat-unit">°C</span>'
    ); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_stat(
      'Right Now – ☀️',
      '82<span class="stat-unit">°F</span><br>
      28<span class="stat-unit">°C</span>'
    ); ?>
  <?php echo end_item_col(); ?>



<?php echo end_sec_hasColumns(); ?>

<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
