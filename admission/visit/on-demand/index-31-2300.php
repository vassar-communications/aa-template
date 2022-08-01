
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
    <h1 class="display-6">Miss a virtual event or want to see more? Watch past events, presentations, and performances any time! This page will be updated as new events take place, so check back often to explore all that Vassar has to offer.</h1>

    <!-- <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a> -->

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_hasColumns(
    'Voices of Vassar',
    3,
    '<p>Hear directly from our campus community about some of their favorite Vassar topics! These presentations will give you the chance to learn about life at Vassar directly </p>',
    '',
    ''
); ?>




<?php
echo item_imageCard_videoModal(
    get_icon('play').'The College Search During the Pandemic',
    null,
    '487429322',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-college-search-during-the-pandemic.jpeg',
        'alt' => 'The College Search During the Pandemic'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'A Case for the Liberal Arts',
    null,
    '487422599',
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
    '487430715',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/demystifying-financial-aid.jpeg',
        'alt' => 'Demystifying Financial Aid'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>




<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Weekly Features',
    2,
    '<p>Hear directly from our students about some of their favorite Vassar topics! These student-designed presentations will give you the chance to learn about life at Vassar directly from the source.</p>',
    'theme-charcoal quad-pattern has-bg',
    ''
); ?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Interdisciplinary Living and Learning',
    null,
    '487419997',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/interdisciplinary-living-and-learning.jpeg',
        'alt' => 'Interdisciplinary Living and Learning'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Faculty Mentored Research',
    null,
    '487418026',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/faculty-mentored-research.jpeg',
        'alt' => 'Faculty Mentored Research'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Student Organizations',
    null,
    '486530538',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/student-organizations.jpeg',
        'alt' => 'Student Organizations'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'The Transitions Program',
    null,
    '484138020',
    'vimeo',
    '',
    ['url' => '/admission/assets/images/visit/video-thumbnails/the-transitions-program.jpeg',
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
    'f8meSHKeTSg',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/is-love-a-boy-performed-by-the-vassar-college-chamber-singers.jpeg', 'alt' => '“Is Love a Boy?” performed by the Vassar College Chamber Singers' ],
    '',
    ['hlevel' => 4]
); ?>

<?php echo end_item_cardWithTextVideoModal(); ?>


<?php echo item_cardWithTextVideoModal(
    '“Unclouded Day” performed by the Vassar College Choir and Friends',
    'D3JI_GKSvs8',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/unclouded-day-performed-by-the-vassar-college-choir-and-friends.jpeg', 'alt' => '“Unclouded Day” performed by the Vassar College Choir and Friends' ],
    '',
    ['hlevel' => 4]
); ?>

<?php echo end_item_cardWithTextVideoModal(); ?>




<?php echo item_cardWithTextVideoModal(
    '“No Time” performed by the Vassar College Women’s Chorus',
    'xe6lj-ZM8aY',
    'youtube',
    ['url' => '/admission/assets/images/visit/video-thumbnails/no-time-performed-by-the-vassar-college-womens-chorus.jpeg', 'alt' => '“No Time” performed by the Vassar College Women’s Chorus' ],
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
