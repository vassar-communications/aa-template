 <?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Admission",
  "page_classes":"home",
  "page_navTitle":"Admission"
}';

/* === */
$page_info = json_decode($page_info, true);

?>


<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>


<!--<div class="buffer"></div>-->

  <?php echo sec_siteHeader_video(); ?>

<a href="/admission/apply/" class="m-2 btn btn-lg btn-primary arrow">Apply</a>
<a href="/admission/visit/" class="m-2  btn btn-lg btn-primary arrow">Visit</a>
<a href="https://apply.vassar.edu/register/requestinfo" class="m-2 btn btn-lg btn-primary arrow">Request Info</a>

<?php echo end_sec_siteHeader_video(); ?>

<span id="top"></span>
<?php echo make_nav_from_array(
  [
    'Explore' => 'explore/',
    'Apply' => 'apply/',
    'Visit' => 'visit/',
    'Financial Aid' => 'financial-aid/',
    'Quick Facts' => 'quick-facts/',
    'Connect' => 'connect/',
  ],
  'admission'
); ?>


<!-- animated pullquote goes here -->
<?php echo sec_regularContent(
    null,
    'ticker-section theme-verylightgray',
    'animation-fade-in animate-when-content-appears animation-group',
    ['css' => '--sequential-animation-item-gap: 0.3s;']
); ?>


<p class="animation-item"><span class="intro-line">A Vassar education opens minds and doors.</span></p>

<p class="animation-item">Each year, Vassar aims to enroll the most <strong>interesting</strong>, <strong>talented</strong>, and <strong>diverse</strong> first-year class possible.</p>


<?php echo end_sec_regularContent(); ?>


<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Your college journey</b>
   <b class="slide-from-right nice-big-serif">begins here.</b>',
    '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
    'sec-fixedCenteredTitle theme-verylightgray here-to-help',
    'mw-4',
    ['bg-image-url' => '/admission/assets/images/0145-15-05-hw-campus-vassar-vb-4747.jpg',
        'bg-image-alt' => 'A person sits on a bench under a tree in front of the library',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      --section-title-faded-color: #444;
      --bs-gap: 1rem;
      ']

); ?>



