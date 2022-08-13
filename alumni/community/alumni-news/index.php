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


<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'alttext']); ?>


<?php echo interior_page_nav(); ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
  'Interview with Jason Blum ’91',
  $alumni_news_images_path.'/2022-08-13/211123-media-blum.jpeg',
  'theme-extralightgray',
  '',
  ['img_alt_text' => 'A headshot of Jason Blum ’91, a white, middle-aged man with short brown hair.']
); ?>

<p>Jason Blum ’91, CEO and Founder of Blumhouse Productions, talked with <em><a href="https://deadline.com/2022/08/jason-blum-exorcist-remake-locarno-1235086504/">Deadline</a></em> about his upcoming projects.</p>

<?php echo cta_link(
  'https://deadline.com/2022/08/jason-blum-exorcist-remake-locarno-1235086504/',
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
        'Leonard Steinhorn ’77',
        'https://www.washingtonpost.com/made-by-history/2022/07/26/fundamental-flaw-make-america-great-again/',
        ['url' => $logos_path.'washington-post.jpg', 'alt' => 'Washington Post logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Leonard Steinhorn ’77,</strong> Professor of Communication and Affiliate Professor of History at American University and a CBS News political analyst, wrote a <em>Washington Post</em> op-ed, “The fundamental flaw in ‘Make America Great Again.’”</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Urvashi Vaid ’79',
        'https://www.thelancet.com/journals/lancet/article/PIIS0140-6736(22)01393-9/fulltext',
        ['url' => $logos_path.'the-lancet.gif', 'alt' => 'The Lancet logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p>LGBTQ and health activist <strong>Urvashi Vaid ’79</strong> was remembered by <em>The Lancet</em>.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Joseph Nevins',
        'https://theconversation.com/crossing-the-us-mexico-border-is-deadlier-than-ever-for-migrants-heres-why-186632',
        ['url' => $logos_path.'the-conversation.gif', 'alt' => 'The Conversation logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Joseph Nevins</strong>, Professor of Geography, wrote a <em>Conversation</em> article—which was reprinted by several media outlets, including Yahoo! News— about why crossing the U.S.-Mexico border is deadlier than ever for migrants.</p>
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
    <p><b>Vassar College</b> was mentioned in <a href="https://www.poughkeepsiejournal.com/story/entertainment/2022/08/05/mary-marvel-at-vassar-how-a-superhero-came-to-poughkeepsie-school/65392908007/"><i>Poughkeepsie Journal</i></a> and <a href="https://bleedingcool.com/comics/mary-marvel-attends-vassar-college-in-new-champion-of-shazam-preview/">Bleeding Cool</a> stories about the comic book character Mary Marvel attending the College.</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p><b>Joseph Nevins</b>, Professor of Geography, wrote a <a href="https://theconversation.com/crossing-the-us-mexico-border-is-deadlier-than-ever-for-migrants-heres-why-186632">Conversation</a> article—which was reprinted by several media outlets, including <a href="https://news.yahoo.com/crossing-us-mexico-border-deadlier-122318725.html">Yahoo! News</a>— about why crossing the U.S.-Mexico border is deadlier than ever for migrants.</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p>Artist <b>Phoebe Legere ’81</b>, Founder and President of the Foundation for New American Art, talked with the <a href="https://thevillagesun.com/phoebe-legere-colors-kids-lives-with-art-and-music-through-her-foundation"><i>Village Sun</i></a> about the foundation’s Festival of Possibilities.&nbsp;</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p><b>Gerald Simons ’25</b> wrote an <a href="https://entomologytoday.org/2022/08/04/hyflex-insects-student-learning-community-engagement/"><i>Entomology Today</i></a> article about HyFlex learning during COVID.&nbsp;</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p><a href="https://www.broadwayworld.com/central-new-york/article/Photos-First-Look-at-Andre-Braugher-and-Michele-Pawk-in-TELL-THEM-IM-STILL-YOUNG-20220728">Broadwayworld.com</a> wrote about <i>Tell Them I’m Still Young</i>, a play featuring Andre Braugher and Michele Pawk performed at Vassar’s <b>Powerhouse Theater</b>.</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p>In honor of her birthday, astronomer <b>Maria Mitchell</b>, Vassar’s first professor, was the subject of an <a href="https://www.itechpost.com/articles/112613/20220801/maria-mitchell-birth-anniversary-what-know-who-discovered-miss-s.htm">iTechPost</a> story.</p>
  </div>

  <div class="other-news-item plain-card-1">
    <p><b>Aaron Bendich ’16</b> discussed his collection of more than 1,000 Jewish records, his radio show, and his album label, <i>Borscht Beat</i>, with <a href="https://hyperallergic.com/751093/dancing-to-the-borscht-beat/"><i>Hyperallergic</i></a>.</p>
  </div>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <div class="other-news-item plain-card-1">
        <p><b>Lillian Meredith ’07</b> will be directing a full staged production of <i>The Winter’s Tale</i> for the West Kortright Centre’s Young People’s Theater Arts Workshop, as noted by <a href="https://www.hudsonvalley360.com/artsandlife/thescene/shakespeare-in-the-valley-7-29-7-30/article_9aac4dfb-1d18-5b21-a8aa-32478e3957a5.html">Hudson Valley 360</a>.</p>
      </div>

      <div class="other-news-item plain-card-1">
        <p><b>Colette Fletcher-Hoppe ’15</b>, who is earning her PhD in marine and environmental biology at USC, is a NOAA Sea Grant 2023 Knauss finalist, as announced by <a href="https://dornsife.usc.edu/uscseagrant/2023-usc-sea-grant-knauss-fellowship-finalists/">USC Dornsife</a>.</p>
      </div>

      <div class="other-news-item plain-card-1">
        <p><b>Edith Clarke</b>, class of 1908 and the first woman to be professionally employed as an electrical engineer in the United States, was the subject of an <a href="https://www.msn.com/en-us/news/us/educators-in-idaho-us-have-responsibility-to-counter-gender-discrimination-in-stem/ar-AA109cDG">MSN</a> story.</p>
      </div>

      <div class="other-news-item plain-card-1">
        <p><b>Hilary L. Hageman ’90</b> was appointed Executive Vice President, General Counsel, and Corporate Secretary of Science Applications International Corp., as noted by <a href="https://www.marketscreener.com/quote/stock/SCIENCE-APPLICATIONS-INTE-14285747/news/Science-Applications-International-Corporation-Announces-Management-Changes-41140921/"><i>MarketScreener</i></a>.</p>
      </div>

      <div class="other-news-item plain-card-1">
        <p>Playwright<b> juliany taveras ’16</b> was commissioned by the Atlantic Theater Company to create a one-act play as part of the company’s First Gen MixFest, as noted by <a href="https://www.broadwayworld.com/off-broadway/article/Atlantic-Theater-Company-to-Present-FIRST-GEN-MIXFEST-Featuring-Work-by-Ngozi-Anyanwu-Roger-Q-Mason-More-20220728">Broadwayworld.com</a>.</p>
      </div>

      <div class="other-news-item plain-card-1">
        <p><b>Yaniv Segal ’03</b> spoke to the <a href="https://www.salina.com/story/entertainment/2022/07/24/salina-symphony-2022-23-season-features-nutcracker-beethoven-carmen/10115086002/"><i>Salina Journal</i></a> about plans for his inaugural season as Music Director and Conductor of the Salina Symphony.</p>
      </div>
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
