<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');

$alumni_news_images_path = '/alumni/assets/img/alumni-community/alumni-news';
$logos_path = $alumni_news_images_path.'/logos/';


/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumni News & Stories",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-community/aavc/awards/lead-06282020_QueerLiberationMarch_by_LeandroJusten_019.jpg"
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


<?php echo sec_fullBleedImageColumn(
  'David Ambroz ’02',
  $alumni_news_images_path.'/2022-10-12/in-the-media/david_ambroz.jpg',
  'theme-extralightgray',
  '',
  ['img_alt_text' => 'A headshot of David Ambroz']
); ?>

<p><a href="https://www.npr.org/2022/09/13/1122621426/a-place-called-home-is-a-vivid-story-of-author-david-ambrozs-childhood">David Ambroz ’02 spoke to NPR</a> about surviving on the streets of New York City as a homeless child and about his new memoir, <em>A Place Called Home</em>.</p>
<?php echo cta_link(
  'https://www.npr.org/2022/09/13/1122621426/a-place-called-home-is-a-vivid-story-of-author-david-ambrozs-childhood',
  'Read more'
); ?>



<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
  null,
  '3',
  null,
  'theme-charcoal has-bg quad-pattern items-equal-height'
); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Carrie Goldberg ’99',
        'https://www.npr.org/2022/10/09/1127686507/amazon-suicide-teenagers-poison',
        ['url' => $logos_path.'npr.gif', 'alt' => 'NPR logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p>Attorney <strong>Carrie Goldberg ’99</strong> was quoted in an NPR story about a lawsuit against Amazon for allegedly selling suicide kits to teenagers.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Mariya Abdulkaf ’15',
        'https://www.nytco.com/press/mariya-abdulkaf-joins-the-video-department/',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'The New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Mariya Abdulkaf ’15</strong> was named Supervising Audience Editor of the <em>New York Times</em> Video Department, as noted by the <em>NYT</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Whitney W. Donhauser ’89',
        'https://thecitylife.org/2022/10/05/the-metropolitan-museum-of-art-appoints-whitney-w-donhauser-as-deputy-director-and-chief-advancement-officer/',
        ['url' => $logos_path.'the-met.gif', 'alt' => 'The Met logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Whitney W. Donhauser ’89</strong>, former Director and President of the Museum of the City of New York, was named Deputy Director and Chief Advancement Officer at the Metropolitan Museum of Art, as noted by TheCityLife.org.</p>
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

    <div class="other-news-item plain-card-1">
        <p><a href="https://www.yahoo.com/entertainment/noah-baumbach-ambitious-white-noise-130007170.html">Filmmaker <strong>Noah Baumbach ’91</strong> talked about his latest film</a>, an adaptation of Don DeLillo’s <em>White Noise</em>, as noted in Yahoo! Entertainment.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><a href="https://loyolamaroon.com/10035929/briefs/loyola-grapples-with-unexpected-passing-of-college-of-business-professor/">The  <em>Maroon</em> remembered accomplished professor <strong>Iris Mack ’78</strong></a>, who was the first Black woman to teach applied mathematics at the MIT Sloan School of Management.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p>Author and leader of the School Garden Support Organization <a href="https://www.dispatch.com/story/lifestyle/home-garden/2022/10/08/school-garden-conference-to-take-place-oct-28-on-osu-campus/69539851007/"><strong>Whitney Cohen ’99</strong> of Life Lab will be the keynote speaker</a> at a conference on school and youth gardening, as noted in a <em>Columbus Dispatch</em> article.</p>
    </div>


<?php /*
    <div class="other-news-item plain-card-1">
        <p><strong>Mariya Abdulkaf ’15</strong> was named Supervising Audience Editor of the <em>New York Times</em> Video Department, as noted by the <a href="https://www.nytco.com/press/mariya-abdulkaf-joins-the-video-department/">NYT</a>.</p>
    </div>
*/ ?>

  <!-- <div class="other-news-item plain-card-1">
    <p><strong>Shoshanah Bewlay ’92</strong>, the Executive Director of the New York State Committee on Open Government, talked about her work and the work of her organization on PBS’s <em><a href="https://www.pbs.org/video/shoshanah-bewlay-extended-interview-adjh5c/">Connect NY</a></em>.</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p><strong>Karen Petersen ’76</strong> was the featured American poet in the current issue of <em><a href="https://thehighwindowpress.com/category/the-voice-of-america/">The High Window</a></em>.</p>
  </div>

    <div class="other-news-item plain-card-1">
      <p>Computer pioneer Rear Admiral <strong>Grace Hopper</strong>, class of 1928, was the subject of an <em><a href="https://www.theengineer.co.uk/content/in-depth/late-great-engineers-grace-hopper-english-speaking">Engineer</a></em> story.</p>
    </div> -->

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <div class="other-news-item plain-card-1">
        <p><a href="https://www.getty.edu/publications/cultural-heritage-mass-atrocities/part-2/12-deknatel/"><strong>Frederick Deknatel ’08</strong>, Executive Editor of<em> Democracy in Exile</em>, wrote a chapter on reconstruction in Syria</a> in the recently published <em>Cultural Heritage and Mass Atrocities</em>, as noted by Getty.</p>
    </div>

<?php /*
    <div class="other-news-item plain-card-1">
        <p><strong>Whitney W. Donhauser ’89</strong>, former Director and President of the Museum of the City of New York, was named Deputy Director and Chief Advancement Officer at the Metropolitan Museum of Art, as noted by <a href="https://thecitylife.org/2022/10/05/the-metropolitan-museum-of-art-appoints-whitney-w-donhauser-as-deputy-director-and-chief-advancement-officer/">TheCityLife.org</a>.</p>
    </div>
*/ ?>

    <div class="other-news-item plain-card-1">
        <p><a href="https://www.argonautnews.com/arts_and_events/take-me-to-the-river/article_29cd5c3c-3f6f-11ed-93b0-83989b23b8d1.html">The work of photographer <strong>Caleb Stein ’17</strong></a> was the subject of an <em>Argonaut</em> story.</p>
    </div>

    <!-- <div class="other-news-item plain-card-1">
      <p><strong>Maurice F. Edelson ’85</strong> was named Executive Vice President and Chief Legal Officer of WWE, as noted by <a href="https://www.marketscreener.com/quote/stock/WORLD-WRESTLING-ENTERTAIN-14926/news/WWE-R-Names-Dan-Ventrelle-EVP-Talent-Maurice-F-Edelson-EVP-Chief-Legal-Officer-41731467/">MarketScreener</a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
      <p><strong>Russ Cohen ’78</strong> and his knowledge of wild edible plants was the subject of a <em><a href="https://www.wanderer.com/features/learning-how-to-forage/">Wanderer</a></em> story.</p>
    </div>

    <div class="other-news-item plain-card-1">
      <p><strong>B. David Naidu ’90</strong> was honored with the Summit Municipal Democratic Committee’s Spirit of Summit Award, as noted by <a href="https://www.tapinto.net/towns/summit/categories/press-releases/articles/smdc-s-spirit-of-summit-award-dinner-set-for-sept-18">Tap into Summit</a>.</p>
    </div> -->

  <?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-aavc-awards.php');?>

<?php
include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-groups.php');
// include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-notable-alumni.php');?>

<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>
