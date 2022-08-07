<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Vassar Alumni",
  "page_classes":"advancement-demo home",
  "nav_title":"Alumni"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>


<?php echo sec_siteHeader_video_adv(); ?>
<?php echo end_sec_siteHeader_video(); ?>

<?php echo alums_topLevelNav(); ?>

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
    '<b class="slide-from-left">Make a difference.</b>
   <b class="slide-from-right nice-big-serif">Give back.</b>',
    '<h2 class="section-intro-text">The Vassar community&#8217;s annual support of college priorities is a crucial component of what makes our world-class liberal arts education possible and exceptional. Experience the joy and rewards of giving back.</h2>',
    'sec-fixedCenteredTitle theme-burgundy make-a-difference section-title-text-shadow',
    'mw-4',
    ['bg-image-url' => '/alumni/assets/img/alumni-give/0153-19-11-kr-major-palooza-vassar-6031.jpg',
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
        'https://go.vassar.edu/give',
        ['url' => '/alumni/assets/img/alumni-home/Library-TT-IMG_6613.jpeg', 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link mb-below-md-3'
    ); ?>

    <p>Your gift to The Vassar Fund can honor the aspect of the Vassar experience that matters most to you.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>

    <?php echo item_cardWithText(
        'Volunteer',
        '/alumni/give/volunteer/',
        ['url' => '/alumni/assets/img/alumni-home/VC-Atlanta_Becca-Marco-05_Jada-Graves-14_Juan-Acosta-02-(1).jpeg', 'alt' => 'replacealttext' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link mb-below-md-3'
    ); ?>
    <p>An incredible way to enrich your life and the lives of others in countless ways.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>
    <?php echo item_cardWithText(
        'Be a Mentor',
        '/alumni/give/be-a-mentor/',
        ['url' => '/alumni/assets/img/alumni-home/0006-19-01-kr-scc-reception-vassar-0977.jpeg', 'alt' => 'replacealttext' ],
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
   <h2 class="section-intro-text">Leaving campus doesn’t have to mean leaving Vassar. From global reunions to local get-togethers, Vassar alumni events keep the connection going.</h2>',

    'sec-fixedCenteredTitle theme-charcoal-to-white section-title-text-shadow',
    'mw-4',
    [
        'bg-image-url' => '/alumni/assets/img/alumni-home/0227-17-04-ym-dc-johnson-brunch-vassar-0644.jpg',
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


<?php echo event_listing(); ?>
  <?php echo event_item(
    'Vassar Club of Ohio Visits the Columbus Zoo',
    'Aug',
    '03',
    '11:00 a.m.',
    'The Vassar Club of Ohio is offering three opportunities to visit the Columbus Zoo this fall. On each date, the club will provide admission for 10 guests. Guests will enter together, then are free to tour the Zoo on their own.',
    'https://connect.vassar.edu/s/1654/images/content_images/columbuszooentrance_SQUARE_637883798332743658.jpg',
    'https://connect.vassar.edu/?sid=1654&gid=2&pgid=6172&cid=10186&ecid=10186&crid=0&calpgid=5161&calcid=8471'
  ); ?>

  <?php echo event_item(
    'Vassar Club of San Diego Midsummer Happy Hour',
    'Aug',
    '03',
    '5:30 p.m. to 7:30 p.m.',
    'A fun evening of drinks and hors d’oeuvres and provocative conversation with San Diego-based Vassar alums at the exclusive University Club atop Symphony Towers in downtown San Diego.',
    'https://connect.vassar.edu/s/1654/images/content_images/university_club_SQUARE_637927101169043313.jpg',
    'https://connect.vassar.edu/?sid=1654&gid=2&pgid=6196&cid=10231&ecid=10231&crid=0&calpgid=5161&calcid=8471'
  ); ?>


  <?php echo event_item(
    'Vassar Club of Chicago Summer Happy Hour!',
    'Aug',
    '11',
    '6:00 p.m.',
    'Join us for a summer happy hour and get to know fellow Chicago-area Vassar alums over a drink!',
    'https://connect.vassar.edu/s/1654/images/content_images/vcchicagosheffieldscoverphotogardensquare_637949414639185294.jpg',
    'https://connect.vassar.edu/?sid=1654&gid=2&pgid=6226&cid=10273&ecid=10273&crid=0&calpgid=5161&calcid=8471'
  ); ?>

          <a href="/alumni/calendar/" class="center-object mb-5 btn btn-lg btn-light arrow">All events</a>

<?php echo end_event_listing(); ?>


<?php echo end_sec_fixedCenteredTitle(); ?>





<!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Alumni</b>
   <b class="slide-from-right">Spotlight</b>',
    '<h2 class="section-intro-text">Here we shine a light on the great work being done by our alumni.</h2>',
    'sec-fixedCenteredTitle theme-charcoal alums-spotlight',
    'mw-4',
    ['bg-image-url' => '/alumni/assets/img/alumni-home/0037-19-02-kr-ifill-sherrilyn-vassar-7892.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php include($project_paths['main_project_root'].'/alumni/inc/home-blocks/carousel-alumni-home-spotlight.inc'); ?>



<?php echo end_sec_fixedCenteredTitle(); ?>


<!-- IN THE MEDIA -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">In The</b>
   <b class="slide-from-right">Media</b>',
    '<h2 class="section-intro-text mb-5 pb-5">Vassar Alumni making news.</h2>',
    'sec-fixedCenteredTitle theme-burgundy',
    'animation-fade-in animate-when-content-appears mw-4',
    ['bg-image-url' => '/alumni/assets/img/alumni-home/0069-19-05-kr-spring-vassar-4662.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php include($project_paths['main_project_root'].'/alumni/inc/home-blocks/carousel-alumni-home-media.inc'); ?>

<div class="text-center mt-5">
    <a href="/alumni/community/alumni-news" class="btn btn-light btn-lg arrow mb-5" style="background: #fff;">More news</a>
</div>



<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- END IN THE MEDIA -->







<?php echo site_footeralumni(); ?>
