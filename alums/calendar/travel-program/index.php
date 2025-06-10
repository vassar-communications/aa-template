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


<div id="paris"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/2025-Palais-Garnier-in-Paris-13-copyright-French-Moments.jpg',
    'theme-burgundy',
    '',
    ['img_alt_text' => 'Palais Garnier in Paris, a lavish hall adorned with gold trim, ornate chandeliers, and ceiling frescoes, with symmetrical columns and mirrors lining the sides beneath a vaulted painted ceiling.']
); ?>

<p class="intro-text">La Paris Musicale!: Music and Art in the City of Lights</p>

<p><strong>October 13–21, 2025<strong></p>

<p>Spend a truly magical week in Paris this fall, enjoying music, art, and (bien sûr!) excellent food and wine with fellow Vassar alums. Led by Kathryn Libin, Mary Conover Mellon Professor of Music, this experience includes:</p>

<ul>
	<li>Private concerts at distinguished venues</li>
	<li>Immersive exploration of Paris’s rich history and culture through specially curated walking and private guided tours of the Musée d’Orsay and other museums</li>
	<li>A visit to the grand Domaine de Chantilly, home to the finest private collection of paintings outside the Louvre</li>
</ul>

<p><strong>Tour cost:</strong> $7,980 per person, double occupancy (additional single room supplement $1,350). <em>International airfare not included.</em></p>

<?php echo cta_link(
    '/alums/assets/pdf/Travel-Program-Paris-Brochure_V2.pdf',
    'View the full Paris itinerary and reserve your place.'

); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


<div id="mexico"></div>
<?php echo sec_fullBleedImageColumn(
    null,
    $alums_img_path.'alums-calendar/travel-program/2026-Frida-Kahlo-House-Mexico-City-byRodWaddington-CCBYSA20.jpg',
    'image-is-first',
    '',
    ['img_alt_text' => 'Frida Kahlo House in Mexico City, a vibrant cobalt blue exterior wall with green-paned windows framed in red, surrounded by lush potted plants and shaded by trees in a courtyard with red tile flooring.']
); ?>

<p class="intro-text">Mexico Today: Colors, Culture, and Cuisine</p>

<p><strong>January 12–21, 2026<strong></p>

<p>Escape winter and join faculty hosts Colleen Ballerino Cohen, Professor of Anthropology and Women, Feminist, and Queer Studies, and Chair of Anthropology and Leslie Offutt, Associate Professor Emerita of History, on a culinary and cultural adventure to Mexico. Travelers will explore three awe-inspiring cities—Mexico City, Puebla, and Oaxaca—immersing themselves in rich culture, enjoying amazing food experiences, and discovering the region’s artistic treasures. Highlights of the trip include:</p>

<ul>
	<li>Visiting a chocolate mill and a mezcal distillery, and participating in a cooking class and farewell dinner with a renowned chef</li>
	<li>Exploring the artistic legacies of Diego Rivera and Frida Kahlo, attending a performance of the Ballet Folklórico, and taking part in a food tour of the San Juan Market in Mexico City</li>
	<li>Sampling rich moles, seeing the finest Indian Baroque churches, and touring a talavera tile factory in Puebla</li>
	<li>Meeting renowned craftspeople in their village workshops and exploring remarkable archaeological sites in Oaxaca</li>
</ul>

<p><strong>Tour cost:</strong> $6,995 per person, double occupancy (additional single supplement $1,295). <em>International airfare not included.</em></p>

<?php echo cta_link(
    '/alums/assets/pdf/Brochure_Vassar_Mexico_2026_V2.pdf',
    'View the full Mexico itinerary and reserve your place.'

); ?>

<?php echo end_sec_fullBleedImageColumn(); ?>


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

<p>Visit the ancient sites and picturesque villages of four of Greece’s most beautiful islands—Andros, Naxos, Santorini, and Crete. Along the way, savor distinctive regional cuisine and discover the remarkable history of the islands. This unique journey is hosted by Michele Tugade, Professor of Psychological Science on the William R. Kenan, Jr. Chair, whose inspiring research explores how wellness and lifestyle contribute to happiness and longevity. Explore these stunning islands in-depth and experience Greece in a rewarding way.</p>

<p>An optional pre-trip stay in Athens is offered from June 11–14, 2026.</p>

<p><strong>Tour cost:</strong> $6,590 per person, double occupancy (additional single supplement: $1,590). <em>International airfare not included.</em></p>

<p>Full itinerary coming soon!</p>

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
