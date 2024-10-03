<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */


$page_info = '{
  "page_title":"Alumnae/i Association of Vassar College",
  "page_navTitle":"AAVC",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-community/aavc/0045-19-05-kr-spring-vassar-6002.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'An aerial view of the top of Jewett building on the Vassar campus, a large multi-story red brick building with many windows, surrounded by greenery, with the rooftops of other buildings in front of it.']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>

<?php echo sec_fullBleedImageColumn(
    'A Dynamic Global Network of 41,000+ Members!',
    $alums_img_path.'alums-community/aavc/Vassar_Reunion_19 BL_4788.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A group of people holding a large grey banner with the letters AAVC on it are smiling at the viewer.']
); ?>
<p>Since its founding in 1871, the AAVC has been dedicated to connecting alums to the College
    and to each other, sustaining lifelong relationships and shared Vassar experiences.</p>

    <p>Through class, regional, affinity, career, and educational programming, the AAVC partners with the Office of Advancement to offer a robust array of opportunities for all alums to engage, both in-person and virtually.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_hasColumns(
    'A Connection with Vassar Lasts for a Lifetime.',
    '3',
    '<p>Membership in the AAVC is <strong>automatic</strong> for all Vassar graduates and former students enrolled as undergraduates.</p>

<p>Choose your AAVC adventure, and discover exciting ways to get involved, make valuable connections, and give back!
</p>',
    'theme-dark-burgundy has-bg quad-pattern',
    ''

); ?>


<?php echo item_cardWithText(
    'AAVC Board of Directors',
    '/alums/community/aavc/board-members/',
    ['url' => '/alums/assets/img/alums-community/aavc/aavc.png', 'alt' => 'Black rectangle with white lettering that spells out AAVC.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>A group of dedicated volunteers that serves the College and more than <?php echo $facts['number_of_alums']; ?> alums at the highest level.</p>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Awards Program',
    '/alums/community/aavc/awards-program/',
    ['url' => '/alums/assets/img/alums-community/aavc/0114_18_09_KR_3944.jpg', 'alt' => 'Three people stand next to each other. On the left is a person in a blue outfit with light hair, in the middle is a person with mid length dark hair in a blue shirt and on the right is a person with short white hair in a blue suit. The person in the middle is holding an award while all three people smile at the viewer.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Recognizing alums who have made significant contributions to the vitality and success of the College and AAVC.</p>
<?php echo end_item_cardWithText(
    null,
); ?>

<?php echo item_cardWithText(
    'Bylaws',
    '/alums/community/aavc/bylaws/',
    ['url' => '/alums/assets/img/alums-community/aavc/0038-22-06-cs-reunion-vassar-084.jpg', 'alt' => 'A multi-storied red brick building with a light slate roof and a round cupola, viewed through the green leaves of some trees.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link download'
); ?>
<p>Read the Alumnae/i Association of Vassar College Bylaws.</p>
<?php echo end_item_cardWithText(
    null,
); ?>



<?php echo end_sec_hasColumns(); ?>




<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community-alums-groups.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-volunteer.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
