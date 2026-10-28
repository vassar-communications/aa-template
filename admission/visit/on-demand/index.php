
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Vassar on Demand",
  "feature_image": "/admission/assets/images/visit/on-demand/0256-19-10-ja-library-lawn-vassar-vb-066.jpg"
}';

/* === */

$page_info = json_decode($page_info, true);

/*
$page_info = [
  'page_title' => 'Vassar on Demand',
  'feature_image' => $placeholder_img_banner
];


 */
?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead(
  $page_info['feature_image'],
  ['image_alt_text' => 'Students outside on the library lawn']
); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/on-demand/0086-20-09-kr-library-vassar-0001.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Thompson Library on the Vassar Campus at dusk']
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Miss a virtual event or want to see more? Watch past events, presentations, and performances any time! This page will be updated as new events take place, so check back often to explore all that Vassar has to offer.</p>

    <!-- <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a> -->

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_hasColumns(
    'Demystifying Financial Aid',
    1,
    '<iframe src="https://player.vimeo.com/video/1239874121?h=fda178dcef&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="2026_Demystifying-Financial-Aid"></iframe>',
    '',
    ''
); ?>




<?php


echo item_imageCard_videoModal(
    get_icon('play').'Demystifying Financial Aid',
    null,
    'https://player.vimeo.com/video/1128902993',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/finaid-101.jpg',
        'alt' => 'A picture of a slide with the following text: “Financial Aid 101: Navigating the Financial Aid Process. Jacqueline Perez, Director of Student Financial Services, Vassar College; Emma Ritter, Senior Assistant Director, Vassar College.”'
    ],
    'animation-item grid-item text-at-bottom text-white'
);


//    get_icon('play').'Demystifying Financial Aid 2023',

/*
echo item_imageCard_videoModal(
    get_icon('play').'Demystifying Financial Aid',
    null,
    'https://player.vimeo.com/video/879455422?h=8fd1b2b0ca&badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/finaid-101.jpg',
        'alt' => 'A picture of a slide with the following text: “Financial Aid 101: Navigating the Financial Aid Process. Jacqueline Perez, Director of Student Financial Services, Vassar College; Emma Ritter, Senior Assistant Director, Vassar College.”'
    ],
    'animation-item grid-item text-at-bottom text-white'
);
*/


?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'QuestBridge: Find Your Fit at Vassar',
    null,
    'https://player.vimeo.com/video/879458084?h=aa00398155&badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/questbridge.jpg',
        'alt' => 'A slide from a presentation with the following text: “Questbridge: Find your fit at Vassar College”.'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>



<?php
echo item_imageCard_videoModal(
    get_icon('play').'International Student Life and Support',
    null,
    'https://player.vimeo.com/video/879457722?h=354bbf458a&badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/research-opportunities.jpg',
        'alt' => 'A slide from a presentation showing various statistics, as well as a photo of students working in a river with a net.'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>




<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Life at Vassar',
    3,
    '<p>Some text?</p>',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'2026 Move-In Day',
    null,
    'https://www.youtube.com/watch?v=zUiMrnfe9Sk',
    'youtube',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/interdisciplinary-living-and-learning.jpgx',
        'alt' => '2026 Move-In Day'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Office Hours',
    null,
    'https://www.youtube.com/watch?v=FXP35mcW6jk&list=PLURusQJONMcrE_HHDx6qDKY362QuIPlwx',
    'youtube',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/faculty-mentored-research.jpgX',
        'alt' => 'Office Hours'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Vassar Preserve',
    null,
    'https://www.youtube.com/watch?v=nb-TXGwhoGY',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/student-organizations.jpgX',
        'alt' => 'Vassar Preserve'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php echo end_sec_hasColumns(); ?>




<?php echo sec_hasColumns(
    'Student Performances',
    3,
    '<p>View recent live performances from Vassar students.</p>',
    'theme-dark-burgundy',
    ''
); ?>


<?php echo item_cardWithTextVideoModal(
    '“Is Love a Boy?” performed by the Vassar College Chamber Singers',
    'https://www.youtube.com/embed/f8meSHKeTSg',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/is-love-a-boy-performed-by-the-vassar-college-chamber-singers.jpg', 'alt' => '“Is Love a Boy?” performed by the Vassar College Chamber Singers' ],
    '',
    ['hlevel' => 4]
); ?>

<?php echo end_item_cardWithTextVideoModal(); ?>


<?php echo item_cardWithTextVideoModal(
    '“Unclouded Day” performed by the Vassar College Choir and Friends',
    'https://www.youtube.com/embed/D3JI_GKSvs8',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/unclouded-day-performed-by-the-vassar-college-choir-and-friends.jpg', 'alt' => '“Unclouded Day” performed by the Vassar College Choir and Friends' ],
    '',
    ['hlevel' => 4]
); ?>

<?php echo end_item_cardWithTextVideoModal(); ?>




<?php echo item_cardWithTextVideoModal(
    '“No Time” performed by the Vassar College Women’s Chorus',
    'https://www.youtube.com/embed/xe6lj-ZM8aY',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/no-time-performed-by-the-vassar-college-womens-chorus.jpg', 'alt' => '“No Time” performed by the Vassar College Women’s Chorus' ],
    '',
    ['hlevel' => 4]
); ?>

<?php echo end_item_cardWithTextVideoModal(); ?>



<?php echo end_sec_hasColumns(); ?>

<?php echo sec_regularContent(
    'Don’t Miss a Future Event!',
    'theme-charcoal has-bg quad-pattern',
    'text-center',
    ''
); ?>


<p>Be the first to know about new virtual visits! Join our mailing list to stay up to date with all things Vassar and get access to special events throughout the year.</p>

<a href="https://apply.vassar.edu/register/requestinfo" class="btn btn-light">Join the list</a>
<?php echo end_sec_regularContent(); ?>


<!-- Related Topics -->
<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-virtual-programs.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-in-person.php');?>
<?php include($project_paths['main_project_root'].'/admission/inc/pages/visit/visit-group-visits.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footer(); ?>

<?php
echo item_modal_standardVideo();
?>
