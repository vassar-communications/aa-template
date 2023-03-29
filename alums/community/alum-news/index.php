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
        'Dr. Zoe Adams ’15',
        'https://www.guernicamag.com/doctors-not-dealers/',
        ['url' => $logos_path.'guernica.gif', 'alt' => 'Guernica logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Dr. Zoe Adams ’15</strong> wrote a <em>Guernica</em> article, “Doctors, Not Dealers: Punishment, not care, characterizes opioid addiction treatment.”</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Mary McCarthy ’33',
        'https://www.msn.com/en-us/lifestyle/parenting/the-15-best-books-about-friendship-to-read-alongside-your-bestie/ss-AA18yq27#image=4',
        ['url' => $logos_path.'msn-logo.gif', 'alt' => 'MSN logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p><em>The Group</em> by <strong>Mary McCarthy</strong>, class of 1933, was one of the books included in an MSN story, “The 15 Best Books About Friendship to Read Alongside Your Bestie.”</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Kara Voght ’11',
        'https://www.washingtonpost.com/pr/2023/03/16/kara-voght-joins-post-political-reporter-style/',
        ['url' => $logos_path.'washington-post.jpg', 'alt' => 'Washington Post logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Kara Voght ’11</strong> joined the <em>Washington Post</em> as a political reporter, as noted by the newspaper in an article.</p>
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

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="0" data-line-end="1"><a href="https://dailyvoice.com/new-york/ulster-sullivan/lifestyle/hudson-valley-resident-co-produced-oscar-favorite-for-picture-of-year/858600/"><strong>Jon Read ’09</strong>, a Co-Producer of the Oscar-winning film <em>Everything Everywhere All at Once</em>, was featured in a <em>Daily Voice</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://news.yahoo.com/trio-tenacious-heroines-celebrate-womens-093614814.html"><em>The Gilded Years</em>, a novel by <strong>Karin Tanabe ’02</strong>, was one of three books recommended to celebrate Women’s History Month</a> in a Yahoo! News story.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.bizjournals.com/sanfrancisco/news/2023/03/10/nik-dehejia-oakland-zoo-ceo.html">Oakland Zoo CEO <strong>Nik Dehejia ’94</strong> and his work to improve the zoo was the subject of a <em>San Francisco Business Times</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://playbill.com/article/estefania-fadul-and-graeme-gillis-named-co-artistic-directors-of-ensemble-studio-theatre"><strong>Estefanía Fadul ’10</strong> was named Co-Artistic Director of the Ensemble Studio Theatre</a>, as noted by <em>Playbill</em>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.lifewire.com/top-women-in-technology-7113051"><strong>Rear Admiral Grace Hopper</strong>, class of 1928, was named one of the five top women in technology by Lifewire</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11">Author and <em>Town & Country</em> Editor-in-Chief <a href="https://www.townandcountrymag.com/style/jewelry-and-watches/a42923706/bulgari-serpenti-75-anniversary/"><strong>Stellene Volandes ’93</strong> wrote a <em>Town & Country</em> article</a> about the Bulgari Serpenti.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13">Attorney, reporter, and author <a href="https://www.middletownpress.com/news/article/former-ct-reporter-author-elisabeth-petry-17812900.php"><strong>Elisabeth Petry ’70</strong>, daughter of famed author Ann Petry, was remembered by the <em>Middletown Press</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.yahoo.com/entertainment/american-cinematheque-adds-jason-blum-214735339.html"><strong>Jason Blum ’91</strong>, Founder and CEO of Blumhouse Productions, was named to the American Cinematheque Board of Directors</a>, as noted by Yahoo! Entertainment.</p></div>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://www.cbc.ca/listen/live-radio/1-63-the-current/clip/15972552-renowned-canadian-architect-phyllis-lambert-build-better-cities">Architect <strong>Phyllis Lambert ’48</strong> appeared on the podcast <em>The Current with Matt Galloway</em></a> to talk about how to build better cities.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.iheart.com/podcast/stuff-you-missed-in-history-cl-21124503/episode/ellen-swallow-richards-109624462/"><strong>Ellen Swallow Richards</strong>, class of 1870, was mentioned in an iHeartRadio podcast</a>, <em>Stuff You Missed in History Class</em>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://pca.st/ibv0q6ds"><strong>Andrew Zolli ’95</strong> and his reporting on the relationship between technology and emotion was the subject of the WNYC Studios <em>Radiolab</em> podcast episode “The Trust Engineers.”</a></p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://www.tapinto.net/towns/summit/categories/news/articles/summit-democrats-announce-2023-slate-of-candidates"><strong>David Naidu ’90</strong>, a law firm partner and former Summit Common Council member, is running for mayor of Summit, N.J.</a>, as noted by Tap Into Summit.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.kiplinger.com/personal-finance/disney-plus-scam-emails"><strong>Ben Demers ’08</strong>, Audience Engagement Manager at Kiplinger.com, wrote a <em>Kiplinger</em> article</a> about a new email scam.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://finance.yahoo.com/news/lincoln-financial-group-names-heather-170000046.html"><strong>Heather Deichler ’02</strong> was named Senior Vice President of Group Benefit Product and Underwriting at Lincoln Financial Group</a>, as noted by Yahoo! Finance.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://talkingbiznews.com/media-news/bloomberg-hires-reinicke-to-cover-markets/"><strong>Carmen Reinicke ’14</strong> joined Bloomberg News as a reporter on the equities team</a>, as noted by TalkingBizNews.com.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31"><a href="https://www.noozhawk.com/tessa-kaganoff-elected-to-scholarship-foundation-board/"><strong>Tessa Kaganoff ’88</strong> joined the Board of Directors for the Scholarship Foundation of Santa Barbara</a>, as noted by <em>Noozhawk</em>.</p></div>

<!--
  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="32" data-line-end="33"><a href="https://jadedibispress.com/product/11808/">A novel by author <strong>Natasha Gordon-Chipembere ’92</strong>, <em>Finding La Negrita</em>, was praised by several authors and professors</a>, as noted by Jaded Ibis Press.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="34" data-line-end="35">A discussion on the inner workings of the brain by Cornell University Dean of Faculty and Human Ecology Professor <a href="https://www.royalgazette.com/health/news/article/20230130/bermudian-scientist-to-give-talk-on-workings-of-the-brain/"><strong>Eve De Rosa ’91</strong> was the subject of a <em>Royal Gazette</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="36" data-line-end="37"><a href="https://www.silive.com/entertainment/2023/01/jcc-association-of-north-america-recognizes-jcc-of-staten-islands-chief-of-communications-inside-out.html"><strong>Allison Cohen ’11</strong>, Chief of Communications and External Affairs at the Joan and Alan Bernikow Jewish Community Center, received the Martin Pear Israel Fellowship</a> by the JCC Association of North America, as noted in a <a href="http://SILive.com">SILive.com</a> story.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="38" data-line-end="39"><a href="https://www.aaas.org/news/four-chemists-receive-2023-marion-milligan-mason-award"><strong>Marion Milligan Tuttle Mason</strong>, class of 1949, was mentioned in an article about the recent recipients of the Mason Award for women in chemical sciences</a>, which Mason created with a gift to the American Association for the Advance of Science.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="40" data-line-end="41"><a href="https://www.uvm.edu/news/extension/dr-ike-leslie-joins-uvm-extension"><strong>Isaac “Ike” Leslie ’10</strong> joined the University of Vermont as a Community Development Specialist</a>, as noted by UVM.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="42" data-line-end="43"><a href="https://nuggetnews.com/Content/Health/HEALTH/Article/Build-a-memory-palace-with-a-healthy-brain/117/221/32940"><strong>Scott Crabtree ’88</strong> discussed memory at his most recent Science of Happiness workshop</a>, as noted by the <em>Nugget Newspaper</em>.</p></div>
-->

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
