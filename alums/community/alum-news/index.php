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
        'Ethan Slater ’14',
        'https://bit.ly/3ON6hOx',
        ['url' => $logos_path.'gq-logo.png', 'alt' => 'GQ logo, the letters G and Q in a thick sans-serif font, with the G in black and the Q in gold.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Actor <strong>Ethan Slater ’14</strong>, who plays Boq in the new film <em>Wicked</em>, was the subject of a <em>GQ</em> article.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Joanna Smith ’92',
        'https://www.democracynow.org/2024/9/12/climate_rights_international',
        ['url' => $logos_path.'democracy-now-logo-larger.png', 'alt' => 'Democracy Now! logo, in a red sans serif font with the top part of the Statue of Liberty in white in place of the letter O in Now.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Climate activist <strong>Joanna Smith ’92</strong>, who last year applied washable finger paint to the museum case holding Edgar Degas’s sculpture <em>Little Dancer</em>, was interviewed for a Democracy Now! article about Western nations’ crackdown on climate protests.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Corydon Cowansage ’08',
        'https://www.meer.com/en/85691-separation-anxiety',
        ['url' => $logos_path.'meer-logo.png', 'alt' => 'Meer logo, three connected diamond shapes followed by the word meer in lowercase sans-serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>The first solo exhibition in Italy of artist <strong>Corydon Cowansage ’08</strong>, titled <em>Separation anxiety</em>, was the subject of a <em>Meer</em> magazine article.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><strong>Leah Goodridge ’04</strong>, a lawyer and a member of the New York City Planning Commission, wrote a <a href="https://www.nytimes.com/2024/12/29/opinion/restrooms-shortage-new-york.html"><em>New York Times</em> op-ed</a> about the need for more public bathrooms in New York City.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><em>Good One</em>, the debut feature by director <strong>India Donaldson ’07</strong>, was selected by <a href="https://www.nytimes.com/2024/11/30/movies/best-movies-2024.html"><em>New York Times</em></a> film critic Alissa Wilkinson as one of the 10 best movies of 2024.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7">Professor of Psychological Science <strong>Michele M. Tugade ’95</strong> was interviewed by <a href="https://www.scientificamerican.com/article/how-humor-can-help-you-get-through-hard-times/"><em>Scientific American</em></a> for the article “How Humor Takes the Edge off Hard Times.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><strong>Sieu Nguyen ’17</strong>, writer and producer of promotional materials for HBO, is on the <a href="https://bit.ly/3VqdOGD"><em>Forbes</em> 30 Under 30 list</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://variety.com/2024/film/news/cannes-in-retreat-producer-kerala-migration-drama-kurinji-film-bazaar-1236218931/"><em>Variety</em></a> highlighted the work of filmmaker <strong>Payal&nbsp;Sethi&nbsp;’01</strong>.</p></div>


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
