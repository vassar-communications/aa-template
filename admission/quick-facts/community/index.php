
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */


$page_supertitle = "Quick Facts";
$page_title = "Community";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($placeholder_img_banner); ?>

<?php echo end_sec_fixedCenteredTitle_masthead(); ?>

<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>

<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>

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

<!-- 	"url": "https://national-weather-service.p.rapidapi.com/zones/land/NYZ066/forecast", -->


<script>

const settings = {
	"async": true,
	"crossDomain": true,

	"url": "https://www.ncdc.noaa.gov/cdo-web/api/v2/stations",

	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "e32163bb65mshc2008fd7b00e810p1a6738jsnb7cb4a6a8345",
		"X-RapidAPI-Host": "national-weather-service.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});
</script>


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
        ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark'
    ); ?>
      <p>Our campus is a mix of students interested in the natural sciences, social sciences, arts and humanities, as well as some interesting combinations of these disciplines.</p>
      <?php echo end_item_cardWithText('See all our majors and minors'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  <?php echo item_cardWithText(
      'Extracurricular diversity',
      '#',
      ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
      'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark'
  ); ?>
    <p>Extracurricular diversity is characteristic of our campus culture. A number of students are varsity athletes; others have an inclination to sing, dance, act, improvise, sculpt, film, paint, write, or otherwise create. Some do it all!</p>
    <?php echo end_item_cardWithText('See all our student organizations'); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Political diversity',
        '#',
        ['url' => $placeholder_img_square, 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark'
    ); ?>
      <p>Politically, our campus is open-minded. Vassar students span the political spectrum. Diversity of opinion is respected, critical thought encouraged, and communication of ideas held as central to a liberal arts education.</p>
      <?php echo end_item_cardWithText('[Related Link]'); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>




<?php echo sec_hasColumns(
    'Vassar Life',
    '2',
    '<p class="intro-text">Vassar is not a commuter campus or a suitcase school, as approximately 90% of students stay on campus every weekend.</p>',
    'mw-inner-4',
    'gap-3'
); ?>

  <?php echo item_col(); ?>
  item
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
  item
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_fullBleedImageColumn(
    'On Campus',
    $placeholder_img_square,
    'image-is-first theme-cream',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up">

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>Popular on-campus hangouts include late night dining at Gordon Commons, the College Center, the Food Truck, and Dorm Multi-Purpose Rooms and Parlors.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>Throughout the year, nationally known speakers, writers, and musicians appear on campus.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>Each weekend, students have the opportunity to attend <em>a cappella</em> concerts, drama productions, lectures, dance recitals, and athletic events.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>Student-run organizations and residence houses plan numerous social activities. These can range from afternoon tea in the Rose Parlor to comedy shows, dances, movies, and study breaks.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_fullBleedImageColumn(
    'Off Campus',
    $placeholder_img_square,
    'theme-charcoal',
    '',
    ['title_level' => '3']
); ?>
  <div class="animate-when-content-appears animation-slide-up">

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>There are many stores and restaurants within one block from campus, including Billy Bob’s BBQ, Burger Fi, The Crafted Kup, Pizzeria Bacio’s, Twisted Soul and Thai Spice.</p>
      <?php echo end_item_iconItem(); ?>

      <?php echo item_iconItem(
        null,
        'house-chimney',
        'icon-on-left'
      ); ?>
          <p>Students typically go to New York City one to two weekends per semester.</p>
      <?php echo end_item_iconItem(); ?>

  </div>
<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo relatedTopics(); ?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/financial-aid/financial-aid-apply.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-international.php');?>
  <?php include($project_paths['main_project_root'].'/admission/inc/pages/apply/apply-transfer.php');?>
<?php echo end_sec_relatedTopics(); ?>





<?php echo site_footer(); ?>
