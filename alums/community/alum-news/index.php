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
        'Ann Northrop ’70',
        'https://lgbtqcommunitynews.nyc/2025/10/29/breast-cancer-me/',
        ['url' => $logos_path.'LGBTQ-Community-News-Logo.png', 'alt' => 'LGBTQ Community News NYC logo with a rainbow “Community News” banner across a black circle.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
       <p><strong>Ann Northrop ’70</strong> wrote a piece about her experience being diagnosed with breast cancer for <em>LGBTQ Community News NYC</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'James Graham Wilson ’03',
        'https://www.realcleardefense.com/articles/2025/10/30/we_did_everything_right_right_1144186.html',
        ['url' => $logos_path.'rcd-home-logo-final.png', 'alt' => 'RealClear Defense logo with “RealClear” in white on a dark green block and “Defense” in black on white.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
         <p><strong>James Graham Wilson ’03</strong> wrote a review for <em>RealClear Defense</em> about the critically acclaimed Netflix film <em>A House of Dynamite</em>, a thriller about the threat of nuclear war.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Carrie Goldberg ’99',
        'https://www.newsweek.com/ai-is-causing-real-world-trauma-the-courts-have-a-way-to-stop-it-opinion-11182536',
        ['url' => $logos_path.'newsweek-logo.gif', 'alt' => 'Newsweek logo in white text on a red background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
     <p>In a <em>Newsweek</em> opinion piece, victims’ rights attorney <strong>Carrie Goldberg ’99</strong> argues that AI companies “should face the same accountability as any other manufacturer whose product foreseeably causes injury.”</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3">Director and screenwriter <strong>Noah Baumbach ’91</strong> talked to <a href="https://www.nytimes.com/2025/11/19/movies/george-clooney-adam-sandler-noah-baumbach-jay-kelly.html"><em>The New York Times</em></a> about his latest film, <em>Jay Kelly</em>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5">Social worker <strong>Phyllis Klaus ’57, P’82</strong>, a founder of the doula movement, was named to the <a href="https://ppphallofhonororg.wordpress.com/2025-hoh-inductees/">Prenatal Sciences Research Institute</a> 2025 Hall of Honor.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7">Educator and author <strong>Torrey Maldonado ’96</strong>, wrote an article for <a href="https://pearlsandrubys.slj.com/2025/12/08/not-gonna-lie-six-seven-and-slang-low-key-gets-kids-attention/"><em>School Library Journal</em></a> about how slang can help teachers connect with students.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9">Chef and TV personality <strong>Andrew Zimmern ’84</strong> wrote an opinion piece for <a href="https://www.nytimes.com/2025/10/08/opinion/nonstick-pans-cooking-chemicals-teflon.html"><em>The New York Times</em></a> about the harsh chemicals in non-stick pans.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://ew.com/wicked-star-ethan-slater-reveals-worst-audition-where-he-was-20-years-too-young-for-role-11877625"><em>Entertainment Weekly</em></a> was one of several media outlets reporting on actor <strong>Ethan Slater ’14</strong>’s campus visit to accept the AAVC’s Young Alum Achievement Award.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Jack Dolman ’03</strong> was interviewed by <a href="https://www.ludwig-van.com/toronto/2025/12/05/interview-supervising-music-editor-jack-dolman-talks-wicked-good/"><em>Ludwig Van</em></a> about his experience as the supervising editor for the films <em>Wicked</em> and <em>Wicked: For Good</em>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15">A film adaptation of the upcoming novel <em>Under Story</em> by bestselling author <strong>Chloe Benjamin ’10</strong> is in the works by Warner Bros Pictures, according to <a href="https://www.hollywoodreporter.com/movies/movie-news/warner-bros-david-heyman-adapt-chloe-benjamin-novel-1236440226/"><em>The Hollywood Reporter</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17">Composer <strong>Jane O’Leary ’68</strong> was featured in <a href="https://journalofmusic.com/reviews/celebrating-vision-and-achievements-jane-o-leary-0"><em>The Journal of Music</em></a> after she was presented with the National Concert Hall Lifetime Achievement Award for her outstanding contribution to music in Ireland.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19">Creator of Blumhouse Productions <strong>Jason Blum ’91</strong> was interviewed by <a href="https://www.nytimes.com/2025/10/23/books/review/jason-blum-horrors-new-wave.html"><em>The New York Times</em></a> about his favorite books.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21">In <a href="https://www.nytimes.com/2025/10/21/magazine/dark-retreat-meditation-sensory-deprivation-spirituality.html"><em>The New York Times Magazine</em></a>, <strong>Chris Colin ’97</strong> describes his experience spending three days in total darkness.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><strong>A. Snowden McFall ’75</strong> was the subject of a <a href="https://www.jaxdailyrecord.com/news/2025/oct/09/a-snowden-mcfall/"><em>Jacksonville Daily Record</em></a> article about her mission to inspire women in the workplace.</p></div>


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
