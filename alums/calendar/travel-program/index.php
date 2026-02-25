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
    'Vassar Travel Program',
    $alums_img_path.'alums-calendar/travel-program/2025-loeb-to-venice-alum-24-10-mmgt-01.jpg',
    'image-is-first theme-verylightgray',
    '',
    ['img_alt_text' => 'A group of people pose together in front of a vividly colored, modern art pavilion featuring bold red sculptural elements and a classical-style pediment inscribed with "STATI UNITI D’AMERICA." Photo Credit: Marc Mariani of The Grand Tour.']
); ?>
<p>Vassar Travel Programs turn the world into your classroom, offering unforgettable adventures led by Vassar’s expert faculty. These thoughtfully curated trips blend exploration with intellectual discovery—from ancient cities to natural wonders, each destination comes to life through the Vassar lens. Along the way, alums can reconnect with old friends, forge new friendships, learn from distinguished scholars, and, on special trips, share the experience with current students.</p>
<p>Check out the exciting itineraries for our upcoming trips.</p>
<p><em>Photo: Marc Mariani of The Grand Tour</em></p>

<?php echo end_sec_fullBleedImageColumn(); ?>

<?php /* -- SAB: commenting out but keeping the code in case they decide they want it back. jump links code goes in section above.

<p class="intro-text">Trips for 2025:</p>

<p><strong><a href="#spain">Andalucía Iberia Sepharad: Between Convivencia and Reconquest</a></strong></br>
June 12-23, 2025</p>
<p><strong><a href="#trip4">Namibia: Endless Horizons & Open Skies</a></strong></br>
June 19-July 1, 2025</p>


<?php echo sec_regularContent('Upcoming 2025 Trips','','text-center');?>

<?php echo end_sec_regularContent();?>

*/ ?>


<div id="greece"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/2026-Greece-Andros-Chora.jpg',
    'theme-darkcoal',
    '',
    ['img_alt_text' => 'Chora in Andros, Greece, a coastal village of whitewashed buildings with terracotta roofs perched on rocky cliffs above crystal-clear blue water, backed by rolling hills under a bright sky.']
); ?>

<p class="intro-text">Impressions of Life: An Island-Hopping Greek Adventure</p>

<p><strong>June 13–24, 2026<strong></p>

<p><strong>SOLD OUT</strong></p>

<p>Visit the ancient sites and picturesque villages of four of Greece’s most beautiful islands—Andros, Naxos, Santorini, and Crete. Along the way, savor distinctive regional cuisine and discover the remarkable history of the islands. This unique journey is hosted by Michele Tugade, Professor of Psychological Science on the William R. Kenan, Jr. Chair, whose inspiring research explores how wellness and lifestyle contribute to happiness and longevity. Explore these stunning islands in-depth and experience Greece in a rewarding way.</p>

<p>An optional pre-trip stay in Athens is offered from June 11–14, 2026.</p>

<p><strong>Pricing:</strong> $6,590 per person, double occupancy (not including international airfare). Single room supplement: $1,590. Optional 2-day Athens pre-trip cost: $1,495 per person, double occupancy ($480 single room supplement).</p>

<p>This tour is sold out. Please contact Kristy Grimes at <a href="mailto:kgrimes@vassar.edu">kgrimes@vassar.edu</a> to join the waitlist.</p>

<?php echo cta_link(
    '/alums/assets/pdf/Travel-Program-Greece-Brochure.pdf',
    'View the full Greece itinerary.'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<div id="sicily"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/2026-sicily-IMG_6594.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Apse of the Cathedral of Monreale, 12th c., an ornate church interior with a large gold mosaic of Christ above the altar.']
); ?>

<p class="intro-text">Meeting of Worlds: Vassar in Sicily</p>

<p><strong>October 21–31, 2026<strong></p>

<p><em>Faculty Hosts:</em> Bart Thurber, Director of the Frances Lehman Loeb Art Center and Lecturer in Art, and Elizabeth Lastra, Assistant Professor of Art</p>

<p>This customized 11-day trip explores some of the most important historical and artistic sites in Sicily. From its literature, music, religious traditions, cuisine, and in the remarkable art and architectural styles in evidence over the centuries, Sicily represents one of the richest and most diverse cultural tapestries anywhere. For a portion of the trip, alums will be joined by Professor Lastra and four Vassar students, who will share their research on Sicilian history and art.</p>

<p><strong>Pricing:</strong> $8,875 per person (not including international airfare). Single room supplement: $1,575.</p>

<?php echo cta_link(
    'https://thegrandtour.com/patron-tour/vassar-sicily/',
    'See the Sicily itinerary and save your spot.'
); ?>

<p>Enter code <strong>VS2026</strong> on the tour page to view the full itinerary and register.</p>

<?php echo end_sec_fullBleedImageColumn(); ?>


<div id="vietnam"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/2027-vietnam-pexels-quang-nguyen-vinh-222549-2138175.jpg',
    'theme-darkcoal',
    '',
    ['img_alt_text' => 'Three people in small boats gather water lilies on a pond filled with pink blossoms, in Hanoi, Vietnam.']
); ?>

<p class="intro-text">Vietnam Explored: A Journey Through Its History & Culture</p>

<p><strong>March 7–20, 2027<strong></p>

<p><em>Faculty Host:</em> Robert. K. Brigham, Shirley Ecker Boskey Professor of History and International Relations</p>

<p>With its dramatic landscapes, fascinating history, epic food, and pulsating energy, Vietnam is a unique travel destination. Professor Brigham has arranged many experiences which are not accessible to most tourists—such as meetings with government officials and diplomats, public health experts, educators, and artists—in addition to popular and off-the-beaten-path destinations.</p>

<p><strong>Pricing:</strong>  $8,750 per person based on double occupancy (not including international airfare). Single room supplement: $2,150.</p>

<?php echo cta_link(
    '/alums/assets/pdf/Vassar-Vietnam-Trip-March-2027.pdf',
    'View details and join us In Vietnam.'
); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>



<?php echo sec_regularContent('Read about recent Vassar Travel Programs','','');?>

<p><a href="https://www.vassar.edu/news/students-four-year-journey-at-the-loeb-leads-to-trip-to-venice">Venice Biennale adventure with Bart Thurber, Mary-Kay Lambino, and four current students</a>!</p>

<p><a href="https://www.vassar.edu/news/vassar-goes-to-the-source-over-spring-break/#vietnam">Bob Brigham and Monica Church lead an alum spring break trip to Vietnam</a>.</p>

<?php echo end_sec_regularContent();?>



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


<?php echo sec_regularContent('We’d like to hear from you!','theme-charcoal bg-dark  presentation quad-pattern has-bg','py-3 d-flex justify-content-around text-center'); ?>

<p>Questions about the Travel Program? Please feel free to contact Kristy Grimes, Director of Advancement Events and Programs, at <a href="mailto:kgrimes@vassar.edu">kgrimes@vassar.edu</a>.</p>
<?php echo end_sec_regularContent(); ?>


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
