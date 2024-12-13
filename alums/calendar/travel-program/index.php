<?php
include($_SERVER['DOCUMENT_ROOT'] . '/_cfg.php');
include($project_paths['main_project_root'].'/functions.php');
?>
<?php

/* PAGE INFO === */

$page_info = '{
  "page_title":"Travel Program",
  "page_classes":"",
  "feature_image":"/alums/assets/img/alums-calendar/travel-program/travel-program-header-AdobeStock_501648198.jpg"
}';

/* === */
$page_info = json_decode($page_info, true);


?>

<?php echo site_header(); ?>

<?php echo vassar_masthead(); ?>

<?php echo hamburger_navigation_alums(); ?>

<?php echo page_partialmasthead($page_info['feature_image'],['image_alt_text' => 'An elephant, two giraffes, and a group of zebras gather around a watering hole on a sandy area surrounded by low scrub bushes.']); ?>


<?php echo interior_page_nav() ?>

<?php /*  PAGE CONTENT === */ ?>


<?php echo sec_fullBleedImageColumn(
    'Vassar Travel Programs',
    $alums_img_path.'alums-calendar/travel-program/Group-photo-Camon-France-wide.jpg',
    'image-is-first theme-cream',
    '',
    ['img_alt_text' => 'A group of people, one holding a Vassar College banner, standing and smiling at the viewer with a sunny green countryside and cloudy skies behind them.']
); ?>
<p>As we are planning our future trips, we always appreciate hearing from alums regarding destinations and trip themes you’d like to explore and faculty members with whom you’d like to travel. Please feel free to contact Susan Quade, Senior Associate Director for Advancement Events and Programs and the Vassar Travel Program at <a href="mailto:suquade@vassar.edu">suquade@vassar.edu</a>.</p>

<p class="intro-text">Trips for 2025:</p>

<p><strong><a href="#spain">Andalucía Iberia Sepharad: Between Convivencia and Reconquest</a></strong></br>
June 12-23, 2025</p>
<p><strong><a href="#trip4">Namibia: Endless Horizons & Open Skies</a></strong></br>
June 19-July 1, 2025</p>


<?php echo end_sec_fullBleedImageColumn(); ?>




<?php echo sec_regularContent('Upcoming 2025 Trips','','text-center');?>


<?php echo end_sec_regularContent();?>


<div id="spain"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/cordoba-spain-2025.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'Interior of the Great Mosque of Córdoba, a large room with many columns in rows connected by double arches in light and dark stone.']
); ?>

<p class="intro-text">Andalucía Iberia Sepharad: Between Convivencia and Reconquest</p>

<p><strong>June 12-23, 2025<strong></p>

<p><strong>Faculty Host: Dr. Marc Michael Epstein, Professor of Religion and Visual Culture on the Mackie M. Paschall (1899) & Norman Davis Chair, and Director of Jewish Studies</strong></p>

<p><strong>Cost:</strong> $6950 per person double occupancy (not including international airfare)</p>

<p>Dr. Epstein will explore how this region shaped the three major monotheistic religions—a subject central to both his teaching and research. From impressive mosques, to the remnants of synagogues, to the great Christian sites that resonate with shared artistic and spiritual traditions, every site has been chosen to deepen appreciation for this crossroads of history. In addition to Madrid, Barcelona and Sevilla, experience the vibrant streets of Córdoba, the awe-inspiring Alhambra in Granada, and the synagogues of Toledo.</p>

<?php echo cta_link(
    '',
    'View the full Spanish trip itinerary and reserve your place.'

); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<div id="trip4"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Namibia-2024.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'A baby elephant and an adult elephant browse in tall wheat-colored grass next to a body of water at sunset.']
); ?>

<p class="intro-text">Endless Horizons & Open Skies</p>

<p><strong>June 19-July 1, 2025<strong></p>

<p><strong>Faculty Host: Abby Baird ’91, Professor of Psychological Science on the Arnhold Family Chair</strong></p>

<p>Venture to the South African country of Namibia, renowned for its captivating vistas, sculpted red canyons, some of the most spectacular sand dunes, and the home of the world’s oldest desert. Along the way, you’ll marvel at these geological wonders and admire the remarkable wildlife that call this vast and varied landscape home—leopards, giraffes, rhinos, zebras, antelopes, and desert elephants. You’ll also learn about the country’s extraordinary conservation programs.</p>
<p>Highlights will include:</p>
<ul>
<li>Climb the towering red sand dunes in Soussevlei.</li>
<li>Stand amid the petrified forest in the Namib—the world’s oldest desert.</li>
<li>Experience a wildlife safari in the famous Etosha National Park.</li>
<li>Meet with conservationists working to save the endangered rhino and Africa’s Big Cats.</li>
</ul>

<?php echo cta_link(
    'https://immersionjourneys.com/vassar-travel-program-namibia-open-skies-endless-horizons-2025/',
    'View the full Namibia itinerary and reserve your place.'

); ?>

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


<!--putting the info for these two postponed trips (South Korea, Paris in the Jazz Age) here, to use whenever they are rescheduled -->

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

<?php echo cta_link(
    'https://authenticasia.net/destinations/authentic-asia-beyond/vassar-south-korea-trip-food-culture/',
    'See the full South Korea itinerary and reserve your place.'

); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>

<div id="trip3"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/Paris-2024-Photo-Credit-Susan-Brkich.jpg',
    'theme-cream',
    '',
    ['img_alt_text' => 'The Eiffel Tower, a tall open metalwork structure with sloping sides narrowing to a spire on top, with platforms on several levels, standing at the end of a large green field. Photo Credit Susan Brkich ’86.']
); ?>

<p class="intro-text">Paris in the Jazz Age, featuring the African American Experience</p>

<p><strong>Postponed until 2025, dates to come<strong></p>

<p><strong>Hosts: Mia Mask, Ph.D., Professor of Film on the Mary Riepma Ross ’32 Vassar Chair, and Mark Wittman, MBA Managing Director, Investment Banking</strong></p>

<p>Take a trip back in time to trace the journey of Black Americans in France, gain insight into why they moved to Paris, and how they forever influenced French culture. This seven-night small-group program, hosted by Professor Mia Mask, features divine cuisine with an extensive meal plan—including wine with dinner, incredible art, an exploration of Montmartre, and a cruise along the Seine River.</p>

<p>Highlights will include:</p>
<ul>
	<li>Learn how African American expatriates influenced Paris</li>
	<li>Enjoy an evening at a jazz club</li>
	<li>Sample French treats during a gastronomic walking tour</li>
</ul>
<!--hiding until new dates for 2025 are set.
<?php echo cta_link(
    'https://vassar.ahitravel.com/destinations/1798A?schoolId=375',
    'See the full Paris itinerary and reserve your place.'

); ?>
-->
<p><em>Photo credit: Susan Brkich ’86</em></p>

<?php echo end_sec_fullBleedImageColumn(); ?>

*/ ?>



<?php echo relatedTopics(); ?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/give/give-support-vassar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/calendar/calendar.php');?>
<?php include($project_paths['main_project_root'].'/alums/inc/pages/community/community.php');?>
<?php echo end_sec_relatedTopics(); ?>


<?php echo site_footeralums(); ?>
