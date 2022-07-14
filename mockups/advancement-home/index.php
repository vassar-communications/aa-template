<style>
.pattern-site-nav {
    display: none;
}
</style>


<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Advancement";
$page_classes = "advancement-demo";
/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>


<?php echo sec_siteHeader_video_adv(); ?>
<a href="" class="cta-link">Give Now</a>
<a href="" class="cta-link">Log in</a>
<?php echo end_sec_siteHeader_video(); ?>

<?php echo alums_topLevelNav(); ?>

<?php // echo alums_topLevelNav(); ?>


<!-- intro quote -->
<?php echo sec_regularContent(
    null,
    'ticker-section theme-verylightgray',
    'animation-fade-in animate-when-content-appears animation-group',
    ['css' => '--sequential-animation-item-gap: 0.3s;']
); ?>
  <p class="animation-item">With <strong>41,000+ alumni</strong> around the<br> globe, Vassar’s <strong>powerful network</strong><br> is never out of reach.</p>
<?php echo end_sec_regularContent(); ?>
<!-- end intro quote -->


<!-- make a difference section -->
<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Make a difference</b>
   <b class="slide-from-right nice-big-serif">and give back.</b>',
    '<p class="section-intro-text">The Vassar Community is filled with vibrant, eclectic, non-conformist changemakers who span more than eight decades of the lived, global experience of students, alumni, family, and friends.</p>',
    'sec-fixedCenteredTitle theme-burgundy make-a-difference section-title-text-shadow',
    'mw-4',
    ['bg-image-url' => '/mockups/advancement-home/assets/images/0153-19-11-kr-major-palooza-vassar-6031.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --xsection-title-faded-color: #444;
      --bs-gap: 1rem;
      ']

); ?>


    <div class="grid cols-3 animation-zoom-in animate-when-content-appears animation-group">
        <?php echo item_cardWithText(
            'Make a Gift',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/Library-TT-IMG_6613.jpg', 'alt' => 'asdfasdfds' ],
            'fancy-card animation-item card-has-cta-icon card-has-cta-label'
        ); ?>

        <p>Your gift to The Vassar Fund can honor the aspect of the Vassar experience that matters most to you.</p>
        <p class="cta-icon-label">Give now</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Volunteer',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/VC-Atlanta_Becca-Marco-05_Jada-Graves-14_Juan-Acosta-02-(1).jpg', 'alt' => 'asdfasdfds' ],
            'fancy-card animation-item card-has-cta-icon card-has-cta-label'
        ); ?>

        <p>An incredible way to enrich your life and the lives of others in countless ways.</p>
        <p class="cta-icon-label">Explore volunteer opportunities</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Be a Mentor',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/0006-19-01-kr-scc-reception-vassar-0977.jpg', 'alt' => 'asdfasdfds' ],
            'fancy-card animation-item card-has-cta-icon card-has-cta-label'
        ); ?>

        <p>An extraordinary opportunity to develop positive relationships with students and help them navigate their future.</p>
        <p class="cta-icon-label">More about mentorship</p>

        <?php echo end_item_cardWithText(); ?>



    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>


<style>

.the-quote-ticker {
  min-height: 70vh;
}

</style>

<?php echo sec_wideContent(
  null,
  null,
  'the-quote-ticker'
); ?>

  <?php echo niceQuotes(); ?>

<p class="section-intro-text">Our shared Vassar DNA binds us together and motivates us to remain connected and committed to the College and each other.</p>

<?php echo end_sec_wideContent(); ?>


<?php

echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Upcoming</b>
   <b class="slide-from-right">Events</b>',
    '
   <p class="section-intro-text">Leaving campus doesn’t have to mean leaving Vassar. From global reunions to local get-togethers, Vassar alumni events keep the connection going.</p>',

  'sec-fixedCenteredTitle theme-charcoal-to-white section-title-text-shadow',
  'mw-4',
    [
      'bg-image-url' => '/mockups/advancement-home/assets/images/0227-17-04-ym-dc-johnson-brunch-vassar-0644.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --intro-line-color: #fff;
      --section-title-faded-color: var(--color-vassar-burgundy);
      --section-bg-color-after-content: #fff;
      '
    ]
); ?>

  <?php echo sec_eventListing(); ?>

  <?php echo end_sec_fixedCenteredTitle(); ?>





    <!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Spotlight</b>',
    '<p class="section-intro-text">Here we shine a light on the great work being done by our staff, students, and alumni.</p>',
    'sec-fixedCenteredTitle theme-charcoal alums-spotlight',
    'mw-4',
    ['bg-image-url' => '/mockups/advancement-home/assets/images/0037-19-02-kr-ifill-sherrilyn-vassar-7892.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

  <?php echo alumsCarousel(); ?>

<?php echo end_sec_fixedCenteredTitle(); ?>


<!-- IN THE MEDIA -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">In The</b>
   <b class="slide-from-right">Media</b>',
   '<p class="section-intro-text mb-5 pb-5">Vassar Alumni making news.</p>',
    'sec-fixedCenteredTitle theme-burgundy',
    'animation-fade-in animate-when-content-appears mw-4',
    ['bg-image-url' => '/mockups/advancement-home/assets/images/0069-19-05-kr-spring-vassar-4662.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php echo inTheMediaCarousel(); ?>

<div class="text-center mt-3">
      <a href="" class="cta-link mb-5" style="background: #fff;">More news</a>
    </div>

    <style>

  .small-header {
    font-weight: bold;
      text-align: center;
      font-variation-settings: "wght" 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-size: 1.2rem;
  }
  .small-header:before,
  .small-header:after {
    content: '';
    color: #f00;
    letter-spacing: -0.1rem;
    font-weight: normal;
    width: 10rem;
    background: #f00;
    height: 1px;
    display: inline-block;
    margin-bottom: 0.4rem;
  }
  .small-header:before {
    margin-right: 1rem;
  }
  .small-header:after {
    margin-left: 1rem;
  }

  </style>

<?php /*
<style>
p.feature-text {
    font-variation-settings: "wght" 340;
    font-family: var(--font-big-serif);
    line-height: 1.16;
    font-size: 2rem;
    font-weight: 100;
}
.featured-alum {
  --section-link-color: #f00;
  --section-link-hover-color: #000;
  max-width: 60rem;
  margin: 0 auto 4rem auto;
}

.featured-alum .row {
padding: 4rem;
    background: #fff;
    color: #333;
    box-shadow: 0 0.6em 1em #700;
  }


<div class="featured-alum container">
  <div class="row">
    <div class="col-5">
      <img src="/mockups/advancement-home/assets/images/in-the-media/feature/news-ifill-thumb.jpeg" alt="" />
    </div>
    <div class="col-7">
      <p class="feature-text">The Ford Foundation has awarded a senior fellowship to <strong>Sherrilyn Ifill ’84</strong>, President and Director-Counsel Emeritus of the NAACP Legal Defense Fund, “to continue her work on strengthening American democracy,” as announced by the <a href="https://www.fordfoundation.org/news-and-stories/news-and-press/news/sherrilyn-ifill-joins-ford-foundation-as-a-senior-fellow/">foundation</a>.</p>
    </div>
  </div>
</div>
*/ ?>



<?php /*
<h3 class="small-header mt-5 mb-5">Of note</h3>

  <div class='thumbnail-text-ticker' style='--carousel-height: 14rem;' data-flickity='{ "fade": true, "wrapAround": true, "autoPlay": 3000, "cellAlign": "center", "prevNextButtons": false }'>

    <?php echo tickerItem('<p><strong>Jason Blum ’91’s</strong> $10 million gift to <strong>Vassar College</strong> was the subject of <a href="https://apnews.com/press-release/pr-newswire/entertainment-television-9554c9edf9de533dab110ea9ff7a2d03">AP</a>, <em><a href="https://www.thewrap.com/jason-blum-donates-10-million-vassar-college/">The Wrap</a></em>, <em><a href="https://variety.com/2022/film/news/jason-blum-blumhouse-vassar-college-scholarship-1235299680/">Variety</a></em>, and <a href="https://www.yahoo.com/now/award-winning-film-television-producer-142700862.html">Yahoo! News</a> stories.</p>', 'blum.jpg'); ?>

    <?php echo tickerItem('The memoir <em>Stay True</em> by <strong>Hua Hsu</strong>, Associate Professor of English and <em>New Yorker</em> staff writer, received a positive <em><a href="https://www.publishersweekly.com/pw/by-topic/columns-and-blogs/openbook/article/89659-hua-hsu-s-memoir-in-memoriam.html">Publishers Weekly</a></em> review, which called it “a moving and beautifully rendered memoir of friendship, loss, and a meditation on youth, tragedy, coming of age, and the Asian American immigrant experience.”', 'logos/publishers-weekly.png'); ?>

    <?php echo tickerItem('Lawyer <strong>Carrie Goldberg ’99</strong> was named to the White House Task Force to Address Online Harassment and Abuse, as noted by the <a href="https://www.whitehouse.gov/briefing-room/statements-releases/2022/06/17/readout-of-the-white-house-task-force-to-address-online-harassment-and-abuse-launch/">White House</a>.', 'logos/white-house.png'); ?>

    <?php echo tickerItem('<strong>Albert Muzquiz ’17</strong> and his popular TikTok account were the subjects of an <a href="https://www.insidehook.com/article/style/edgy-albert-tiktok-style-influencer">Inside Hook</a> story.', 'edgy-albert.jpg'); ?>

    <?php echo tickerItem('<p>Author and teacher <strong>Torrey Maldonado ’96</strong> talked to the <em><a href="https://www.slj.com/story/the-brown-bookshelf-to-spotlight-black-kid-lit-creators-thoughts-on-juneteenth">School Library Journal</a></em> about his project surveying prominent Black children’s literature creators on the importance of Juneteenth.', 'logos/slj.png'); ?>

    <?php echo tickerItem('<strong>Isabella Demougeot ’09</strong>, a senior litigation associate with JDKatz, PC, was interviewed for a <em><a href="https://medium.com/authority-magazine/top-lawyers-isabella-demougeot-on-the-5-things-you-need-to-become-a-top-lawyer-in-your-specific-b289f2d7f4cf">Medium</a></em> article asking top lawyers about achieving success in their specific fields.', 'isabella-demougeot.jpg'); ?>

    <?php echo tickerItem('<strong>Eve Dunbar</strong>, Professor of English on the Jean Webster Chair, and the collection of essays she co-edited, <em>African American Literature in Transition, 1930-1940</em>, were mentioned in a <a href="https://www.wibw.com/2022/06/20/new-book-with-ku-authors-details-impact-black-literature-1930s/">WIBW</a> story.', 'eve-dunbar.jpg'); ?>

    <?php echo tickerItem('<strong>Ivan Cedillo ’06</strong> was named the new principal at Del Valle High School in El Paso, TX, as noted by <a href="https://kfoxtv.com/news/local/ysleta-isd-names-new-principals-at-4-campuses-school-education-monica-triplett-gabriel-lopez-ivan-cedillo-bonita-torres-high-school-elementary-school-middle-school">KFOX 14</a>.', 'logos/kfox.jpg'); ?>

  </div>
 */ ?>

  <?php // echo thumbnailTextTicker(); ?>

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- END IN THE MEDIA -->







<?php echo site_footeralumni(); ?>
