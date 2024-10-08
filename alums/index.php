<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Vassar Alums",
  "page_classes":"advancement-demo home",
  "nav_title":"Alums",
  "feature_image":"/alums/assets/img/alums-give/mentor/Steve_Kauderer_001-by_Diana_Liu.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo sec_siteHeader_video_adv(); ?>
<?php echo end_sec_siteHeader_video(); ?>

<span id="top"></span>
<?php echo make_nav_from_array(
  [
    'Give Back' => 'give/',
    'Calendar' => 'calendar/',
    'Our Community' => 'community/',
    'Resources' => 'resources/',
    'Contact' => 'contact/'
  ],
  'alums'
); ?>


<!-- intro quote -->
<?php echo sec_regularContent(
    null,
    'ticker-section theme-verylightgray',
    'animation-fade-in animate-when-content-appears animation-group',
    ['css' => '--sequential-animation-item-gap: 0.3s;']
); ?>
<p class="animation-item">With <strong>41,000+ alums</strong> around the<br> globe, Vassar’s <strong>powerful network</strong><br> is never out of reach.</p>
<p class="center-object mt-3">
    <?php echo cta_link(
        '/alums/community/aavc/',
        'Learn more about the AAVC.',
        'style-large'
    ); ?>
</p>

<?php echo end_sec_regularContent(); ?>
<!-- end intro quote -->


<!-- make a difference section -->
<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Make a difference.</b>
   <b class="slide-from-right nice-big-serif">Give back.</b>',
    '<p class="section-intro-text" style="max-width: 41ch;">The Vassar community&#8217;s annual support of College priorities is a crucial component of what makes our world-class liberal arts education possible and exceptional. Experience the joy and rewards of giving back.</p>',
    'sec-fixedCenteredTitle theme-burgundy make-a-difference section-title-text-shadow',
    'mw-4',
    ['bg-image-url' => '/alums/assets/img/alums-give/0153-19-11-kr-major-palooza-vassar-6031.jpg',
        'bg-image-alt' => 'Seated person in front of a painting addressing a standing group.',
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
        'https://campaign.vassar.edu',
        ['url' => '/alums/assets/img/alums-home/campaign2-53245499527_6f2541ca60_k.jpg', 'alt' => 'People walking down a large staircase in a museum with a projected image of a Vassar Fearlessly Consequential campaign logo project on a wall.' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link mb-below-md-3'
    ); ?>

    <p>With your gift to the <em>Fearlessly Consequential</em> campaign, Vassar can continue to provide a bold liberal arts education that will ignite the world around us.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>

    <?php echo item_cardWithText(
        'Volunteer',
        '/alums/give/volunteer/',
        ['url' => '/alums/assets/img/alums-home/VC-Atlanta_Becca-Marco-05_Jada-Graves-14_Juan-Acosta-02-(1).jpg', 'alt' => 'People wearing and holding Vassar merchandise standing beside a sign that reads, Serve Your Neighbor.' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link mb-below-md-3'
    ); ?>
    <p>An incredible way to enrich your life and the lives of others in countless ways.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>
    <?php echo item_cardWithText(
        'Be a Mentor',
        '/alums/give/be-a-mentor/',
        ['url' => '/alums/assets/img/alums-home/0006-19-01-kr-scc-reception-vassar-0977.jpg', 'alt' => 'One person with their curly hair up wearing a blue blazer and grey turtle neck stands next to a person who has curly hair and glasses as they talk at an event.' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link mb-below-md-3'
    ); ?>
    <p>An extraordinary opportunity to develop positive relationships with students and help them navigate their future.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>


</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

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
   <h2 class="section-intro-text">Leaving campus doesn’t have to mean leaving Vassar. From global reunions to local get-togethers, Vassar alums events keep the connection going.</h2>',

    'sec-fixedCenteredTitle theme-charcoal-to-white section-title-text-shadow',
    'mw-4',
    [
        'bg-image-url' => '/alums/assets/img/alums-home/0227-17-04-ym-dc-johnson-brunch-vassar-0644.jpg',
        'bg-image-alt' => 'Group of people stand next to each other smiling, taking a selfie at a crowded event.',
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


<?php echo event_listing(); ?>

<div class="events" id="alumnicalendarRSS_target" data-item-limit="3">
  <p class="text-center">There was a problem loading the events. Please make sure JavaScript is enabled on your browser.</p>
</div>

<?php // display_feed('https://connect.vassar.edu/controls/cms_v2/components/rss/rss.aspx?sid=1654&gid=2&calcid=8471&page_id=5161', '3'); ?>

          <a href="/alums/calendar/#events" class="center-object mb-5 btn btn-lg btn-light arrow">All events</a>

<?php echo end_event_listing(); ?>


<?php echo end_sec_fixedCenteredTitle(); ?>





<!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Alums</b>
   <b class="slide-from-right">Spotlight</b>',
    '<h2 class="section-intro-text">Stories and highlights featuring alums.</h2>',
    'sec-fixedCenteredTitle theme-charcoal alums-spotlight',
    'mw-4',
    ['bg-image-url' => '/alums/assets/img/alums-home/0037-19-02-kr-ifill-sherrilyn-vassar-7892.jpg',
        'bg-image-alt' => 'A person with long dark hair, yellow jacket, and a black shirt, Sherrilyn Ifill, stands behind a podium, speaking to a seated audience at a Vassar event.',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/home-blocks/carousel-alums-home-spotlight.inc'); ?>

<?php echo end_sec_fixedCenteredTitle(); ?>


<!-- IN THE MEDIA -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">In The</b>
   <b class="slide-from-right">Media</b>',
    '<h2 class="section-intro-text mb-5 pb-5">Vassar Alums making news.</h2>',
    'sec-fixedCenteredTitle theme-burgundy',
    'animation-fade-in animate-when-content-appears mw-4',
    ['bg-image-url' => '/alums/assets/img/alums-home/0069-19-05-kr-spring-vassar-4662.jpg',
        'bg-image-alt' => 'Aerial view of the Vassar campus residential quad featuring traditional red brick buildings with white trimmings,  lush green lawns, and concrete paths crisscrossing the lawns, leading to various buildings.',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php include($project_paths['main_project_root'].'/alums/inc/home-blocks/carousel-alums-home-media.inc'); ?>

<div class="text-center mt-5">
    <a href="/alums/community/alum-news" class="btn btn-light btn-lg arrow mb-5" style="background: #fff;">More news</a>
</div>



<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- END IN THE MEDIA -->







<?php echo site_footeralums(); ?>
