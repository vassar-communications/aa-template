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
        'Mike Schmidt ’03',
        'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zaW1wbGVjYXN0LmNvbS81NG5BR2NJbA/episode/YmU2Yjg0ZWEtMzZmNi00ZjRlLWFiNjEtNGI3NDc2OThhMjA2?ep=14',
        ['url' => $logos_path.'the-daily-album-logo.png', 'alt' => 'The Daily logo, white text with a stylized T in the lower left corner, on a blue to yellow gradient background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>District Attorney <strong>Mike Schmidt ’03</strong> discussed amending Portland’s failed drug decriminalization policy on <em>The New York Times</em> podcast <em>The Daily</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Caterina Fake ’91',
        'https://www.altaonline.com/california-book-club/a46694063/dave-eggers-every-special-guest-caterina-fake/',
        ['url' => $logos_path.'Alta-logo.png', 'alt' => 'Alta logo, black serif text on a light grey background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Flickr co-founder <strong>Caterina Fake ’91</strong> was a special guest on the February California Book Club, as noted by <em>Alta</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Becky Stone ’70',
        'https://theurbannews.com/arts-entertainment/2024/becky-stone-to-portray-reverend-dr-pauli-murray/',
        ['url' => $logos_path.'Urban-News-logo.png', 'alt' => 'the Urban News logo, lowercase word the in a white script font slightly overlapping all uppercase words Urban News in a white block font outlined in red.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Actor and storyteller <strong>Becky Stone ’70</strong> will play the remarkable Dr. Pauli Murray, lawyer, founder of the National Organization for Women, and labor, civil rights, and women’s rights advocate, as announced by <em>Urban News</em>.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.scientificamerican.com/article/against-medical-advice-another-deadly-consequence-of-our-opioid-epidemic/"><strong>Dr. Zoe Adams ’15</strong>, a resident physician at Massachusetts General Hospital and Public Voices Fellow of The OpEd Project, wrote a <em>Scientific American</em> article</a> about the stigma against hospital patients with addiction.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.latimes.com/opinion/story/2024-02-16/youth-mental-health-crisis-gen-z-discrimination-stereotype-depression"><strong>Ellen Galinsky ’64</strong>, author, President and Founder of the Families and Work Institute, and Co-Director of the Civic Service Center at the University of Minnesota, wrote a <em>Los Angeles Times</em> op-ed about mental health and Gen Z</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://globalnews.ca/news/10311172/survivor-season-46-jess-chong-toronto/"><strong>Jess Chong ’08</strong> gave <em>Global News</em> an insider’s view of <em>Survivor</em></a> after competing on the show’s 46th season.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.theguardian.com/games/2024/feb/13/she-was-a-beautiful-nerd-a-tribute-to-game-designer-laralyn-mcwilliams"><strong>Laralyn McWilliams ’87</strong>, Creative Director of Free Realms and Game Developers Choice Lifetime Achievement Award recipient, was remembered by <em>The Guardian</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.newyorklife.com/newsroom/first-female-director">Author <strong>Mildred McAfee Horton</strong>, class of 1920, was the first female director of the New York Life Insurance Company, as noted by the company</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.mmm-online.com/home/channel/medical-advertising-hall-of-fame-chapman-michaelson/"><strong>David Chapman ’75, P ’15, ’20</strong> was inducted into the Medical Advertising Hall of Fame, as noted by Medical Marketing and Media</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.cbsnews.com/gooddaysacramento/video/rescue-me-at-the-b-street-theater/#x"><em>Rescue Me</em>, the B Street Theater comedy featuring actor <strong>Caroline Kinsolving ’03</strong>, was mentioned by Fox 40 and CBS News in Sacramento</a>.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://www.wnycstudios.org/podcasts/blindspot/articles/respectability-politics-and-the-aids-crisis?tab=transcript">The late <strong>Craig G. Harris ’80</strong>, a writer and poet, was mentioned in the podcast <em>Blindspot: The Plague in the Shadows</em> in the “Respectability Politics and the AIDS Crisis” episode</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.kzoo.edu/news/five-faculty-earn-tenure/"><strong>Alyssa Maldonado-Estrada ’13</strong> earned tenure and was named the Marlene Crandall Francis Assistant Professor of Religion at Kalamazoo College, as announced by the college</a>.</p></div>
  

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.mlive.com/news/ann-arbor/2024/03/jessie-coller-made-ann-arbor-history-in-1940-as-first-woman-elected-to-county-board.html">Author <strong>Jessie Coller</strong>, class of 1913, who made Ann Arbor, Michigan history in 1940 as the first woman elected to a county board, was the subject of a Michigan Live story</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://variety.com/2024/film/news/film-news-in-brief-march-4-2024-1235929375/"><strong>Emilie McDonald ’91</strong> won the High Scribe Screenwriting Award at the Sun Valley Film Festival, as noted by <em>Variety</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.rrstar.com/story/news/local/2024/03/10/womens-history-month-who-was-jessie-spafford/72811840007/"><strong>Jessie Spafford</strong>, class of 1884, a faculty member of Rockford College, was the subject of a <em>Rockford Register Star</em> article</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><a href="https://list23.com/3717970-let-them-eat-candles-shark-tank-update-is-the-premiere-episode-of-melted-candles-with-no-adequate-st/"><strong>Loree Sandler ’86</strong>, the creator of Let Them Eat Candles, was the subject of a list23.com story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><a href="https://www.hercampus.com/school/cal-poly/computer-science-was-started-by-a-woman/">Computer pioneer Rear Admiral <strong>Grace Hopper</strong>, class of 1928, was the subject of a <em>Her Campus</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31"><a href="https://www.boston25news.com/news/local/mass-students-unsure-about-college-due-fear-financial-burden-family-earn-full-scholarships/AQ52NDN5BZAKXN7QHOZXUYJCA4/"><strong>Miguel Gomez ’28</strong> was quoted in a Boston 25 News story</a> about how his full ride to Vassar is allowing him to attend a top college without worry about the financial burden.</p></div>


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
