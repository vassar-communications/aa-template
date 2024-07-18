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
        'Torrey Maldonado ’96',
        'https://www.cbsnews.com/newyork/video/brooklyn-teacher-shares-the-inspiration-behind-his-book-hands/',
        ['url' => $logos_path.'CBS-news-logo.png', 'alt' => 'CBS News logo, a white circle with an eye in it, followed by the text CBS News in white sans serif font on a black background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Author <strong>Torrey Maldonado ’96</strong> talked about his latest novel, <em>Hands</em>, on CBS News.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Siêu Nguyễn ’17',
        'https://nwasianweekly.com/2024/06/from-hanoi-to-hollywood-vietnamese-writer-producer-sieu-nguyen-finds-success-at-hbo-and-max/',
        ['url' => $logos_path.'NWAWlogo.png', 'alt' => 'Northwest Asian Weekly logo, black and yellow sans serif font text.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Siêu Nguyễn ’17</strong>, who works for the marketing team for HBO and Max Originals, was the subject of a <em>Northwest Asian Weekly</em> article.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Judith James ’59',
        'https://uk.style.yahoo.com/news/judith-james-quiz-show-mad-193156264.html',
        ['url' => $logos_path.'Variety-logo.png', 'alt' => 'Variety logo, white serif font with a stylized V on a black background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Judith James ’59</strong>, a producer who worked on multiple film and television projects including <em>Quiz Show </em>and <em>Mr. Holland’s Opus</em>, was remembered by <em>Variety</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://msmagazine.com/2024/04/10/tradwife-feminist-divorce-women-home/">The book <em>Single at Heart: The Power, Freedom, and Heart-Filled Joy of Single Life</em> by <strong>Bella DePaulo ’75</strong> was mentioned in multiple media outlets including <em>Ms.</em> magazine</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.berkshireeagle.com/sports/local_sports/major-league-baseball-tampa-bay-rays-boston-red-sox-bobby-kinne-pitching-strategist/article_877419f0-1300-11ef-89e3-c7212b6f3af1.html"><strong>Bobby Kinne ’18</strong>, Tampa Bay Rays Pitching Strategist, talked about his work for the Major League Baseball team with the <em>Berkshire Eagle</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.computerworld.com/article/2097040/workers-with-ai-skills-are-getting-these-pay-cash-premiums.html"><strong>David Foote ’75</strong>, Chief Analyst at Foote Partners, was quoted in a <em>Computerworld</em> article on AI skills</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.benningtonbanner.com/opinion/commentary-override-scott-s-veto-on-the-neonicotinoid-ban/article_83ae16be-28f3-11ef-8364-ffa8f1d953ff.html"><strong>Madilyn Sandy ’25 </strong> wrote a <em>Bennington Banner</em> op-ed about the toxicity of neonicotinoid pesticides on bee populations and the need to ban their use</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.ft.com/content/939170e7-88f0-464d-a57f-4409d8789104"><strong>Kim Yeshi ’77</strong> and the Tibetan Plateau business she co-founded, Norlha, were featured by the <em>Financial Times</em></a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.nytimes.com/2024/05/05/us/politics/trump-biden-election-dc.html"><strong>Steven Cook ’90</strong>, a Middle East scholar at the Council on Foreign Relations, was quoted in a <em>New York Times</em> article about the possibility of Donald Trump winning the next presidential election</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="11"><a href="https://www.youtube.com/watch?v=i-cBjk2klYQ">Author <strong>Torrey Maldonado ’96</strong> was interviewed by the Library of Congress’s National Ambassador for Young People’s Literature</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://volleyballmag.com/matthew-knigge-usa-volleyball-052324/">Pro volleyball player and former Brewers standout <strong>Matthew Knigge ’18</strong> was the subject of a feature article in <em>Volleyball</em> magazine</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.newyorkupstate.com/food/2024/05/tv-star-and-celebrity-chef-andrew-zimmern-reveals-his-favorite-restaurants-in-the-catskills.html">Chef and television personality <strong>Andrew Zimmern ’84</strong> talked about his favorite Catskill restaurants recently in a newyorkupstate.com article</a>.</p></div>
  

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
