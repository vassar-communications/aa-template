<?php

include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include( $project_paths['main_project_root'] . '/functions.php');

?>

<?php

/*  PAGE INFO ============ */

$page_title = "Vassar Admission";

/*  ---------------------- */

?>
<?php include($project_paths['main_project_root'].'/core/template-parts/patternlibrary.php');?>
<?php echo site_header(); ?>

    <!--<div class="buffer"></div>-->

<?php echo sec_siteHeader_video(); ?>
    <a href="" class="btn btn-lg btn-primary">Apply</a>
    <a href="" class="btn btn-lg btn-primary">Request Info</a>
<?php echo end_sec_siteHeader_video(); ?>

    <!-- site masthead goes here -->

    <!-- animated pullquote goes here -->
<?php echo sec_wordByWord(
    null,
    'animate-when-content-appears space-around-image theme-cream',
    null,
    ['intro-line' => 'A Vassar education opens minds and doors.']
); ?>

    <p>Each year, Vassar aims to enroll the most interesting, talented, and diverse first-year class possible.</p>

<?php echo end_sec_wordByWord(); ?>



<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Your college journey</b>
   <b class="slide-from-right nice-big-serif">begins here.</b>',
    '<p class="section-intro-text">Our Admission team is here to help you with:</p>',
    'sec-fixedCenteredTitle',
    'mw-4',
    ['bg-image-url' => 'journey/0100-21-10-kr-fw-general-vassar-0057.jpg',
        'bg-image-alt' => 'replacethisalttext',
        'css' => '
      --title-container-bg-beforeContent: rgba(0,0,0,0.2);
      --section-title-faded-opacity: 0.1;
      --section-bg-image-opacity: 0.1;
      --section-title-faded-color: #000;
      '
    ]

); ?>

    <div class="grid cols-3">
        <?php echo item_cardWithText(
            'Applying to Vassar',
            '',
            ['url' => 'apply/untitled-3.jpg', 'alt' => 'replacealttext' ],
            'animation-item'
        ); ?>

        <p>What’s required / How to apply / Important Deadlines / Tuition</p>
        <p><strong>Learn more</strong> →</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Financial Aid Information',
            '',
            ['url' => 'apply/untitled-2.jpg', 'alt' => 'replacealttext' ],
            'animation-item'
        ); ?>

        <p>Early and regular decision / Transferring to Vassar</p>
        <p><strong>Learn more</strong> →</p>

        <?php echo end_item_cardWithText(); ?>


        <?php echo item_cardWithText(
            'Request Information',
            '',
            ['url' => 'apply/untitled-1.jpg', 'alt' => 'replacealttext' ],
            'animation-item'
        ); ?>

        <p>Have questions? Need Information? Get Vassar’s newsletter and other information about Vassar.</p>
        <p><strong>Learn more</strong> →</p>

        <?php echo end_item_cardWithText(); ?>



    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>



    <!-- stats -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">This is</b>
   <b class="slide-from-right">Vassar.</b>',
    '<p class="section-intro-text">

Vassar is from everywhere. World-class educations are built on world-wide communities. Our students come from 44 states and 17 countries. Nearly one in ten come from foreign countries; nearly half will visit them while at Vassar. Over half of Vassar students receive financial aid.

