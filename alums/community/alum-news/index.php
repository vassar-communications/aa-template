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
        'Betty Prashker ’45',
        'https://www.nytimes.com/2024/08/14/books/betty-a-prashker-dead.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo, black serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Pioneering editor <strong>Betty Prashker ’45</strong> was remembered by several media outlets, including the <em>New York Times</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Jenny Romero ’01',
        'https://sites.utexas.edu/ransomcentermagazine/2024/08/21/introducing-jenny-romero-the-ransom-centers-robert-de-niro-curator-of-film/',
        ['url' => $logos_path.'Ransom-Center-Magazine-Logo.png', 'alt' => 'Ransom Center Magazine logo, black serif and sans-serifs fonts.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Jenny Romero ’01</strong>, the Ransom Center’s Robert De Niro Curator of Film, was the subject of a Ransom Center magazine article.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Evan Wright ’87',
        'https://www.washingtonpost.com/obituaries/2024/07/16/evan-wright-generation-kill-dead/',
        ['url' => $logos_path.'washington-post.jpg', 'alt' => 'Washington Post logo, black serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Writer and author <strong>Evan Wright ’87</strong> was remembered by numerous news outlets, including the <em>Washington Post</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><strong>Lisa Kudrow ’85</strong> discussed her time at Vassar on the <a href="https://podcasts.apple.com/us/podcast/smartless/id1521578868?i=1000662553267">podcast <em>SmartLess</em></a> with hosts Jason Bateman, Sean Hayes, and Will Arnett.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><strong>Jonathan Karl ’90</strong>, Chief Washington Correspondent for ABC News and the co-anchor of This Week, spoke about the presidential election on the <a href="https://cafe.com/stay-tuned/kamala-harris-trump-election-jonathan-karl/">podcast <em>Stay Tuned with Preet</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><strong>Mackenzie Galloway-Cole ’17</strong>, who lost her wife, Megan, while still in her 20s, took a chance on attending a grief camp and talked about the experience with <a href="https://www.cnn.com/travel/grief-camp-experience-camps-mackenzie-galloway-cole/index.html">CNN</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><strong>Joanna Pearlstein ’92</strong> was promoted to an expanded role as Print Editor of the <a href="https://www.nytco.com/press/a-promotion-for-joanna-pearlstein-in-opinion/"><em>New York Times</em></a> Opinion section, as noted by the newspaper.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><strong>Anirudh Tiwathia ’05</strong>, Director of Behavior Science at the Center for Behavior and the Environment, was mentioned in a <a href="https://www.latimes.com/environment/newsletter/2024-08-01/column-check-out-the-tv-shows-nudging-people-to-act-on-climate-boiling-point"><em>Los Angeles Times</em> story</a> about television shows that have climate change thoughtfulness included in their scripts.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13">Filmmaker <strong>India Donaldson ’07</strong> and her new film, <em>Good One</em>, were the subjects of a <a href="https://www.latimes.com/entertainment-arts/movies/story/2024-08-06/director-india-donaldson-cuts-her-own-path-good-one"><em>Los Angeles Times</em> feature</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><strong>Michele Tugade ’95</strong>, Professor of Psychological Science on the William R. Kenan Jr. Chair, was featured in a <a href="https://www.womenshealthmag.com/life/a61803754/what-is-learned-optimism/"><em>Women’s Health</em> article</a> about learned optimism.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><strong>Alex Bhattacharji ’92</strong> wrote a <a href="https://www.rollingstone.com/culture/culture-features/sammy-davis-jr-satanism-anton-lavey-1235070544/"><em>Rolling Stone</em> article</a> about the unlikely friendship between Sammy Davis Jr. and Anton La Vey, founder and high priest of the Church of Satan.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><strong>Susanna Ashton ’89</strong>, a Professor of English at Clemson University, wrote <a href="https://theconversation.com/the-black-fugitive-who-inspired-uncle-toms-cabin-and-the-end-of-us-slavery-234256">an article in <em>The Conversation</em></a> about her new book, <em>A Plausible Man: The True Story of the Escaped Slave Who Inspired Uncle Tom’s Cabin</em>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><strong>Richard Barakat ’81</strong> discussed art, literature, and Faust on <a href="https://www.youtube.com/watch?v=YiiZbUErFcA"><em>Philosophic Dialogues from La Frontera</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><strong>Margaret Floy Washburn</strong>, class of 1891, was the subject of a <a href="https://www.discovermagazine.com/mind/what-were-margaret-floy-washburns-contributions-to-psychology"><em>Discover</em> magazine article</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><strong>Mattie Drucker ’22</strong> was one of several people interviewed by <a href="https://www.instagram.com/reel/C-r4MIQPdax/?igsh=eWgzYnJtbGM5bmtt">the French news site <em>Brut.</em></a> on what France is like for American tourists.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><strong>Amanda Forsythe ’98</strong> was named Best Opera Singer at the <a href="https://www.sfcv.org/articles/feature/audience-choice-awards-2023-2024-bay-area-winners"><em>SF Classical Voice</em> Audience Choice Awards</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><strong>Burt Flickinger III ’75</strong>, owner of Strategic Resource Group, wrote a <a href="https://chicago.suntimes.com/letters-to-the-editor/2024/08/19/blocking-kroger-albertsons-merger-benefits-walmart-ftc-dnc-protests-political-parties-letters"><em>Chicago Sun-Times</em> op-ed</a> titled, “Customers, union workers will lose if Kroger-Albertsons merger gets blocked.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31">Fashion designer <strong>Elizabeth Hawes</strong>, class of 1925, was mentioned in a <a href="https://nypost.com/2024/08/24/lifestyle/how-politics-and-fascism-shaped-american-fashion-sweeping-away-anonymity/"><em>New York Post</em> article</a> titled, “How politics and fascism shaped American fashion: The wave that wiped away anonymity.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="32" data-line-end="33"><strong>Matthew Moshen ’92</strong>, a volunteer at the Oyster Bay Historical Society and a member of the Long Island Sons of the American Revolution, discovered graves of five American Revolutionary War veterans in a small, often overlooked cemetery in Oyster Bay, as noted by <a href="https://www.liherald.com/stories/graves-of-revolutionary-vets-found-in-oyster-bay,209794">LI Herald.com</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="34" data-line-end="35"><strong>David Foote ’75</strong>, chief analyst and research officer with IT research firm Foote Partners, was quoted in a <a href="https://www.computerworld.com/article/3507029/will-genai-kill-the-help-desk-and-other-it-jobs.html"><em>Computerworld</em> article</a> about how AI adoption is impacting IT employment in the next five years. Foote was also mentioned in a <a href="https://www.csoonline.com/article/2144220/12-hottest-it-security-certs-for-higher-pay-today.html">CSO article</a> about which cybersecurity skills are earning IT security workers the most pay.</p></div>


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
