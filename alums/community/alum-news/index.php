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
        'AC Dumlao ’13',
        'https://www.nycpride.org/news-press-media/grand-marshals-announced-for-2023-nyc-pride-march',
        ['url' => $logos_path.'NYC-Pride-logo.png', 'alt' => 'New York City Pride logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>NYC Pride announced that <strong>AC Dumlao&nbsp;’13</strong> will serve as a Grand Marshal for the 2023 New York City Pride March.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Daphne Kalotay ’92',
        'https://www.nytimes.com/2023/04/28/books/review/the-last-catastrophe-allegra-hyde-the-archivists-daphne-kalotay-the-house-of-love-and-prayer-tova-reich.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p><em>The Archivists</em>, a collection of stories by <strong>Daphne Kalotay ’92</strong>, was included in the <em>New York Times’s</em> The Shortlist.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Elisa Strauss ’98',
        'https://variety.com/2023/tv/news/gordon-ramsays-food-stars-contestants-fox-1235575554/',
        ['url' => $logos_path.'Variety-logo.png', 'alt' => 'Variety logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Confetti Cakes owner and cake designer <strong>Elisa Strauss ’98</strong> will be featured on the premiere season of <em>Gordon Ramsay’s Food Stars</em>, as noted by <em>Variety</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.msn.com/en-us/news/crime/building-prison-cells-over-homes-in-central-appalachia/ar-AA1aM9lJ"><strong>Judah Schept ’01</strong>, author and professor in the School of Justice Studies at Eastern Kentucky University, was a guest on the Everywhere Radio podcast in an episode titled, “‘Building Prison Cells Over Homes’ in Central Appalachia,”</a> as noted by the <em>Daily Yonder</em>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.whitehouse.gov/briefing-room/statements-releases/2023/05/12/president-biden-announces-nominees-to-the-federal-reserve-board-of-governors/"><strong>Philip Jefferson ’83</strong>,  a member of the Federal Reserve Board of Governors, was nominated Vice Chair of the board, as noted by the White House</a> and numerous media outlets.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://news.mit.edu/2023/five-mit-elected-national-academy-sciences-2023-0511"><strong>Catherine Drennan ’85</strong>, Professor of Biology and Chemistry at MIT, was elected to the National Academy of Sciences, as noted by MIT News</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9">Filmmaker and producer <a href="https://news.olemiss.edu/cannon-hersey-to-deliver-journalism-school-commencement-address/"><strong>Cannon Hersey ’99</strong> gave the Commencement address for the University of Mississippi School of Journalism and New Media, as noted by Ole Miss</a>.</p></div>

  
    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11">Award-winning author <a href="https://www.saturdayeveningpost.com/2023/04/the-culling/"><strong>Dawn Hathaway ’91</strong> wrote a <em>Saturday Evening Post</em> contemporary fiction story, <em>The Culling</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="http://www.nasonline.org/programs/awards/2023-awards/Monje.html"><strong>Michelle Monje ’98</strong>, a physician and research scientist at Stanford University School of Medicine, received the 2023 Richard Lounsbery Award, as noted by the National Academy of Sciences</a>.</p></div>

  
    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.thebody.com/article/eviction-act-violence-interview-leah-goodridge"><strong>Leah Goodridge ’04</strong>, Managing Attorney for Housing Policy at Mobilization for Justice, discussed the affordable housing crisis and evictions in an interview with <em>The Body</em></a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://www.fingerlakesdailynews.com/local/cayuga/auburn-entrepreneur-named-woman-of-distinction"><strong>Melody Smith Johnson ’85, P’14</strong>, an entrepreneur and founder of the Beverly L. Smith Empowerment Initiative, was the recipient of a New York State Senate’s annual Women of Distinction Award, as noted by FingerLakesDailyNews.com</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.ornl.gov/news/cooper-appointed-does-basic-energy-sciences-advisory-committee"><strong>Dr. Valentino “Tino” Cooper ’00</strong>, a scientist at the Department of Energy’s Oak Ridge National Laboratory, was appointed to the DOE’s Basic Energy Science Advisory Committee, as announced by the laboratory</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://finance.yahoo.com/news/tessera-therapeutics-names-cynthia-m-120000695.html"><strong>Cynthia Patton ’83</strong> was named General Counsel and Secretary of Tessera Therapeutics, a biotechnology company, as noted by Yahoo! Finance</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://www.actionnewsnow.com/news/pvs-eugene-lee-ready-to-ace-competition-at-vassar-college/article_ae5b235c-f514-11ed-afd6-1b7bb368b3f3.html"><strong>Eugene Lee ’27</strong>,  a high school champion tennis player who committed to Vassar, was the subject of an Action News Now story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25">Lawyer <a href="https://governor.maryland.gov/press/pages/Governor_Moore_Appoints_Montgomery_County_Leaders_Who_Will_Recommend_Judicial_Appointments.aspx"><strong>Carolyn Demougeot ’11</strong> was named to Maryland Governor Wes Moore’s Montgomery County Trial Courts Judicial Nominating Commission, as noted by the Maryland state government</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27">South Carolina <a href="https://www.heraldonline.com/latest-news/article275477881.html">Judge <strong>Alison Lee ’79</strong> announced her retirement from the bench, as noted by <em>The Herald</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://www.chipchick.com/2023/05/she-was-one-of-the-very-first-female-chemists-in-america-and-she-was-also-the-very-first-woman-to-be-accepted-into-mit.html">Engineer and chemist <strong> Ellen Swallow Richards, class of 1870</strong>, the first woman admitted into the Massachusetts Institute of Technology, was the subject of a Chip Chick story</a>.</p></div>


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