<p><strong class="cta-link">Learn more</strong></p>

   </p>',
    'sec-fixedCenteredTitle theme-burgundy',
    'mw-4',
    ['bg-image-url' => 'journey/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
        'bg-image-alt' => 'replacethisalttext',
        'css' => '
      --section-title-size: 14vw;
      --section-title-faded-opacity: 0.1;
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>

    <div class="xlayout-masonry animation-group loose-grid stat-grid">
        <!--<div class="grid-sizer"></div>-->

        <?php echo item_statIcon(
            '2,435',
            'students',
            'people-group',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '340',
            'faculty',
            'person-chalkboard',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '$54K',
            'average aid award',
            'coins',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '51',
            'majors',
            'book',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '8:1',
            'students to faculty',
            'users',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '27',
            'varsity teams',
            'person-running',
            'animation-item masonry-item'
        ); ?>

        <?php echo item_statIcon(
            '170',
            'student orgs',
            'screwdriver-wrench',
            'animation-item masonry-item'
        ); ?>

    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- end stats -->



    <!-- visit -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Visit before</b>
   <b class="slide-from-right">you visit.</b>',
    '<p class="section-intro-text">
All Vassar students are surrounded by an environment designed to spark something amazing—a place where greatness can spring to life. Explore virtual visiting opportunities today and learn more about in-person visits.
   </p>

<p><strong class="cta-link">Visiting the Vassar campus</strong></p>
   ',
    'sec-fixedCenteredTitle theme-dark-burgundy featured-video',
    'mw-4',
    ['bg-image-url' => 'visit/0216-18-10-jsu-fall-drone-vassar-R01895.jpg',
        'bg-image-alt' => 'replacethisalttext',
        'css' => '
      --section-title-size: 14vw;
      --section-title-faded-opacity: 0.1;
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>

    <div class="embed-responsive embed-responsive-16by9 ratio ratio-16x9">
        <iframe title="vimeo-player" src="https://player.vimeo.com/video/531201548?h=eca7efdc85" width="640" height="360" frameborder="0" allowfullscreen></iframe>
    </div>




<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- end visit -->



    <!-- fav places -->

<?php echo sec_fixedCenteredTitle(
    '<b class="slide-from-left">Our favorite</b>
   <b class="slide-from-right">places.</b>',
    '<p class="section-intro-text">

Vassar is extremely proud of our 1,000-acre campus. There are buildings that showcase classic architecture blended seamlessly with modern, cutting-edge facilities.

   </p>',
    'sec-fixedCenteredTitle theme-charcoal',
    'mw-4',
    ['bg-image-url' => 'visit/0256-19-10-ja-library-lawn-vassar-vb-038.jpg',
        'bg-image-alt' => 'replacethisalttext',
        'css' => '
      --section-title-size: 14vw;
      --section-title-faded-opacity: 0.1;
      --title-container-bg-beforeContent: rgba(0,0,0,0.4);
      --section-bg-image-opacity: 0.1;
      '
    ]
); ?>

    <div class="layout-masonry layout-masonry-33 animation-group">

        <div class="grid-sizer"></div>

        <?php echo item_imageCard(
            get_icon('play').'Shakespeare Garden',
            null,
            'apple.com',
            ['url' => 'fav-places/0056-21-06-kr-campus-vassar-0006.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item text-at-bottom'
        ); ?>

        <?php echo item_imageCard(
            get_icon('play').'Thompson Memorial Library',
            null,
            'apple.com',
            ['url' => 'fav-places/0212-18-10-kr-library-fall-vassar-3819.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item text-at-bottom',
            ['hlevel' => 4]
        ); ?>

        <?php echo item_imageCard(
            get_icon('play').'Gordon Commons',
            null,
            'apple.com',
            ['url' => 'fav-places/0195-19-11-kwe-gordon-vassar-1644.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item text-at-bottom',
            ['hlevel' => 4]
        ); ?>

        <?php echo item_imageCard(
            get_icon('play').'Bridge for Laboratory Sciences',
            null,
            'apple.com',
            ['url' => 'fav-places/110619_160over90_Vassar_5483.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item text-at-bottom',
            ['hlevel' => 4]
        ); ?>

        <?php echo item_imageCard(
            get_icon('play').'The Ecological Preserve',
            null,
            'apple.com',
            ['url' => 'fav-places/farm-ramble-walking-Tour-1709-sal-1.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item w-66 text-at-bottom',
            ['hlevel' => 4]
        ); ?>

        <?php echo item_imageCard(
            get_icon('play').'Student Picks',
            null,
            'apple.com',
            ['url' => 'fav-places/studio.jpg', 'alt' => 'replacealttext' ],
            'animation-item masonry-item text-at-bottom',
            ['hlevel' => 4]
        ); ?>

    </div><!-- end layout-masonry -->

<?php echo end_sec_fixedCenteredTitle(); ?>

    <!-- fav places -->





    <div class="buffer"></div>

<?php echo site_footer(); ?>