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


<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Crowds of people march down a city street holding various signs at the third annual queer liberation march in Bryant Park, NYC.']); ?>


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
        'Adam Ross ’89',
        'https://www.washingtonpost.com/books/2025/01/03/playworld-adam-ross-book-review/',
        ['url' => $logos_path.'washington-post.jpg', 'alt' => 'Washington Post logo, in a stylized serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>The <em>Washington Post</em> says the new novel by <strong>Adam Ross ’89</strong> “is so good, it will give readers hope for the year ahead.”</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Bella DePaulo ’75',
        'https://www.npr.org/2025/02/07/g-s1-46818/are-you-most-suited-to-the-single-life-heres-how-to-find-out',
        ['url' => $logos_path.'npr.gif', 'alt' => 'NPR logo, white sans serif letters, each in their own color block, in the order red, black, and blue.s' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Bella DePaulo ’75</strong> was featured on NPR’s <em>Ted Radio Hour</em>, speaking about the freedom and autonomy that comes with being single by choice throughout her adult life.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Anu Duggal ’01',
        'https://fortune.com/2025/03/03/anu-duggal-female-founders-fund-maven-women-tech/',
        ['url' => $logos_path.'fortune-logo.png', 'alt' => 'Fortune logo, a sans serif all capital black font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Anu Duggal ’01</strong>, Founding Partner of Female Founders Fund, was profiled in <em>Fortune</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><strong>Meghan Daum ’92</strong>, who lost everything in the L.A. fires, wrote a <a href="https://www.nytimes.com/2025/01/31/opinion/la-wildfires-altadena-fires.html">guest essay for <em>The New York Times</em></a> on how the experience taught her to accept help.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5">Actor <strong>Hope Davis ’86</strong> performed a live reading of an article published in <em>The Atlantic</em> for <a href="https://www.wnyc.org/story/journalism-performed-reporting-on-weight-loss-drugs-like-ozempic/?tab=transcript">WNYC’s show <em>All&nbsp;of&nbsp;It</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.nybooks.com/online/2025/03/13/her-own-woman-mary-mccarthy/"><em>The New York Review</em></a> published an article on the life of writer <strong>Mary McCarthy ’35</strong>, mentioning writer <strong>Elizabeth Bishop ’34</strong> as well.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><strong>Julia Hansen ’60</strong>, a survivor of the <em>Andrea Doria</em> shipwreck, was featured in <a href="https://www.marionstar.com/story/news/education/2025/03/23/ohio-state-marion-to-host-andrea-doria-survivor-julia-hansen-five-nights-theater-speaker/82566683007/"><em>The Marion Star</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.cornellsun.com/article/2025/03/astronomer-vera-rubin-m-s-51-to-be-featured-on-a-u-s-quarter"><em>The Cornell Daily Sun</em></a> reported that <strong>Vera Rubin ’48</strong> will be featured on a U.S. Quarter as a part of the 2025 American Women Quarters Program.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Paco (Francis) Underhill ’75</strong> spoke at <a href="https://schedule.sxsw.com/2025/events/PP1148087">SXSW 2025</a> on a panel about the correlation between neuroscience and brand design.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.townandcountrymag.com/leisure/arts-and-culture/a63977899/who-is-conan-obrien-wife-liza-powel-obrien/"><em>Town & Country</em> magazine</a> spoke to <strong>Liza Powel O’Brien ’92</strong> about her career and how she met her spouse, comedian Conan O’Brien.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://www.reuters.com/markets/rates-bonds/feds-jefferson-says-fed-can-take-time-next-interest-rate-decision-2025-02-19/">Reuters</a> reported on a speech given by Federal Reserve Vice Chair <strong>Philip Jefferson ’83</strong> on the state of the U.S. economy and inflation.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://vermontbiz.com/people/february/three-business-leaders-join-vbsr-board-directors"><em>VermontBiz</em> magazine</a> reported that <strong>Eliza Leeper ’06</strong>, Mission and Sales Operations Manager at Vermont Creamery, has joined the Vermont Businesses of Social Responsibility Board of Directors.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><strong>Jim Citrin ’81</strong> was named to the International Tennis Hall of Fame’s Board of Governors, according to <a href="https://whatsupnewp.com/2025/02/international-tennis-hall-of-fame-welcomes-new-additions-to-its-board-of-governors/"><em>What’sUpNewp</em></a>.</p></div>


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
