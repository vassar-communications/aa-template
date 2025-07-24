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
        'Leah Goodridge ’04',
        'https://www.theguardian.com/commentisfree/2025/jul/14/new-york-rent-freeze-zohran-mamdani?CMP=share_btn_url',
        ['url' => $logos_path.'the-guardian-logo.png', 'alt' => 'The Guardian logo, in a white serif font on a blue background.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
       <p>Attorney <strong>Leah Goodridge ’04</strong> wrote an opinion piece for <em>The Guardian</em> about New York City mayoral candidate Zohran Mamdani’s proposal for a citywide rent freeze.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Katherine Center ’94',
        'https://texashighways.com/culture/people/author-katherine-center-on-the-importance-of-love-stories/',
        ['url' => $logos_path.'Texas-Highways-logo.png', 'alt' => 'Texas Highways logo, in a black serif font on a white background' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
         <p><strong>Katherine Center ’94</strong> spoke to <em>Texas Highways</em> about growing up in Houston and her prolific career as a writer.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Nova Gregory ’21',
        'https://www.outsports.com/2025/6/3/24112159/nova-gregory-transgender-fencing-master-pride/',
        ['url' => $logos_path.'Outsports-logo.png', 'alt' => 'Outsports logo, a white sans serif font on a blue background, with a right upward angled arrow in place of the first T in the word Outsports.' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
     <p><strong>Nova Gregory ’21</strong> wrote a piece for <em>Outsports</em> about their experience being the first out transgender fencing master.</p>
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

<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3">Podcaster <strong>Eric Marcus ’80</strong> spoke to <a href="https://www.npr.org/2024/06/30/1198912755/the-evolution-of-pride">NPR’s</a> Scott Detrow about how Pride has evolved into what it is today.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://womenshistory.si.edu/blog/new-quarter-honors-vera-rubin-astronomer-who-revealed-universes-hidden-mass"><em>Smithsonian</em></a> reported on a new quarter that honors astronomer <strong>Vera Rubin ’48</strong>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><strong>Lisa Kudrow ’85</strong>, star of HBO’s <em>The Comeback</em>, was featured in <a href="https://www.nytimes.com/2025/06/27/business/media/the-comeback-lisa-kudrow-hbo.html"><em>The New York Times</em></a> after it was announced that the show will be returning for a third season in 2026.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><strong>E.A. Hanks ’05</strong> was profiled in <a href="https://www.vanityfair.com/style/story/ea-hanks-memoir-interview"><em>Vanity Fair</em></a> upon the release of her new book, <em>The 10: A Memoir of Family and the Open Road</em>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><strong>Joshua Simmons ’01</strong> wrote a letter to the editor of <a href="https://www.washingtonpost.com/opinions/2025/06/10/harvey-milk-queer-jewish-spaces/"><em>The Washington Post</em></a>, reflecting on his experience being both LGBTQ+ and Jewish during Pride Month.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13">Blumhouse CEO and founder <strong>Jason Blum ’91</strong> spoke to <a href="https://www.inc.com/will-tavlin/horror-king-jason-blum-has-a-bootstrap-formula-for-paranormal-success/91187646"><em>Inc.</em></a> about his successful career as a horror movie producer.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><strong>Chris Bull ’86</strong> interviewed former Vassar English Professor Thomas Mallon for <a href="https://www.queerty.com/how-the-author-of-fellow-travelers-ditched-the-gop-to-become-a-never-trumper-change-the-world-for-the-better-20250629/"><em>Queerty</em></a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://canvasrebel.com/meet-eddie-gamarra/"><em>CanvasRebel</em></a> interviewed <strong>Eddie Gamarra ’94</strong> about his career in the entertainment industry.</p></div>


  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><strong>Benjamin Prosky ’90</strong> discussed his career, Vassar, and the influence of architect <strong>Phyllis Lambert ’48</strong>, on the <a href="https://www.preservecast.org/2025/06/30/a-foundation-for-the-future-with-benjamin-prosky-from-the-richard-hampton-jenrette-foundation/"><em>PreserveCast</em> podcast</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.scmp.com/magazines/style/entertainment/article/3312096/who-zoe-jackson-daughter-samuel-l-jackson-shes-emmy-winning-producer-credits-including-project"><em>South China Morning Post</em></a> published a profile of Emmy-winning producer <strong>Zoe Jackson ’04</strong>, daughter of actor Samuel L. Jackson.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><strong>Leonard Steinhorn ’77</strong> was quoted in a <a href="https://www.washingtonpost.com/politics/2025/05/10/biden-interviews-view-trump-harris/"><em>Washington Post</em></a> article about Former President Biden’s critiques of the current presidential administration.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><strong>Mary McCarthy ’33</strong> was the subject of a <a href="https://www.prospectmagazine.co.uk/culture/69847/mary-mccarthy-the-self-critical-chronicler-fitzcarraldo-memories-of-a-catholic-girlhood"><em>Prospect magazine</em></a> feature.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><strong>Rhona Hoffman ’56</strong> was interviewed by <a href="https://www.chicagogallerynews.com/articles/connecting-change-through-the-decades-rhona-hoffman"><em>Chicago Gallery News</em></a> about her prolific career as both a visual artist and gallerist.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><strong>Kelly Shannon ’03</strong> cowrote a guest essay for <a href="https://www.nytimes.com/2025/04/12/opinion/iran-human-rights-middle-east-trump.html"><em>The New York Times</em></a> urging President Trump to take an interest in human rights for the people of Iran.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31">Eleanor Lanahan published a <a href="https://lithub.com/on-my-grandfathers-novel-f-scott-fitzgeralds-the-great-gatsby-at-100/"><em>Literary Hub</em></a> piece about her mother, <strong>Frances Scott “Scottie” Fitzgerald ’42</strong>, who was the only child of F. Scott Fitzgerald and his wife, Zelda.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="32" data-line-end="33"><a href="https://www.arch.virginia.edu/news/newly-named-lobby-campbell-hall-honors-kenan-professor-karen-van-lengen">The University of Virginia School of Architecture</a> named a lobby for <strong>Karen Van Lengen ’73</strong>, former dean of the school, on the occasion of her retirement from the faculty.</p></div>


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
