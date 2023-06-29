<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');

$alums_news_images_path = '/alums/assets/img/alums-community/alum-news';
$logos_path = $alums_news_images_path.'/logos/';


/* PAGE INFO === */


$page_info = '{
  "page_title":"Alum News & Stories",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/awards/lead-06282020_QueerLiberationMarch_by_LeandroJusten_019.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'The third annual queer liberation march in Bryant Park, NYC']); ?>


<?php echo interior_page_nav(); ?>

<?php /*  PAGE CONTENT === */ ?>

<?php /* echo sec_fullBleedImageColumn(
  'Dr. June Jackson Christmas ’45–4',
  $alums_news_images_path.'/2023-03-02/June_Jackson_Christmas_KR.jpg',
  'theme-extralightgray',
  '',
  ['img_alt_text' => 'A close-up photo of a person with short, black, curly hair and purple-framed eyeglasses, speaking to another person who is mostly out of the photo']
); ?>

<p>Dr. <strong>June Jackson Christmas ’45-4</strong> was lauded as “a gift to Black mental health” in <a href="https://theblackwallsttimes.com/2023/02/15/dr-june-jackson-christmas-is-a-gift-to-black-mental-health/">a <em>Black Wall Street Times</em> profile</a>.</p><p><em>Photo: Karl Rabe</em></p>
<?php echo cta_link(
  'https://theblackwallsttimes.com/2023/02/15/dr-june-jackson-christmas-is-a-gift-to-black-mental-health/',
  'Read more'
); ?>

<?php echo end_sec_fullBleedImageColumn(); */ ?>


<?php echo sec_hasColumns(
  null,
  '3',
  null,
  'theme-charcoal has-bg quad-pattern items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Sasha Velour ’09',
        'https://www.newyorker.com/culture/cover-story/cover-story-2023-06-12',
        ['url' => $logos_path.'New-Yorker-logo.png', 'alt' => 'The New Yorker logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Drag artist and author <strong>Sasha Velour ’09</strong> was the subject of a cover story in the <em>New Yorker</em>.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Dr. Jonathan Howard ’97',
        'https://www.latimes.com/business/story/2023-05-23/column-these-experts-sold-the-u-s-on-a-disastrous-covid-plan-and-never-paid-a-professional-price',
        ['url' => $logos_path.'LA-Times-logo.png', 'alt' => 'Los Angeles Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>The book <em>We Want them Infected</em> by <strong>Dr. Jonathan Howard ’97</strong> was the subject of a <em>Los Angeles Times</em> column about how pseudoscience derailed efforts to fight COVID-19.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Melody Smith Johnson ’85',
        'https://auburnpub.com/news/local/govt-and-politics/auburn-woman-honored-with-ny-senate-women-of-distinction-award/article_e9aff5a8-f4d9-11ed-baed-0b6fd388721c.html',
        ['url' => $logos_path.'auburnpub-dotcom-logo.png', 'alt' => 'auburnpub.com logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Entrepreneur <strong>Melody Smith Johnson ’85</strong> received the New York State Senate’s Women of Distinction Award, as noted by auburnpub.com.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
  null,
  '2',
  '',
  'in-other-news theme-cream mw-inner-3',
  'gap-4'
); ?>

  <?php echo item_col(); ?>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.broadwayworld.com/article/Video-Beowulf-Boritt-Celebrates-Tony-Win-for-Best-Scenic-Design-of-a-Musical-20230613">Set designer <strong>Beowulf Boritt ’93</strong> won the Tony Award for his work on <em>New York, New York</em>, as noted by many media outlets, including BroadwayWorld.com</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.baltimoresun.com/opinion/hall-of-fame/bs-ed-hof-sherrilyn-ifill-20230609-h4unsfgdtvcphmsj3qhg5hlpw4-story.html">Lawyer and author <strong>Sherrilyn Ifill ’84</strong>, who led the NAACP Legal Defense and Educational Fund for a decade, is a <em>Baltimore Sun</em> 2023 Business and Civic Hall of Fame honoree</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://variety.com/2023/tv/news/amy-entelis-cnn-chris-licht-exit-1235636139/"><strong>Amy Entelis ’71</strong>, CNN Worldwide Executive VP for Talent and Content Development, is one of three CNN executives taking the reins at the network after the departure of CEO Chris Licht, as noted by <em>Variety</em></a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="9"><a href="https://deadline.com/2023/06/noah-baumbach-memoir-knopf-1235408485/">Oscar-nominated filmmaker <strong>Noah Baumbach ’91</strong> is writing a memoir, as noted in <em>Deadline</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="11"><a href="https://www.nytimes.com/2023/05/30/dining/glace-ice-cream-upper-east-side.html"><em>The Migrant Chef: The Life and Times of Lalo García</em>, written by <strong>Laura Tillman ’07</strong>, was reviewed by <em>New York Times</em> columnist Florence Fabricant</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="13"><a href="https://www.ajc.com/things-to-do/food-and-recipes/cookbook-review-egg-rolls-and-sweet-tea-by-natalie-keng/SWVAPMJXP5FKXDHSSHHV5DLCCY/">The cookbook <em>Egg Rolls & Sweet Tea</em> by <strong>Natalie Keng ’90</strong> was the subject of an <em>Atlanta Journal-Constitution</em> review</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="15"><a href="https://tourismquest.com/2023/06/12/grand-marshals-announced-for-2023-nyc-pride-march/"><strong>AC Dumlao ’13</strong>, Chief of Staff at Athlete Ally, was named one of the grand marshals of the New York City Pride Parade, as noted by Tourism Quest</a>.</p></div>


  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-aavc-awards.php');?>

<?php
include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php');
// include($project_paths['main_project_root'].'/alums/inc/pages/community/community-notable-alums.php');?>

<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