<div class="grid cols-2 animation-zoom-in animate-when-content-appears animation-group">



    <?php echo item_cardWithText(
        'Apply to Vassar',
        '/admission/apply/',
        ['url' => '/admission/assets/images/admission-home/0198-19-11-kwe-library-vassar-vb-5415.jpg', 'alt' => 'A person at a library study table taking notes next to a stack of four books.' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
    ); ?>

    <p>What’s required / How to apply / Important Deadlines / Tuition</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>





    <?php echo item_cardWithText(
        'Visit',
        '/admission/visit/',
        ['url' => '/admission/assets/images/admission-home/0100-21-10-kr-fw-general-vassar-0057.jpg', 'alt' => 'A family of three people walking in front of Main Building, smiling' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
    ); ?>

    <p>Plan your in-person or virtual visit.</p>

    <?php echo end_item_cardWithText(
        null,
    ); ?>

    <?php echo item_cardWithText(
        'Financial Aid Information',
        '/admission/financial-aid/',
        ['url' => '/admission/assets/images/admission-home/0177_16_09_KR_0072.jpg', 'alt' => 'Two people walking on a path in front of Rockefeller Hall' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'

    ); ?>

    <p>Early and regular decision / Transferring to Vassar</p>

    <?php echo end_item_cardWithText(
        null,
    ); ?>


    <?php echo item_cardWithText(
        'Request Information',
        'https://apply.vassar.edu/register/requestinfo',
        ['url' => '/admission/assets/images/admission-home/0065-19-05-kr-jewett-dorm-vassar-4374.jpg', 'alt' => 'A student in their dorm room sitting at a desk writing in a notebook' ],
        'card--withParagraph animation-item card-has-cta-icon card-has-cta-label bg-dark card-is-link'
    ); ?>

    <p>Get Vassar’s newsletter and other information about Vassar.</p>


    <?php echo end_item_cardWithText(
        null,
    ); ?>



</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>



<!-- stats -->

<?php
// echo word_cycler('where-from');

echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">This is</b>
   <b class="slide-from-right">Vassar.</b>',
    '<h2 class="section-intro-text" style="font-size: 3rem; font-weight: 100; font-size: 4rem;
    font-weight: 100;
    max-width: 40rem;
    margin: 4rem auto 2rem;
    text-align: left;">Vassar is from <span id="x-where-from">everywhere</span></h2>
   <h3 class="section-intro-text">A world-class education is built on worldwide communities. Our students come from '.$class_stats['number_of_states'].' states and '. $class_stats['number_of_countries']
.' countries. Nearly one in ten come from foreign countries; nearly half will study abroad while at Vassar.</h3>
<div class="text-center mb-5">

<a href="/admission/quick-facts/community/" class="btn btn-lg btn-light arrow me-4 mb-3">Meet Vassar</a>

<a href="/admission/quick-facts/class-profile/" class="btn btn-lg btn-light arrow mb-3">Just the facts</a>

</div>',

    'sec-fixedCenteredTitle theme-charcoal-to-white xhide-image',
    'mw-4',
    [
        /*      'bg-image-url' => '/admission/journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg', */
        'bg-image-url' => '/admission/assets/images/0141-15-10-kr-fall-campus-vassar-0034.jpg',
        'bg-image-alt' => 'Students playing with a pile leaves on the library lawn, smiling',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.26);
      --section-bg-image-opacity: 0;
      --intro-line-color: #fff;
      --section-title-faded-color: $burgundy;
      --section-bg-color-after-content: #fff;
      '
    ]
); ?>


<?php echo row_fancyStats(); ?>

<div class="grid cols-4 flipcards animation-zoom-in animate-when-content-appears animation-group  flex-column flex-md-row" style="gap: 2vw; --flipcard-height: 14rem">

    <?php echo flipcard_stat(
        'Average Aid Award',
        '<span class="dollar">$</span>54<span class="smaller">K</span>',
        'More than half of Vassar students receive financial aid.
    ',
        'animation-item',
        '/admission/financial-aid/',
        null,
        '* 21/22 academic year'
    );
    ?>

    <?php echo flipcard_stat(
        'Majors',
        $facts['number_of_majors'],
        'Choose from 48 departments and programs, '.$facts['number_of_majors'].' majors, plus the Independent Program (interdisciplinary “design your own” major).',
        'animation-item',
        '/admission/explore/academics/'
    );
    ?>

    <?php echo flipcard_stat(
        'Student Orgs',
        $resources['student_orgs'],
        'From volunteer opportunities in our local community to mystery hikes with the Outing Club, Vassar has an organization for everyone.',
        'animation-item',
        '/admission/explore/student-life/'
    );
    ?>

    <?php echo flipcard_stat(
        'Grad Placement',
        '96%',
        'Within six months of graduating, 96% of Vassar students are employed, in graduate school, or in a competitive fellowship.',
        'animation-item',
        '/admission/explore/outcomes/'
    );
    ?>

</div>

<?php /* <p class="p-4 mt-5 text-center"><i class="fa-solid fa-circle-info me-2"></i> These figures are for the <a href="https://offices.vassar.edu/institutional-research/data/2021-2022/">2021/22 academic year</a>.</p> */ ?>

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- end stats -->



<!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Our favorite</b>
   <b class="slide-from-right">places.</b>',
    '<h3 class="section-intro-text">We are extremely proud of our 1,000-acre campus. The Vassar campus has buildings that showcase classic architecture blended seamlessly with modern, cutting-edge facilities.</h3>

    <p class="text-center mb-5 fst-italic fs-5">Videos with an <i class="icon fa fa-vr-cardboard mx-2"></i> icon are panoramic. Drag inside the video to look around!</p>',
    'sec-fixedCenteredTitle theme-burgundy',
    'mw-4',
    ['bg-image-url' => '/admission/assets/images/admission-home/fav-places/0083-19-06-tt-shakespeare-vassar-0357.jpg',
        'bg-image-alt' => 'Roses in the Shakespeare Garden',
        'css' => '
      --section-title-size: 10vw;
      /* --section-title-faded-opacity: 0.2; */
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0;
      '
    ]
); ?>

