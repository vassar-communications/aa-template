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
<?php echo end_sec_siteHeader_video(); ?>

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
    '<p class="section-intro-text"> [ content goes here. We need a new background photo. ]</p>',
    'sec-fixedCenteredTitle theme-verylightgray here-to-help',
    'mw-4',
    ['bg-image-url' => '/mockups/admission-home/journey/0100-21-10-kr-fw-general-vassar-0057.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --section-title-faded-color: #444;
      --bs-gap: 1rem;
      ']

); ?>


    <div class="grid cols-3 animation-zoom-in animate-when-content-appears animation-group">
        <?php echo item_cardWithText(
            'Make a Gift',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/Library-TT-IMG_6613.jpg', 'alt' => 'asdfasdfds' ],
            'animation-item card-has-cta-icon'
        ); ?>

        <p>Your gift to The Vassar Fund can honor the aspect of the Vassar experience that matters most to you. <strong>Give now</strong></p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Volunteer',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/VC-Atlanta_Becca-Marco-05_Jada-Graves-14_Juan-Acosta-02-(1).jpg', 'alt' => 'asdfasdfds' ],
            'animation-item card-has-cta-icon'
        ); ?>

        <p>An incredible way to enrich your life and the lives of others in countless ways. <strong>Explore volunteer opportunities</strong></p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Be a Mentor',
            '',
            ['url' => '/mockups/advancement-home/assets/images/three-cards/0006-19-01-kr-scc-reception-vassar-0977.jpg', 'alt' => 'asdfasdfds' ],
            'animation-item card-has-cta-icon'
        ); ?>

        <p>An extraordinary opportunity to develop positive relationships with students and help them navigate their future. <strong>More about mentorship</strong></p>

        <?php echo end_item_cardWithText(); ?>



    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>



    <!-- stats -->

<?php
echo word_cycler('where-from');

echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Upcoming</b>
   <b class="slide-from-right">Events</b>',
    '
   <p class="section-intro-text">Leaving campus doesn’t have to mean leaving Vassar. From global reunions to local get-togethers, Vassar alumni events keep the connection going.</p>',

  'sec-fixedCenteredTitle theme-charcoal-to-white hide-image',
  'mw-4',
    [
      'bg-image-url' => '/mockups/admission-home/journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
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
    '<p class="section-intro-text">

Stories that showcase Vassar’s impact on the world, and more.

   </p>',
    'sec-fixedCenteredTitle theme-charcoal alums-spotlight',
    'mw-4',
    ['bg-image-url' => '/mockups/admission-home/fav-places/0083-19-06-tt-shakespeare-vassar-0357.jpg',
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
    '<p class="section-intro-text">

[in the media]

   </p>',
    'sec-fixedCenteredTitle theme-charcoal',
    'mw-4',
    ['bg-image-url' => '/mockups/admission-home/fav-places/0083-19-06-tt-shakespeare-vassar-0357.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

  <?php echo sec_thumbnailTextTicker(); ?>

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- END IN THE MEDIA -->







<?php echo site_footer(); ?>
