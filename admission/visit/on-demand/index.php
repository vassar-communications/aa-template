
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title": "Vassar on Demand",
  "feature_image": "/assets/images/placeholders/placeholder-banner.png"
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

<?php echo page_partialmasthead($page_info['feature_image']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_fullBleedImageColumn(
    null,
    $admission_img_path.'visit/on-demand/0086-20-09-kr-library-vassar-0001.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">Miss a virtual event or want to see more? Watch past events, presentations, and performances any time! This page will be updated as new events take place, so check back often to explore all that Vassar has to offer.</h1>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_hasColumns(
    'Voices of Vassar',
    3,
    '<p>Hear directly from our students about some of their favorite Vassar topics! These student-designed presentations will give you the chance to learn about life at Vassar directly from the source.</p>',
    '',
    ''
); ?>

<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'The College Search During the Pandemic',
    null,
    '487429322',
    'vimeo',
    '',
    ['url' => $admission_img_path.'placeholder.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php echo end_item_col(); ?>


<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Demystifying Financial Aid',
    null,
    '487430715',
    'vimeo',
    '',
    ['url' => $admission_img_path.'placeholder.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php echo end_item_col(); ?>


<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Demystifying Financial Aid',
    null,
    '487422599',
    'vimeo',
    '',
    ['url' => $admission_img_path.'placeholder.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>



<?php echo sec_hasColumns(
    'Weekly Features',
    3,
    '<p>Hear directly from our students about some of their favorite Vassar topics! These student-designed presentations will give you the chance to learn about life at Vassar directly from the source.</p>',
    'theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Interdisciplinary Living and Learning',
    '#',
    ['url' => $admission_img_path.'placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Faculty Mentored Research',
    '#',
    ['url' => $admission_img_path.'placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Student Organizations',
    '#',
    ['url' => $admission_img_path.'placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'The Transitions Program',
    '#',
    ['url' => $admission_img_path.'placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>




<?php echo sec_hasColumns(
    'Student Performances',
    3,
    '<p>View recent live performances from Vassar students.</p>',
    '',
    ''
); ?>

<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'“Is Love a Boy?” performed by the Vassar College Chamber Singers',
    null,
    'f8meSHKeTSg',
    'youtube',
    '',
    ['url' => $admission_img_path.'admission-home/video/food-1.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php echo end_item_col(); ?>


<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'“Unclouded Day” performed by the Vassar College Choir and Friends',
    null,
    '484138020',
    'youtube',
    '',
    ['url' => $admission_img_path.'placeholder.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php echo end_item_col(); ?>


<?php echo item_col(); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'“No Time” performed by the Vassar College Women’s Chorus',
    null,
    '484138020',
    'youtube',
    '',
    ['url' => $admission_img_path.'placeholder.jpg',
        'alt' => 'asdfasdf'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php echo item_cardWithText(
    '“No Time” performed by the Vassar College Women’s Chorus',
    'xe6lj-ZM8aY',
    ['url' => $admission_img_path.'placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

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
