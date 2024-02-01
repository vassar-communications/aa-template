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

<p>The schedule so far:</p>

<p><strong><a href="#trip1">A Restorative Retreat to Iceland</a></strong></br>
February 8–12, 2024</p>

<p><strong><a href="#trip2">Cuba: Art, Culture & History</a></strong></br>
May 5–11, 2024</p>

<p><strong>Paris in the Jazz Age, featuring the African American Experience</strong></br>
June 8–16, 2024</br>
Hosts: Mia Mask, PhD, Mary Riepma Ross ’32 Professor of Film, and Mark Wittman, MBA, Managing Director, Investment Banking</p>

<p><strong><a href="#trip4">Namibia: Endless Horizons & Open Skies</a></strong></br>
June 9–20, 2024</p>

<p><strong>The Galapagos Islands</strong></br>
July 6–13, 2024</br>
Faculty host: Jill Schneiderman, Professor of Earth Science</p>

<p><strong>Egypt and the Nile</strong></br>
September 21–October 4, 2024</br>
Faculty host: April M. Beisaw, Professor of Anthropology</p>

<p><strong>Flavors of Tuscany</strong></br>
September 26–October 4</br>
Faculty host: Miriam Rossi, Professor Emerita of Chemistry</p>

<p><strong><a href="#trip8">Discovering South Korea: A Journey through its Food, Culture, and Globalization</a></strong></br>
October 9–21, 2024</p>


<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_regularContent('Upcoming Trips','','text-center');?>



<?php echo end_sec_regularContent();?>

<div id="trip1"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Iceland-2024.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'A waterfall at night with the Northern lights in the sky overhead.']
); ?>

<p class="intro-text">A Restorative Retreat to Iceland</p>

<p><strong>February 8–12, 2024<strong></p>

<p><strong>Faculty Host: Michele Tugade ’95, Professor of Psychological Science on the William R. Kennan, Jr. Endowed Chair</strong></p>

<p>Our weekend getaway (Thursday night to Monday night) offers an opportunity to travel with fellow alums to explore this rugged and breathtaking country. Iceland is also a place to relax, recharge, and explore nature. With Michele Tugade ’95 as your host, you will also explore the benefits of awakening your senses to nature and its power to elicit positive emotions. It promises to be a very special journey.</p>

<?php echo cta_link(
    'https://www.discovereuropeltd.com/vassar-travel/240208vig',
    'See the full Iceland itinerary and reserve your place.'

); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<div id="trip2"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Cuba-2024.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A row of colorful vintage convertible cars parked on one side of a road in front of an elaborately decorated multi-story building on a sunny day.']
); ?>

<p class="intro-text">Cuba: Art, Culture & History</p>

<p><strong>May 5–11, 2024<strong></p>

<p><strong>Faculty Host: Leslie Offutt, Associate Professor emerita of History</strong></p>

<p>Get a rare glimpse inside Cuba, exploring the country’s art, architecture, music, and cuisine. Along with Associate Professor emerita of History Leslie Offutt, you’ll stay in boutique accommodations in Havana; take in the ornate architecture of the UNESCO World Heritage site that is Old Havana; venture to the countryside to the lush tobacco fields and mogotes of Vinales Valley; and stop in Ernest Hemingway’s private world at his historic home, <em>La Vigia</em>.</p>
<p>Highlights will include:</p>
<ul>
	<li>Meet former Deputy Minister for Foreign Affairs to speak about Cuban politics</li>
	<li>Delve into the life of Ernest Hemmingway</li>
	<li>Engage with Cuba’s leading artistic creators at their studios</li>
	<li>Attend a private rehearsal of Cuba’s contemporary dance company</li>
</ul>

<p>For more information and to register, please contact Discover Europe at <?php echo phone_number('866-563-7077'); ?>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>



<div id="trip4"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Namibia-2024.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'A baby elephant and an adult elephant browse in tall wheat-colored grass next to a body of water at sunset.']
); ?>

<p class="intro-text">Endless Horizons & Open Skies</p>

<p><strong>June 8–16, 2024<strong></p>

<p><strong>Faculty Host: Abby Baird ’91, Professor of Psychological Science on the Arnhold Family Chair</strong></p>

