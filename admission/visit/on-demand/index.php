
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
    'Voices of Vassar',
    3,
    '<p>Hear directly from our campus community about some of their favorite Vassar topics! These presentations will give you the chance to learn about life at Vassar directly.</p>',
    '',
    ''
); ?>




<?php
echo item_imageCard_videoModal(
    get_icon('play').'The College Search During the Pandemic',
    null,
    'https://player.vimeo.com/video/487429322?badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-college-search-during-the-pandemic.jpg',
        'alt' => 'The College Search During the Pandemic'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'A Case for the Liberal Arts',
    null,
    'https://player.vimeo.com/video/487422599?badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/a-case-for-the-liberal-arts-2.jpg',
        'alt' => 'A Case for the Liberal Arts'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>



<?php
echo item_imageCard_videoModal(
    get_icon('play').'Demystifying Financial Aid',
    null,
    'https://player.vimeo.com/video/761423179?h=20cf09ebd9&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/demystifying-financial-aid-2022.jpg',
        'alt' => 'Demystifying Financial Aid'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>




<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Weekly Features',
    2,
    '<p>These presentations are created by students from their own points of view.</p>',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Interdisciplinary Living and Learning',
    null,
    'https://player.vimeo.com/video/487419997?badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/interdisciplinary-living-and-learning.jpg',
        'alt' => 'Interdisciplinary Living and Learning'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Faculty Mentored Research',
    null,
    'https://player.vimeo.com/video/487418026?badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/faculty-mentored-research.jpg',
        'alt' => 'Faculty Mentored Research'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Student Organizations',
    null,
    'https://player.vimeo.com/video/486530538?badge=0',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/student-organizations.jpg',
        'alt' => 'Student Organizations'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'The Transitions Program',
    null,
    'https://player.vimeo.com/video/484138020',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-transitions-program.jpg',
        'alt' => 'The Transitions Program'
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
