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
<a href="" class="btn btn-primary btn-lg arrow">Give Now</a>
<a href="" class="btn btn-primary btn-lg arrow">Log in</a>
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
        ['url' => '/mockups/advancement-home/assets/images/three-cards/Library-TT-IMG_6613.jpg', 'alt' => 'replacealttext' ],
        'fancy-card animation-item card-has-cta-icon card-has-cta-label'
    ); ?>

    <p>Your gift to The Vassar Fund can honor the aspect of the Vassar experience that matters most to you.</p>
    <p class="cta-icon-label">Give now</p>

    <?php echo end_item_cardWithText(); ?>


    <?php echo item_cardWithText(
        'Volunteer',
        '',
        ['url' => '/mockups/advancement-home/assets/images/three-cards/VC-Atlanta_Becca-Marco-05_Jada-Graves-14_Juan-Acosta-02-(1).jpg', 'alt' => 'replacealttext' ],
        'fancy-card animation-item card-has-cta-icon card-has-cta-label'
    ); ?>

    <p>An incredible way to enrich your life and the lives of others in countless ways.</p>
    <p class="cta-icon-label">Explore volunteer opportunities</p>

    <?php echo end_item_cardWithText(); ?>


    <?php echo item_cardWithText(
        'Be a Mentor',
        '',
        ['url' => '/mockups/advancement-home/assets/images/three-cards/0006-19-01-kr-scc-reception-vassar-0977.jpg', 'alt' => 'replacealttext' ],
        'fancy-card animation-item card-has-cta-icon card-has-cta-label'
    ); ?>

    <p>An extraordinary opportunity to develop positive relationships with students and help them navigate their future.</p>
    <p class="cta-icon-label">More about mentorship</p>

    <?php echo end_item_cardWithText(); ?>



</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

<?php echo sec_wideContent(
    null,
    null,
    'the-quote-ticker'
); ?>

<?php echo niceQuotes(); ?>

<p class="section-intro-text">Our shared Vassar DNA binds us together and motivates us to remain connected and committed to the college and each other.</p>

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
       /* --section-title-faded-color: var(--color-vassar-burgundy); */
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
    <a href="" class="btn btn-light btn-lg arrow mb-5" style="background: #fff;">More news</a>
</div>



<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- END IN THE MEDIA -->







<?php echo site_footeralumni(); ?>
