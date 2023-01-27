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

<?php echo sec_fullBleedImageColumn(
  'Carrie Goldberg ’99',
  $alums_news_images_path.'/2023-01-27/carrie_goldberg_SS2_22.jpg',
  'theme-extralightgray',
  '',
  ['img_alt_text' => 'A person with long, brown hair, red lipstick, and a dark suit smiles at the camera']
); ?>

<p>Lawyer <strong>Carrie Goldberg ’99</strong> was interviewed by <a href="https://slate.com/news-and-politics/2023/01/adult-survivors-act-new-york-sexual-assault-carrie-goldberg.html"><em>Slate</em></a> about a new law in New York that will help victims of sexual assault by allowing them to seek compensation in civil court many years later.</p><p><em>Photo: Samuel Stuart</em></p>
<?php echo cta_link(
  'https://slate.com/news-and-politics/2023/01/adult-survivors-act-new-york-sexual-assault-carrie-goldberg.html',
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
        'Leah Goodridge ’04',
        'https://www.forbes.com/sites/janicegassam/2022/12/31/legal-scholar-leah-goodridge-unpacks-how-professionalism-is-used-as-a-tool-for-racism/',
        ['url' => $logos_path.'forbes.gif', 'alt' => 'Forbes logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p>Tenants’ rights attorney and New York City Planning Commission member <strong>Leah Goodridge ’04</strong> talked about the use of “professionalism” as a tool for racism in a <em>Forbes</em> article.</p>
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Sherrilyn Ifill ’84',
        'https://www.nybooks.com/online/2023/01/07/a-trusted-guide-sherrilyn-ifill/',
        ['url' => $logos_path.'new-york-review-of-books.gif', 'alt' => 'New York Review of Books logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Sherrilyn Ifill ’84</strong>, Ford Foundation Senior Fellow and former President and Director-Counsel of the NAACP Legal Defense Fund, talked with the <em>New York Review of Books</em> about affirmative action cases before the Supreme Court and the article she wrote for the Review, “When Diversity Matters.”</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Meena Miriam Yust ’06',
        'https://www.commondreams.org/opinion/seals-navigate-with-stars',
        ['url' => $logos_path.'common-dreams.gif', 'alt' => 'Common Dreams logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><strong>Meena Miriam Yust ’06</strong>, a lawyer, wrote a <em>Common Dreams</em> article, “Seals, Satellites, and Dung Beetles—What Links Them?” which looks at the potential damage of low Earth orbit satellites.</p>
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
        <p><a href="https://www.wusa9.com/article/news/politics/maryland-wes-moore-cabinet-appointments/65-2511f3ae-89a6-4d34-9def-8cbd78edd0b1"><strong>Rafael López ’93</strong> was named Maryland Secretary of Human Services</a>, as noted by WUSA9.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><a href="https://thejewishnews.com/2023/01/09/noted-conductor-to-perform-in-metro-detroit/">Conductor and Chicago Opera Theater Music Director <strong>Lidiya Yankovskaya ’08</strong> was interviewed by the <em>Detroit Jewish News</em>.</a></p>
    </div>

<!--
    <div class="other-news-item plain-card-1">
        <p><strong>Michele Tugade ’95,</strong> Professor of Psychological Science on the William R. Kenan Jr. Chair, was quoted in a <a href="https://www.huffpost.com/entry/holidays-feel-exhausting_l_638e4faae4b07530543d0e62"><em>Huff Post</em></a> article about depression and anxiety during the holidays.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Mike Schmidt ’03,</strong> Multnomah County District Attorney, was the subject of a <a href="https://www.pdxmonthly.com/news-and-city-life/2022/12/mike-schmidt-multnomah-county-district-attorney-da-portland"></em>Portland Monthly</em></a> feature story.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p>Tony Award-winning set designer <strong>Beowulf Boritt ’93</strong> talked with <a href="https://playbill.com/article/how-set-designer-beowulf-boritt-learned-to-embrace-the-weird"><em>Playbill</em></a> about his work and inspiration.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p>The work of renowned astronomer <strong>Vera Rubin ’48</strong> and the observatory named after her were the subjects of an <a href="https://astronomy.com/magazine/news/2022/11/how-vera-rubin-and-nancy-grace-roman-transformed-astronomy"><em>Astronomy</em></a> magazine article.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Judge Tamiko Amaker ’90</strong> was appointed acting Chief Administrative Judge of the New York State court system, the first Black woman in this role, as noted by the <a href="https://brooklyneagle.com/articles/2022/11/14/whats-news-breaking-monday-november-14-2022/"><em>Brooklyn Eagle</em></a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Taylor Gee ’23</strong> was quoted in a <a href="https://www.nytimes.com/2022/10/22/style/ny-sheep-wool-festival.html"><em>New York Times</em></a> article about young knitters attending the New York State Sheep and Wool Festival.</p>
    </div>


    <div class="other-news-item plain-card-1">
    <p class="has-line-data" data-line-start="0" data-line-end="1"><strong>Steve Reilly ’09</strong>, a Pulitzer Prize finalist and investigative reporter at Grid, was elected to the board of the <a href="https://www.press.org/newsroom/eileen-oreilly-elected-116th-national-press-club-president">National Press Club</a> for a three-year term, as noted by the club.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="2" data-line-end="3"><strong>Tom Facchine ’11</strong>, Imam and Director of Religious Affairs of Utica Masjid and Imam of Hamilton College, talked about masculine modesty in Islam on the MM Podcast, as noted by <a href="https://muslimmatters.org/2022/12/13/podcast-beyond-the-matrix-masculinity-modesty-in-islam/">Muslim Matters</a>.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="4" data-line-end="5">A collaboration between multimedia artists <strong>Andrea Orejarena ’17</strong> and <strong>Caleb Stein ’17</strong>, which culminated in the book Long Time No See and other mediums of expression, was the subject of a <em><a href="https://www.1854.photography/2022/11/long-time-no-see-andrea-orejarena-caleb-stein-vietnam-agent-orange/">British Journal of Photography</a></em> article.</p></div>
-->
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <div class="other-news-item plain-card-1"><p><a href="https://tntribune.com/local-theatre-company-amplifies-southern-voices/"><strong>Estefanía Fadul ’10</strong> will direct Nayna Agrawal’s <em>Dharma</em> at Studio Tenn</a>, as noted in a <em>Tennessee Tribune</em> story about the play.</p></div>

    <div class="other-news-item plain-card-1"><p><a href="https://medicine.uiowa.edu/md/student-support/opportunities-growth/writing-and-humanities-program/creative-writing-contest">Dr. <strong>Marygrace Elson ’78</strong>, who recently retired from the University of Iowa Carver College of Medicine, wrote the poem <em>Emerita</em>, which won the college’s faculty poetry award</a> and was included in its 2022 Creative Writing Anthology.</p></div>

<!--
    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="12" data-line-end="13"><strong>Quinn Kennedy ’93</strong> wrote a <em><a href="https://www.psychologytoday.com/us/blog/aging-and-mindfulness/202212/aging-and-mindfulness">Psychology Today</a></em> article about aging and mindfulness which included research from Nina Smiley ’73 and Michele Tugade ’95.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="14" data-line-end="15">Self-taught botanist <strong>Margaret Oldenburg</strong>, class of 1915, was the subject of a <em><a href="https://www.mprnews.org/story/2022/11/28/margaret-oldenburg-canadian-arctic-flora-collection-university-minnesota-climate-change">MPR News</a></em> article.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="16" data-line-end="17">The <a href="https://www.facebook.com/MidcoSports/videos/661582082346553/">Midco Sports</a> network featured former Brewers soccer standout and Special Forces Staff Sergeant <strong>Robb Rolfing ’00</strong>, who was killed while serving in Iraq in 2007.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="18" data-line-end="19">The work of <strong>Abigail Baird ’91</strong>, Professor of Psychological Science on the Arnhold Family Chair, regarding the adolescent brain was included in <em><a href="https://www.bloomberg.com/opinion/articles/2022-11-14/gen-z-really-does-have-it-harder-than-millennials?srnd=opinion">Bloomberg</a></em> and <em><a href="https://www.washingtonpost.com/business/gen-z-really-does-have-it-harder-than-millennials/2022/11/14/fc833ae8-6413-11ed-b08c-3ce222607059_story.html">Washington Post</a></em> articles about the issues facing Gen Z.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="20" data-line-end="21"><strong>Karen Petersen ’76</strong> has won the Wil Mills Poetry Award, judged by Annie Finch, for her chapbook, <em>Trembling</em>, as noted by <a href="https://www.wcupa.edu/arts-humanities/poetry/contestAwards.aspx">West Chester University</a>.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="22" data-line-end="23"><strong>Jonathan Feingold ’07</strong>, Associate Professor at Boston University School of Law, co-wrote a <em><a href="https://www.bostonglobe.com/2022/10/25/opinion/party-attacking-affirmative-action-just-made-case-it/">Boston Globe</a></em> op-ed about the affirmative action cases before the Supreme Court. Feingold also wrote an <a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=4179822">amicus brief</a> and spoke with <em><a href="https://www.bu.edu/articles/2022/will-the-supreme-court-end-affirmative-action/">BU Today</a></em> about the case.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="26" data-line-end="27"><strong>Connie Kehoe ’69</strong>, who was inducted into the Westchester County Senior Hall of Fame, was the subject of a <em><a href="https://www.rivertownsenterprise.net/irvington/kehoe-recognized-among-hall-of-fame-class/article_edac0b48-725b-11ed-abde-ab6ced8178be.html">Rivertowns Enterprise</a></em> story.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="28" data-line-end="29"><strong>Katherine “Gig” Babson ’69</strong> spoke with the <a href="https://theswellesleyreport.com/2022/11/wellesley-black-lab-pup-becomes-a-local-literary-sensation/">Swellesley Report</a> about her new picture book, Tails with Gig.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="30" data-line-end="31"><strong>Bruce Mendelsohn ’90</strong> was honored at the Worcester Jewish Community Center Veteran’s Day Tribute and spoke to <a href="https://spectrumnews1.com/ma/worcester/news/2022/11/13/jcc-veterans-day-111322">Spectrum News 1</a> about the importance of the event.</p></div>

    <div class="other-news-item plain-card-1"><p class="has-line-data" data-line-start="6" data-line-end="7"><strong>Sarah Karmon ’97</strong> was named Executive Director of the Harvard Alumni Association, as noted by the <em><a href="https://news.harvard.edu/gazette/story/2022/12/sarah-karmon-named-new-haa-executive-director/">Harvard Gazette</a></em>.</p></div>
-->
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
