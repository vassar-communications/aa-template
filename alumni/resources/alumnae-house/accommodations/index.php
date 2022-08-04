<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Accommodations",
  "page_classes":"",
  "feature_image":"/alumni/assets/img/alumni-resources/alumnae-house/Vassar_Reunion_19_BL_4420.jpg"
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
    'Stay at Alumnae House',
    '/alumni/assets/img/alumni-resources/alumnae-house/0027_14_03_TT_1436.jpg',
    'image-is-first theme-cream',
    ''
); ?>
<div class="animate-when-content-appears animation-slide-up">
    <p class="intro-text">Accommodations are available for your next visit to campus.</p>
</div>
<?php echo end_sec_fullBleedImageColumn(); ?>

<?php echo sec_regularContent('Accommodation Information','','',); ?>

<?php echo item_iconItem(
    'Private Rooms',
    'key',
    'icon-on-left theme-white-border'
); ?>
<p>Each private guest room features a unique decor with period furnishings and a newly renovated bathroom en suite. The private rooms include a King- or Queen-size bed, a desk, dresser, and a comfortable sitting area. Two of the private rooms are ADA-accessible.</p>

<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem(
    'Crego Wing Rooms',
    'bed',
    'icon-on-left theme-white-border'
); ?>
<p>The Crego Wing rooms are single-occupancy only with a twin-size bed, dresser, and upholstered chair.  The Crego Wing rooms share bathrooms inon the hallway. These quaint, small rooms include all the amenities found in the private rooms at very reasonable rates.</p>
<?php echo end_item_iconItem(); ?>

<?php echo item_iconItem(
    'Amenities & Facilities',
    'list-check',
    'icon-on-left theme-white-border'
); ?>
<ul>
    <li>Luxurious Nest Toiletries in Sustainable Dispensers</li>
    <li>Hairdryer</li>
    <li>Closets with hangers</li>
    <li>Iron and ironing board</li>
    <li>Ice buckets with glassware</li>
    <li>Free Wi-Fi</li>
    <li>Television</li>
    <li>Telephone</li>
    <li>Alarm clock</li>
    <li>Extra pillows and blankets</li>
    <li>Individual climate control</li>
    <li>Windows that open</li>
    <li>Bathrobes (Crego Wing rooms only)</li>
    <li>Complimentary Coffee and Tea</li>
    <li>Vending machine, ice maker, and refrigerator in Guest Kitchenette</li>
    <li>Business Center</li>
    <li>Free parking</li>
</ul>
<?php echo end_item_iconItem(); ?>


<?php echo item_iconItem(
    'Guest Policies',
    'clock',
    'icon-on-left theme-white-border'
); ?>
<p><strong>Check-in: 3:00pm<br/>
        Check-out: 11:00am</strong></p
<p>Guests under 18 years old must be accompanied by a parent or guardian.</p>

<p>Alumnae House has a no pet policy.  Service animals are welcome with proper documentation.</p>

<p>Cots and cribs available.</p>

<p>Alumnae House is a No Smoking/No Vaping facility.</p>
<?php echo end_item_iconItem(); ?>
<?php echo end_sec_regularContent(); ?>

<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/resources/resources-vassar-network.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/contact/contact.php');?>
<?php include($project_paths['main_project_root'].'/alumni/inc/pages/calendar/calendar.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralumni(); ?>

