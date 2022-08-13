<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alumnae House",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/alumnae-house/0073-21-06-kr-summer-vassar-0017.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Front Exterior of Alumnae House']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $alumni_img_path.'alumni-resources/alumnae-house/Alumnae_House_06_CB_08.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'Common area inside Alumnae House']
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <p class="">Celebrating its 100th anniversary in 2024, Alumnae House was gifted to Vassar College by sisters Blanche Ferry Hooker, class of 1894, and Queene Ferry Coonley, class of 1896. They intended it to be a center for the activities of the alumnae of the College, but more importantly wanted all alumnae to have a welcoming space that they could call home when returning to campus. They hoped each houseguest would depart saying, “It is well for us to have been here.”</p>

</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Alumnae House',
    null,
    '',
    ''
); ?>
<p>Today, Alumnae House is open to the Vassar community, prospective students, friends, and the local community. Our uniquely appointed guest rooms offer modern amenities while preserving the historic ambiance of the inn. The iconic spaces on the first floor provide a gracious venue for events, large and small, including weddings, celebrations, meetings, and fundraisers.</p>

<p>A classic example of American-Tudor style architecture, Alumnae House is filled with impressive artwork, period furniture, Vassar memorabilia, cozy reading nooks, and working fireplaces. The living room is majestic with its hand-painted ceiling and Violet Oakley Triptych. The walnut-paneled dining room features an inlaid ceiling and musician’s gallery, while the Pub showcases murals by Anne Cleveland. The library contains a complete set of Vassar yearbooks, books about Vassar, and books authored by Vassar alumni.</p>

<p>With a reverence for the past and a nod towards the future, Alumnae House strives to be a welcoming home for all Vassar students and alums.
</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Accommodations',
    $alumni_img_path.'alumni-resources/alumnae-house/0168_16_04_TT_9843.jpg',
    'image-is-first theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'Exterior Front of the Alumnae House in the snow']
); ?>
<p>Accomodations are available for your next visit.</p>

<?php echo cta_link(
    '/alumni/resources/alumnae-house/accommodations/',
    'Learn more about accommodations'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Event Planning',
    $alumni_img_path.'alumni-resources/alumnae-house/events/Reunion_1806_CS_057.jpg',
    '',
    '',
    ['img_alt_text' => 'Gathering of people in the Alumnae House courtyard']
); ?>
<p>As the quintessential meeting place for Vassar College alumni throughout the last century, Alumnae House is open to the public for catered events.</p>

<?php echo cta_link(
    '/alumni/resources/alumnae-house/events/',
    'Learn more about events at Alumnae House'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralumni(); ?>
