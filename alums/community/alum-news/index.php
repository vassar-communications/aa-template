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
        'Dr. June Jackson Christmas&nbsp;’45-4',
        'https://www.nytimes.com/2024/01/04/nyregion/june-jackson-christmas-dead.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'The New York Times logo, black text on a gray background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Dr. June Jackson Christmas ’45-4</strong>, a pioneer psychiatrist who headed the NYC Department of Mental Health and Retardation Services, was remembered by the <em>New York Times</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Kleaver Cruz ’11',
        'https://www.essence.com/entertainment/the-black-joy-project-literary-visual-celebration-black-resilience/',
        ['url' => $logos_path.'Essence-logo.png', 'alt' => 'Essence logo, black all capital sans-serif text on a light grey background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><em>The Black Joy Project: A Literary and Visual Love Letter to How We Thrive</em> by <strong>Kleaver Cruz ’11</strong> is “captivating” and “remarkable,” says <em>Essence</em> magazine.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'John E. Carlstrom ’81',
        'https://scienmag.com/john-e-carlstrom-wins-2024-dannie-heineman-prize-for-astrophysics/',
        ['url' => $logos_path.'Scienmag-logo.png', 'alt' => 'Scienmag Science Magazine logo, a red circle with an extension at the bottom next to black text on a gray background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>John E. Carlstrom ’81</strong>, Subramanyan Chandrasekhar Distinguished Service Professor at the University of Chicago Departments of Astronomy and Astrophysics and Physics, was named the winner of the 2024 Dannie Heineman Prize for Astrophysics, as noted by <em>Science Magazine</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://artdaily.com/news/166120/A-Lincoln-trove-lands-at-the-library--pie-safe-included-">The collection of the late <strong>Jonathan Mann ’83</strong>, an Abraham Lincoln aficionado, was the subject of an <em>Art Daily</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.astronomy.com/science/vera-rubin-found-a-lifetime-of-wonder-in-the-dark-skies/">Renowned astronomer <strong>Vera Rubin ’48</strong> was the subject of an <em>Astronomy</em> magazine story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://communityfoundationshv.org/news-publications/cfhv-welcomes-laura-washington-as-president-and-ceo/"><strong>Laura Washington ’88</strong> was named President and CEO of Community Foundations of the Hudson Valley, as noted by the nonprofit</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.energy.gov/articles/us-department-energy-welcomes-new-biden-harris-appointees-and-announces-promotions"><strong>Charisma Troiano ’06</strong> was named Deputy Director and Chief Spokesperson in the U.S. Department of Energy’s Office of Public Affairs, as noted by the department</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://patch.com/connecticut/avon/award-winning-mystery-writer-appear-avon">Author <strong>Mariah Fredericks ’88</strong> will be hosted by the Avon Free Public Library to talk about her latest book, <em>The Wharton Plot</em>, as noted by Patch Connecticut</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.wiareport.com/2023/12/four-women-scholars-who-are-taking-on-new-duties/"><strong>Summer Sherburne Hawkins ’00</strong>, Professor in the Boston College School of Social Work, was appointed the inaugural Associate Director of the Boston College Global Public Health and the Common Good interdisciplinary undergraduate program, as noted by <em>WIA Report</em></a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.kiiitv.com/article/news/local/the-epitome-of-civic-service-corpus-christis-first-female-mayor-to-be-buried-saturday/503-b00daa2c-d54e-428c-a25a-322a9938e8ac"><strong>Betty Turner ’53</strong>, former Mayor of Corpus Christi, was remembered by KIII-TV</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://news.ucsc.edu/2023/12/in-memoriam-peggy-downes-baskin.html"><strong>Peggy Downes Baskin ’52</strong>, an educator, scholar, women’s rights advocate, and philanthropist, was remembered by UC Santa Cruz</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.artic.edu/articles/1097/the-great-and-modest-life-of-mary-reynolds">The remarkable life of <strong>Mary Reynolds</strong>, class of 1913, was the subject of an Art Institute of Chicago story</a>.</p></div>
  

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.nytco.com/press/jordana-hochman-joins-opinion-as-editor-of-matter-of-opinion/"><strong>Jordana Hochman ’01</strong> will be joining the <em>New York Times</em> as the Senior Editor of the <em>Matter of Opinion</em> podcast, as noted by the newspaper</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://www.gloucestertimes.com/news/local_news/author-pens-childrens-book-about-lessons-learned-from-dogtowns-babson-boulders/article_170318ca-9a0a-11ee-8e9e-17dfb24bb8ec.html">Author <strong>Katherine “Gig” Babson Jr. ’69</strong> discussed her new children’s book, <em>Pippi Rocks: More Stories from the Dog Blog</em>, with the <em>Gloucester Daily Times</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.umassmed.edu/news/news-archives/2024/01/prestigious-kirschstein-award-helps-fund-mdphd-students-als-research/"><strong>Abigail Hiller ’17</strong>, an MD/PhD student at UMass Chan Medical School, received a Ruth L. Kirschstein National Serviced Award Individual Predoctoral Fellowship from the National Institute of Neurological Disorders and Stroke</a>, as noted by the medical school.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://www.baltimoresun.com/2024/01/16/courtney-garland-iglehart-educational-administrator-and-opera-aficionado-dies/"><strong>Courtney Garland Iglehart ’52</strong>, an education administrator and opera aficionado, was remembered by the <em>Baltimore Sun</em></a>.</p></div>


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
