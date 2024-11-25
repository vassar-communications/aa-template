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
        'Martha Barry ’86',
        'https://dutchesstourism.com/spotlights/2024-awards-of-distinction-finalist-spotlight-storytelling',
        ['url' => $logos_path.'DutchessTourismLogo.png', 'alt' => 'Dutchess Tourism logo, white sans serif font on a blue background with an outlined image of leaves to the left.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Martha Barry ’86</strong>, Manager of Alumnae House, was named a Dutchess Tourism 2024 Storytelling Award of Distinction Finalist and discussed the rich history of Alumnae House, which celebrated its 100th anniversary this year, in a Q&A published on the Dutchess Tourism website.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Hannah Bos ’00<br />Paul Thureen ’00',
        'https://www.nytimes.com/2024/10/25/arts/television/somebody-somewhere-final-season.html?unlocked_article_code=1.U04.Ssxy.7h--8hiJ_0jL&smid=nytcore-ios-share&referringSource=articleShare',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo, black serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Hannah Bos ’00</strong> and <strong>Paul Thureen ’00</strong>, co-creators of the HBO series <em>Somebody Somewhere</em>, talked to <em>The New York Times</em> about the show, which is in its third, and last, season.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Bella Myŏng-wŏl Dalton-Fenkl ’20',
        'https://www.theguardian.com/culture/2024/oct/20/my-brilliant-korea-rediscovery-of-a-rich-cultural-narrative',
        ['url' => $logos_path.'the-guardian-logo.png', 'alt' => 'Washington Post logo, white serif font on a dark blue background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Bella Myŏng-wŏl Dalton-Fenkl ’20</strong> wrote a <em>Guardian</em> article titled “My brilliant Korea: rediscovery of a rich cultural narrative.”</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://newyorkclassicalreview.com/2024/11/the-gesualdo-six-offer-a-moving-musical-experience-with-secret-byrd/"><em>New York Classical Review</em></a> wrote about a performance by Abendmusik, directed by <strong>Bill Barclay ’03</strong> with <strong>Patricia Ann Neely ’75</strong> on the viol.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><strong>Jens Austin Astrup ’22</strong> just joined the cast of <em>General Hospital</em>, as reported by <a href="https://www.soapoperadigest.com/content/general-hospital-exclusive-meet-trinas-new-love-interest-jans-austin-astrup-kai/"><em>Soap Opera Digest</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7">Fulbright scholar <strong>Madeleine Freundlich ’24</strong> was featured in a <a href="https://newsroom.notified.com/girl-scouts-of-central-and-southern-new-jerse/posts/pressreleases/madeleine-freundlich-a-lifelong-journey-of-co">Girl Scouts of Central & Southern New Jersey article</a>, as an International Day of the Girl Spotlight.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9">Composer <strong>Robinson (Robin) McClellan ’99</strong>, a curator at the Morgan Library & Museum, found a previously unknown waltz by Frédéric Chopin written on a scrap of paper in the museum’s vault, as reported by <a href="https://nyti.ms/48oOEgJ"><em>The New York Times</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11">Environmentalist <strong>Nikola Alexandre ’14</strong> has been selected as one of the honorees for <a href="https://bit.ly/3Yvs8zB"><em>OUT magazine</em></a>’s 30th Annual OUT100 List.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13">Actor <strong>Louisa Jacobson ’13</strong> was a cast member of <em>The Gilded Age</em>, which was selected as one of the honorees for <a href="https://www.out.com/out100/2024/artists/the-gilded-age"><em>OUT magazine</em></a>’s 30th Annual OUT100 List.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><strong>Aubrey Hays ’15</strong>, who goes by the moniker Somebody Someone, talked to <a href="https://americansongwriter.com/somebody-someone-find-themselves-better-with-riveting-single-video/"><em>American Songwriter</em></a> about life, creativity, and Hays’s latest song, “Better.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17">Pianist and composer <strong>Jane Strong O’Leary ’68</strong> was a guest on <a href="https://www.rte.ie/radio/lyricfm/clips/22444709/">RTE Lyric FM’s <em>The Lyric Feature</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><strong>Sherrilyn Ifill ’84</strong> delivered Harvard University’s 2024 Dr. Martin Luther King Jr. Commemorative Lecture, as noted by the <a href="https://news.harvard.edu/gazette/story/2024/10/time-for-emergence-of-a-new-and-better-democracy/22444709/"><em>Harvard Gazette</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><strong>Claire Isabel Webb ’10</strong> wrote a <a href="https://www.nytimes.com/2024/10/13/opinion/nasa-europa-clipper-extraterrestrials.html"><em>New York Times</em> op-ed</a> about the NASA space probe Europa Clipper titled “Can We Please Just Find the Aliens Already?”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><strong>David Foote ’75</strong>, Chief Analyst and Chief Research Officer at Foote Partners LLC, talked about the Big Shift—tectonic changes sweeping through the workplace, driven by new high-momentum technologies of which AI is just one—on the <a href="https://podcasts.apple.com/us/podcast/the-revolution-will-not-be-televised-the-big-shift/id1732063597?i=1000669722182">podcast <em>The AIX Factor</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><strong>Sarah Lester ’91</strong>, Director of Maplewood Memorial Library, was quoted extensively in a <a href="https://www.nj.com/essex/2024/10/sleek-235m-nj-library-is-almost-finished-see-inside.html">NJ.com story</a> about the library’s new $23.5 million building.</p></div>


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