<p>Venture to the South African country of Namibia, renowned for its captivating vistas, sculpted red canyons, some of the most spectacular sand dunes, and the home of the world’s oldest desert. Along the way, you’ll marvel at these geological wonders and admire the remarkable wildlife that call this vast and varied landscape home—leopards, giraffes, rhinos, zebras, antelopes, and desert elephants. You’ll also learn about the country’s extraordinary conservation programs.</p>
<p>Highlights will include:</p>
<ul>
<li>Evening game drive and rhino tracking</li>
<li>Take a bush flight deep into the Namib desert</li>
<li>Visit the AfriCat Foundation to experience the work they are doing to protect leopards and cheetahs and reintroducing them into the wild</li>
</ul>
<p>For more information and to register, please contact Immersion Journeys at <?php echo phone_number('917-686-2620'); ?>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>



<div id="trip8"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/South-Korea-2024.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Two people wearing long gowns with gold collars, cuffs and trim and pink or red skirts stand looking at a cell phone and smiling on a wide path between two rows of tall red wooden pillars with a red wall behind them.']
); ?>

<p class="intro-text">Discovering South Korea: A Journey through its Food, Culture, and Globalization</p>

<p><strong>October 9–21, 2024<strong></p>

<p><strong>Faculty Hosts: Seungsook Moon, Professor of Sociology, and Rev. Ben Caldwell, Business Advisor for the Mid-Hudson Small Business Development Center</strong></p>

<p>Experience cities throughout South Korea, a country of dramatic and dynamic transformation. By historically playing the role of cultural bridge between the Eurasian continent and the Pacific Ocean, Korea cultivated complex layers of beliefs and rituals stemming from a number of religions. Custom-designed for Seungsook Moon, Professor of Sociology, this tour will highlight food as an essential medium to explore Korea’s incredible resilience and cultural dynamism, interweaving visits to iconic and cultural sites of traditional and contemporary Korea with its culinary globalization.</p>
<p>Highlights will include:</p>
<ul>
<li>Once-in-a-lifetime exploration of South Korea</li>
<li>Tour the cities of Seoul, Andong, Gyeongju and Busan</li>
<li>Visit Jeju Island to learn about the culture of the “haenyeo”—the women divers who harvest from the ocean for up to seven hours a day without the use of oxygen masks and whose knowledge of the sea is passed down from generation to generation</li>
</ul>
<p>For more information and to register, please contact Authentic Asia at <?php echo phone_number('888-263-1170'); ?>.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent('Travel Insurance','theme-extralightgray','');?>
<p>The Vassar Travel Program offers quality travel insurance through <a href="https://meyerandassoc.com/travel-insurance/">Meyer and Associates</a>.</p>

<p>Upon receipt of your tour registration, Vassar will send insurance information to you directly.
Please note that the purchase of insurance is time sensitive to the date that your trip deposit
payment is received. Insurance information will be sent to you both by email and postal mail.</p>

<p>Of course, the choice of whether to purchase insurance is yours, but the Vassar Travel Program
wants to make sure each Vassar traveler is offered quality insurance. We believe it is very
important to protect your travel investment. Meyer and Associates offers a wide range of
insurance options. We strongly urge travelers to purchase the package that offers trip
cancellation coverage at the minimum.</p>

<p>For detailed information and to purchase travel insurance, contact Meyer and Associates or call <?php echo phone_number('800-635-7801'); ?>.</p>

<?php echo end_sec_regularContent();?>


<?php /*

<!-- Commenting this out, as the copy is a duplicate of the intro section - Chris -->

<?php echo sec_regularContent('We’d like to hear from you!','theme-charcoal bg-dark  presentation quad-pattern has-bg','py-3 d-flex justify-content-around text-center'); ?>

<p>As we make our plans, we look forward to hearing from you regarding destinations and trip themes you’d like to explore and faculty members you’d like to travel with. Please contact Susan Quade, Senior Associate Director of Regional and International Programs and the Vassar Travel Program, via email at <a href="mailto:suquade@vassar.edu">suquade@vassar.edu</a>.</p>
<?php echo end_sec_regularContent(); ?>

*/ ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-support-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
