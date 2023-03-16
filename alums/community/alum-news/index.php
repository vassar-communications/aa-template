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
        'Emma Kantor ’12',
        'https://www.nytimes.com/2023/02/21/magazine/closing-credits-movies.html',
        ['url' => $logos_path.'nyt-mag.gif', 'alt' => 'New York Times Magazine logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p><strong>Emma Kantor ’12</strong> wrote a <em>New York Times Magazine</em> article about the importance of watching the end credits of films.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Carrie Goldberg ’99',
        'https://www.cnbc.com/2023/01/25/snapchats-role-in-fentanyl-crisis-probed-during-house-roundtable.html',
        ['url' => $logos_path.'cnbc.gif', 'alt' => 'CNBC logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>Lawyer <strong>Carrie Goldberg ’99</strong> talked with CNBC about the role of big tech, including Snapchat, in fentanyl sales.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Mira Lehr ’56',
        'https://www.nytimes.com/2023/02/02/arts/mira-lehr-dead.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p>Artist <strong>Mira Lehr ’56<strong> was remembered by the <em>New York Times</em>.</p>
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

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="0" data-line-end="1"><a href="https://www.youtube.com/watch?v=DA8F7j0_7S4&amp;feature=youtu.be"><strong>Sherrilyn Ifill ’84</strong> spoke to the <em>Daily Show</em></a> about her tenure as President and Director-Counsel of the NAACP Legal Defense Fund.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><a href="https://www.msnbc.com/morning-joe/watch/virginia-house-compromises-and-passes-gun-related-bill-163501125588"><strong>Alfonso Lopez ’92</strong>, 49th District House of Delegates member in the Virginia General Assembly, talked on MSNBC’s <em>Morning Joe</em></a> about bipartisan gun safety legislation he sponsored.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5"><a href="https://www.emmys.com/news/foundation-news/foundation-board-2301"><strong>Paula Williams Madison ’74</strong>, Chairman and CEO of Madison Media Management, was named to the Television Academy Foundation Board of Directors</a>.</p></div>




<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><a href="https://www.screendaily.com/features/i-was-all-in-netflix-germany-exec-talks-all-quiet-on-the-western-front/5179381.article"><strong>Sasha Bühler ’89</strong>, Director of International Original Film at Netflix, was quoted in a <em>Screen Daily</em> story</a> about the Oscar-nominated film <em>All Quiet on the Western Front</em>, which she greenlit.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="8" data-line-end="9"><a href="https://www.vogue.com/article/the-value-of-expanded-authorship-in-caleb-stein-and-andrea-orejarenas-new-book">The new book <em>Long Time No See</em>, co-created by artists <strong>Caleb Stein ’17</strong> and <strong>Andrea Orejarena ’17</strong>, was the subject of a <em>Vogue</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="10" data-line-end="11"><a href="https://www.thedailybeast.com/pences-classified-docs-are-a-new-headache-for-ag-merrick-garland">Lawyer <strong>Shanlon “Shan” Wu ’80</strong> wrote a <em>Daily Beast</em> article</a> about Attorney General Merrick Garland and the classified documents found in former Vice President Mike Pence’s home.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><a href="https://www.cnn.com/2023/01/15/us/mlk-i-have-a-dream-speech-blake-cec/index.html"><strong>Leonard Steinhorn ’77</strong>, Professor of Communication and Affiliate Professor of History at American University and CBS News Political Analyst, was quoted in a CNN article</a> about the Rev. Martin Luther King Jr.’s “I Have a Dream” speech.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15"><a href="https://www.earlymusicamerica.org/web-articles/reflections-on-walking-black-in-the-field-of-historical-performance"><strong>Patricia Ann Neely ’75</strong>, Managing Director and viola player with Abendmusik, and a member of <em>Early Music America’s</em> Board of Directors, wrote an <em>Early Music America</em> article</a>, “Reflections on Walking Black in the Field of Historical Performance.”</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17"><a href="https://historyofyesterday.com/vera-rubin-proving-the-existence-of-dark-matter/">Renowned astronomer <strong>Vera Rubin ’48</strong> and her work on dark matter was the subject of a <em>History of Yesterday</em> article</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19"><a href="https://www.aspentimes.com/news/explores-director-of-programming-jeff-bernstein-by-the-book/"><strong>Jeff Bernstein ’77</strong>, Explore Booksellers’ Director of Programming, was the subject of an <em>Aspen Times</em> story</a>.</p></div>


<div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><a href="https://www.sfgate.com/news/article/norwalk-hill-sisters-suffragettes-plaque-17751719.php">Three women’s suffrage pioneers and sisters, <strong>Clara Hill</strong>, class of 1895, <strong>Helena Hill</strong>, class of 1902, and <strong>Elsie Hill</strong>, class of 1906, were honored with a plaque</a> along the Norwalk River Valley Trail, as noted by <em>San Francisco Gate</em>.</p></div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><a href="https://wwd.com/eye/people/patrick-and-victor-demarcheliers-photography-is-in-focus-in-new-show-1235523762/">The work of photographer <strong>Victor Demarchelier ’06</strong>, on display at the Staley-Wise Gallery in New York, was the subject of a <em>Women’s Wear Daily</em> story.</a></p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="24" data-line-end="25"><a href="https://www.bard.edu/news/theresa-law-joins-bard-college-faculty-as-assistant-professor-of-computer-science-in-the-division-of-science-mathematics-and-computing-2023-02-06"><strong>Theresa Law ’18</strong> joined Bard College as Assistant Professor of Computer Science</a>, as noted by the college.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27">Student Conservation Association founder <a href="https://www.benningtonbanner.com/vermont-outside-in-by-gordon-dossett-liz-putnam-and-100-000-volunteers/article_5b6f7726-a184-11ed-be21-47f3da33157f.html"><strong>Elizabeth Cushman Titus Putnam ’55</strong> was the subject of a <em>Bennington Banner</em> article</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><em>A Cheerleader’s Guide to Spiritual Enlightenment: A Memoir in Essays</em> by <strong>MB Caschetta ’88</strong> was reviewed in <a href="https://www.kirkusreviews.com/book-reviews/mb-caschetta/cheerleaders-guide-spiritual-enlightenment/"><em>Kirkus</em></a> and <a href="https://hippocampusmagazine.com/2022/11/review-a-cheerleaders-guide-to-spiritual-enlightenment-a-memoir-in-essays-by-mb-caschetta/"><em>Hippocampus Magazine</em></a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31">Producer, director, and Emmy Award-winner <a href="https://news.amomama.com/300151-zoe-jackson-has-emmy-win-her-name-is-now.html"><strong>Zoe Jackson ’04</strong> was the subject of an <em>Amo Mama</em> article</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="32" data-line-end="33"><a href="https://jadedibispress.com/product/11808/">A novel by author <strong>Natasha Gordon-Chipembere ’92</strong>, <em>Finding La Negrita</em>, was praised by several authors and professors</a>, as noted by Jaded Ibis Press.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="34" data-line-end="35">A discussion on the inner workings of the brain by Cornell University Dean of Faculty and Human Ecology Professor <a href="https://www.royalgazette.com/health/news/article/20230130/bermudian-scientist-to-give-talk-on-workings-of-the-brain/"><strong>Eve De Rosa ’91</strong> was the subject of a <em>Royal Gazette</em> story</a>.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="36" data-line-end="37"><a href="https://www.silive.com/entertainment/2023/01/jcc-association-of-north-america-recognizes-jcc-of-staten-islands-chief-of-communications-inside-out.html"><strong>Allison Cohen ’11</strong>, Chief of Communications and External Affairs at the Joan and Alan Bernikow Jewish Community Center, received the Martin Pear Israel Fellowship</a> by the JCC Association of North America, as noted in a <a href="http://SILive.com">SILive.com</a> story.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="38" data-line-end="39"><a href="https://www.aaas.org/news/four-chemists-receive-2023-marion-milligan-mason-award"><strong>Marion Milligan Tuttle Mason</strong>, class of 1949, was mentioned in an article about the recent recipients of the Mason Award for women in chemical sciences</a>, which Mason created with a gift to the American Association for the Advance of Science.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="40" data-line-end="41"><a href="https://www.uvm.edu/news/extension/dr-ike-leslie-joins-uvm-extension"><strong>Isaac “Ike” Leslie ’10</strong> joined the University of Vermont as a Community Development Specialist</a>, as noted by UVM.</p></div>


  <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="42" data-line-end="43"><a href="https://nuggetnews.com/Content/Health/HEALTH/Article/Build-a-memory-palace-with-a-healthy-brain/117/221/32940"><strong>Scott Crabtree ’88</strong> discussed memory at his most recent Science of Happiness workshop</a>, as noted by the <em>Nugget Newspaper</em>.</p></div>


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
