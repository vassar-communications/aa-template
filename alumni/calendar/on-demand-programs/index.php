<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"On-Demand Programs",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-calendar/on-demand/661_Matthew_Vassar_statue_May_2019_JA.JPG"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Missed it live? See it here.',
    '/alumni/assets/img/alumni-calendar/on-demand/Media_Panel_Yale_Club-Bernstein-Reid-2018.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p>On-Demand content featuring expertise from fellow grads and Vassar faculty and researchers.</p>


<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
    'On Demand Video',
    3,
    null,
    'theme-dark-burgundy quad-pattern has-bg',
    ''
); ?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'A Conversation on Public Health after COVID-19',
    null,
    'https://player.vimeo.com/video/615898660',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>




<?php
echo item_imageCard_videoModal(
    get_icon('play').'A Conversation on Women’s Rights: Present and Future',
    null,
    'https://player.vimeo.com/video/491739329',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'Higher Education in the Era of Pandemic',
    null,
    'https://player.vimeo.com/video/467204540',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Votes for Women: Vassar and the Politics of Voting Rights Past, Present, and Future
',
    null,
    'https://player.vimeo.com/video/463068325',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>


<?php
echo item_imageCard_videoModal(
    get_icon('play').'American Democracy at a Crossroads',
    null,
    'https://player.vimeo.com/video/457908119',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php
echo item_imageCard_videoModal(
    get_icon('play').'Vassar’s Sustainable Future: A Conversation',
    null,
    'https://player.vimeo.com/video/430219097',
    'vimeo',
    '',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg',
        'alt' => 'needsalttxt'
    ],
    'animation-item grid-item text-at-bottom text-white'
);

?>

<?php echo end_sec_hasColumns(); ?>


<?php echo sec_hasColumns(
    'Video Series',
    3,
    null,
    'theme-cream',
    ''
); ?>


<?php echo item_cardWithText(
    'The Vassar Classroom Revisited',
    'https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5032',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'needsalttxt' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'In Honor Of Linda Nochlin ’51',
    'https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5032',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'needsalttxt' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<?php echo end_item_cardWithText(
    null,
); ?>


<?php echo item_cardWithText(
    'AAAVC – “On Mattering”',
    'https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=5313',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'needsalttxt' ],
    'related-topics card--withParagraph card-has-cta-icon card-is-link'
); ?>

<?php echo end_item_cardWithText(
    null,
); ?>




<?php echo end_sec_hasColumns(); ?>


<?php echo relatedTopics(); ?>

<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-support-vassar.php');?>


<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

<?php
echo item_modal_standardVideo();
?>
