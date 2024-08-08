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
        'Deva Kyle ’01',
        'https://www.plansponsor.com/white-house-announces-nominee-for-pbgc-director/',
        ['url' => $logos_path.'plansponsor-logo.png', 'alt' => 'Plan Sponsor logo, all capital red block letters in a sans serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Attorney <strong>Deva Kyle ’01</strong> was nominated by President Biden to become the next director of the Pension Benefit Guaranty Corporation, as noted by Plan Sponsor.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Eric Marcus ’80',
        'https://www.npr.org/2024/06/30/nx-s1-5021708/as-lgbtq-visibility-increases-so-does-the-backlash',
        ['url' => $logos_path.'npr.gif', 'alt' => 'NPR logo, lowercase white letters each on a different-color background, in the order red, black, blue.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>On NPR’s <em>All Things Considered</em>, Scott Detrow talked to founder and host of the podcast <em>Making Gay History</em> <strong>Eric Marcus ’80</strong> about how LGBTQ Pride has evolved through the years.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Carlos Eduardo Espina ’20',
        'https://www.nytimes.com/2024/07/18/business/media/carlos-espina-tiktok.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo, black serif font.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>The<em> New York Times</em> profiled TikTok influencer <strong>Carlos Eduardo Espina ’20</strong>, “a one-man Telemundo for millions of Latinos in the United States and one of the White House’s favored social media personalities.”</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><strong>Matthew Moneypenny ’93</strong> was named Executive Director of the Southlands Foundation, as <a href="https://bit.ly/3VYXkoa">announced in a release</a> that quoted <strong>Michele Tugade ’95</strong>, Professor of Psychological Science on the William R. Kegan Jr. Chair, the outgoing board president of the nonprofit.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5">Director, writer, and actor <strong>Lim Sheng Hui ’17</strong> will bring <em>Into the Symbiocene</em> to the Stockholm Fringe Festival, as announced by <a href="https://cj.my/145199/theatre-collective-crowdfunds-for-stockholm-fringe-festival-performance/"><em>Citizens Journal</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><strong>Dr. James Dodington ’05</strong>, a pediatric emergency medicine specialist with Yale Medicine, spoke with <a href="https://www.wtnh.com/news/health/health-headlines-how-to-prevent-drownings/">WTNH News 8</a> about how to prevent drownings.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9">The <a href="https://www.washingtonpost.com/pr/2024/06/20/naveen-kumar-named-posts-theater-critic/"><em>Washington Post</em></a> announced its new theater critic: <strong>Naveen Kumar ’04</strong>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://arstechnica.com/information-technology/2024/06/nvidia-jumps-ahead-of-itself-and-reveals-next-gen-rubin-ai-chips-in-keynote-tease/"><em>Ars Technica</em></a> reports that AI tech giant Nvidia has named its newest AI platform for astronomer <strong>Vera Rubin ’48</strong>—one year after paying tribute to computer pioneer <strong>Grace Hopper, class of 1928</strong>, with a “superchip” named after her. Hopper was also included in a <a href="https://www.usnews.com/education/slideshows/where-10-famous-inventors-went-to-college?slide=11"><em>U.S. News & World Report</em> story</a> on where 10 famous inventors went to college.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Dr. Monica Riley ’86</strong>, Founder/CEO at Dr. Monica’s Natural Beauty, LLC, was recently selected as Top Holistic and Self Care Leader of the Year for 2024 by the International Association of Top Professionals (IAOTP), as noted by <a href="https://www.wicz.com/story/50982861/dr-monica-riley-selected-as-top-holistic-and-self-care-leader-of-the-year-by-iaotp">WICZ Fox 40</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="11">The poem “Sustain” by <strong>Tim Horvath ’93</strong> was published in the Summer 2024 issue of <em>Ploughshares</em> (subscription publication).</p></div>


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
