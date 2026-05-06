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
        'Cassandra Kulukundis ’93',
        'https://variety.com/2026/artisans/news/one-battle-after-another-wins-first-oscar-best-casting-1236680670/',
        ['url' => $logos_path.'Variety-logo.png', 'alt' => 'Variety logo in white text on a dark background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
       <p>Many media outlets, including <em>Variety</em>, reported that<strong> Cassandra Kulukundis ’93</strong> won the first-ever Oscar for Best Casting for her work on the film <em>One Battle After Another</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Jane Smiley ’71',
        'https://www.altaonline.com/books/fiction/a39643131/jane-smiley-horses-writing-fiction/',
        ['url' => $logos_path.'Alta-logo.png', 'alt' => 'Alta logo in black text on a light gray background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
         <p>Novelist <strong>Jane Smiley ’71</strong> spoke to <em>Alta</em> about how her love of horses has been intertwined with her life as a writer.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Dr. Alexa Mousley ’20',
        'https://www.nbcnews.com/science/science-news/human-brains-5-epochs-development-rcna245663',
        ['url' => $logos_path.'NBC-news-logo.png', 'alt' => 'NBC News logo with multicolored peacock icon and white text on a dark blue background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
     <p>NBC News and many other media outlets reported on a groundbreaking study of human brain development led by <strong>Dr. Alexa Mousley ’20</strong>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://pen.org/press-release/2026-literary-gala-honorees-ann-patchett-and-jason-blum/">PEN America</a> announced that it will honor Blumhouse CEO <strong>Jason Blum ’91</strong> in May 2026 with a Business Visionary award for “his daring and diverse films that have transformed horror from a niche genre into a driving force of contemporary culture, often with social issues at the core.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><strong>David DeSteno ’90</strong> wrote a guest essay for <a href="https://www.nytimes.com/2026/04/20/opinion/ai-religion-morality.html"><em>The New York Times</em></a> about the limitations of using religion to teach the chatbot Claude about morality and ethics.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><strong>Lisa Kudrow ’85</strong>, currently starring in the third season of HBO’s <em>The Comeback</em>, was the subject of a lengthy profile in <a href="https://www.newyorker.com/magazine/2026/03/23/lisa-kudrow-profile"><em>The New Yorker</em></a> that mentioned her time as a biology major at Vassar.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://people.com/all-about-liza-obrien-conan-obrien-wife-11925221"><em>People</em></a> magazine profiled playwright <strong>Liza Powel O’Brien ’92</strong> on the occasion of her spouse, Conan O’Brien, hosting the Academy Awards.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11">Author <strong>Torrey Maldonado ’96</strong> spoke to <a href="https://bit.ly/3LPxIsZ"><em>Publisher’s Weekly</em></a> about his debut picture book, <em>Just Right</em>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Michele Tugade ’95</strong>, Professor of Psychological Science on the William R. Kenan Jr. Chair, wrote an article for <a href="https://www.psychologytoday.com/us/blog/everyday-resilience/202602/the-year-of-the-fire-horse-a-call-to-adventure"><em>Psychology Today</em></a> about why the Lunar New Year transition to the Year of the Fire Horse is especially meaningful to her.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><strong>Carlos Eduardo Espina ’20</strong>, a political influencer with more than 14 million followers on TikTok, was the focus of a <a href="https://www.houstonpublicmedia.org/articles/news/politics/election-2026/2026/02/19/543853/election-democrats-latino-voters-influencer-houston-texas/">Houston Public Media story</a> on efforts by Texas Democrats to reach Latino voters.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><em>New Yorker</em> Staff Writer <strong>Ruby Cramer ’12</strong> appeared on <a href="https://pocketcasts.com/podcast/the-new-yorker-radio-hour/af219330-570e-0133-c8fd-0d11918ab357/the-city-of-minneapolis-vs-donald-trump/138748a5-5443-42c7-93a6-0e9ccabd0367"><em>The New Yorker Radio Hour</em></a> to discuss the current situation in Minneapolis and her interview with Minneapolis Mayor Jacob Frey.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://timesofindia.indiatimes.com/life-style/books/features/quote-of-the-day-by-elizabeth-bishop-one-shouldnt-get-too-involved-with-people-who-/amp_articleshow/130091862.cms"><em>The Times of India</em></a> published an appreciation of poet <strong>Elizabeth Bishop ’34</strong>, mentioning the literary magazine she helped start at Vassar.</p></div>


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
