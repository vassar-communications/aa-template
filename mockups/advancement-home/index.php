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

<style>

.w-33 {
  width: 33%;
}
.w-66 {
  width: 66%;
}
.w-42 {
  width: 42%;
}
.w-70 {
  width: 70%;
}

</style>

    <div class="animation-group staggered-grid animation-zoom-in animate-when-content-appears gap-3  mb-3">




      <?php

      echo item_imageCard_modal(
        get_icon('play').'Bridge for Laboratory Sciences',
        null,
        'lab-sciences-modal',
        null,
        ['url' => '/mockups/admission-home/fav-places-2/110619_160over90_Vassar_5483.jpg',
        'alt' => 'asdfasdf'
        ],
        'animation-item grid-item text-at-bottom'
      );

      ?>

<?php
echo item_imageCard_modal(
  get_icon('play').'Shakespeare Garden',
  null,
  'shakespeare-modal',
  null,
  ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>

      </div>

      <div class="animation-group staggered-grid-reverse animation-zoom-in animate-when-content-appears gap-3 mb-3">

        <?php
        echo item_imageCard_modal(
          get_icon('play').'Thompson Memorial Library',
          null,
          'thompson-modal',
          null,
          ['url' => '/mockups/admission-home/fav-places-2/0212-18-10-kr-library-fall-vassar-3819.jpg',
          'alt' => 'asdfasdf'
          ],
          'animation-item grid-item text-at-bottom'
        );

        ?>

        <?php
        echo item_imageCard_modal(
          get_icon('play').'Gordon Commons',
          null,
          'gordon-modal',
          null,
          ['url' => '/mockups/admission-home/fav-places-2/0195-19-11-kwe-gordon-vassar-1644.jpg',
          'alt' => 'asdfasdf'
          ],
          'animation-item grid-item text-at-bottom'
        );

        ?>


      </div>

      <div class="animation-group staggered-grid animation-zoom-in animate-when-content-appears gap-3  mb-3">

        <?php
        echo item_imageCard_modal(
          get_icon('play').'The Ecological Preserve',
          null,
          'ecological-modal',
          null,
          ['url' => '/mockups/admission-home/fav-places/farm-ramble-walking-Tour-1709-sal-1.jpg',
          'alt' => 'asdfasdf'
          ],
          'animation-item grid-item text-at-bottom'
        );
        ?>

        <?php
        echo item_imageCard_modal(
          get_icon('play').'Student Picks',
          null,
          'student-modal',
          null,
          ['url' => '/mockups/admission-home/fav-places-2/studio.jpg',
          'alt' => 'asdfasdf'
          ],
          'animation-item grid-item text-at-bottom'
        );
        ?>

    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- fav places -->


    <!-- visit -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Visit before</b>
   <b class="slide-from-right">you visit.</b>',
    '<p class="section-intro-text">
All Vassar students are surrounded by an environment designed to spark something amazing—a place where greatness can spring to life. Explore virtual visiting opportunities today and learn more about in-person visits.
   </p>

   <div class="text-center">
   <a href="" class="cta-link">Schedule a Campus Visit</a>
   </div>

   ',
    'sec-fixedCenteredTitle theme-dark-burgundy featured-video',
    'mw-4',
    ['bg-image-url' => '/mockups/admission-home/journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.1; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<?php /*
    <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9">
        <iframe title="vimeo-player" src="https://player.vimeo.com/video/531201548?h=eca7efdc85" width="640" height="360" frameborder="0" allowfullscreen></iframe>
    </div>
*/ ?>


<?php
echo item_imageCard_modal(
  get_icon('play').'Video Tour',
  null,
  'video-tour-modal',
  null,
  ['url' => '/mockups/admission-home/video-thumbnail.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>

<?php /* echo item_imageCard(
    get_icon('play').'Video Tour',
    null,
    'https://www.vassar.edu',
    ['url' => '/mockups/admission-home/video-thumbnail.jpg', 'alt' => 'asdfasdfds' ],
    'text-at-bottom mt-5'
); */ ?>



<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- end visit -->


    <!-- you may be wondering -->

    <?php echo sec_fixedCenteredTitle(
        '<b class="slide-from-left">You may</b>
       <b class="slide-from-right">be wondering:</b>',
        '<p class="section-intro-text">Here are some answers to common questions.
       </p>

       ',
        'sec-fixedCenteredTitle theme-verylightgray xfeatured-video',
        'mw-4',
        ['bg-image-url' => '/mockups/admission-home/0027-21-05-kr-founders-vassar-0102.jpg',
            'bg-image-alt' => 'alt text',
            'css' => '
          --section-title-size: 9vw;
          --title-container-bg-beforeContent: rgba(0,0,0,0.1);
          /* --section-title-faded-opacity: 0.2; */
          --section-bg-image-opacity: 0;
          --section-title-faded-color: var(--color-vassar-burgundy);


          '
        ]
    );
    // visit/0216-18-10-jsu-fall-drone-vassar-R01895.jpg ?>


    <div class="grid cols-3 animation-group animation-zoom-in animate-when-content-appears" style="--bs-gap: 1rem">

      <?php echo item_iconButton(
        'house-chimney-user',
        'Housing is guaranteed for all four years.',
        'vassar.edu',
        'btn-card animation-item'
      ); ?>

        <?php echo item_iconButton(
          'clipboard-check',
          'Vassar does not currently require SAT or ACT scores.',
          'vassar.edu',
          'btn-card animation-item'
        ); ?>

        <?php echo item_iconButton(
          'coins',
          'Vassar meets all demonstrated financial need for all four years.',
          'vassar.edu',
          'btn-card animation-item'
        ); ?>

        <?php echo item_iconButton(
          'car',
          'Students are allowed to have cars on campus.',
          'vassar.edu',
          'btn-card animation-item'
        ); ?>

        <?php echo item_iconButton(
          'people-arrows-left-right',
          'Interviews aren’t required, but they’re informative.',
          'vassar.edu',
          'btn-card animation-item'
        ); ?>

        <?php echo item_iconButton(
          'passport',
          'Undocumented/DACA-mented applicants welcome.',
          'vassar.edu',
          'btn-card animation-item'
        ); ?>

    </div>

    <div class="text-center mt-5">
    <a href="" class="cta-link mt-4 me-4">More quick facts</a>
    <a href="" class="cta-link mt-4">Contact us</a>

    </div>




<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- end you may be wondering -->

<?php echo newsCarousel(); ?>




<?php

echo item_imageCard_modal_setup(
  get_icon('play').'Bridge for Laboratory Sciences',
  null,
  'lab-sciences-modal',
  '<div class="ratio ratio-16x9">
<iframe class="modal-video" id="video-id--2081" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/avgWMTn4A1c?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=1" data-gtm-yt-inspected-8="true"></iframe>
  </div>',
  ['url' => '/mockups/admission-home/fav-places-2/110619_160over90_Vassar_5483.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

echo item_imageCard_modal_setup(
  get_icon('play').'Shakespeare Garden',
  null,
  'shakespeare-modal',
  '<div class="ratio ratio-16x9">
          <iframe class="modal-video" id="video-id--2186" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/pfJIwU-Kifg?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=2" data-gtm-yt-inspected-8="true"></iframe>
        </div>',
  ['url' => '/mockups/admission-home/fav-places-2/0056-21-06-kr-campus-vassar-0006-copy.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>

<?php
echo item_imageCard_modal_setup(
  get_icon('play').'Thompson Memorial Library',
  null,
  'thompson-modal',
  '<div class="modal-body ratio ratio-16x9">
        <iframe class="modal-video" id="video-id--2121" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/lQ0Jb9u6zTY?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=1" data-gtm-yt-inspected-8="true"></iframe>
      </div>',
  ['url' => '/mockups/admission-home/fav-places-2/0212-18-10-kr-library-fall-vassar-3819.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>

<?php
echo item_imageCard_modal_setup(
  get_icon('play').'Gordon Commons',
  null,
  'gordon-modal',
  '<div class="modal-body ratio ratio-16x9">
        <iframe class="modal-video" id="video-id--2041" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/aHxtG6CJQso?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=1" data-gtm-yt-inspected-7="true"></iframe>
      </div>',
  ['url' => '/mockups/admission-home/fav-places-2/0195-19-11-kwe-gordon-vassar-1644.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>

<?php
echo item_imageCard_modal_setup(
  get_icon('play').'The Ecological Preserve',
  null,
  'ecological-modal',
  '<div class="modal-body ratio ratio-16x9">
        <iframe class="modal-video" id="video-id--2191" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/Wjxz5QMAw3c?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=2" data-gtm-yt-inspected-7="true"></iframe>
      </div>',
  ['url' => '/mockups/admission-home/fav-places/farm-ramble-walking-Tour-1709-sal-1.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);
?>

<?php
echo item_imageCard_modal_setup(
  get_icon('play').'Student Picks',
  null,
  'student-modal',
  '<div class="modal-body ratio ratio-16x9"><iframe width="560" height="315" src="https://www.youtube.com/embed/e2Qz73uGyLs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>',
  ['url' => '/mockups/admission-home/fav-places-2/studio.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);
?>

<?php
echo item_imageCard_modal_setup(
  get_icon('play').'Video Tour',
  null,
  'video-tour-modal',
  '<div class="modal-body ratio ratio-16x9"><iframe allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" src="https://player.vimeo.com/video/531201548?title=0&amp;byline=0&amp;portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" data-ready="true"></iframe></div>',
  ['url' => '/mockups/admission-home/video-thumbnail.jpg',
  'alt' => 'asdfasdf'
  ],
  'animation-item grid-item text-at-bottom'
);

?>




<?php echo site_footer(); ?>
