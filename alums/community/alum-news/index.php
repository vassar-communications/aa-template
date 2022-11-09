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
  'Leah Goodridge ’04',
  $alums_news_images_path.'/2022-11-04/in-the-media/Leah_Goodridge_by_Laura_Merrill.jpg',
  'theme-extralightgray',
  '',
  ['img_alt_text' => 'A headshot of Leah Goodridge']
); ?>

<p>Leah Goodridge ’04, Managing Attorney for Housing Policy at Mobilization for Justice, Inc., received a Diversity Champion award from the New York City Bar Association and recently spoke on the association’s podcast, <em><a href="https://www.nycbar.org/media-listing/media/detail/professionalism-as-a-racial-construct-podcast">Building Belonging</a></em>, about professionalism as a racial construct.</p><p><em>Photo: Laura Merrill</em></p>
<?php echo cta_link(
  'https://www.nycbar.org/media-listing/media/detail/professionalism-as-a-racial-construct-podcast',
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
        'Jason Blum ’91',
        'https://www.youtube.com/watch?v=M6KWSCOFpfM&list=PLZ1f3amS4y1dgEJv1dDNtnZg1MnpjxI49&index=2',
        ['url' => $logos_path.'james-cordon.png', 'alt' => 'Late Late Show with James Corden logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>

        <p>Blumhouse CEO and Founder <stong>Jason Blum ’91</strong> talked about the latest Halloween film with Jamie Lee Curtis on the <em>Late Late Show with James Corden</em>.</p>

    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Morgan Monaco ’06',
        'https://www.nytimes.com/2022/10/18/nyregion/prospect-park-alliance-morgan-monaco.html',
        ['url' => $logos_path.'newyorktimes.gif', 'alt' => 'The New York Times logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
      <p><strong>Morgan Monaco ’06</strong> was appointed President of the Prospect Park Alliance, as noted by the <em>New York Times.</em></p>
      
    <?php echo end_item_cardWithText(); ?>
  <?php echo end_item_col(); ?>


  <?php echo item_col(); ?>
    <?php echo item_cardWithText(
        'Zachary Wagner ’07',
        'https://www.bizjournals.com/washington/potmsearch/detail/submission/6521337/Zachary_Wagner',
        ['url' => $logos_path.'washington-business-journal.png', 'alt' => 'The Met logo' ],
        'related-topics card--withParagraph card-has-cta-icon card-is-link'
    ); ?>
        <p><stong>Zachary Wagner ’07</strong> was named Chief Product Officer at StraighterLine, as noted by the <em>Washington Business Journal</em>.</p>
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
        <p><strong>Meryl Streep ’71, P’08,’13</strong> was mentioned in a <a href="https://www.news10.com/news/ny-news/meryl-streep-visits-vassar-to-receive-honorable-award/">News10</a> story about the actor’s recent visit to campus to accept the AAVC Distinguished Achievement Award.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Dr. Ebony Boulware ’91</strong> was named Dean of Wake Forest University School of Medicine and Chief Science Officer of Atrium Health, as noted by <a href="https://www.prnewswire.com/news-releases/renowned-physician-researcher-and-educator-dr-ebony-boulware-named-dean-of-wake-forest-university-school-of-medicine-and-chief-science-officer-of-atrium-health-301650420.html">PR Newswire</a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Erica Weiner-Amachi ’03</strong>, a teacher, participated in a Jeopardy! “Second Chance” competition, as noted by <a href="https://www.phillyvoice.com/philadelphia-teacher-jeopardy-second-chance-competition-erica-weiner-amachi/"><em>Philly Voice</em></a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Michaela Coplen ’18</strong> was named a <a href="https://www.marshallscholarship.org/scholars/scholar-profiles/michaela-coplen">Marshall Scholar</a>, which will allow her to pursue an MPhil in International Relations at the University of Oxford.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Victoria Abut ’18</strong>, a student at Harvard Law School, wrote a <a href="https://www.corporatecomplianceinsights.com/brazil-election-corruption/">Corporate Compliance Insights</a> article about corruption in Brazilian politics.</p>
    </div>

  <?php echo end_item_col(); ?>

  <?php echo item_col(); ?>

    <div class="other-news-item plain-card-1">
        <p><strong>Theresa “Terri” O’Shea ’76</strong>, former AAVC Executive Director, was remembered in the <a href="https://www.poughkeepsiejournal.com/obituaries/pjo072595"><em>Poughkeepsie Journal</em></a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Yanajaha Kafi Moragne-Patterson ’06</strong>, Senior Program Director of College and Career Success at the University of Chicago Inclusive Economy Lab, will serve as a member of the Illinois Torture Inquiry and Relief Commission, as noted by <a href="https://www.myradiolink.com/2022/10/17/gov-pritzker-announces-four-appointments-to-boards-and-commissions-2/">myradiolink.com</a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Dr. Cathy Drennan ’85</strong>, a professor of chemistry and biology at MIT, was the recipient of the American Society for Biochemistry and Molecular Biology 2023 William C. Rose Award, as noted by <a href="https://www.asbmb.org/asbmb-today/people/102422/drennan-makes-science-fun-and-accessible">ASBMB</a>.</p>
    </div>

    <div class="other-news-item plain-card-1">
        <p><strong>Taylor Gee ’23</strong> was quoted in a <a href="https://www.nytimes.com/2022/10/22/style/ny-sheep-wool-festival.html"><em>New York Times</em></a> article about young knitters attending the New York State Sheep and Wool Festival.</p>
    </div>

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
