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
        'Rob LoBreglio ’88 and Eliot Butler ’90',
        'https://www.channel3000.com/madison-magazine/the-great-dane-is-headed-to-japan/article_15659956-48df-11ee-a899-5f8b0df75971.html',
        ['url' => $logos_path.'madison-magazine.png', 'alt' => 'Madison Magazine logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Great Dane Brewing co-founders <strong>Rob LoBreglio ’88</strong> and <strong>Eliot Butler ’90</strong> discussed their business expansion in Japan in <em>Madison Magazine</em>.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Tiana Headley ’22',
        'https://news.bloomberglaw.com/us-law-week/color-of-justice-all-white-benches-persist-in-us-district-courts?utm_medium=lawdesk&utm_source=twitter&campaign=A54DE238-4BED-11EE-A680-4DB7F143A863',
        ['url' => $logos_path.'bloomberg-law-logo-inline-white.png', 'alt' => 'Bloomberge Law logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Tiana Headley ’22</strong> wrote the <em>Bloomberg Law</em> article “Color of Justice: All-White Benches Persist in US District Courts.”</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Selwa Roosevelt ’50',
        'https://www.arabamerica.com/pathbreakers-of-arab-america-eighth-in-series-selwa-showker-roosevelt/',
        ['url' => $logos_path.'arab-america-logo.png', 'alt' => 'Arab America logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Selwa Roosevelt ’50</strong>, a journalist, writer, and Chief of Protocol of the United States, was the subject of an <em>Arab America</em> story.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.advocate.com/books/lesbian-mb-caschetta-memoir">The memoir of author <strong>MB Caschetta ’88</strong>, <em>A Cheerleader’s Guide to Spiritual Enlightenment</em>, was the subject of an <em>Advocate</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.washingtonpost.com/made-by-history/2023/04/20/nixon-era-roots-todays-opioid-crisis/"><strong>Dr. Zoe Adams ’15</strong> wrote the <em>Washington Post</em> op-ed “The Nixon-era roots of today’s opioid crisis.”</a></p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://politicalsciencenow.com/fiona-shen-bayh-receives-the-2023-apsa-ipsa-theodore-j-lowi-first-book-award/"><strong>Fiona Shen-Bayh ’11</strong> received the 2023 American Political Science Association’s Theodore J. Lowi First Book Award</a> for <em>Undue Process: Persecution and Punishment in Autocratic Courts</em>, as noted by Political Science Now.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://coloradosun.com/2023/08/04/field-research-rmbl-gothic-inouye-underwood/"><strong>Nora Underwood ’88</strong> and her family were the subjects of a <em>Colorado Sun article</em></a>, “How one family is carrying on generations-long ecological research near Crested Butte.”</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11">Tenants’ rights lawyer and New York City Planning Commission member <a href="https://amsterdamnews.com/news/2023/07/27/leah-goodridge-lays-out-her-work-as-nyc-planning-commissioner/"><strong>Leah Goodridge ’04</strong> was the subject of a <em>New York Amsterdam News</em> story</a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://cccc.ncte.org/cccc/awards/techsci"><strong>Andrew Fiss ’05</strong>, Associate Professor of Technical & Professional Communication at Michigan Tech, has been awarded “Best Book in Technical or Scientific Communication”</a> for <em>Performing Math: A History of Communication and Anxiety in the American Mathematics Classroom</em> by the Conference on College Composition and Communication.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.citybiz.co/article/453454/penfed-credit-union-promotes-four-leaders-to-senior-vice-president/"><strong>Andrea McCarren ’85</strong>, Vice President of PenFed Credit Union Digital, has been promoted to Senior Vice President of PenFed Digital and President of PenFed Foundation, as noted by <em>CityBiz</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://autos.yahoo.com/alice-ramsey-first-woman-drive-131400844.html"><strong>Alice Ramsey, class of 1907</strong>, the first woman to drive across the U.S. in an automobile, was the subject of a Yahoo! story</a>.</p></div>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.theedadvocate.org/teaching-students-about-grace-hoppers-trailblazing-journey-in-computing/">Computer pioneer Rear Admiral <strong>Grace Hopper, class of 1928</strong>, was the subject of an <em>Edvocate</em> story</a>, “Teaching Students About Grace Hopper’s Trailblazing Journey in Computing.”</p></div>


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
