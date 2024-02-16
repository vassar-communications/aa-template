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
        'Neil Buchanan ’81',
        'https://www.nytimes.com/2023/12/03/us/florida-professors-education-desantis.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'The New York Times logo, black text on a gray background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Neil Buchanan ’81</strong>, an economist and tax law scholar, is among those leaving tenured professorships in Florida because of hostility toward professors and higher education in the state, as noted by the <em>New York Times</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Naoko Takahatake ’99',
        'https://dailybruin.com/2023/11/21/qa-naoko-takahatake-on-new-curator-role-at-hammer-museums-grunwald-center',
        ['url' => $logos_path.'dailybruin-logo.png', 'alt' => 'Daily Bruin logo, blue text on a grey background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Naoko Takahatake ’99</strong>, the newly appointed Director and Chief Curator of the Grunwald Center for the Graphic Arts at UCLA’s Hammer Museum, was the subject of a <em>Daily Bruin</em> story.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Elizabeth Bishop ’35',
        'https://www.theparisreview.org/blog/2023/11/27/postcards-from-elizabeth-bishop/',
        ['url' => $logos_path.'the-paris-review-logo.png', 'alt' => 'The Paris Review logo, black text on a gray background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>The exhibition of postcards from award-winning poet <strong>Elizabeth Bishop ’35</strong> at the Thompson Memorial Library was featured in the <em>Paris Review</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5tZWdhcGhvbmUuZm0vVk1QNTQ4OTczNDcwMg/episode/MWIxZjVlYTgtMzUyYy0xMWVkLWExODEtY2ZlY2RjMjMyNTMy?ep=14">Author and ABC News Chief Washington Correspondent <strong>Jonathan Karl ’90</strong> was a guest on Preet Bharara’s podcast, <em>Stay Tuned with Preet</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.theatermania.com/news/photos-real-life-counterparts-of-how-to-dance-in-ohio-characters-walk-the-carpet-on-opening-night_1723661/"><em>How to Dance in Ohio</em>, a Broadway show featuring <strong>Imani Russell ’18</strong> and based on a documentary by <strong>Alexandra Shiva ’95</strong>, was the subject of a TheaterMania story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.astronomy.com/science/the-vera-c-rubin-observatory-shows-its-flair-for-asteroid-detection/">Computer pioneer Rear Admiral <strong>Grace Hopper, class of 1928</strong>, was the subject of a <em>Medium</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.docnyc.net/film/shaken//"><em>Shaken</em>, a film director by <strong>Asher Levinthal ’08</strong>, was featured at DOC NYC</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.nytimes.com/2023/08/28/arts/music/queer-club-fliers-getting-in-book.html"><strong>David Kennerley ’82</strong> spoke to the <em>New York Times</em> about his new book</a>, <em>Getting In: NYC Club Flyers from the Gay 1990s</em>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.kalw.org/podcast/sandip-roys-dispatches-from-kolkata/2023-11-08/the-art-of-durga"><strong>Lavanya Manickam ’25, Milena Chilla-Markhoff ’92</strong>, Associate Professor of Anthropology <strong>Candice Lowe Swift</strong>, and Professor of Political Science <strong>Himadeep Muppidi</strong> spoke to KALW</a> about the Durga Puja festival in Kolkata, which all they attended together.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.businesswire.com/news/home/20231026360795/en/Sarah-E.-Nash-Receives-Inaugural-Russell-S.-Reynolds-Jr.-Chair-of-the-Year-Award"><strong>Sarah E. Nash ’74</strong>, Chair of the Board at Bath & Body Works, received the Russell S. Reynolds Jr. Chair of the Year Award, as noted by <em>Business Wire</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://www.nytco.com/press/styles-new-additions-and-expanded-coverage-areas/"><strong>Marie Solis ’15</strong> has joined the <em>New York Times</em> as a Styles Editor</a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.psychologytoday.com/intl/blog/mirror-mirror/202311/coping-through-comedy-and-connection"><strong>Dara Greenwood</strong>, Associate Professor of Psychological Science and Director of Media Studies, wrote a <em>Psychology Today</em> article</a> on “Coping Through Comedy and Connection” that included the work of <strong>Michele Tugade ’95</strong>, Professor of Psychological Science on the William R. Kenan Jr. Chair.</p></div>
  

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://tworivertimes.com/alifewelllivedjoanellis/"><em>Permission</em>, a memoir by <strong>Joan Ellis ’51</strong>, was the subject of a <em>Two River Times</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://www.nytimes.com/2023/11/29/theater/frances-sternhagen-dead.html?smid=nytcore-ios-share&referringSource=articleShare">Tony Award-winning actor <strong>Frances Sternhagen ’51</strong> was remembered by the <em>New York Times</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.orartswatch.org/tom-webb-former-director-of-newport-visual-arts-center-dies-at-58/"><strong>Tom Webb ’87</strong>, former director of Newport Visual Arts Center, was remembered by <em>Oregon Artswartch</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://www.baltimoresun.com/obituaries/bs-md-ob-ellen-kelly-20231126-kpmwjtptirholdtnnz3o3nsa5q-story.html"><strong>Ellen H. “Ellie” Kelly ’51</strong>, a Baltimore civic leader, was remembered by the <em>Baltimore Sun</em></a>.</p></div>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://www.glossy.co/fashion/fashion-briefing-how-influencers-and-resellers-tapped-into-menswear-enthusiasts-obsessive-tendencies/">Fashion influencer <strong>Albert Muzquiz ’17</strong> was mentioned in a <em>Glossy</em> story</a> about men’s fashion influencers and resellers.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31"><a href="https://midhudsonnews.com/2023/11/06/vassar-to-host-tv-journalist-chip-reid/"><strong>Vassar College</strong> and <strong>Chip Reid ’77</strong>, author and former NBC News correspondent, were mentioned in a <em>Mid Hudson News</em> article</a> about his talk at the College regarding his book, <em>Battle Scars</em>.</p></div>


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
