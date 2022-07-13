<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Vassar Admission";
$page_classes = "admission-demo";
/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>


    <!--<div class="buffer"></div>-->

<?php echo sec_siteHeader_video(); ?>

<a href="" class="cta-link">Apply</a>
<a href="" class="cta-link">Request Info</a>
<!--
    <a href="" class="btn btn-lg btn-primary">Apply</a>
    <a href="" class="btn btn-lg btn-primary">Request Info</a>
-->

<?php echo end_sec_siteHeader_video(); ?>

<?php echo admission_topLevelNav(); ?>

    <!-- animated pullquote goes here -->
<?php echo sec_regularContent(
    null,
    'ticker-section theme-verylightgray',
    'animation-fade-in animate-when-content-appears animation-group',
    ['css' => '--sequential-animation-item-gap: 0.3s;']
); ?>

<style>

.pattern-site-nav {
    display: none;
}

</style>

    <p class="animation-item"><span class="intro-line">A Vassar education opens minds and doors.</span></p>

    <p class="animation-item">Each year, Vassar aims to enroll the most <strong>interesting</strong>, <strong>talented</strong>, and <strong>diverse</strong> first-year class possible.</p>

<!--
    <p class="animation-item">Each year, Vassar aims to enroll the most</p>
<?php // echo vassar_is_awesome('animation-item'); ?>
    <p class="animation-item">first-year class possible.</p>
-->



<?php echo end_sec_regularContent(); ?>



<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Your college journey</b>
   <b class="slide-from-right nice-big-serif">begins here.</b>',
    '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
    'sec-fixedCenteredTitle theme-verylightgray here-to-help',
    'mw-4',
    ['bg-image-url' => '/mockups/admission-home/assets/images/0145-15-05-hw-campus-vassar-vb-4747.jpg',
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
            'Applying to Vassar',
            '',
            ['url' => '/mockups/admission-home/apply/Untitled-1.jpg', 'alt' => '' ],
            'fancy-card animation-item card-has-cta-icon'
        ); ?>

        <p>What’s required / How to apply / Important Deadlines / Tuition</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Financial Aid Information',
            '',
            ['url' => '/mockups/admission-home/apply/Untitled-2.jpg', 'alt' => '' ],
            'fancy-card animation-item card-has-cta-icon'
        ); ?>

        <p>Early and regular decision / Transferring to Vassar</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Visit',
            '',
            ['url' => '/mockups/admission-home/assets/images/0219-17-05-kr-spring-vassar-0043.jpg', 'alt' => '' ],
            'fancy-card animation-item card-has-cta-icon'
        ); ?>

        <p>Get Vassar’s newsletter and other information about Vassar.</p>

        <?php echo end_item_cardWithText(); ?>



    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>



    <!-- stats -->

<?php
echo word_cycler('where-from');

echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">This is</b>
   <b class="slide-from-right">Vassar.</b>',
    '<p class="section-intro-text" style="font-size: 3rem; font-weight: 100; font-size: 4rem;
    font-weight: 100;
    max-width: 40rem;
    margin: 4rem auto 2rem;
    text-align: left;">Vassar is from <span id="where-from">everywhere</span></p>
   <p class="section-intro-text">World-class educations are built on world-wide communities. Our students come from 44 states and 17 countries. Nearly one in ten come from foreign countries; nearly half will study abroad while at Vassar.</p>

<style>
.hover-burgundy:hover {
  background: var(--color-vassar-burgundy) !important;
  color: #fff !important;
}
</style>

<div class="text-center">
<a href="" class="cta-link hover-burgundy" style="background: #fff">Meet Vassar</a>
</div>',

  'sec-fixedCenteredTitle theme-charcoal-to-white xhide-image',
  'mw-4',
    [
/*      'bg-image-url' => '/mockups/admission-home/journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg', */
      'bg-image-url' => '/mockups/admission-home/assets/images/0141-15-10-kr-fall-campus-vassar-0034.jpg',
        'bg-image-alt' => 'alt text',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.26);
      --section-bg-image-opacity: 0;
      --intro-line-color: #fff;
      --section-title-faded-color: var(--color-vassar-burgundy);
      --section-bg-color-after-content: #fff;
      '
    ]
); ?>


<?php echo row_fancyStats(); ?>

