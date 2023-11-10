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
        'Donald Rosenfeld ’85',
        'https://www.theguardian.com/media/2023/oct/01/americas-new-print-only-newspaper-county-highway-reinvents-the-art-of-reading-slowly',
        ['url' => $logos_path.'the-guardian-logo.png', 'alt' => 'The Guardian logo, white text on a blue background' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Donald Rosenfeld ’85</strong>, publisher of the new print-only newspaper <em>County Highway</em>, was quoted in a <em>Guardian</em> story about the venture.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'juliany taveras ’16',
        'https://diva-magazine.com/2023/09/25/juliany-taveras/',
        ['url' => $logos_path.'diva-logo.png', 'alt' => 'Diva logo, black block text on a light graey background' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Playwright <strong>juliany taveras ’16</strong> spoke to DIVA magazine about their new play, <em>Morris Micklewhite And The Tangerine Dress</em>, at the Children’s Theatre Company in Minneapolis.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Adolphine Fletcher Terry, class of 1902',
        'https://www.thv11.com/article/features/little-rock-desegregation-adolphine-fletcher-terry/91-164ccfab-6e65-48dc-bc5c-edd400126a35',
        ['url' => $logos_path.'kthv-logo.png', 'alt' => 'THV11 logo, white text on a blue background followed by an eye symbol' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Adolphine Fletcher Terry, class of 1902</strong>, co-founder of the Women’s Emergency Committee to Open Our Schools—which worked to integrate schools, libraries, and other spaces in her hometown of Little Rock, Arkansas—was the subject of a THV11 story.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.cbsnews.com/video/coping-with-stress-from-turmoil-in-news/">In an interview with CBS News, Vassar Professor of Psychological Science <strong>Michele Tugade ’95</strong> offered tips for coping with stress induced by news reports from the Middle East</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.cnn.com/2023/10/04/style/book-bans-sales-authors-impact-cec/index.html">Author and educator <strong>Torrey Maldonado ’96</strong> talked to CNN</a> about the rise in book banning.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.astronomy.com/science/the-vera-c-rubin-observatory-shows-its-flair-for-asteroid-detection/">The Vera C. Rubin Observatory, named after noted astronomer <strong>Vera Rubin ’48</strong>, was the subject of an <em>Astronomy</em> article</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://fortune.com/longform/jason-blum-exorcist-blumhouse-low-budget-horror-films/"><strong>Jason Blum ’91</strong>, CEO and Founder of Blumhouse Productions, talked to <em>Fortune</em></a>about his filmmaking business model.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.newyorker.com/gallery/cartoons-from-the-september-18-2023-issue"><strong>Carl Kissin ’80</strong> co-created a <em>New Yorker</em> cartoon</a> with former visiting professor Liza Donnelly.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://beautymatter.com/articles/next-person-of-the-year-carol-hamilton"><strong>Carol Hamilton ’74</strong>, Group President, Acquisitions and West Coast Headquarters of L’Oréal, was the subject of a BeautyMatter story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://news.ucsb.edu/2023/021220/charmaine-chua-named-2023-freedom-scholar"><strong>Charmaine Chua ’08</strong>, Assistant Professor of Global Students at UC Santa Barbara, was named a 2023 Freedom Scholar, as announced in <em>The Current</em></a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://worldnewsera.com/news/career-jobs/we-need-more-black-women-in-the-c-suite-heres-why/"><strong>Paula Madison ’74</strong>, CEO of 88 Madison Media Inc., was quoted in a <em>World News Era</em> story</a> about the need for more Black women in the C-suite.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.kplctv.com/2023/10/17/philanthropist-preservationist-matilda-gray-stream-dies-99/">Philanthropist and preservationist <strong>Matilda Gray Stream ’45-4</strong> was remembered by KPLC</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.chestnuthilllocal.com/stories/finding-beauty-in-an-aging-body,29713"><strong>Sara Allen ’64</strong>, whose photography has been showcased in a variety of galleries, was the subject of a <em>Chestnut Hill Local</em> story</a>.</p></div>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://bit.ly/3rJcbrM"><strong>John Gutierrez ’92</strong>, a leader at CUNY Center for Latin American, Caribbean, and Latino Studies, was one of four scholars featured in a CUNY Graduate Center story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.discovermagazine.com/the-sciences/who-was-ruth-benedict"><strong>Ruth Benedict, class of 1909</strong>, was the subject of a <em>Discover</em> article</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://www.bizjournals.com/phoenix/news/2023/09/29/cindy-ornstein-mesa-arts-center-shelley-award.html?ana=RSS&s=article_search"><strong>Cindy Ornstein ’77</strong>, who recently retired as Executive Director of Mesa Arts Center, will be honored with the Shelley Award as part of the Arizona Creative Excellence Awards, as noted by the <em>Phoenix Business Journal</em></a>.</p></div>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://www.nytimes.com/2023/10/17/magazine/us-public-investment.html?smid=nytcore-ios-share&referringSource=articleShare">Computer pioneer <strong>Grace Hopper, class of 1928</strong>, was quoted in a <em>New York Times Magazine</em> article</a>, “Longer Commutes, Shorter Lives: The Costs of Not Investing in America.”</p></div>


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
