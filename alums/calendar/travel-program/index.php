<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Travel Program",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/travel-program/Canadian_Rockies_2014.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'Two backpackers walking on a gravel road along a lake in the Canadian Rockies']); ?>


<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Travel Programs in 2024',
    $alums_img_path.'alums-calendar/travel-program/Group-photo-Camon-France-wide.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A group of people, one holding a Vassar College banner, standing and smiling at the viewer with a sunny grean countryside behind them in Camon, France']
); ?>
<p>We are building our trips for 2024! Information will be forthcoming as soon as itineraries and details for each trip are finalized. As we are planning our future trips for both 2024 and 2025, we always appreciate hearing from alums regarding destinations and trip themes you’d like to explore and faculty members with whom you’d like to travel. Please feel free to contact Susan Quade, Senior Associate Director for Special Events and Programs and the Vassar Travel Program at <a href="mailto:suquade@vassar.edu">suquade@vassar.edu</a>.</p>

<p>The tentative schedule so far:</p>

<p><strong><a href="#trip1">A Restorative Retreat to Iceland</a></strong></br>
February 8–12, 2024</p>

<p><strong>Paris in the Jazz Age, featuring the African American Experience</strong></br>
June 8–16, 2024</br>
Hosts: Mia Mask, PhD, Mary Riepma Ross ’32 Professor of Film, and Mark Wittman, MBA, Managing Director, Investment Banking</p>

<p><strong>Namibia: Endless Horizons & Open Skies</strong></br>
June 9–20, 2024</br>
Faculty host: Abigail Baird ’91, Professor of Psychological Science on the Arnhold Family Chair</p>

<p><strong>The Galapagos Islands</strong></br>
July 6–13, 2024</br>
Faculty host: Jill Schneiderman, Professor of Earth Science</p>

<p><strong>Discover Egypt and the Nile Valley</strong></br>
Dates to be determined, tentatively autumn</p>

<p><strong>Flavors of Tuscany: Cultural & Culinary Exploration</strong></br>
September 26–October 4</p>

<p><strong>Discovering South Korea: Food, Culture, & Globalization</strong></br>
October 9–21, 2024</br>
Faculty Host: Seungsook Moon, Professor of Sociology</p>


<?php echo end_sec_fullBleedImageColumn(); ?>






<?php echo sec_regularContent('Upcoming Trips','','text-center');?>



<?php echo end_sec_regularContent();?>

<div id="trip1"></div>

<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Iceland-2024.jpg',
    '',
    '',
    ['img_alt_text' => 'A waterfall at night with the Northern lights in the sky overhead.']
); ?>

<p class="intro-text">A Restorative Retreat to Iceland</p>

<p><strong>February 8–12, 2024<strong></p>

<p><strong>Faculty Host:  Michele Tugade ’95, Professor of Psychological Science on the William R. Kennan, Jr. Endowed Chair</strong>
</p>

<p>Our weekend getaway (Thursday night to Monday night) offers an opportunity to travel with fellow alums to explore this rugged and breathtaking country. Iceland is also a place to relax, recharge, and explore nature. With Michele Tugade ’95 as your host, you will also explore the benefits of awakening your senses to nature and its power to elicit positive emotions. It promises to be a very special journey.</p>

<?php echo cta_link(
    'https://www.discovereuropeltd.com/vassar-travel/240208vig',
    'See the full Iceland itinerary and reserve your place.'

); ?>

 <?php /*
<?php echo cta_link(
    'https://www.vassar.edu/sites/default/files/2023-03/VASSAR-Dresden-Registration-Form.pdf',
    'Download Registration Form',
    null,
    [
      'file_type' => 'pdf',
      'file_size' => '106 KB'
    ]
); ?>
 */ ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<?php echo sec_regularContent('Travel Insurance','theme-extralightgray','');?>
<p>The Vassar Travel Program is now offering quality travel insurance to all our travelers. After much research we selected Meyer and Associates. Meyer and Associates have been in the insurance business for more than 40 years, and they come highly recommended by our peer institutions.</p>

<p>Of course, the choice of whether to purchase insurance is yours, but the Vassar Travel Program wants to make sure each Vassar traveler is offered quality insurance. We believe it is very important to protect your travel investment. Meyer and Associates offers a wide range of insurance options, but we strongly urge travelers to purchase the package that offers trip cancellation coverage at the minimum.</p>

<p><strong>For detailed information and to purchase travel insurance, contact <a href="https://meyerandassoc.com/">Meyer and Associates</a> or call <?php echo phone_number('800-635-7801'); ?>.</strong></p>

<?php echo end_sec_regularContent();?>


<?php /*

<!-- Commenting this out, as the copy is a duplicate of the intro section - Chris -->

<?php echo sec_regularContent('We’d like to hear from you!','theme-charcoal bg-dark  presentation quad-pattern has-bg','py-3 d-flex justify-content-around text-center'); ?>

<p>As we make our plans, we look forward to hearing from you regarding destinations and trip themes you’d like to explore and faculty members you’d like to travel with. Please contact Susan Quade, Senior Associate Director of Regional and International Programs and the Vassar Travel Program, via email at <a href="mailto:suquade@vassar.edu">suquade@vassar.edu</a>.</p>
<?php echo end_sec_regularContent(); ?>

*/ ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar-on-demand.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