<div class="d-flex animation-zoom-in animate-when-content-appears animation-group" style="gap: 2vw; --flipcard-height: 14rem">

        <?php echo flipcard_stat(
            'Average Aid Award',
            '<span class="dollar">$</span>54<span class="smaller">K</span>',
            '<p>More than half of Vassar students receive financial aid.</p>
    ',
    'animation-item',
    '',
  );
  ?>

  <?php echo flipcard_stat(
    'Majors',
    '51',
    '<p>Choose from 48 departments and programs, 51 majors, plus the Independent Program (interdisciplinary “design your own” major).</p>',
    'animation-item'
  );
  ?>

  <?php echo flipcard_stat(
    'Student Orgs',
    '170',
    '<p>From volunteer opportunities in our local community to mystery hikes with the Outing Club, Vassar has an organization for everyone.</p>',
    'animation-item'
  );
  ?>

  <?php echo flipcard_stat(
    'Varsity Teams',
    '27',
    '<p>In the past three years, Vassar student-athletes have achieved All-American status in seven sports.</p>',
    'animation-item'
  );
  ?>

    </div>


<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- end stats -->



    <!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Our favorite</b>
   <b class="slide-from-right">places.</b>',
    '<p class="section-intro-text">We are extremely proud of our 1,000-acre campus. The Vassar campus has buildings that showcase classic architecture blended seamlessly with modern, cutting-edge facilities.</p>

    <p class="text-center mb-5"><small class="fst-italic">Videos with a <i class="icon fa fa-vr-cardboard mx-2"></i> icon are panoramic. Drag inside the video to look around!</small></p>',
    'sec-fixedCenteredTitle theme-burgundy',
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

    <div class="animation-group staggered-grid animation-zoom-in animate-when-content-appears gap-3 mb-3">




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
  get_icon('vr-cardboard').'Shakespeare Garden',
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
          get_icon('vr-cardboard').'Thompson Memorial Library',
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
          get_icon('vr-cardboard').'The Ecological Preserve',
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
          ['url' => 'https://vassartest.chuckyatsuk.com/img/favplaces-v2.jpg',
          'alt' => 'Student describing favorite place on campus'
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

   <p class="text-center">See the Vassar campus through the eyes of our students:</p>',
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


<style>
.stackla-placeholder {
  border: 4px dashed #f00;
  padding: 1rem;
}
</style>

<?php echo sec_hasColumns(
    null,
    3,
    null,
    'p-4 bg-transparent stackla-placeholder',
    ''
); ?>

<?php echo item_col(''); ?>
<?php
echo item_imageCard_modal(
    get_icon('play').'Study Night',
    null,
    'tiktok1-modal',
    null,
    ['url' => 'https://vassartest.chuckyatsuk.com/img/admission-home/tik1.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>
<?php
echo item_imageCard_modal(
    get_icon('play').'Main Tour',
    null,
    'tiktok2-modal',
    null,
    ['url' => 'https://vassartest.chuckyatsuk.com/img/admission-home/tik2.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>
<?php echo end_item_col(); ?>

<?php echo item_col(''); ?>
<?php
echo item_imageCard_modal(
    get_icon('play').'Geology Museum',
    null,
    'tiktok3-modal',
    null,
    ['url' => 'https://vassartest.chuckyatsuk.com/img/admission-home/tik3.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<div class="text-center mt-3 pt-5">
<a href="" class="cta-link">Schedule a Campus Visit</a>
</div>


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
<iframe class="modal-video" id="video-id--2081" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/AqDKltbh7h4?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=1" data-gtm-yt-inspected-8="true"></iframe>
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
        <iframe class="modal-video" id="video-id--2041" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/l9N-gTmvMgo?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fwww.vassar.edu&amp;widgetid=1" data-gtm-yt-inspected-7="true"></iframe>
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
    get_icon('play').'Day in the Life',
    null,
    'tiktok1-modal',
    '<div class="modal-body ratio ratio-9x16 bg-dark">
<video width="320" height="240" controls>
  <source src="https://vassartest.chuckyatsuk.com/img/admission-home/tik1.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>',
    ['url' => '/mockups/admission-home/fav-places-2/studio.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>

<?php
echo item_imageCard_modal_setup(
    get_icon('play').'Day in the Life',
    null,
    'tiktok2-modal',
    '<div class="modal-body ratio ratio-9x16 bg-dark">
<video width="320" height="240" controls>
  <source src="https://vassartest.chuckyatsuk.com/img/admission-home/tik2.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>',
    ['url' => '/mockups/admission-home/fav-places-2/studio.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>

<?php
echo item_imageCard_modal_setup(
    get_icon('play').'Geology Museum',
    null,
    'tiktok3-modal',
    '<div class="modal-body ratio ratio-9x16 bg-dark">
<video width="320" height="240" controls>
  <source src="https://vassartest.chuckyatsuk.com/img/admission-home/tik3.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>',
    ['url' => '/mockups/admission-home/fav-places-2/studio.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom'
);
?>


<?php echo site_footer(); ?>
