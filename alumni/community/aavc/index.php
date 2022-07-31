<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumnae/i Association of Vassar",
  "page_classes":"",
  "feature_image":"/assets/images/placeholders/placeholder-banner.png"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'needsalttxt']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'A dynamic global network of 41,000+ members!',
    $alumni_img_path.'alumni-community/aavc/Vassar_Reunion_19 BL_4788.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<p>Since its founding 1871, the AAVC has been dedicated to connecting alumni to the College
    and to each other, sustaining lifelong relationships and shared Vassar experiences.</p>

    <p>Through class, regional, affinity, career, and educational programming, the AAVC partners
    with the Office of Advancement to offer a robust array of opportunities for all alumni to
    engage, both in -person and virtually.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
    'A connection with Vassar lasts for a lifetime.',
    '3',
    '<p>Membership in the AAVC is <em>automatic</em> for all Vassar graduates and former students enrolled as undergraduates.</p>

<p>Choose your AAVC adventure, and discover exciting ways to get involved, make valuable connections, and give back!
</p>',
    'theme-dark-burgundy has-bg quad-pattern',
    ''

); ?>


<?php echo item_cardWithText(
    'AAVC Board of Directors',
    '/alumni/community/aavc/board-members/',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>A group of dedicated volunteers that serves the college and more than 40,000 alumni at the highest level.</p>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Awards Program',
    '/alumni/community/aavc/awards-program/',
    ['url' => '/alumni/assets/img/alumni-community/aavc/0114_18_09_KR_3944.jpg', 'alt' => 'replacealttext' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Recognizing alumni who have made significant contributions to the vitality and success of the College and AAVC.</p>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Bylaws',
    '/alumni/community/aavc/board-members/',
    ['url' => '/assets/images/placeholders/placeholder-wide.jpg', 'alt' => 'replacealttext' ],
    'fix card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link download'
); ?>
<p>Read the Alumnae/i Association of Vassar College Bylaws</p>
<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/community/community-alumni-groups.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footer(); ?>

