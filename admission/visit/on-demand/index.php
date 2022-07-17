
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
 ?>
<?php

/*  PAGE INFO ============ */

$page_title = "Virtual Programs";
$page_classes = "";

/*  ---------------------- */

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>



<?php echo page_textmasthead('theme-dark-burgundy'); ?>


<?php echo breadcrumbNav('theme-cream'); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-breadcrumb.php');?>
<?php echo end_sec_breadcrumbNav(); ?>


<?php echo toplinksNav(); ?>
<?php include($project_paths['main_project_root'].'/admission/inc/nav-elements/admission-visit-nav.php');?>
<?php echo end_sec_toplinksNav(); ?>


<?php /*  PAGE CONTENT === */ ?>




<?php echo sec_fullBleedImageColumn(
    null,
    'https://vassartest.chuckyatsuk.com/img/visit/on-demand/0086-20-09-kr-library-vassar-0001.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <h1 class="display-6">Miss a virtual event or want to see more? Watch past events, presentations, and performances any time! This page will be updated as new events take place, so check back often to explore all that Vassar has to offer.</h1>

    <a href="https://apply.vassar.edu/portal/campusvisitcalendar" class="btn btn-primary mt-5 arrow">Register Now</a>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_wideContent(
    'Voices of Vassar',
    'Hear directly from our students about some of their favorite Vassar topics! These student-designed presentations will give you the chance to learn about life at Vassar directly from the source.',
    'theme-cream',
    'mw-4'
); ?>

<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'The College Search During the Pandemic',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Demystifying Financial Aid',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'A Case for the Liberal Arts',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo end_sec_wideContent(); ?>


<?php echo sec_wideContent(
    'Weekly Features',
    'Hear directly from our students about some of their favorite Vassar topics! These student-designed presentations will give you the chance to learn about life at Vassar directly from the source.',
    '',
    'mw-4'
); ?>

<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Interdisciplinary Living and Learning',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Faculty Mentored Research',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'Student Organizations',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    'The Transitions Program',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo end_sec_hasColumns(); ?>

<?php echo end_sec_wideContent(); ?>



<?php echo sec_wideContent(
    'Student Performances',
    'View recent live performances from Vassar students.',
    'theme-cream',
    'mw-4'
); ?>

<?php echo sec_hasColumns(
    null,
    3,
    null,
    '',
    ''
); ?>

<?php echo item_col(); ?>
<?php echo item_cardWithText(
    '“Is Love a Boy?” performed by the Vassar College Chamber Singers',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    '“Unclouded Day” performed by the Vassar College Choir and Friends',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>


<?php echo item_col(); ?>
<?php echo item_cardWithText(
    '“No Time” performed by the Vassar College Women’s Chorus',
    '#',
    ['url' => 'https://vassartest.chuckyatsuk.com/img/placeholder.jpg', 'alt' => 'The College Search During the Pandemic' ],
    '',
    ['hlevel' => 4]
); ?>
<div class="px-0 btn btn-link arrow"><i class="mx-0 circle fa-solid fa-play"></i></div>
<?php echo end_item_cardWithText(); ?>
<?php echo end_item_col(); ?>

<?php echo end_sec_hasColumns(); ?>

<?php echo end_sec_wideContent(); ?>

<?php echo sec_regularContent(
    'Don’t Miss a Future Event!',
    'theme-dark-burgundy',
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