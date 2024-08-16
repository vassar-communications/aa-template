<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alumnae House",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/alumnae-house/0073-21-06-kr-summer-vassar-0017.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'The front exterior of Alumnae House on the Vassar campus, a large beige building with a red roof and many windows across the entire building.']); ?>

<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_regularContent(
  null,
  'p-2'
); ?>

<?php echo end_sec_regularContent(); ?>


<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-resources/alumnae-house/Alumnae_House_06_CB_08.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A common area inside Alumnae House on the Vassar campus, a wide space with a patterned wooden ceiling, various seating spaces, and a large painting hanging on the far wall of the room.']
); ?>
<div class="animate-when-content-appears animation-slide-up">

    <p class="">Celebrating its 100th anniversary in 2024, Alumnae House was gifted to Vassar College by sisters Blanche Ferry Hooker, class of 1894, and Queene Ferry Coonley, class of 1896. They intended it to be a center for the activities of the alums of the College, but more importantly wanted all alums to have a welcoming space that they could call home when returning to campus. They hoped each houseguest would depart saying, “It is well for us to have been here.”</p>
        
<p><?php echo item_link_VideoModal(
    'Enjoy the Alumnae House Centennial Celebration sizzle video',
    'https://player.vimeo.com/video/932915754',
    'vimeo',
    '',
    'no-arrow btn-link mt-4'
); ?></p>
    
    <div class="address-card mt-4 mb-5">
      <p><strong>Alumnae House, the Inn at Vassar College</strong><br>
          161 College Avenue<br>
          Poughkeepsie, NY 12603</p>

          <p>Telephone: <a href="tel:8454377100" class="">(845) 437-7100</a><br>
              Email: <a href="mailto:alumnaehouse@vassar.edu">alumnaehouse@vassar.edu</a></p>
              <p><em>Please enter the property via The Heartwood parking lot.</em></p>
    </div>


</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent(
    'Alumnae House',
    null,
    '',
    ''
); ?>
<p>Today, Alumnae House is open to the Vassar community, prospective students, friends, and the local community. Our uniquely appointed guest rooms offer modern amenities while preserving the historic ambiance of the inn. The iconic spaces on the first floor provide a gracious venue for events, large and small, including weddings, celebrations, meetings, and fundraisers.</p>

<p>A classic example of American-Tudor style architecture, Alumnae House is filled with impressive artwork, period furniture, Vassar memorabilia, cozy reading nooks, and working fireplaces. The living room is majestic with its hand-painted ceiling and Violet Oakley Triptych. The walnut-paneled dining room features an inlaid ceiling and musician’s gallery, while the Pub showcases murals by Anne Cleveland. The library contains a complete set of Vassar yearbooks, books about Vassar, and books authored by Vassar alums.</p>

<p>With a reverence for the past and a nod towards the future, Alumnae House strives to be a welcoming home for all Vassar students and alums.
</p>
<?php echo end_sec_regularContent(); ?>

<?php echo sec_fullBleedImageColumn(
    'Accommodations',
    $alums_img_path.'alums-resources/alumnae-house/0168_16_04_TT_9843.jpg',
    'image-is-first theme-dark-burgundy has-bg quad-pattern',
    '',
    ['img_alt_text' => 'The front exterior of Alumnae House on the Vassar campus, a large beige building with a red roof and many windows across the entire building, covered in snow.']
); ?>
<p>Accommodations are available for your next visit.</p>

<?php echo cta_link(
    '/alums/resources/alumnae-house/accommodations/',
    'Learn more about accommodations'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_fullBleedImageColumn(
    'Event Planning',
    $alums_img_path.'alums-resources/alumnae-house/events/Reunion_1806_CS_057.jpg',
    '',
    '',
    ['img_alt_text' => 'A large number of people standing on a flagstone patio surrounding a green courtyard and the walls of a large beige building with a red roof and brown framing.']
); ?>
<p>As the quintessential meeting place for Vassar College alums throughout the last century, Alumnae House is open to the public for catered events.</p>

<?php echo cta_link(
    '/alums/resources/alumnae-house/events/',
    'Learn more about events at Alumnae House'
); ?>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralums(); ?>
