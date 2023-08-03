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
        'Charlie Stickney ’96',
        'https://www.publishersweekly.com/pw/by-topic/authors/pw-select/article/92623-indie-community-at-home-in-the-crowd.html',
        ['url' => $logos_path.'publishers-weekly-logo.png', 'alt' => 'Publishers Weekly logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Charlie Stickney ’96</strong>, a writer, producer, and comic book creator, talked with <em>Publishers Weekly</em> about how crowdfunding helped him launch his comic book series.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Mildred H. McAfee, class of 1920',
        'https://www.aerotechnews.com/blog/2023/07/06/veteran-of-the-day-u-s-navy-veteran-mildred-h-mcafee/',
        ['url' => $logos_path.'aerotechnews-logo.png', 'alt' => 'Aerotech News logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>U.S. Navy veteran <strong>Mildred H. McAfee</strong>, class of 1920, the first director of the Women Accepted for Volunteer Emergency Services (WAVES) and the first woman commissioned in the U.S. Navy Reserve, was the subject of an <em>Aerotech News</em> story.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Kimberly Nguyen ’19',
        'https://www.nytimes.com/2023/06/20/business/job-search-salary-ranges.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'The New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Kimberly Nguyen ’19</strong>, a poet and UX writer, spoke to <em>The New York Times</em> about her experience with an employer regarding salary transparency.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.adweek.com/media/creative-100-2023-the-media-innovators-reimagining-the-industrys-future/"><strong>Kiana Moore ’02</strong>, co-director of the award-winning documentary <em>The Beauty of Blackness</em> and Vice President of Epic Stories at Vox Creative, was named to <em>Adweek</em>’s Creative 100</a>, which celebrates top talents in marketing, media, and culture.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://playbill.com/article/schools-of-the-stars-see-where-the-76th-annual-tony-award-winners-went-to-college">Tony award-winning set designer <strong>Beowulf Boritt ’93</strong> was mentioned in a <em>Playbill</em> article</a> about where 2023 Tony Award winners went to college.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.bkmag.com/2023/07/03/meet-the-lone-tenants-rights-attorney-on-the-nyc-planning-commission/">Tenants’ rights lawyer, Managing Attorney for Housing Policy at Mobilization for Justice, and New York City Planning Commission member <strong>Leah Goodridge ’04</strong> was interviewed by <em>Brooklyn Magazine</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.youtube.com/watch?v=dc_9R7aU7VE&list=PLeyPUMOvEaOi5vPnkOeBenLkKntDYOgPp&index=2"><strong>Andrij V. Dobriansky ’99</strong>, Director of Communications and Media of the Ukrainian Congress Committee of America, discusses many issues related to the war in Ukraine, mostly recently on Press TV</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://chestnuthilllocal.com/stories/from-portraits-of-murder-victims-to-kids-book-artwork,28331">Artist, book illustrator, and teacher and <strong>Rebecca Hoenig ’81</strong> was the subject of a <em>Chestnut Hill Local</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.dramatistsguild.com/thedramatist/bad-words-and-good-theatre?check_logged_in=1">Author <strong>Joseph Bardin ’89</strong> wrote Dramatists Guild article, “Bad Words and Good Theatre.”</a></p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.reformer.com/sports/whitney-reestablishes-23-year-old-school-record/article_c71a1bc6-0c6d-11ee-a127-73a333dba843.html"><strong>Ava Whitney ’27</strong>, a track and field competitor who broke her high school record in the 800-meter run, was the subject of a <em>Brattleboro Reformer</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://harpers.org/archive/2023/08/doctors-orders-jason-blakely/"><strong>Jason Blakely ’03</strong>, author and Associate Professor of Political Science at Pepperdine University wrote the <em>Harper’s Magazine</em> cover story, “Doctor’s Orders: COVID-19 and the new science wars.”</a></p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.fltimes.com/news/co-author-of-era-to-be-remembered-at-canandaigua-gravesite/article_61030734-1b23-11ee-9c9f-f3ecde20a614.html">The grave of ERA co-author and women’s suffrage leader <strong>Crystal Eastman</strong>, class of 1903, will be given a commemorative marker and be added to the National Votes for Women Trail, as noted by the <em>Finger Lakes Times</em></a>.</p></div>

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.americantheatre.org/2023/07/10/craig-lucas-chisa-hutchinson-ryan-j-haddad-win-provincetown-theater-awards/">Playwright <strong>Chisa Hutchinson ’02</strong> was a recipient of a 2023 Provincetown American Playwright Award, as noted by <em>American Theater</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://prizes.new-european-bauhaus.eu/"><strong>Ani Kodjabasheva ’12</strong> took part in an award-winning project, “Danube Design Lab Ruse,” which was a European Bauhaus Prize winner</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.hollywoodreporter.com/movies/movie-news/judith-james-dead-mr-hollands-opus-quiz-show-1235538217/">Emmy-winning producer <strong>Judith James ’59</strong> was remembered by the <em>Hollywood Reporter</em></a>.</p></div>


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
