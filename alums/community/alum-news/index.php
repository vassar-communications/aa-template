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
        'Daphne Kalotay ’92',
        'https://www.nytimes.com/2023/04/16/opinion/second-and-third-generation-storytellers-are-telling-the-story-of-the-holocaust-now.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Daphne Kalotay ’92</strong> wrote a <em>New York Times</em> guest essay, “What Holocaust Storytellers Like Me Know About ‘Secondhand Smoke.’”</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Amina Luqman-Dawson&nbsp;’97',
        'https://abcnews.go.com/Entertainment/wireStory/amina-luqman-dawsons-freewater-wins-john-newbery-medal-96765422',
        ['url' => $logos_path.'abc_news_logo.jpg', 'alt' => 'ABC News logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p><em>Freewater</em>, a middle-grade novel about a secret community of formerly enslaved people authored by <strong>Amina Luqman-Dawson ’97</strong>, has won the John Newbery Medal for best children’s book of the year, as noted by ABC News.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Vera Rubin ’48',
        'https://www.scientificamerican.com/video/vera-rubin-lives-on-in-lives-of-the-women-she-helped-in-astronomy/',
        ['url' => $logos_path.'Scientific_American_logo.jpg', 'alt' => 'Scientific American logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Vera Rubin ’48</strong> was the subject of a <em>Scientific American</em> story.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.yahoo.com/lifestyle/inner-circle-acknowledges-simon-rabinowitz-182600237.html"><strong>Dr. Simon S. Rabinowitz ’75</strong> was named a Most Trusted Professional in the Medical Field for his contributions as a pediatric gastroenterologist, educator, and scientist by The Inner Circle, as noted in a Yahoo! Life article</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://thegoaspotlight.com/films-by-jonas-cuaron-the-director-of-chupa/">The work of director and screenwriter <strong>Jonás Cuarón ’05</strong> was the subject of a Goa Spotlight story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://talkingbiznews.com/media-news/bloomberg-hires-reinicke-to-cover-markets/"><strong>Carmen Reinicke ’14</strong> joined Bloomberg News as a reporter on the equities team, as noted by TalkingBizNews.com</a>.</p></div>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7">Attorney and author <a href="https://www.wusa9.com/video/news/local/brain-cancer-survivor-shares-story-of-hope-belief/65-e21312e3-39aa-4860-93cb-a1c845d7278e"><strong>Karen Roberts Turner ’86</strong> shared her story about surviving brain cancer on WUSA9</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://finance.yahoo.com/news/lincoln-financial-group-names-heather-170000046.html"><strong>Heather Deichler ’02</strong> was named Senior Vice President of Group Benefit Product and Underwriting at Lincoln Financial Group, as noted by Yahoo! Finance</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31"><a href="https://www.noozhawk.com/tessa-kaganoff-elected-to-scholarship-foundation-board/"><strong>Tessa Kaganoff ’88</strong> joined the Board of Directors for the Scholarship Foundation of Santa Barbara, as noted by <em>Noozhawk</em></a>.</p></div>

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