<div class="animation-group staggered-grid animation-zoom-in animate-when-content-appears gap-3  mb-3">



    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Bridge for Laboratory Sciences',
        null,
        'https://www.youtube.com/embed/AqDKltbh7h4',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/110619_160over90_Vassar_5483.jpg',
            'alt' => 'People sitting at tables and chairs in a large open space of the Bridge for Laboratory Sciences'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>




    <?php
    echo item_imageCard_videoModal(
        get_icon('vr-cardboard').'Shakespeare Garden',
        null,
        'https://www.youtube.com/embed/pfJIwU-Kifg',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/0056-21-06-kr-campus-vassar-0006-copy.jpg',
            'alt' => 'A stone path in the Shakespeare Garden'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>


</div>

<div class="animation-group staggered-grid-reverse animation-zoom-in animate-when-content-appears gap-3 mb-3">



    <?php
    echo item_imageCard_videoModal(
        get_icon('vr-cardboard').'Thompson Memorial Library',
        null,
        'https://www.youtube.com/embed/lQ0Jb9u6zTY',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/0212-18-10-kr-library-fall-vassar-3819.jpg',
            'alt' => 'Front exterior view of the main library with trees in the foreground framing the building'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>



    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Gordon Commons',
        null,
        'https://www.youtube.com/embed/l9N-gTmvMgo',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/0195-19-11-kwe-gordon-vassar-1644.jpg',
            'alt' => 'A group of five people sitting at a table eating and conversing in the Gordon Commons dining hall'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>




</div>

<div class="animation-group staggered-grid animation-zoom-in animate-when-content-appears gap-3 mb-3 one-centered-wide-item-layout">

    <?php
    echo item_imageCard_videoModal(
        get_icon('vr-cardboard').'The Ecological Preserve',
        null,
        'https://www.youtube.com/embed/Wjxz5QMAw3c',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/farm-ramble-walking-Tour-1709-sal-1.jpg',
            'alt' => 'People using the hiking path at the Vassar Ecological Preserve'
        ],
        'animation-item grid-item text-at-bottom text-white centered-wide-item'
    );

    ?>

    <?php /*
    echo item_imageCard_videoModal(
        get_icon('play').'Student Picks',
        null,
        'e2Qz73uGyLs',
        'youtube',
        '',
        ['url' => '/admission/assets/images/admission-home/fav-places/favplaces-v2.jpg',
            'alt' => 'Student speaking while being interviewed'
        ],
        'animation-item grid-item text-at-bottom text-white'
    ); */ ?>


</div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- fav places -->


<!-- visit -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Visit before</b>
   <b class="slide-from-right">you visit.</b>',
    '<h3 class="section-intro-text">
All Vassar students are surrounded by an environment designed to spark something amazing—a place where greatness can spring to life. Explore virtual visiting opportunities today and learn more about in-person visits.
   </h3>

   <p class="text-center mb-5 fs-5">See the Vassar campus through the eyes of our students:</p>',
    'sec-fixedCenteredTitle theme-dark-burgundy featured-video',
    'mw-4',
    ['bg-image-url' => '/admission/assets/images/journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
        'bg-image-alt' => 'Large group of students seated on a lawn in front of the Thompson Memorial Library on Vassar campus',
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


<div class="animation-group staggered-grid  animation-zoom-in animate-when-content-appears gap-3  mb-3">

    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Art Studios',
        null,
        '/admission/assets/videos/art-studios.mp4',
        'custom',
        '',
        ['url' => '/admission/assets/images/admission-home/art-studio.jpg',
            'alt' => 'An art studio with easels, paints, stools and carts with art materials'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>

    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Car Camera Rigging',
        null,
        '/admission/assets/videos/camera-rigging.mp4',
        'custom',
        '/admission/assets/videos/camera-rigging.mp4',
        ['url' => '/admission/assets/images/admission-home/camera-rigging.jpg',
            'alt' => 'Videographer with camera and editing equipment outside'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>

</div>


<div class="animation-group staggered-grid tiktok-grid animation-zoom-in animate-when-content-appears gap-3  mb-3">

    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Day in the Life',
        null,
        '/admission/assets/videos/day-in-life.mp4',
        'custom',
        '/admission/assets/videos/day-in-life.mp4',
        ['url' => '/admission/assets/images/admission-home/video/day-1.jpg',
            'alt' => 'Student working on a laptop in front of a window'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>


    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Dorm Tour: Noyes',
        null,
        '/admission/assets/videos/dorm-a.mp4',
        'custom',
        '/admission/assets/videos/dorm-a.mp4',
        ['url' => '/admission/assets/images/admission-home/video/dorm-a-1.jpg',
            'alt' => 'View of campus quad through a sunny window'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>

    <?php
    echo item_imageCard_videoModal(
        get_icon('play').'Dorm Tour: Town Houses',
        null,
        '/admission/assets/videos/dorm-b.mp4',
        'custom',
        '/admission/assets/videos/dorm-b.mp4',
        ['url' => '/admission/assets/images/admission-home/video/dorm-b.jpg',
            'alt' => 'Decorative string lights on a dorm wall'
        ],
        'animation-item grid-item text-at-bottom text-white'
    );

    ?>


</div>


<div class="text-center mt-3 pt-5">
    <a href="/admission/visit/in-person/" class="btn btn-lg btn-light arrow">Schedule a Campus Visit</a>
</div>


<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- end visit -->


<!-- you may be wondering -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">You may</b>
       <b class="slide-from-right">be wondering:</b>',
    '<h3 class="section-intro-text">Here are some answers to common questions.
       </h3>

       ',
    'sec-fixedCenteredTitle theme-verylightgray xfeatured-video',
    'mw-4',
    ['bg-image-url' => '/admission/assets/images/0027-21-05-kr-founders-vassar-0102.jpg',
        'bg-image-alt' => 'Crowd watching fireworks over Vassar campus',
        'css' => '
          --section-title-size: 9vw;
          --title-container-bg-beforeContent: rgba(0,0,0,0.1);
          /* --section-title-faded-opacity: 0.2; */
          --section-bg-image-opacity: 0;
            --section-title-faded-color: var(--color-vassar-dark-burgundy);


          '
    ]
);
// visit/0216-18-10-jsu-fall-drone-vassar-R01895.jpg ?>


<div class="grid cols-3 commonquestions animation-group animation-zoom-in animate-when-content-appears" style="--bs-gap: 1rem">

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
    <a href="/admission/quick-facts/" class="m-2 btn btn-lg btn-light arrow">More quick facts</a>
    <a href="/admission/connect/" class="m-2 btn btn-lg btn-light arrow">Contact us</a>

</div>




<?php echo end_sec_fixedCenteredTitle(); ?>

<!-- end you may be wondering -->

<div class="admission-news-carousel section section--carousel theme-charcoal px-0 quad-pattern has-bg">

<h2 class="section-intro-text news-intro text-center mb-5" style="">What’s Happening at Vassar?</h2>

<?php // echo newsCarousel();

echo five_items();

// include($project_paths['main_project_root'].'/admission/inc/carousel-admission-home-news.inc');

?>

</div>

 <?php echo item_modal_standardVideo(); ?>





 <?php echo site_footer(); ?>
