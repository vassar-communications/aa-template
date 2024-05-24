
<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Alum Benefits",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-resources/alums-benefits/Vassar_Reunion_19_BL_4706.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);

?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'], ['image_alt_text' => 'Fireworks exploding over Sunset Lake on Vassar Campus']); ?>


<?php echo interior_page_nav() ?>

<?php echo sec_fullBleedImageColumn(
    'Alum Benefits',
    '/alums/assets/img/alums-resources/alums-benefits/reunion-1906-kr-vassar-3139.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'People seated on the lawn in front of Thompson Library, a large, stone building with stained-glass windows and classical architecture, on the Vassar campus.']
); ?>
<p class="intro-text">Vassar offers a wide array of benefits to the more than 41,000 alums across the globe.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_hasColumns(
    'Alum Benefits',
    '2',
    '<p>In addition to an online <a href="https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=6&cid=41#/Search/Simple">Alum Directory</a> in which alums can connect with each other and update their information, the following benefits are also available:</p>',
    'theme-dark-burgundy quad-pattern has-bg',
    ''

); ?>





<?php echo item_cardWithText(
    'Vassar Alum ID Card',
    'https://offices.vassar.edu/card/alum-id-card-request/',
    ['url' => $alums_img_path.'alums-resources/alums-benefits/0138-15-11-kr-vcdf-vassar-0090.jpg', 'alt' => 'A nighttime view of the glass-walled entrance to a large stone and brick building, with the name of the building above the entrance, the Vogelstein Center for Drama and Film.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

  <p>Vassar alum ID cards provide alums with access to the College’s library and fitness center.</p>

<?php echo end_item_cardWithText(
    '',
); ?>

<?php echo item_cardWithText(
    'Vassar Email Address',
    'https://connect.vassar.edu/s/1654/2/16/interior-ai.aspx?sid=1654&gid=2&pgid=429',
    ['url' => $alums_img_path.'alums-resources/alums-benefits/adlov-taylor-vq-vassar-0911-lrr-8293.jpg', 'alt' => 'Interior view of a tall black metal gate inside an archway with a view of a brown-leaved tree beyond.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

  <p>Alums can obtain a Vassar-branded @alum.vassar.edu email address/account.</p>

<?php echo end_item_cardWithText(
    '',
); ?>






<?php echo item_cardWithText(
    'Library',
    'https://library.vassar.edu/',
    ['url' => $alums_img_path.'alums-resources/alums-benefits/0069-19-05-kr-spring-vassar-4173.jpg', 'alt' => 'Tulips in red, white and yellow in front of Thompson Library on the Vassar campus, a large, stone building with stained-glass windows and classical architecture.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

<p>Once you obtain your Vassar alum ID card, you will have to register for library privileges and get your card validated at the library circulation desk. Check library hours and/or download an application for guest borrowing privileges.</p>


<?php echo end_item_cardWithText(
    '',
); ?>

<?php echo item_cardWithText(
    'Fitness Center',
    'https://www.vassarathletics.com/facilities/athletics-and-fitness-center/5',
    ['url' => $alums_img_path.'alums-resources/alums-benefits/AFCtrack6.jpg', 'alt' => 'A running track inside the Athletics and Fitness Center at Vassar College, a long brown lane divided into multiple sections with large windows all the way around.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>

<p>Use of the facilities including the indoor track, fitness machines, and pool. Please consult the athletics website for the latest information including rules and policies.</p>

<?php echo end_item_cardWithText(
    '',
); ?>

<?php echo item_cardWithText(
    'VassarNet',
    'https://vassarnet.vassar.edu/',
    ['url' => $alums_img_path.'alums-resources/alums-benefits/0039-22-06-cs-reunion-vassar-347.jpg', 'alt' => 'Two people walk next to each other, one person is wearing a wide hat and a blue shirt and the other is wearing a baseball cap and a white shirt, smiling at the viewer.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Alums, students, parents, faculty, and friends of Vassar can join to build their network and find Vassar-connected career networking opportunities.</p>

<?php echo end_item_cardWithText(
    '',
); ?>



<?php echo item_cardWithText(
    'Grants & Fellowships',
    '/alums/resources/grants-fellowships',
    ['url' =>  $alums_img_path.'alums-resources/alums-benefits/Jonathan_Kaiman.jpg', 'alt' => 'Two people of different ages sit holding unusual stringed instruments looking at each other.' ],
    'card--withParagraph animation-item card-has-cta-icon card-has-cta-label card-is-link'
); ?>
<p>Alums are eligible to apply for a variety of grants and fellowships.</p>
<?php echo end_item_cardWithText(
    '',
); ?>




<?php echo end_sec_hasColumns(); ?>




<?php /*  PAGE CONTENT === */ ?>


<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>

<?php echo site_footeralums(); ?>
